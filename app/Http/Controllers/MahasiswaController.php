<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index',['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
        return view ('form-mahasiswa');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim'      => 'required|size:9|unique:mahasiswas',
            'nama'     => 'required|min:3',
            'tempat_lahir' => 'required|min:3',
            'tanggal_lahir' => 'required',
            'fakultas' => 'required|min:3',
            'jurusan' => 'required|min:3',
            'ipk' => 'required',
        ]);
            //mass assignment
            Mahasiswa::create($validateData);
            
           //return "Data Mahasiswa berhasil di input ke database";
            
            $request->session()->flash('pesan',"Data berhasil ditambahkan");
            return redirect()->route('mahasiswas.index');
    }

    public function detail($mahasiswa)
    {
        $result=Mahasiswa::find($mahasiswa);
        return view('mahasiswa.detail-mahasiswa',['mahasiswa'=>$result]);
    }

    public function edit($mahasiswa)
    {
        $result=Mahasiswa::find($mahasiswa);
        return view('mahasiswa.edit-mahasiswa',['mahasiswa'=>$result]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:9|unique:mahasiswas,nim,'.$mahasiswa->id,
            'nama' => 'required|min:3',
            'tempat_lahir' => 'required|min:3',
            'tanggal_lahir' => 'required',
            'fakultas' => 'required|min:3',
            'jurusan' => 'required|min:3',
            'ipk' => 'required',]);

            Mahasiswa::where('id',$mahasiswa->id)->update($validateData);
            $request->session()->flash('pesan',"Data Berhasil Diperbarui");
            return redirect()->route('mahasiswas.detail',['mahasiswa'=>$mahasiswa->id]);
    }

    Public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('pesan',"Data berhasil Dihapus");
    }
}
