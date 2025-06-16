 <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
 
 🚀 FORWARD-CHAINING Laravel 12 Project Setup Guide

Selamat datang di project ini!  
Panduan ini akan membimbing Anda dari awal sampai bisa menjalankan project Laravel ini **di komputer lokal Anda**, meskipun Anda belum familiar dengan Laravel atau pemrograman web.


🧰 Kebutuhan Sistem

Pastikan Anda telah menginstal hal berikut sebelum melanjutkan:

| Alat        | Fungsi                            | Link Unduh |
|-------------|------------------------------------|------------|
| PHP ≥ 8.2   | Bahasa pemrograman Laravel         | https://www.php.net/downloads.php |
| Composer    | Manajer library PHP                | https://getcomposer.org/download/ |
| MySQL       | Database untuk menyimpan data      | https://dev.mysql.com/downloads/installer/ |
| Git         | Untuk clone project dari GitHub    | https://git-scm.com/ |
| XAMPP / Laragon | Web Server + MySQL            | [XAMPP](https://www.apachefriends.org/) / [Laragon](https://laragon.org/) |

> Disarankan menggunakan **Laragon** karena lebih praktis untuk Laravel.


🧑‍💻 Langkah Menjalankan Project

Ikuti langkah-langkah ini secara urut.

#1. Clone Project dari GitHub

Buka terminal atau CMD dan jalankan:

```bash
git clone https://github.com/nama-user/nama-repo.git
cd nama-repo
````

> Ganti `nama-user/nama-repo` sesuai nama GitHub project Anda.

---

#2. Install Library Laravel dengan Composer

Di dalam folder project, jalankan:

```bash
composer install
```

> Ini akan mengunduh semua dependency Laravel yang dibutuhkan. Pastikan Composer sudah terpasang.

---

#3. Buat File `.env`

File `.env` menyimpan konfigurasi seperti koneksi database. Karena file ini tidak ada di GitHub (diblokir oleh `.gitignore`), Anda harus membuatnya secara manual dari contoh file:

```bash
cp .env.example .env
```

---

#4. Generate Laravel App Key

Laravel butuh app key untuk enkripsi data. Jalankan:

```bash
php artisan key:generate
```

---

#5. Konfigurasi Database

Buka file `.env` dengan text editor, lalu ubah bagian berikut sesuai pengaturan database lokal Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

> Gantilah `nama_database` sesuai nama database yang Anda buat di phpMyAdmin (XAMPP/Laragon).

---

#6. Buat dan Isi Database

Setelah membuat database MySQL, jalankan perintah ini untuk membuat tabel dan mengisi data awal (jika seeder tersedia):

```bash
php artisan migrate --seed
```

> Perintah ini akan menjalankan semua file migration dan seeder.

---

#7. Jalankan Server Laravel

Laravel memiliki built-in web server. Anda bisa langsung menjalankan:

```bash
php artisan serve
```

Lalu buka browser dan akses:

```
http://localhost:8000
```

---

⚙️ Ringkasan Perintah Penting

| Perintah                   | Fungsi                           |
| -------------------------- | -------------------------------- |
| `composer install`         | Menginstal semua library Laravel |
| `cp .env.example .env`     | Membuat file konfigurasi lokal   |
| `php artisan key:generate` | Membuat app key                  |
| `php artisan migrate`      | Membuat tabel database           |
| `php artisan db:seed`      | Mengisi data awal                |
| `php artisan serve`        | Menjalankan server Laravel       |

---

❓ FAQ (Pertanyaan Umum)

**Q: Composer tidak ditemukan?**
A: Pastikan Composer sudah diinstal dan sudah ditambahkan ke `PATH` sistem.

**Q: Tidak bisa connect ke database?**
A: Pastikan MySQL aktif dan setting di `.env` sudah benar (`DB_USERNAME`, `DB_PASSWORD`, dll).

**Q: Tidak ada file `.env` setelah clone?**
A: File `.env` tidak diupload ke GitHub. Gunakan `cp .env.example .env`.

---

📝 Tentang Project

* Framework: Laravel 12
* Database: MySQL
* Terdapat: Migration dan Seeder
* Dibuat untuk: Digunakan dan dijalankan secara lokal

---

📬 Kontak

Jika mengalami kendala saat menjalankan project ini, Anda bisa membuka issue di repo ini atau hubungi developer via email.

---

✅ Selesai!

🎉 Selamat! Anda sudah berhasil men-setup project ini.
Jangan lupa eksplorasi Laravel lebih lanjut di:
🔗 [https://laravel.com/docs/](https://laravel.com/docs/)

```

---

Kalau kamu mau saya tambahkan bagian seperti:

- Fitur-fitur aplikasi
- Panduan login (jika ada user default dari seeder)
- Penjelasan struktur folder Laravel untuk pemula

Tinggal bilang aja ya!
```
