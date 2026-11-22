# Praktikum Laravel

| Data | Keterangan |
| --- | --- |
| Nama | Leonardo Yanuarianto |
| NPM | 2513020074 |
| Kelas | SI 2C (Sistem Informasi) |
| Mata Kuliah | Pemrograman Web |

Repositori tugas Pemrograman Web berisi latihan dari modul *Praktikum Framework Laravel* (Rudy Eko Prasetya), dikerjakan bertahap per bab.

## Daftar Isi

- [Struktur Repositori](#struktur-repositori)
- [MahasiswaController](#mahasiswacontroller)
- [laravel-admin](#laravel-admin)
- [Riwayat Commit](#riwayat-commit)

## Struktur Repositori

| Folder | Isi |
| --- | --- |
| [`MahasiswaController`](MahasiswaController) | Tugas halaman 12: daftar mahasiswa dan kalkulator luas segitiga |
| [`laravel-admin`](laravel-admin) | Tugas lanjutan: Sistem Templating, CRUD, Migration, dan Autentikasi |

Kebutuhan kedua project: PHP 8.3 dan Composer. Database memakai SQLite bawaan Laravel.

> Link `localhost` di bawah baru bisa dibuka setelah `php artisan serve` berjalan.

## MahasiswaController

### Laman

| Laman | Keterangan |
| --- | --- |
| [/daftar/mahasiswa](http://localhost:8000/daftar/mahasiswa) | Daftar mahasiswa (nama, alamat, gender) |
| [/kalkulator/segitiga](http://localhost:8000/kalkulator/segitiga) | Form hitung luas segitiga |

### Cara Menjalankan

    cd MahasiswaController
    composer install
    cp .env.example .env
    php artisan key:generate
    touch database/database.sqlite
    php artisan migrate
    php artisan serve

## laravel-admin

### Isi Tugas

| Bab (halaman modul) | Yang dikerjakan |
| --- | --- |
| Sistem Templating (hal 12) | Template SB Admin 2 dipecah jadi header, sidebar, content, footer; 5 laman: Home, Product, Service, Contact, About |
| Membuat CRUD (hal 19) | CRUD tabel `admins` (tampil, tambah, ubah, hapus) dengan Eloquent dan resource controller |
| Tentang Migration (hal 27) | Migration tabel `users` dan `admins`, seeder dengan Faker, `migrate:fresh --seed` |
| Membuat Autentikasi (hal 33) | Login dan logout dengan session, middleware `IsLogin` untuk membatasi halaman |

### Cara Menjalankan

    cd laravel-admin
    composer install
    cp .env.example .env
    php artisan key:generate
    touch database/database.sqlite
    php artisan migrate:fresh --seed
    php artisan serve

### Laman

| Laman | Keterangan |
| --- | --- |
| [/login](http://localhost:8000/login) | Halaman login |
| [/home](http://localhost:8000/home) | Home (setelah login) |
| [/admin](http://localhost:8000/admin) | CRUD data admin (setelah login) |

### Akun Login (dari seeder)

| Email | Password |
| --- | --- |
| `admin@mail.com` | `123456` |

## Riwayat Commit

Pesan commit mengikuti nama bab, diawali `[ADD]`, `[EDIT]`, atau `[DEBUG]`.
