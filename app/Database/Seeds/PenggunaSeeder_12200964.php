<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel_12200964;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200964 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Rafli Marian Mirza',
                'password'  => md5('12200964')
            ],
            [    
                'nama'      => 'admin',
                'password'  => md5('12345')
            ], 
            [    
                'nama'      => '12200964',
                'password'  => md5('Rafli Marian Mirza')
            ]
        ];
        $p = new PenggunaModel_12200964();
        $p->insertBatch($data);
    }
}
