<?php

namespace Database\Seeders;

use App\Models\Komentar;
use Illuminate\Database\Seeder;

class KomentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Komentar::updateOrCreate ([
        'video_id' => '2',
        'user_id' =>'1',
    ] , [
    	'komentar' => 'Videonya sangat membantu saya dalam memahami materi dari Seni Rupa Dua Dimensi, terimakasih.'
        ]);

        Komentar::updateOrCreate ([
        'video_id' => '1',
        'user_id' =>'3',
    ] , [
    	'komentar' => 'Penjelasan dalam video mudah dimengerti.'
        ]);

        Komentar::updateOrCreate ([
        'video_id' => '3',
        'user_id' =>'2',
    ] , [
    	'komentar' => 'Penjelasan materi dalam video mudah dimengerti'
        ]);

        Komentar::updateOrCreate ([
        'video_id' => '5',
        'user_id' =>'4',
    ] , [
    	'komentar' => 'Terimakasih sekarang saya dapat memahami apa itu fiqih'
        ]);

        Komentar::updateOrCreate ([
        'video_id' => '4',
        'user_id' =>'5',
    ] , [
    	'komentar' => 'Penjelasan materi dalam video mudah dimengerti'
        ]);
    }
}
