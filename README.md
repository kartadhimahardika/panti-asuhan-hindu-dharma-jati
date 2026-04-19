# Sistem Informasi Panti Asuhan

## Deskripsi

Project ini merupakan sistem informasi Panti Asuhan Hindu Dharma Jati I berbasis web yang dibangun menggunakan framework Laravel. Sistem ini dikembangkan untuk membantu pengelolaan data panti asuhan serta mempermudah penyampaian informasi kepada masyarakat secara efektif dan terstruktur.

---

## Persyaratan Sistem

Pastikan perangkat telah memenuhi kebutuhan berikut:

- PHP versi 8 atau lebih baru
- Composer
- MySQL atau MariaDB
- Node.js dan NPM
- Git (untuk metode clone repository)

---

## Instalasi dan Menjalankan Project

### 1. Menggunakan Clone GitHub

1. Clone repository:

    ```bash
    https://github.com/kartadhimahardika/panti-asuhan-hindu-dharma-jati.git
    ```

2. Masuk ke folder project:

    ```bash
    cd panti-asuhan-hindu-dharma-jati
    ```

3. Install dependency:

    ```bash
    composer install
    ```

4. Install dependency frontend:

    ```bash
    npm install
    ```

5. Salin file environment:

    ```bash
    cp .env.example .env
    ```

6. Generate application key:

    ```bash
    php artisan key:generate
    ```

7. Konfigurasi database pada file `.env`:

    ```env
    DB_DATABASE=nama_database
    DB_USERNAME=root
    DB_PASSWORD=
    ```

8. Jalankan migrasi database:

    ```bash
    php artisan migrate
    ```

9. (Opsional) Jalankan seeder:

    ```bash
    php artisan db:seed
    ```

10. Jalankan server:

```bash
php artisan serve
```

11. Jalankan frontend:

```bash
npm run dev
```

12. Akses aplikasi melalui browser:

```
http://localhost:8000
```

---

### 2. Menggunakan File ZIP

1. Ekstrak file ZIP project ke dalam folder yang diinginkan

2. Buka terminal pada folder project

3. Install dependency:

    ```bash
    composer install
    ```

4. Install dependency frontend:

    ```bash
    npm install
    ```

5. Salin file environment:

    ```bash
    cp .env.example .env
    ```

6. Generate application key:

    ```bash
    php artisan key:generate
    ```

7. Konfigurasi database pada file `.env`

8. Jalankan migrasi database:

    ```bash
    php artisan migrate
    ```

9. (Opsional) Jalankan seeder:

    ```bash
    php artisan db:seed
    ```

10. Jalankan server:

```bash
php artisan serve
```

11. Jalankan frontend:

```bash
npm run dev
```

---

## Perintah Tambahan

- Membersihkan cache:

    ```bash
    php artisan cache:clear
    ```

- Membersihkan konfigurasi:

    ```bash
    php artisan config:clear
    ```

- Membuat symbolic link storage:

    ```bash
    php artisan storage:link
    ```

---

## Troubleshooting

- Jika terjadi error saat install dependency:

    ```bash
    composer update
    ```

- Jika file `.env` tidak terbaca:
    - Pastikan file `.env` sudah tersedia
    - Jalankan kembali perintah:

        ```bash
        php artisan key:generate
        ```
