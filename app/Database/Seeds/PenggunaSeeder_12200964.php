<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
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
        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
