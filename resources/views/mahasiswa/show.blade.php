@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">

                    <h3>Detail Mahasiswa</h3>

                </div>

                <div class="card-body">

                    <p>
                        <strong>NIM :</strong>
                        {{ $mahasiswa->nim }}
                    </p>

                    <p>
                        <strong>Nama :</strong>
                        {{ $mahasiswa->nama }}
                    </p>

                    <p>
                        <strong>Prodi :</strong>
                        {{ $mahasiswa->prodi }}
                    </p>

                    <p>
                        <strong>Tanggal Lahir :</strong>
                        {{ $mahasiswa->tanggal_lahir }}
                    </p>

                    <p>
                        <strong>Email :</strong>
                        {{ $mahasiswa->email }}
                    </p>

                    <p>
                        <strong>Alamat :</strong>
                        {{ $mahasiswa->alamat }}
                    </p>

                    <a href="/mahasiswa/data" class="btn btn-secondary">

                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </div>
@endsection
