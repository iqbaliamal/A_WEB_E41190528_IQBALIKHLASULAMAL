<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'name'          => 'Iqbal Ikhlasul Amal',
            'alamat'        => 'Paleran, Umbulsari Jember',
            'jenis_kelamin' => 1,
            'prodi'         => 1,
            'no_hp'         => '082229741767'
        ]);
    }
}
