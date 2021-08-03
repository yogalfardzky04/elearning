<?php

namespace App\Http\Controllers;

use App\models\VideoFavorite;
use Illuminate\Http\Request;

class VideoFavoriteController extends Controller
{
    public function index()
    {
        /**Mengambil data dari database */
        $video_favorite = VideoFavorite::get();
        return view('admin.video_favorite.index',[
            'video_favorite' => $video_favorite

        ]);
    }
}
