<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Alpha extends BaseController
{
    public function index()
    {

        return view('alpha');
    }
    public function formDaftar()
    {
        $data = [
            'title' => 'Form Daftar'
        ];
        return view('form_daftar',$data);
    }
    public function daftar()
    {
        $daftar = new UserModel();
        $data = [
            'nim' => $this->request->getVar('nim'),
            'nama'=> $this->request->getVar('nama'),
        ];
        // dd($data);
        $daftar->insert($data);
        return redirect()->to('/formdaftar')->with('success','Daftar Akun Berhasil');
    }
    public function formMasuk()
    {
        return view('masuk');
    }
}
