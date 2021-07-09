<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoFavoriteController extends Controller
{
    public function index()
    {
    	return [
    		'message' => 'Data Video Favorite'
    	];
    }

    public function store(Request $request)
    {
    	return [
    		'message' => 'Insert Data Video Favorite'
    	];
    }
}
