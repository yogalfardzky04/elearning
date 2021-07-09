<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulKategoriController extends Controller
{
    public function index()
    {
    	return [
    		'message' => 'Data Kategori Modul'
    	];
    }
}
