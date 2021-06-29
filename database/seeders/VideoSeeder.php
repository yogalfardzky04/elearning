<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::updateOrCreate ([
        'nama' => 'Persamaan dan Pertidaksamaan Nilai Mutlak Linear Satu Variabel',
        'modul_id' => '1',
    ] , [
        'viewer' => 10,
        'video' => 'Persamaan_dan_Pertidaksamaan.mp4',
        'keterangan' => 'Berikut adalah video dari modul Persamaan dan Pertidaksamaan Nilai Mutlak Linear Satu Variabel'
        ]);

        Video::updateOrCreate ([
        'nama' => 'Seni Rupa Dua Dimensi',
        'modul_id' => '2',
    ] , [
        'viewer' => 30,
        'video' => 'Seni_Rupa_Dua_Dimensi.mp4',
        'keterangan' => 'Berikut adalah video dari modul Seni Rupa Dua Dimensi'
        ]);

        Video::updateOrCreate ([
        'nama' => 'Keterkaitan Peristiwa Sejarah Tentang Manusia di Masa Lalu Untuk Kehidupan Masa Kini',
        'modul_id' => '3',
    ] , [
        'viewer' => 24,
        'video' => 'Keterkaitan_Peristiwa_Sejarah_Manusia.mp4',
        'keterangan' => 'Berikut adalah video dari modul Keterkaitan Peristiwa Sejarah Tentang Manusia'
        ]);

        Video::updateOrCreate ([
        'nama' => 'Perangkat Lunak Pengolah Grafis',
        'modul_id' => '4',
    ] , [
        'viewer' => 33,
        'video' => 'Perangkat_Lunak_Pengolah_Grafis.mp4',
        'keterangan' => 'Berikut adalah video dari modul Perangkat Lunak Pengolah Grafis'
        ]);

        Video::updateOrCreate ([
        'nama' => 'Fiqih',
        'modul_id' => '5',
    ] , [
        'viewer' => 25,
        'video' => 'Fiqih.mp4',
        'keterangan' => 'Berikut adalah video dari modul Fiqih'
        ]);
    }
}
