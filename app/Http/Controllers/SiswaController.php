<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Data
    
    //Method
    public function index( )
    {
        # code...
        $data_siswa = \App\Siswa::all();
        return view("siswa.index", ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        # code...

        \App\Siswa::create($request->all()) ;
        return redirect('/siswa')->with('success', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);

    }

    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('success', 'Data telah di Update');
    }
}
