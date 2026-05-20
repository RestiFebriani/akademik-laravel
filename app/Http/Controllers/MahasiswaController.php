<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.data', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|numeric|digits_between:8,15|unique:mahasiswas,nim',

            'nama' => 'required|min:3|max:50',

            'prodi' => 'required',

            'tanggal_lahir' => 'required|date',

            'email' => 'required|email|unique:mahasiswas,email',

            'alamat' => 'required|min:5'
        ], [

            'nim.required' => 'NIM wajib diisi',
            'nim.numeric' => 'NIM harus berupa angka',
            'nim.unique' => 'NIM sudah digunakan',

            'nama.required' => 'Nama wajib diisi',

            'prodi.required' => 'Program studi wajib dipilih',

            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',

            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah digunakan',

            'alamat.required' => 'Alamat wajib diisi'
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        return redirect('/mahasiswa/data')
            ->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        return redirect('/mahasiswa/data')
            ->with('success', 'Data berhasil diupdate');
    }

    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.hapus', compact('mahasiswa'));
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->delete();

        return redirect('/mahasiswa/data')
            ->with('success', 'Data berhasil dihapus');
    }

    public function data()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.data', compact('mahasiswa'));
    }
}
