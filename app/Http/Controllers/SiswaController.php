<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = siswa::all();
        return view('admin.siswa', compact('siswas'));
    }

    public function create()
    {
        return view('admin.create_siswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'nama_pacar' => 'required|string',
        ]);

        siswa::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nama_pacar' => $request->nama_pacar,
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.update_siswa', compact('siswa'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'nama_pacar' => 'required|string',
        ]);

        $siswa = siswa::findOrFail($id);
        $siswa->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nama_pacar' => $request->nama_pacar,
        ]);

        return redirect()->back()->with('success', 'Data Siswa berhasil diupdate');
    }

    public function destroy(string $id)
    {
        siswa::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }
}
