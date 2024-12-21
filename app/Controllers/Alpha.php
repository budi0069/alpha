<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use CodeIgniter\HTTP\ResponseInterface;

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
        $usersModel = new Users();
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
    public function ceklogin(){
        // Ambil input dari request
        $nim = $this->request->getPost('nim');
        $password = $this->request->getPost('password');
        //cek password
        $usersModel = new Users();
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
    public function keluar() {
        session()->destroy();
        return redirect()->to('masuk');
    }
    public function riwayat_pemakaian(){
        return view('riwayat_pemakaian');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/');
    }
}
