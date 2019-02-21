<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    
	public function index()
	{

		$dokter = \App\Dokter::all();

		return view('dokter.index', compact('dokter'));
	}

	public function create(Request $request)
	{
		\App\Dokter::create($request->all());

		return redirect('dokter')->with('Sukses','Data Berhasil Disimpan');
	}

	public function edit($id_dokter)
	{
		$dokter = \App\Dokter::find($id_dokter);

		return view('dokter.edit', compact('dokter'));
	}

}
