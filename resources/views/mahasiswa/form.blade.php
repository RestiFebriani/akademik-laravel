@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <div class="container py-4">

        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card shadow border-0 rounded-4">
                    <div class="card-header bg-primary text-white">
                        <h3>Form Mahasiswa</h3>
                    </div>

                    <div class="card-body">

                        <form action="/mahasiswa/store" method="POST">

                            @csrf

                            <div class="mb-3">

                                <label>NIM</label>

                                <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                                    placeholder="Masukkan NIM" value="{{ old('nim') }}">

                                @error('nim')
                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label>Nama</label>

                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama"
                                    value="{{ old('nama') }}">

                                @error('nama')
                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label>Prodi</label>

                                <select name="prodi" class="form-control @error('prodi') is-invalid @enderror">

                                    <option value="">
                                        -- Pilih Program Studi --
                                    </option>

                                    <option value="Teknologi Rekayasa Perangkat Lunak"
                                        {{ old('prodi') == 'Teknologi Rekayasa Perangkat Lunak' ? 'selected' : '' }}>

                                        Teknologi Rekayasa Perangkat Lunak

                                    </option>

                                    <option value="Manajemen Informatika"
                                        {{ old('prodi') == 'Manajemen Informatika' ? 'selected' : '' }}>

                                        Manajemen Informatika

                                    </option>

                                    <option value="Sistem Informasi"
                                        {{ old('prodi') == 'Sistem Informasi' ? 'selected' : '' }}>

                                        Sistem Informasi

                                    </option>

                                    <option value="Teknik Komputer"
                                        {{ old('prodi') == 'Teknik Komputer' ? 'selected' : '' }}>

                                        Teknik Komputer

                                    </option>

                                </select>

                                @error('prodi')
                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label>Tanggal Lahir</label>

                                <input type="date" name="tanggal_lahir"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    value="{{ old('tanggal_lahir') }}">

                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label>Email</label>

                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>
                                @enderror

                            </div>

                            <div class="mb-3">

                                <label>Alamat</label>

                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>

                                @error('alamat')
                                    <div class="invalid-feedback">

                                        {{ $message }}

                                    </div>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-primary">

                                Simpan

                            </button>

                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">

                                Kembali

                            </a>

                        </form>

                    </div>

                </div>
            @endsection
