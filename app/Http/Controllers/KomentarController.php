<?php

namespace App\Http\Controllers;

use App\models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        /**Mengambil data dari database */
        $komentar = Komentar::get();
        return view('admin.komentar.index',[
            'komentar' => $komentar

        ]);
    }
}
