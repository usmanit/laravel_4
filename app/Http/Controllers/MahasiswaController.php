<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;


class MahasiswaController extends Controller
{
    public function index()
    {
    	$mahasiswa = Mahasiswa::orderBy('created_at','asc')->get();

    	return view('mahasiswa.index', compact('mahasiswa'));

    }

    public function create()
    {
    	return view('mahasiswa.create');
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function insert(Request $request)
    	{
    		$mahasiswa = new Mahasiswa;
    		$mahasiswa->first_name = $request->first_name;
    		$mahasiswa->last_name = $request->last_name;
    		$mahasiswa->email = $request->email;
    		$mahasiswa->password = $request->password;
    		$mahasiswa->jenis_kelamin = $request->jenis_kelamin;
    		$mahasiswa->alamat = $request->alamat;
    		$mahasiswa->tanggal_lahir = $request->tanggal_lahir;
    		$mahasiswa->agama_id = $request->agama_id;
    		$mahasiswa->save();

    		return redirect('mahasiswa')->with('mahasiswa','Data mahasiswa berhasil ditambahkan');
    	}

	   public function hapus($id)
	   {
	   	Mahasiswa::find($id)->delete();
	   	
	   	return redirect('mahasiswa')->with('mahasiswa','Data mahasiswa berhasil dihapus');
	   }

	   public function edit($id)
	   {
	   	$mahasiswa = Mahasiswa::find($id);

	   	return view('mahasiswa.edit', compact('mahasiswa'));
	   }

	   public function update(Request $request)
	   {
	   	$mahasiswa = Mahasiswa::find($request->id);
	   	$mahasiswa->first_name = $request->first_name;
	   	$mahasiswa->last_name = $request->last_name;
	   	$mahasiswa->email = $request->email;
	   	$mahasiswa->password = $request->password;
	   	$mahasiswa->jenis_kelamin = $request->jenis_kelamin;
	   	$mahasiswa->alamat = $request->alamat;
	   	$mahasiswa->tanggal_lahir = $request->tanggal_lahir;
	   	$mahasiswa->agama_id = $request->agama_id;
	   	$mahasiswa->save();

	   	return redirect('mahasiswa')->with('mahasiswa', 'Data Mahasiswa berhasil diperbarui');
	   }

}

