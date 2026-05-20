@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')

    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-2">

            <div>

                <h2 class="fw-bold mb-1">
                    Data Mahasiswa
                </h2>

                <p class="text-muted mb-0">
                    Daftar data mahasiswa Sistem Informasi Akademik
                </p>

            </div>

            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary shadow-sm">

                + Tambah Data Mahasiswa

            </a>

        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert">

                </button>

            </div>
        @endif

        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body p-4">

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="bg-primary text-white text-center align-middle">

                            <tr>

                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>

                                <th class="text-nowrap">
                                    Tanggal Lahir
                                </th>

                                <th>Email</th>
                                <th>Alamat</th>
                                <th width="230">Aksi</th>

                            </tr>

                        </thead>
                        <tbody>

                            @forelse ($mahasiswa as $mhs)
                                <tr>

                                    <td class="text-center">

                                        {{ $loop->iteration }}

                                    </td>

                                    <td>{{ $mhs->nim }}</td>

                                    <td class="fw-semibold">

                                        {{ $mhs->nama }}

                                    </td>

                                    <td>

                                        {{ $mhs->prodi }}

                                    </td>

                                    <td>{{ $mhs->tanggal_lahir }}</td>

                                    <td>{{ $mhs->email }}</td>

                                    <td>{{ $mhs->alamat }}</td>

                                    <td>

                                        <div class="d-flex gap-2 justify-content-center">

                                            <a href="/mahasiswa/show/{{ $mhs->id }}"
                                                class="btn btn-info btn-sm text-white">

                                                Show

                                            </a>

                                            <a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn btn-warning btn-sm">

                                                Edit

                                            </a>

                                            <form action="/mahasiswa/delete/{{ $mhs->id }}" method="POST"
                                                onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">

                                                    Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="8" class="text-center text-muted py-4">

                                        Data mahasiswa belum tersedia

                                    </td>

                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection
