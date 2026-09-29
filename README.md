# Katalog Lahan — Perumnas Business Solution

Aplikasi katalog lahan dengan frontend publik (layout sama seperti
`katalog-lahan-website.html` asli) dan backend CRUD ber-login, data
disimpan di MySQL.

## Struktur

```
index.php                          -> Frontend katalog publik (fetch data dari api/lahan.php)
api/lahan.php                       -> API publik (read-only) yang dipakai frontend
config.php                          -> Konfigurasi koneksi database (baca dari .env)
includes/auth.php                   -> Helper sesi login untuk backend
admin/login.php                     -> Halaman login backend
admin/logout.php                    -> Logout
admin/index.php                     -> Daftar lahan + tombol tambah/edit/hapus (perlu login)
admin/form.php                      -> Form tambah/edit lahan (perlu login)
admin/delete.php                    -> Proses hapus lahan (perlu login)
includes/upload.php                 -> Helper validasi & simpan file foto lahan
uploads/lahan/                      -> Folder penyimpanan foto lahan yang diupload
database/migrate.php                -> Runner migrasi (CLI: `php database/migrate.php`, atau browser)
database/MigrationRunner.php        -> Logika inti migrasi, dipakai bareng oleh CLI & browser
database/migrations/*.php           -> File migrasi (create table, seed admin, seed lahan)
database/data/lahan_seed.php        -> 88 data lahan awal, dipakai migrasi 004
database/schema.sql                 -> (alternatif) struktur tabel dalam SQL murni
database/seed_data.sql              -> (alternatif) 88 data lahan dalam SQL murni
database/install.sql                -> (alternatif) gabungan schema + seed untuk import manual
```

## Instalasi

1. Salin `.env.example` menjadi `.env` (sudah tersedia dengan nilai default
   MAMP: `DB_HOST=localhost`, `DB_PORT=8889`, `DB_NAME=aset_tanah`,
   `DB_USER=root`, `DB_PASS=root`, `MIGRATE_TOKEN=...`). Sesuaikan isinya
   jika environment MySQL Anda berbeda, dan **ganti `MIGRATE_TOKEN`** dengan
   string rahasia sendiri. `config.php` otomatis membaca file `.env` ini.
2. Jalankan migrasi database — bisa lewat CLI atau browser (tidak perlu
   membuat database manual, script ini yang membuatnya):

   - **CLI:**
     ```bash
     php database/migrate.php
     ```
   - **Browser:** buka `http://localhost:8888/aset-tanah/database/migrate.php`,
     masukkan token yang sama dengan `MIGRATE_TOKEN` di `.env`, lalu klik
     tombol **"Jalankan Migrasi"**.

   Keduanya membuat database `aset_tanah`, tabel `users` & `lahan`, 1 akun
   admin default, dan mengisi 88 data lahan awal. Aman dijalankan berkali-
   kali — migrasi yang sudah diterapkan otomatis dilewati. Proteksi lewat
   token dipakai (bukan login admin) karena migrasi inilah yang membuat
   tabel `users`, jadi belum ada akun untuk login saat instalasi awal.

   *(Alternatif lain: import manual `database/install.sql` lewat phpMyAdmin.)*
3. Buka `http://localhost:8888/aset-tanah/` (sesuaikan port MAMP Anda) untuk
   melihat katalog publik.
4. Buka `http://localhost:8888/aset-tanah/admin/login.php` untuk masuk ke backend.

## Login default

- Username: `admin`
- Password: `admin123`

**Segera ganti password ini** (update langsung di tabel `users`, kolom
`password` harus diisi hasil `password_hash()` PHP) setelah environment
live.

## Catatan

- Semua field kartu/detail di frontend publik (pulau, lokasi, luas, ZNT,
  nilai, konteks, produk, alternatif, alasan, kapasitas, provinsi, foto) sudah
  terhubung ke tabel `lahan` dan bisa diubah lewat backend.
- Data pendukung seperti alamat detail, titik POI sekitar lahan, dan nama
  kota tetap statis di dalam `index.php` (variabel `ADDR`, `POI`, `KOTA`)
  karena bukan bagian dari permintaan CRUD data lahan.

## Foto lahan

- Di halaman **Tambah/Edit Lahan** (backend), ada **4 slot foto** sesuai 4 tab
  foto di halaman detail katalog publik: **Tampak Udara** (kolom `foto`),
  **Batas Lahan** (`foto_batas`), **Akses Jalan** (`foto_akses`), dan
  **Sekitar Lokasi** (`foto_sekitar`). Tiap slot independen — bisa diisi
  sebagian saja, tidak harus keempatnya.
- Format JPG/PNG/WEBP, maksimal 5MB per foto, disarankan 1200×750px (rasio
  8:5, landscape). File disimpan di `uploads/lahan/` dengan nama acak, path-
  nya disimpan di kolom masing-masing.
- Slot yang belum diisi otomatis memakai ilustrasi placeholder di katalog
  publik (kartu, gambar utama, maupun thumbnail di tab terkait) — begitu
  foto diunggah, slot itu otomatis berganti memakai foto asli (diambil lewat
  `api/lahan.php`, tidak perlu ubah kode frontend).
- Saat foto diganti atau dihapus (centang "Hapus" per slot), file lama di
  `uploads/lahan/` otomatis dibersihkan dari server. Begitu juga saat lahan
  itu sendiri dihapus — semua foto terkait (4 slot) ikut terhapus.
- `uploads/.htaccess` memblokir eksekusi file PHP di folder upload sebagai
  lapisan keamanan tambahan.

## Struktur database lokasi (versi terbaru)

Data lokasi yang sebelumnya tersebar di `ADDR`, `KOTA`, `KOTADATA`, `PROVDATA`, kolom alamat/maps di `lahan`, serta tabel `kota`/`kota_data`/`provinsi_data` sekarang dipusatkan di tabel `location`.

`lahan_poi` tetap terpisah karena satu lahan dapat mempunyai banyak POI. Jarak dan waktu tempuh POI dapat diisi manual dari admin.

### Sumber data katalog

Seed `database/data/location_seed.php` dibuat dari data yang sama dengan `index.php` pada project ini. GEO dan ISLANDS tetap berada di frontend karena bukan data atribut lokasi yang perlu dikelola admin.

### Jika memakai database lama

Karena struktur tabel berubah, lakukan backup terlebih dahulu. Untuk instalasi bersih, paling aman buat database baru lalu jalankan:

`php database/migrate.php`

Migrasi `013_cleanup_legacy_location_tables.php` membantu database lama memindahkan struktur lokasi ke `location` lalu menghapus tabel lokasi lama.
