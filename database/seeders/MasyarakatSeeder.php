<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Masyarakat;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'nik' => '6474031703050001',
                'nama' => 'Esra Siregar',
                'username' => 'esra',
                'telp' => '6282149897656',
                'password' => bcrypt('11111111'),
            ],
        ];

        Masyarakat::insert($arr);
    }
}
