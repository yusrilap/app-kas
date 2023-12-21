# App - Kas

Aplikasi pendataan uang kas dibuat dengan Framework Laravel 9. <br>

### Prasyarat

Tools:

-   Composer (https://getcomposer.org/)
-   PHP ^8.1.x
-   MySQL ^10.6
-   XAMPP

### Fitur

-   CRUD Data Siswa
-   CRUD Data Kelas
-   CRUD Data Jurusan
-   CRUD Data Transaksi Uang Kas
-   CRUD Data Administrator
-   Laporan


### Instalasi

clone project atau download

```bash
  git clone https://github.com/yusrilap/app-kas.git
  cd app-kas
  npm install
  composer update
  cp .env.example .env  
```

Buka `.env` dan ganti nama DB_DATABASE

```bash
  DB_PORT=3306
  DB_DATABASE=db_app_kas
  DB_USERNAME=root
  DB_PASSWORD=
```

Buka localhost dan buat database dengan nama 

```bash
  db_app_kas
```

Install website di terminal vscode

```bash
  php artisan key:generate
  php artisan migrate --seed
```

Jalankan website

```bash
  php artisan serve
```

-   Akses ke halaman

```
http://127.0.0.1:8000
```

---

-   User default aplikasi untuk login

##### Administrator

```
Email       : admin@mail.com
Password    : secret
```
