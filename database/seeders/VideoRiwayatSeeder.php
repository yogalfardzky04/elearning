<?php

namespace Database\Seeders;

use App\Models\VideoRiwayat;
use Illuminate\Database\Seeder;

class VideoRiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VideoRiwayat::updateOrCreate ([
        'video_id' => '2',
        'user_id' =>'1',
    ] , [
    	'tanggal' => '2021-06-28 01:30:00'
        ]);

        VideoRiwayat::updateOrCreate ([
        'video_id' => '1',
        'user_id' =>'3',
    ] , [
    	'tanggal' => '2021-06-28 12:25:00'
        ]);

        VideoRiwayat::updateOrCreate ([
        'video_id' => '3',
        'user_id' =>'2',
    ] , [
    	'tanggal' => '2021-06-28 17:50:00'
        ]);

        VideoRiwayat::updateOrCreate ([
        'video_id' => '5',
        'user_id' =>'4',
    ] , [
    	'tanggal' => '2021-06-28 12:25:00'
        ]);

        VideoRiwayat::updateOrCreate ([
        'video_id' => '4',
        'user_id' =>'5',
    ] , [
    	'tanggal' => '2021-06-28 13:42:00'
        ]);
    }
}
