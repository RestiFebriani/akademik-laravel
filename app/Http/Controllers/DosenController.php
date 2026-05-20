<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::latest()->paginate(10);
        return view('dosen.index', ['dosen' => $dosen]);
    }


    public function create()
    {
        return view('dosen.create');
    }


    public function store(Request $request)
    {
        $request->validate([

            'nik' => 'required|digits:16|unique:dosens,nik',

            'nama' => 'required|min:3|max:100',

            'email' => 'required|email|unique:dosens,email',

            'notelp' => 'required|numeric|digits_between:10,15',

            'prodi' => 'required',

            'alamat' => 'required|min:5'

        ], [

            'nik.required' => 'NIK wajib diisi',
            'nik.digits' => 'NIK harus 16 digit',
            'nik.unique' => 'NIK sudah digunakan',

            'nama.required' => 'Nama wajib diisi',

            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah digunakan',

            'notelp.required' => 'Nomor telpon wajib diisi',

            'prodi.required' => 'Program studi wajib dipilih',

            'alamat.required' => 'Alamat wajib diisi'

        ]);

        Dosen::create($request->all());

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data dosen berhasil disimpan');
    }

    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.show', ['dosen' => $dosen]);
    }


    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);

        return view('dosen.edit', ['dosen' => $dosen]);
    }


    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);

        $request->validate([

            'nama' => 'required|min:3|max:100',

            'email' => 'required|email|unique:dosens,email,' . $id,

            'notelp' => 'required|numeric|digits_between:10,15',

            'prodi' => 'required',

            'alamat' => 'required|min:5'

        ]);

        $dosen->update([

            'nama' => $request->nama,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat

        ]);

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data dosen berhasil diupdate');
    }

    public function destroy(string $id)
    {
        Dosen::destroy($id);
        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data dosen berhasil dihapus.');
    }
}
