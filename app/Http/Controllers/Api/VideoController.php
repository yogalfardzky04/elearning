<?php

namespace App\Http\Controllers\Api;

use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $video = Video::query();
        if($request->has('nama')) $modul->where('nama', $request->nama);

        // Query berdasarkan urutan
        if($request->has('order_by') && $request->has('order_type')) {
            $video->orderBy($request->order_by,$request->order_type);
        }

        return response()->json([
         'data'   => $video->get()
        ]);
    }

    public function store(Request $request)
    {
    	$request->validate([
            'modul_id'      => 'required|exists:modul,id',
            'nama'          => 'required|max:255',
            'viewer'        => 'nullable',
            'video'         => 'required|file',
            'keterangan'    => 'nullable|max:1000'

        ]);

        /** Cara insert ke Database */

        // Cara 1.
        $video = new Video();
        $video->fill($request->only([
            'modul_id',
            'nama',
            'viewer',
            'video',
            'keterangan'
        
        ]));
        $video->save();

        return response()->json([
            'message' => "Berhasil menambah data",
            'data' => $video
        ]);
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        return response()->json([
            'data' => $video
        ]);
    }

    public function update($id, Request $request)
    {
    	$request->validate([
            'modul_id'      => 'required|exists:modul,id',
            'nama'          => 'required|max:255',
            'viewer'        => 'nullable',
            'video'         => 'required|file',
            'keterangan'    => 'nullable|max:1000'

        ]);

        $video = Video::findOrFail($id);
        $video->fill($request->only([
            'modul_id',
            'nama',
            'viewer',
            'video',
            'keterangan'            

        ]));
        $video->save();

        return response()->json([
            'message' => "Berhasil menngupdate data",
            'data' => $video
        ]);
    }

    public function destroy($id, Request $request)
    {
    	$video = Video::findOrFail($id);
        $video->delete();

        return response()->json([
            'massage' => 'Berhasil menghapus data',
            'data' => $video
        ]);
    }
}
