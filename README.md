# Aplikasi CRUD Data Buku Perpustakaan (PHP Native MVC)

Aplikasi Pengelolaan Data Buku berbasis PHP Native menggunakan pola arsitektur Model-View-Controller (MVC) dan Git.

## Kebutuhan Sistem
- PHP 8.0 atau lebih baru
- MySQL / MariaDB
- Web Server Lokal (XAMPP / Laragon)
- Git

## Cara Instalasi
1. Clone / salin folder proyek ke `htdocs`.
2. Impor file database `database/perpustakaan.sql` ke phpMyAdmin.
3. Sesuaikan koneksi pada `config/database.php`.
4. Buka aplikasi di browser: `http://localhost/mvc-buku/public/index.php`

## Fitur Utama
- Menampilkan daftar buku perpustakaan
- Menambah data buku baru dengan validasi
- Mengubah data buku
- Menghapus data buku
- Indikator pesan (Flash Message) untuk aksi sukses/gagal
