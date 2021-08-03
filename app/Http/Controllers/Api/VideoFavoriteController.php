<?php

namespace App\Http\Controllers\Api;

use App\Models\VideoFavorite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoFavoriteController extends Controller
{
    public function index(Request $request)
    {
        $video_favorite = VideoFavorite::query();
        if($request->has('nama')) $video_favorite->where('nama', $request->nama);

        // Query berdasarkan urutan
        if($request->has('order_by') && $request->has('order_type')) {
            $video_favorite->orderBy($request->order_by,$request->order_type);
        }

        return response()->json([
         'data'   => $video_favorite->get()
        ]);
    }

    public function store(Request $request)
    {
    	$request->validate([
            'video_id'      => 'required|exists:video,id',
            'user_id'       => 'required|exists:users,id',

        ]);

        $video_favorite = new VideoFavorite();
        $video_favorite->fill($request->only([
            'video_id',
            'user_id'
        
        ]));
        $video_favorite->save();

        return response()->json([
            'message' => "Berhasil menambah data",
            'data' => $video_favorite
        ]);
    }
}
