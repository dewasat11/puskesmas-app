<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Ruangan\RuanganModel;

class RuanganSeeder extends Seeder
{
    public function run()
    {
        $ruanganModel = new RuanganModel();
        $data = [
            [
            'kd_ruangan' => 'R01',
            'nm_ruangan' => 'Ruang 1',
            ],
        [
            'kd_ruangan' => 'R02',
            'nm_ruangan' => 'Ruang 2',
        ],
    ];

        foreach($data as $ruang) {
            $ruanganModel->insert($ruang);
        }
    }
}
