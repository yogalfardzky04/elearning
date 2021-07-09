<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index()
    {
    	return [
    		'message' => 'Data Modul'
    	];
    }

    public function store(Request $request)
    {
    	return [
    		'message' => 'Insert Data Modul'
    	];
    }

    public function show($id)
    {
    	return [
    		'message' => 'Detail Data Modul'
    	];
    }

    public function update($id, Request $request)
    {
    	return [
    		'message' => 'Update Data Modul'
    	];
    }

    public function destroy($id, Request $request)
    {
    	return [
    		'message' => 'Delete Data Modul'
    	];
    }
}
