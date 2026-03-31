# Tugas 1 Pemrograman Web 2

Proyek ini adalah website statis bertema **retreat kreatif pesisir** berbasis Laravel (Blade) dengan fokus pada visual modern, ringan, dan responsif.

## Fitur Utama

- Landing page multi-halaman (tanpa login)
- Bahasa Indonesia untuk seluruh konten
- Navigasi antar halaman:
	- Beranda
	- Program
	- Galeri
	- Kontak
- Desain responsif untuk desktop dan mobile
- Footer watermark:
	- `design by Muhamad Akbar Ergiansyah 23552011411`

## Teknologi

- PHP 8+
- Laravel 12
- Blade Template
- CSS murni (tanpa framework UI tambahan)

## Struktur Halaman

- `/` -> Beranda
- `/program` -> Informasi program kegiatan
- `/galeri` -> Showcase suasana/konten galeri
- `/kontak` -> Informasi kontak dan reservasi

## Cara Menjalankan

1. Install dependency:

```bash
composer install
```

2. Copy file env dan generate key:

```bash
cp .env.example .env
php artisan key:generate
```

3. Jalankan server lokal:

```bash
php artisan serve
```

4. Buka browser:

```text
http://127.0.0.1:8000
```

## Screenshot Per Halaman

Silakan ganti placeholder berikut dengan screenshot Anda.

### 1. Beranda

![Screenshot Beranda](./docs/screenshots/beranda.png)

### 2. Program

![Screenshot Program](./docs/screenshots/program.png)

### 3. Galeri

![Screenshot Galeri](./docs/screenshots/galeri.png)

### 4. Kontak

![Screenshot Kontak](./docs/screenshots/kontak.png)

## Template Folder Screenshot

Simpan file screenshot di folder berikut:

```text
docs/screenshots/
```

Nama file yang disarankan:

- `beranda.png`
- `program.png`
- `galeri.png`
- `kontak.png`

## Catatan

- Project ini tidak memerlukan autentikasi/login.
- Session, cache, dan queue sudah disetel agar bisa berjalan tanpa setup database wajib untuk demo visual.
