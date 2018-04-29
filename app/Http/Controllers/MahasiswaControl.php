<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('created_at','asc')->get();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $mahasiswa = new Mahasiswa;
        //     $mahasiswa->first_name = $request->first_name;
        //     $mahasiswa->last_name = $request->last_name;
        //     $mahasiswa->email = $request->email;
        //     $mahasiswa->password = $request->password;
        //     $mahasiswa->jenis_kelamin = $request->jenis_kelamin;
        //     $mahasiswa->alamat = $request->alamat;
        //     $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        //     $mahasiswa->agama_id = $request->agama_id;
        //     $mahasiswa->save();
        Mahasiswa::create($request->all());
        return redirect('admin/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();
        
        return redirect('mahasiswa')->with('mahasiswa','Data mahasiswa berhasil dihapus');
    }
}
