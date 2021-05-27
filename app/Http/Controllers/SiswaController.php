<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        // Proses cari data
        if($request->has('cari')){
            $siswa = Siswa::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
        $siswa = Siswa::all();
        }
        // ////////////////////////////////////////////////////////
        return view('siswa.index',['siswa'=>$siswa]);
    }

    public function create(Request $request)
    {
        Siswa::create($request->all());
        return redirect('/siswa')->with('sukses',
        'Data Berhasil di Input');
    }

    public function store(Request $request)
    {
        //tidak terpakai
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit',['siswa'=>$siswa]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses',
        'Data Berhasil di Update');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('sukses',
        'Data Berhasil di DELETE');
    }
}
