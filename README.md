# Website Media Pembelajaran & Kuis Interaktif Komputer Dasar

Project website ini dikembangkan sebagai bagian dari tugas mata kuliah (awal semester) untuk membangun sistem media pembelajaran berbasis web yang dilengkapi dengan kuis interaktif serta sistem manajemen konten sederhana.

## 🚀 Fitur Utama
* **Halaman Materi Komputer Dasar**: Menyediakan berbagai modul dan materi pembelajaran seputar dasar-dasar ilmu komputer.
* **Kuis Interaktif**: Pengguna (mahasiswa/siswa) dapat mengerjakan kuis setelah mempelajari materi untuk menguji pemahaman.
* **Autentikasi (Login User & Admin)**: 
  * **User/Siswa**: Dapat melakukan registrasi/login untuk mengakses materi dan mengerjakan kuis interaktif.
  * **Admin**: Memiliki hak akses khusus untuk mengelola sistem.
* **Panel Admin (CRUD Kuis)**: Admin dapat melakukan penambahan (*add*) serta penghapusan (*delete*) topik atau soal kuis secara dinamis.

---

## 🛠️ Teknologi yang Digunakan
* **Front-end**: HTML, CSS, JavaScript
* **Back-end**: PHP
* **Database**: MySQL

---

## 📋 Kebutuhan Software (Pilih salah satu)
* WAMP Server
* XAMPP Server
* MAMP Server
* LAMP Server

---

## ⚙️ Langkah-Langkah Instalasi

1. Download atau *clone* repository ini, lalu ekstrak file ZIP ke dalam direktori local server Anda (contoh untuk WAMP: `c:/wamp/www/` atau XAMPP: `c:/xampp/htdocs/`).
2. **Konfigurasi Database**:
   * Buka browser dan akses `phpmyadmin` (`http://localhost/phpmyadmin`).
   * Buat database baru dengan nama `quiz_new`.
   * Pilih database tersebut, lalu lakukan *Import* file SQL (`quiz_new.sql`) yang berada di dalam folder *database* dari project yang telah diunduh.
3. Jalankan project di browser Anda dengan memasukkan URL:
   * **Halaman Utama / User**: `http://localhost/Online_exam_New/`
   * **Halaman Login Admin**: `http://localhost/Online_exam_New/admin`

---

## 🔑 Detail Login Admin
* **Login ID / Email**: `admin@admin.com` *(atau sesuaikan dengan database)*
* **Password**: *(Gunakan kredensial default yang tersedia pada database)*
