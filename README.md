# 📰 Laravel News Portal

Sebuah project monolit portal berita untuk seleksi ENT menggunakan **Laravel**, dengan fitur autentikasi dan manajemen post (CRUD).

---

## ✨ Fitur

-   Autentikasi pengguna (register & login)
-   Role-based navbar (misalnya link Dashboard hanya muncul untuk admin)
-   CRUD Post (Create, Read, Update, Delete)
-   Tampilan responsif dengan Blade & Tailwind

---

## ⚙️ Instalasi

1. **Clone repository**

    ```bash
    git clone https://github.com/Glaezz/news-portal.git
    cd repo-name

    ```

2. **Install dependency**

    ```bash
    composer install
    ```

3. **Copy file environment**

    ```bash
    cp .env.example .env
    ```

4. **Generate app key**

    ```bash
    php artisan key:generate
    ```

5. **Atur database** di file `.env`

    ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=portal-berita
     DB_USERNAME=root
     DB_PASSWORD=
    ```

6. **Import file .sql (database)** ke mysql/phpmyadmin lokal

    ```bash
    file sql terdapat di repositori.
    ```

7. **Buat symbolic link storage**

    ```bash
    php artisan storage:link
    ```

---

## 🚀 Menjalankan Project

1. Jalankan server Laravel

    ```bash
    php artisan serve
    ```

    Project akan tersedia di: [http://localhost:8000](http://localhost:8000)

2. Login / register user, atau gunakan akun default dari file `.sql`

---

## 🧑‍💻 Akun Default

```
Email    : admin@gmail.com
Password : admin123
```

---

## 🛠️ Teknologi yang Digunakan

-   [Laravel 12](https://laravel.com/)
-   MySQL
-   TailwindCSS

---

## 📄 Lisensi

Project ini dirilis dengan lisensi MIT.
