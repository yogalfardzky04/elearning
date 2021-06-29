<?php

namespace Database\Seeders;

use App\Models\VideoFavorite;
use Illuminate\Database\Seeder;

class VideoFavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VideoFavorite::updateOrCreate ([
        'video_id' => '2',
        'user_id' =>'1',
        ]);

        VideoFavorite::updateOrCreate ([
        'video_id' => '1',
        'user_id' =>'2',
        ]);

        VideoFavorite::updateOrCreate ([
        'video_id' => '3',
        'user_id' =>'4',
        ]);

        VideoFavorite::updateOrCreate ([
        'video_id' => '5',
        'user_id' =>'3',
        ]);

        VideoFavorite::updateOrCreate ([
        'video_id' => '4',
        'user_id' =>'5',
        ]);
    }
}
