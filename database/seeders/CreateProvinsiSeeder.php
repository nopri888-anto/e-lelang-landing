<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provinsi;

class CreateProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            [
                'namaprovinsi' => 'ACEH',
            ],
            [
                'namaprovinsi' => 'SUMATERA UTARA',
            ],
            [
                'namaprovinsi' => 'SUMATERA BARAT',
            ],
            [
                'namaprovinsi' => 'RIAU',
            ],
            [
                'namaprovinsi' => 'JAMBI',
            ],
            [
                'namaprovinsi' => 'SUMATERA SELATAN',
            ],
            [
                'namaprovinsi' => 'BENGKULU',
            ],
            [
                'namaprovinsi' => 'LAMPUNG',
            ],
            [
                'namaprovinsi' => 'KEPULAUAN RIAU',
            ],
            [
                'namaprovinsi' => 'DKI JAKARTA',
            ],
            [
                'namaprovinsi' => 'JAWA BARAT',
            ],
            [
                'namaprovinsi' => 'JAWA TENGAH',
            ],
            [
                'namaprovinsi' => 'DI YOGYAKARTA',
            ],
            [
                'namaprovinsi' => 'JAWA TIMUR',
            ],
            [
                'namaprovinsi' => 'BANTEN',
            ],
            [
                'namaprovinsi' => 'NUSA TENGGARA BARAT',
            ],
            [
                'namaprovinsi' => 'NUSA TENGGARA TIMU',
            ],
            [
                'namaprovinsi' => 'KALIMANTAN BARAT',
            ],
            [
                'namaprovinsi' => 'KALIMANTAN TENGAH',
            ],
            [
                'namaprovinsi' => 'KALIMANTAN SELATAN',
            ],
            [
                'namaprovinsi' => 'KALIMANTAN TIMUR',
            ],
            [
                'namaprovinsi' => 'KALIMANTAN UTARA',
            ],
            [
                'namaprovinsi' => 'SULAWESI UTARA',
            ],
            [
                'namaprovinsi' => 'SULAWESI TENGAH',
            ],
            [
                'namaprovinsi' => 'SULAWESI SELATAN',
            ],
            [
                'namaprovinsi' => 'SULAWESI TENGGARA',
            ],
            [
                'namaprovinsi' => 'GORONTALO',
            ],
            [
                'namaprovinsi' => 'SULAWESI BARAT',
            ],
            [
                'namaprovinsi' => 'MALUKU',
            ],
            [
                'namaprovinsi' => 'MALUKU UTARA',
            ],
            [
                'namaprovinsi' => 'PAPUA BARAT',
            ],
            [
                'namaprovinsi' => 'PAPUA',
            ],
        ];

        foreach ($provinsi as $key => $value) {
            Provinsi::create($value);
        }
    }
}
