<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
    	$pasien = \App\Pasien::all();

    	return view('pasien.index', compact('pasien'));
    }

    public function create(Request $request)
    {

    	\App\Pasien::create($request->all());

    	return redirect('pasien')->with('sukses','Data Berhasil Disimpan');
    }
}
