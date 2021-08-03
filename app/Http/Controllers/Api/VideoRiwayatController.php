<?php

namespace App\Http\Controllers\Api;

use App\Models\VideoRiwayat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoRiwayatController extends Controller
{
     public function index(Request $request)
    {
        $video_riwayat = VideoRiwayat::query();
        if($request->has('nama')) $video_riwayat->where('nama', $request->nama);

        // Query berdasarkan urutan
        if($request->has('order_by') && $request->has('order_type')) {
            $video_riwayat->orderBy($request->order_by,$request->order_type);
        }

        return response()->json([
         'data'   => $video_riwayat->get()
        ]);
    }

    public function store(Request $request)
    {
    	$request->validate([
            'video_id'      => 'required|exists:video,id',
            'user_id'       => 'required|exists:users,id'

        ]);

        $video_riwayat = new VideoRiwayat();
        $video_riwayat->fill($request->only([
            'video_id',
            'user_id'
        
        ]));
        $video_riwayat->tanggal = date('YmdHis');
        $video_riwayat->save();

        return response()->json([
            'message' => "Berhasil menambah data",
            'data' => $video_riwayat
        ]);
    }
}
