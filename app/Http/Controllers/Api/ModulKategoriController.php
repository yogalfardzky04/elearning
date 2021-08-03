<?php

namespace App\Http\Controllers\Api;

use App\Models\ModulKategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulKategoriController extends Controller
{
    public function index(Request $request)
    {
    	$modulKategori = ModulKategori::query();
        if($request->has('nama')) $modulKategori->where('nama', $request->nama);

        // Query berdasarkan urutan
        if($request->has('order_by') && $request->has('order_type')) {
            $modulKategori->orderBy($request->order_by,$request->order_type);
        }

        return response()->json([
         'data'   => $modulKategori->get()
        ]);
    }
}
