<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index()
    {
        /**Mengambil data dari database */
        $modul = Modul::get();
        return view('admin.modul.index',[
            'modul' => $modul

        ]);
    }
}
