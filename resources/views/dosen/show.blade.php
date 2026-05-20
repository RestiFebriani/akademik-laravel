@extends('layouts.main')

@section('title', 'Detail Dosen')

@section('content')

    <div class="container py-4">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card shadow border-0 rounded-4">

                    <div class="card-header bg-primary text-white text-center py-3">

                        <h3 class="mb-0">
                            Detail Dosen
                        </h3>

                    </div>

                    <div class="card-body p-4">

                        <p>
                            <strong>NIK :</strong>
                            {{ $dosen->nik }}
                        </p>

                        <p>
                            <strong>Nama :</strong>
                            {{ $dosen->nama }}
                        </p>

                        <p>
                            <strong>Email :</strong>
                            {{ $dosen->email }}
                        </p>

                        <p>
                            <strong>Nomor Telpon :</strong>
                            {{ $dosen->notelp }}
                        </p>

                        <p>
                            <strong>Prodi :</strong>
                            {{ $dosen->prodi }}
                        </p>

                        <p>
                            <strong>Alamat :</strong>
                            {{ $dosen->alamat }}
                        </p>

                        <a href="{{ route('dosen.index') }}" class="btn btn-secondary mt-2">

                            Kembali

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
