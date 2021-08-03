<?php

namespace App\Http\Controllers;

use App\models\VideoRiwayat;
use Illuminate\Http\Request;

class VideoRiwayatController extends Controller
{
    public function index()
    {
        /**Mengambil data dari database */
        $video_riwayat = VideoRiwayat::get();
        return view('admin.video_riwayat.index',[
            'video_riwayat' => $video_riwayat

        ]);
    }
}
