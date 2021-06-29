<?php

namespace Database\Seeders;

use App\Models\Modul;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modul::updateOrCreate ([
        'nama' => 'Persamaan dan Pertidaksamaan Nilai Mutlak Linear Satu Variabel',
        'user_id' => '2',
        'kategori_id' =>'1',
    ] , [
        'keterangan' => 'Modul yang berisi Persamaan dan Pertidaksamaan Nilai Mutlak Linear Satu Variabel'
        ]);

        Modul::updateOrCreate ([
        'nama' => 'Seni Rupa Dua Dimensi',
        'user_id' => '1',
        'kategori_id' =>'5',
    ] , [
        'keterangan' => 'Modul yang berisi tentang Seni Rupa Dua Dimensi'
        ]);

        Modul::updateOrCreate ([
        'nama' => 'Keterkaitan Peristiwa Sejarah Tentang Manusia di Masa Lalu Untuk Kehidupan Masa Kini',
        'user_id' => '3',
        'kategori_id' =>'2',
    ] , [
        'keterangan' => 'Modul yang berisi tentang Keterkaitan Peristiwa Sejarah Tentang Manusia di Masa Lalu Untuk Kehidupan Masa Kini'
        ]);

        Modul::updateOrCreate ([
        'nama' => 'Perangkat Lunak Pengolah Grafis',
        'user_id' => '4',
        'kategori_id' =>'3',
    ] , [
        'keterangan' => 'Modul yang berisi tentang Perangkat Lunak Pengolah Grafis'
        ]);

        Modul::updateOrCreate ([
        'nama' => 'Fiqih',
        'user_id' => '5',
        'kategori_id' =>'4',
    ] , [
        'keterangan' => 'Modul yang berisi tentang Fiqih dalam Agama Islam'
        ]);
    }
}
