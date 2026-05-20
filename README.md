# Sistem Informasi Akademik Laravel

Sistem Informasi Akademik berbasis Laravel untuk mengelola data mahasiswa dan dosen secara mudah, cepat, dan terstruktur. Aplikasi ini dibangun dengan Laravel 10, Bootstrap 5, dan menyediakan fitur CRUD lengkap.

## 🚀 Fitur Utama

### Mahasiswa

- Menambahkan data mahasiswa
- Menampilkan data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa
- Melihat detail data mahasiswa
- Validasi input form

### Dosen

- Menambahkan data dosen
- Menampilkan data dosen
- Mengedit data dosen
- Menghapus data dosen
- Melihat detail data dosen
- Validasi input form
- NIK tidak dapat diubah saat edit data

### Tampilan

- Responsive menggunakan Bootstrap 5
- Navbar modern dan fixed-top
- Halaman Home yang bersih
- Kartu, tabel, dan alert notifikasi yang menarik

## 🧰 Teknologi yang Digunakan

- Laravel
- PHP
- Bootstrap 5
- MySQL
- Blade Template

## ✨ Deskripsi

Aplikasi ini dirancang untuk memudahkan pengelolaan data akademik dasar, termasuk pendaftaran, pembaruan, dan penghapusan data mahasiswa serta dosen.

## 📌 Struktur Data

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

## 🛠️ Instalasi

Ikuti langkah berikut untuk menjalankan aplikasi secara lokal.

1. Pastikan PHP, Composer, Node.js, dan npm sudah terpasang
2. Salin file konfigurasi lingkungan

```bash
copy .env.example .env
```

3. Masuk ke folder project

```bash
cd project-laravel
```

3. Install dependency

```bash
composer install
npm install
npm run build
```

4. Generate application key

```bash
php artisan key:generate
```

5. Atur konfigurasi database di `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

6. Jalankan migration dan seed Database

```bash
php artisan migrate
php artisan db:seed
```

7. Jalankan server

```bash
php artisan serve
```

8. Buka browser

```text
http://127.0.0.1:8000
```

## 📁 Struktur Singkat Folder

- `app/Models` : model `Mahasiswa` dan `Dosen`
- `app/Http/Controllers` : controller untuk logika aplikasi
- `resources/views` : tampilan aplikasi
- `routes/web.php` : rute aplikasi

## ✍️ Penulis

Resti Febriani
