<?php

namespace App\Http\Controllers\Api;

use App\Models\Komentar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
   public function index(Request $request)
    {
        $komentar = Komentar::query();
        if($request->has('nama')) $modul->where('nama', $request->nama);


        return response()->json([
         'data'   => $komentar->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'video_id'      => 'required|exists:video,id',
            'user_id'       => 'required|exists:users,id',
            'komentar'      => 'required|max:1000'

        ]);

        /** Cara insert ke Database */

        // Cara 1.
        $komentar = new Komentar();
        $komentar->fill($request->only([
            'video_id',
            'user_id',
            'komentar'

        ]));
        $komentar->save();

        return response()->json([
            'message' => "Berhasil menambah data",
            'data' => $komentar
        ]);
    }

    public function destroy($id, Request $request)
    {
        $komentar= Komentar::findOrFail($id);
        $komentar->delete();

        return response()->json([
            'massage' => 'Berhasil menghapus data',
            'data' => $komentar
        ]);
    }
}
