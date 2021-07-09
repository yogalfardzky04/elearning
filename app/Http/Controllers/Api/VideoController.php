<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
    	return [
    		'message' => 'Data Video'
    	];
    }

    public function store(Request $request)
    {
    	return [
    		'message' => 'Insert Data Video'
    	];
    }

    public function show($id)
    {
    	return [
    		'message' => 'Detail Data Video'
    	];
    }

    public function update($id, Request $request)
    {
    	return [
    		'message' => 'Update Data Video'
    	];
    }

    public function destroy($id, Request $request)
    {
    	return [
    		'message' => 'Delete Data Video'
    	];
    }
}
