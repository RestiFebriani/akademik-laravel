<!-- resources/views/mahasiswa/hapus.blade.php -->

@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <div class="card shadow">

        <div class="card-header bg-danger text-white">
            <h3>Hapus Data Mahasiswa</h3>
        </div>

        <div class="card-body">

            <h5>Apakah yakin ingin menghapus data berikut?</h5>

            <table class="table table-bordered mt-3">

                <tr>
                    <th>NIM</th>
                    <td>{{ $mahasiswa->nim }}</td>
                </tr>

                <tr>
                    <th>Nama</th>
                    <td>{{ $mahasiswa->nama }}</td>
                </tr>

                <tr>
                    <th>Prodi</th>
                    <td>{{ $mahasiswa->prodi }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $mahasiswa->email }}</td>
                </tr>

            </table>

            <form action="/mahasiswa/delete/{{ $mahasiswa->id }}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">

                    Ya, Hapus

                </button>

                <a href="/mahasiswa/data" class="btn btn-secondary">

                    Batal

                </a>

            </form>

        </div>

    </div>
@endsection
