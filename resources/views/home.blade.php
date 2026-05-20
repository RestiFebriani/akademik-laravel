@extends('layouts.main')
@section('title', 'Home')

@section('content')

    <div class="container py-4">

        {{-- Hero Section --}}
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">

            <div class="row g-0 align-items-center">

                <div class="col-md-6 p-5">

                    <h1 class="fw-bold text-primary mb-3">
                        Sistem Informasi Akademik
                    </h1>

                    <p class="text-muted fs-5">

                        Sistem ini digunakan untuk mengelola data mahasiswa
                        dan dosen secara mudah, cepat, dan terstruktur
                        menggunakan Laravel dan Bootstrap 5.

                    </p>

                    <div class="mt-4 d-flex gap-2">

                        <a href="/mahasiswa" class="btn btn-outline-primary px-4">

                            Data Mahasiswa

                        </a>

                        <a href="/dosen" class="btn btn-outline-primary px-4">

                            Data Dosen

                        </a>

                    </div>

                </div>

                <div class="col-md-6 text-center bg-light p-4">

                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" class="img-fluid" width="330">

                </div>

            </div>

        </div>

        {{-- Statistik --}}
        <div class="row g-4 mb-5">

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body text-center p-4">

                        <h1 class="text-primary mb-3">
                            🎓
                        </h1>

                        <h4 class="fw-semibold">
                            Mahasiswa
                        </h4>

                        <p class="text-muted">

                            Kelola data mahasiswa dengan fitur tambah,
                            edit, show, dan hapus data.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body text-center p-4">

                        <h1 class="text-success mb-3">
                            👨‍🏫
                        </h1>

                        <h4 class="fw-semibold">
                            Dosen
                        </h4>

                        <p class="text-muted">

                            Mengelola data dosen dan informasi akademik
                            dengan tampilan modern.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body text-center p-4">

                        <h1 class="text-danger mb-3">
                            ⚡
                        </h1>

                        <h4 class="fw-semibold">
                            Laravel CRUD
                        </h4>

                        <p class="text-muted">

                            Dibangun menggunakan framework Laravel
                            dan Bootstrap 5.

                        </p>

                    </div>

                </div>

            </div>

        </div>

        {{-- About --}}
        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body p-4">

                <h3 class="fw-bold mb-3">
                    Tentang Sistem
                </h3>

                <p class="text-muted mb-0">

                    Sistem Informasi Akademik ini digunakan untuk membantu
                    pengelolaan data mahasiswa dan dosen seperti
                    NIM/NIK, nama lengkap, email, program studi,
                    nomor telepon, dan alamat dengan sistem CRUD
                    berbasis Laravel.

                </p>

            </div>

        </div>

        {{-- Footer --}}
        <div class="text-center text-muted mt-4">

            © 2026 Sistem Informasi Akademik

        </div>

    </div>

@endsection
