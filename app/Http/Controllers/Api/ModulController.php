<?php

namespace App\Http\Controllers\Api;

use App\Models\Modul;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index(Request $request)
    {
    	$modul = Modul::query();
        if($request->has('nama')) $modul->where('nama', $request->nama);

        // Query berdasarkan urutan
        if($request->has('order_by') && $request->has('order_type')) {
            $modul->orderBy($request->order_by,$request->order_type);
        }

        return response()->json([
         'data'   => $modul->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'       => 'required|exists:users,id',
            'kategori_id'   => 'required|exists:modul_kategori,id',
            'nama'          => 'required|max:255',
            'keterangan'    => 'required|max:1000'

        ]);

        /** Cara insert ke Database */

        // Cara 1.
        $modul = new Modul();
        $modul->fill($request->only([
            'user_id',
            'kategori_id',
            'nama',
            'keterangan',

        ]));
        $modul->save();

        return response()->json([
            'message' => "Berhasil menambah data",
            'data' => $modul
        ]);

    }

    public function show($id)
    {
        $modul = Modul::findOrFail($id);
        return response()->json([
            'data' => $modul
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'user_id'       => 'required|exists:users,id',
            'kategori_id'   => 'required|exists:modul_kategori,id',
            'nama'          => 'max:255',
            'keterangan'    => 'max:1000'

        ]);


        $modul = Modul::findOrFail($id);
        $modul->fill($request->only([
            'user_id',
            'kategori_id',
            'nama',
            'keterangan'            

        ]));
        $modul->save();

        return response()->json([
            'message' => "Berhasil menngupdate data",
            'data' => $modul
        ]);
    }

    public function destroy($id, Request $request)
    {
        $modul = Modul::findOrFail($id);
        $modul->delete();

        return response()->json([
            'massage' => 'Berhasil menghapus data',
            'data' => $modul
        ]);
    }
}
