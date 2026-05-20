@extends('layouts.main')

@section('title', 'Tambah Dosen')

@section('content')

    <div class="container py-4">

        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card shadow border-0 rounded-4">

                    <div class="card-header bg-primary text-white">

                        <h3 class="mb-0">
                            Form Dosen
                        </h3>

                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('dosen.store') }}" method="POST">

                            @csrf

                            <div class="mb-3">

                                <label>NIK</label>

                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                                    placeholder="Masukkan NIK" value="{{ old('nik') }}">

                                @error('nik')
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

                                <label>Nomor Telpon</label>

                                <input type="text" name="notelp"
                                    class="form-control @error('notelp') is-invalid @enderror"
                                    placeholder="Masukkan Nomor Telpon" value="{{ old('notelp') }}">

                                @error('notelp')
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

                            <a href="{{ route('dosen.index') }}" class="btn btn-secondary">

                                Kembali

                            </a>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
