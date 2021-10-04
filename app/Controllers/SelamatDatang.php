<?php

namespace App\Controllers;

/**
 * created by phpstorm.
 * user: agoenxz21
 * date: 23/09/2021
 * time: 8.34
 */
class SelamatDatang extends BaseController
{
    public function hal_awal()
    {
        return 'hello saya belajar CI4';
    }
    public function beranda_login()
    {
        return view('halaman/login');
    }
    public function daftar_member()
    {
        return view('halaman/daftar_member');
    }
}
