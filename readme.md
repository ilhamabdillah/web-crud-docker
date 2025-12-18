# 📦 Aplikasi Web Dinamis CRUD Mahasiswa Berbasis Docker

## 👥 Identitas Kelompok
**Kelompok 2 – Web Application Container**  
**Judul Proyek:** Aplikasi Web Dinamis Berbasis Docker

---

## 📖 Deskripsi
Proyek ini merupakan aplikasi web dinamis sederhana berbasis **PHP dan MySQL** yang dijalankan menggunakan **Docker**. Aplikasi memiliki fitur **CRUD (Create, Read, Update, Delete)** untuk mengelola data mahasiswa. Docker digunakan agar aplikasi dapat dijalankan secara konsisten tanpa bergantung pada konfigurasi sistem operasi.

---

## 🎯 Tujuan
- Memahami konsep container menggunakan Docker
- Menjalankan aplikasi web dinamis di dalam container
- Mengimplementasikan fitur CRUD
- Menggunakan Dockerfile dan Docker Compose

---

## 🛠️ Teknologi yang Digunakan
- PHP 8.x
- Apache Web Server
- MySQL 8.0
- Docker
- Docker Compose

---

## 📂 Struktur Folder Proyek
```
project/
│── Dockerfile
│── docker-compose.yml
│── config.php
│── index.php
│── tambah.php
│── edit.php
│── hapus.php
│── style.css
```

---

## 🐳 Dockerfile
Dockerfile digunakan untuk membuat image web server PHP + Apache.

```dockerfile
FROM php:8.2-apache
RUN docker-php-ext-install mysqli
COPY . /var/www/html/
```

---

## ⚙️ Docker Compose
Docker Compose digunakan untuk menjalankan dua container: **web** dan **database**.

```yaml
version: '3.8'

services:
  web:
    build: .
    ports:
      - "8080:80"
    depends_on:
      - db

  db:
    image: mysql:8.0
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: db_mahasiswa
    volumes:
      - db_data:/var/lib/mysql

volumes:
  db_data:
```

---

## 🗄️ Database
Nama database: **db_mahasiswa**  
Nama tabel: **mahasiswa**

```sql
CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  nim VARCHAR(20)
);
```

Database menggunakan **Docker Volume** agar data tetap tersimpan walaupun container dihentikan.

---

## 🔑 Konfigurasi Database (`config.php`)
```php
<?php
$koneksi = mysqli_connect("db", "root", "root", "db_mahasiswa");
if (!$koneksi) {
  die("Koneksi database gagal");
}
?>
```

---

## 🔄 Fitur CRUD
- **Create** : Menambahkan data mahasiswa
- **Read** : Menampilkan data mahasiswa
- **Update** : Mengubah data mahasiswa
- **Delete** : Menghapus data mahasiswa

---

## 🌐 Cara Menjalankan Aplikasi
1. Jalankan Docker Desktop
2. Buka terminal di folder project
3. Jalankan perintah:
```bash
docker compose up -d --build
```
4. Buka browser dan akses:
```
http://localhost:8080
```

---

## 🎨 Tampilan Aplikasi
Aplikasi menggunakan CSS sederhana agar tampilan lebih rapi dan mudah digunakan.

---

## ✅ Kesimpulan
Aplikasi web dinamis CRUD berhasil dijalankan menggunakan Docker. Dengan Docker, aplikasi dapat berjalan secara konsisten dan terstruktur. Proyek ini telah memenuhi kriteria tugas yaitu web dinamis, berbasis Docker, dan memiliki fitur CRUD.

---

## 📌 Penutup
Proyek ini dibuat untuk memenuhi tugas kelompok **Web Application Container**.

---

✨ **Aplikasi siap digunakan dan dipresentasikan** ✨

