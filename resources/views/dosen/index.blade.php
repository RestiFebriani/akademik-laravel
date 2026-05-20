@extends('layouts.main')

@section('title', 'Daftar Dosen')

@section('content')

    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-2">

            <div>
                <h2 class="fw-bold mb-1">Data Dosen</h2>

                <p class="text-muted mb-0">
                    Daftar data dosen Jurusan Teknologi Informasi
                </p>
            </div>

            <a href="{{ route('dosen.create') }}" class="btn btn-primary shadow-sm">

                + Tambah Dosen

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
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Email</th>

                                <th class="text-nowrap">
                                    Nomor Telpon
                                </th>

                                <th>Prodi</th>
                                <th>Alamat</th>
                                <th width="220">Action</th>

                            </tr>

                        </thead>
                        <tbody>

                            @forelse ($dosen as $item)
                                <tr>

                                    <td class="text-center">

                                        {{ $loop->iteration + ($dosen->currentPage() - 1) * $dosen->perPage() }}

                                    </td>

                                    <td>{{ $item->nik }}</td>

                                    <td class="fw-semibold">
                                        {{ $item->nama }}
                                    </td>

                                    <td>{{ $item->email }}</td>

                                    <td>{{ $item->notelp }}</td>

                                    <td>

                                        {{ $item->prodi }}

                                    </td>

                                    <td>{{ $item->alamat }}</td>

                                    <td>

                                        <div class="d-flex gap-2 justify-content-center">

                                            <a href="{{ route('dosen.show', $item->id) }}"
                                                class="btn btn-info btn-sm text-white">

                                                Show

                                            </a>

                                            <a href="{{ route('dosen.edit', $item->id) }}" class="btn btn-warning btn-sm">

                                                Edit

                                            </a>

                                            <form action="{{ route('dosen.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data dosen ini?')">

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

                                        Data dosen belum tersedia

                                    </td>

                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

                <div class="mt-4 d-flex justify-content-center">

                    {{ $dosen->links() }}

                </div>

            </div>

        </div>

    </div>

@endsection
