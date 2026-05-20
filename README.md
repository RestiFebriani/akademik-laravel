1. # Sistem Informasi Akademik Laravel

Sistem Informasi Akademik berbasis Laravel yang digunakan untuk mengelola data mahasiswa dan dosen secara mudah dan terstruktur.  
Project ini dibuat menggunakan framework Laravel dan Bootstrap 5 dengan fitur CRUD lengkap.

## Fitur Utama

### Manajemen Mahasiswa

- Menambahkan data mahasiswa
- Menampilkan data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa
- Detail data mahasiswa
- Validasi form input

### Manajemen Dosen

- Menambahkan data dosen
- Menampilkan data dosen
- Mengedit data dosen
- Menghapus data dosen
- Detail data dosen
- Validasi form input
- NIK tidak dapat diubah saat edit data

### Tampilan

- Responsive menggunakan Bootstrap 5
- Navbar modern
- Halaman Home
- Card dan tabel modern
- Alert notifikasi sukses

---

## Teknologi yang Digunakan

- Laravel
- PHP
- Bootstrap 5
- MySQL
- Blade Template

---

## Deskripsi

sistem ini dibuat untuk memudahkan pengelolaan data akademik dasar, termasuk pendaftaran, pembaruan, dan
penghapusan data mahasiswa serta dosen

## Struktur Fitur CRUD

### Mahasiswa

Data mahasiswa yang dikelola:

- NIM
- Nama
- Program Studi
- Tanggal Lahir
- Email
- Alamat

### Dosen

Data dosen yang dikelola:

- NIK
- Nama
- Email
- Nomor Telepon
- Program Studi
- Alamat

---

## Instalasi Project

### 1. Clone Repository

```bash
git clone https://github.com/username/project-laravel.git

## 2. Masuk ke Folder Project

cd project-laravel

## 3. Install Dependency

composer install

## 4. Copy File Environment

cp .env.example .env

## 5. Generate Key

php artisan key:generate

## 6. Atur Database di .env

DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

## 7. Jalankan Migration

php artisan migrate

## 8. Jalankan Server

php artisan serve

## 9. Buka browser:

http://127.0.0.1:8000

## Struktur Singkat Folder

- `app/Models` : model `Mahasiswa` dan `Dosen`
- `app/Http/Controllers` : controller untuk logika aplikasi
- `resources/views` : tampilan aplikasi
- `routes/web.php` : rute aplikasi

## Penulis

Resti Febriani
```
