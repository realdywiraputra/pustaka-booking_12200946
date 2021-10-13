<?php

namespace App\Database\Seeds;

use App\Database\Migrations\Pengguna;
use App\Models\Pengguna as ModelsPengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'owner',
                'password'  => md5('12345')
            ],
            [
                'nama'      => 'creator',
                'password'  => md5('23456')
            ],
            [
                'nama'      => 'marketing',
                'password'  => md5('34567')
            ]
        ];
        $p = new ModelsPengguna();
        $p->insertBatch($data);
    }
}
