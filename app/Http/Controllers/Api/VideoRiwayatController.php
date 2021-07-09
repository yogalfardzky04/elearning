<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoRiwayatController extends Controller
{
     public function index()
    {
    	return [
    		'message' => 'Data Video Riwayat'
    	];
    }

    public function store(Request $request)
    {
    	return [
    		'message' => 'Insert Data Video Riwayat'
    	];
    }
}
