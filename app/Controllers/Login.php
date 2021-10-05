<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function cekLogin()
    {
        $e = $this->request->getPost('Email');
        $s = $this->request->getPost('sandi');
        return view('halaman/beranda', ['email' => $e, 'sandi' => $s]);
    }
}
