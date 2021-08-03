<?php

namespace App\Http\Controllers;

use App\models\ModulKategori;
use Illuminate\Http\Request;

class ModulKategoriController extends Controller
{
    public function index()
    {
        /**Mengambil data dari database */
        $modul_kategori = ModulKategori::get();
        return view('admin.modul_kategori.index',[
            'modul_kategori' => $modul_kategori

        ]);
    }
}
