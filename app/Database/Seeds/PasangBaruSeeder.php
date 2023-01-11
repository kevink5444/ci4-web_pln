<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class PasangBaruSeeder extends Seeder
{
    public function run()
    {
        {
            $data = [
                [
                    'nama'          =>  'Budi',
                    'alamat'        =>  'Jl.Suropati',
                    'no_telp'       =>  '087778085888',
                    'daya'          =>  '900VA',
                    'golongan'      =>  'Rumah Tangga',
                    'token_awal'    =>  '20.000',
                    'idpel'         =>  '51303013012',
                    'created_at'    => Time::now()
                ],
                [
                    'nama'          =>  'Adi',
                    'alamat'        =>  'Jl.Suropati',
                    'no_telp'       =>  '087778085810',
                    'daya'          =>  '1300VA',
                    'golongan'      =>  'Rumah Tangga',
                    'token_awal'    =>  '20.000',
                    'idpel'         =>  '51303013013',
                    'created_at'    => Time::now()
                ]
            ];
            $this->db->table('pasangbaru')->insertBatch($data);
    }
}
}