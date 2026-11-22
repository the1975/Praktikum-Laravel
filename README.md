# Praktikum Laravel

| Data | Keterangan |
| --- | --- |
| Nama | Leonardo Yanuarianto |
| NPM | 2513020074 |
| Kelas | SI 2C (Sistem Informasi) |
| Mata Kuliah | Pemrograman Web |

Repositori tugas **Pemrograman Web (SI 2C)**. Isinya latihan dari modul *Praktikum Framework Laravel* (Rudy Eko Prasetya), dikerjakan bertahap per bab.

## Struktur Repositori

| Folder | Isi |
| --- | --- |
| `MahasiswaController` | Tugas halaman 12: MahasiswaController (daftar mahasiswa di `/daftar/mahasiswa`) dan kalkulator |
| `laravel-admin` | Tugas lanjutan: Sistem Templating, CRUD, Migration, dan Autentikasi |

## Isi Tugas `laravel-admin`

| Bab (halaman modul) | Yang dikerjakan |
| --- | --- |
| Sistem Templating (hal 12) | Template SB Admin 2 dipecah jadi header, sidebar, content, footer; 5 laman: Home, Product, Service, Contact, About |
| Membuat CRUD (hal 19) | CRUD tabel `admins` di URL `/admin` (tampil, tambah, ubah, hapus) memakai Eloquent dan resource controller |
| Tentang Migration (hal 27) | Migration tabel `users` dan `admins`, seeder dengan Faker, `migrate:fresh --seed` |
| Membuat Autentikasi (hal 33) | Login dan logout dengan session, middleware `IsLogin` untuk membatasi halaman |

Riwayat commit mengikuti nama bab, diawali `[ADD]`, `[EDIT]`, atau `[DEBUG]`.

## Menjalankan `laravel-admin`

Kebutuhan: PHP 8.3 dan Composer. Database memakai SQLite bawaan Laravel.

    cd laravel-admin
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate:fresh --seed
    php artisan serve

Buka `http://localhost:8000`, lalu login dengan akun dari seeder:

- Email: `admin@mail.com`
- Password: `123456`
