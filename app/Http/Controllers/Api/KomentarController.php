<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
   public function index()
    {
    	return [
    		'message' => 'Data Komentar'
    	];
    }

    public function store(Request $request)
    {
    	return [
    		'message' => 'Insert Data Komentar'
    	];
    }
}
