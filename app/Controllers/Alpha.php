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
    public function pakai(){
        
    }
}
