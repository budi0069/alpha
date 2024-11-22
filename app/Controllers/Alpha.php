<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Alpha extends BaseController
{
    public function index()
    {
        return view('alpha');
    }
    public function formDaftar()
    {
        return view('form_daftar');
    }
    public function formMasuk()
    {
        return view('masuk');
    }
}
