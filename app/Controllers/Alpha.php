<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PemakaianModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class Alpha extends BaseController
{
    public function index()
    {

        return view('alpha');
    }
    public function daftar()
    {
        $data = [
            'title' => 'Daftar | Alpha'
        ];
        return view('form_daftar', $data);
    }
    public function store()
    {
        $usersModel = new userModel();
        $user = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'password' => md5(str_replace('-', '', date('dmY', strtotime($this->request->getPost('tanggal_lahir')))))
        ];
        $usersModel->insert($user);
        return redirect()->to('/masuk')->with('success', 'Daftar Akun Berhasil');
    }
    public function masuk()
    {
        return view('masuk');
    }
    public function ceklogin()
    {
        // Ambil input dari request
        $nim = $this->request->getPost('nim');
        $password = $this->request->getPost('password');
        //cek password
        $usersModel = new userModel();
        $user = $usersModel->where('nim', $nim)->first();
        // dd($user);
        if ($user) {
            if (md5($password) === $user['password']) {
                // Simpan data user ke session
                $session = session();
                $session->set('users', [
                    'nim' => $user['nim'],
                    'nama' => $user['nama'],
                    'tanggal_lahir' => $user['tanggal_lahir'],
                    'password' => $user['password'],
                ]);
                return redirect()->to('riwayat_pemakaian');
            }
            return redirect()->back()->with('error', 'Password Salah Kocak');
        } else {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }
    }
    public function keluar()
    {
        session()->destroy();
        return redirect()->to('masuk');
    }
    public function riwayat_pemakaian()
    {
        $riwayat = new PemakaianModel();
        $session = session()->get('users');
        $data = [
            'session' => $session,
            'riwayat' => $riwayat->findAll()
        ];
        // dd($session);
        return view('riwayat_pemakaian', $data);
    }
    public function form_input()
    {
        $session = session()->get('users');
        $data = [
            'session' => $session
        ];
        return view('form_input',$data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
    public function cetak()
    {
        $type = $this->request->getPost('type');
        $tgl_awal = $this->request->getPost('start_date');
        $tgl_akhir = $this->request->getPost('end_date');
        if ($tgl_awal && $tgl_akhir) {
            $riwayat = new PemakaianModel();
            $data = [
                'tgl_awal'  => $tgl_awal,
                'tgl_akhir' => $tgl_akhir,
                'riwayat'   => $riwayat->where('created_at >=', $tgl_awal)->where('created_at <=', $tgl_akhir)->findAll()
            ];
            $html = view('cetak', $data);
            $options = new  Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $dompdf->stream('laporan.pdf', ['Attachment' => false]);
        }
    }
    public function simpan(){
        $nim            = session()->get('users')['nim'];
        $pemakaian      = $this->request->getVar('pemakaian');
        $software       = $this->request->getVar('software');
        $pemakaianModel = new PemakaianModel();
        $data = [
            'nim'       => $nim,
            'pemakaian' => $pemakaian,
            'software'  => $software
        ];
        // dd($data);
        $pemakaianModel->insert($data);
        return redirect()->to('riwayat_pemakaian');
    }
    public function hapus($id_pemakaian){
        $pemakaianModel = new PemakaianModel();
        $pemakaianModel->delete($id_pemakaian);
        return redirect()->to('riwayat_pemakaian');
    }
}
