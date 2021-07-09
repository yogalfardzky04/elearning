<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
    	return [
    		'message' => 'Data User'
    	];
    }

    public function store(Request $request)
    {
    	return [
    		'message' => 'Insert Data User'
    	];
    }

    public function show($id)
    {
    	return [
    		'message' => 'Detail Data User'
    	];
    }

    public function update($id, Request $request)
    {
    	return [
    		'message' => 'Update Data User'
    	];
    }

    public function destroy($id, Request $request)
    {
    	return [
    		'message' => 'Delete Data User'
    	];
    }
}
