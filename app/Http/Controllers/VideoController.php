<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
	public function index()
    {
        /**Mengambil data dari database */
        $video = Video::get();
        return view('admin.video.index',[
            'video' => $video

        ]);
    }
}
