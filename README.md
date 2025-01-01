# SIPERPUS (Sistem Informasi Perpustakaan)

SIPERPUS adalah aplikasi sistem informasi perpustakaan berbasis web yang memungkinkan pengelolaan buku, anggota, peminjaman buku, dan laporan dengan antarmuka yang sederhana dan user-friendly.

## Fitur

### **Admin**
- **Dashboard**: Statistik buku, anggota, dan peminjaman.
- **Manajemen Buku**: Tambah, ubah, hapus, dan cari buku.
- **Manajemen Anggota**: Tambah, ubah, hapus, dan kelola status anggota.
- **Peminjaman Buku**: Kelola proses peminjaman dan pengembalian buku.
- **Laporan**: Lihat dan ekspor laporan peminjaman buku.

### **Member**
- **Dashboard**: Informasi statistik buku dan peminjaman aktif.
- **Cari Buku**: Cari buku berdasarkan judul atau kategori.
- **Riwayat Peminjaman**: Lihat daftar peminjaman buku.

---

## Instalasi

1. **Clone Repository**

2. **Instal Dependencies**
   Jalankan perintah berikut untuk menginstal semua dependencies:
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Konfigurasi Database**

4. **Migrate dan Seed Database**
   ```bash
   php artisan migrate --seed
   ```

5. **Jalankan Aplikasi**
   Jalankan server aplikasi:
   ```bash
   php artisan serve
   ```
   Akses aplikasi di: [http://localhost:8000](http://localhost:8000)

---

## Pengguna Default

| **Role**  | **Email**            | **Password** |
|-----------|----------------------|--------------|
| Admin     | ekomh13@example.com    | admin2829     |
| Member    | member123@example.com   | member123     |

---

## Teknologi yang Digunakan

- **Framework**: Laravel 10
- **Database**: MySQL / SQLite
- **Frontend**: AdminLTE, Bootstrap
- **Authentication**: Laravel Breeze

---

## Kontribusi

1. Fork repository ini.
2. Buat branch untuk fitur atau perbaikan (`git checkout -b fitur-baru`).
3. Commit perubahan Anda (`git commit -m 'Tambah fitur baru'`).
4. Push ke branch (`git push origin fitur-baru`).
5. Buat Pull Request.

---
