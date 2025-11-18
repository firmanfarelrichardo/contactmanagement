# PHP Contact Management System

Sistem manajemen kontak berbasis web yang modern, aman, dan responsif. Aplikasi ini dibangun menggunakan **PHP Native (8.x)** untuk backend dan **Tailwind CSS** untuk antarmuka pengguna, menerapkan prinsip *Clean Code* dan keamanan standar industri.

Proyek ini dikembangkan sebagai bagian dari Tugas Akhir Praktikum Pemrograman Web (Modul 4).

## Fitur Unggulan

### 🛡️ Keamanan & Backend
* **Secure Authentication:** Sistem Login & Register menggunakan `password_hash()` (Bcrypt) dan proteksi *Session Fixation* (`session_regenerate_id`).
* **Database Security:** Menggunakan **PDO Prepared Statements** sepenuhnya untuk mencegah serangan *SQL Injection*.
* **Data Sanitization:** Perlindungan terhadap *XSS (Cross-Site Scripting)* pada setiap output data.
* **CRUD Operations:** Kemampuan penuh untuk Menambah, Membaca, Mengedit, dan Menghapus kontak.
* **File Handling Logic:**
    * Validasi tipe file (JPG, PNG, HEIC) dan ukuran file (Max 5MB).
    * Penanganan khusus format **HEIC** (menampilkan badge indikator).
    * Pembersihan otomatis file foto lama saat dihapus atau diperbarui (*Garbage Collection*).

### Antarmuka (UI/UX)
* **Modern Design:** Menggunakan framework Utility-First **Tailwind CSS**.
* **Responsive:** Tampilan optimal di perangkat desktop dan mobile.
* **Smart Fallback:** Jika kontak tidak memiliki foto atau foto rusak, sistem otomatis menampilkan avatar inisial berwarna menggunakan API UI-Avatars.

---

## Galeri Aplikasi

Berikut adalah tampilan antarmuka dari sistem yang telah dibangun:

### 1. Dashboard Utama
Halaman pusat untuk melihat daftar kontak dengan tata letak tabel yang rapi.
![Dashboard Utama](screenshot/home.png)

### 2. Autentikasi Pengguna
Halaman Login dan Registrasi dengan validasi form dan pesan notifikasi interaktif.

| Halaman Login | Halaman Registrasi |
| :---: | :---: |
| ![Login Page](screenshot/login.png) | ![Register Page](screenshot/register.png) |

### 3. Manajemen Data (CRUD)
Formulir untuk menambah dan memperbarui data kontak, lengkap dengan fitur pratinjau (preview) status file.

| Tambah Kontak | Edit Kontak |
| :---: | :---: |
| ![Tambah Kontak](screenshot/addcontact.png) | ![Edit Kontak](screenshot/editcontact.png) |

---

## Teknologi yang Digunakan

* **Bahasa Pemrograman:** PHP 8+
* **Database:** MySQL 
* **Frontend Styling:** Tailwind CSS (via CDN)
* **Font:** Inter (Google Fonts)
* **Server:** Apache/Nginx (Laragon)

---

## Struktur Folder

Struktur proyek disusun menggunakan pola pendekatan MVC sederhana untuk memisahkan logika dan tampilan.

```text
contact-management-system/
├── actions/                # (CONTROLLER) Logika pemrosesan data
│   ├── auth/               # Logika Login, Register, Logout
│   └── contacts/           # Logika Simpan, Update, Hapus (+ Upload Handler)
├── config/                 # (CONFIGURATION) Konfigurasi database
│   └── database.php        # Koneksi PDO ke MySQL
├── public/                 # (ASSETS) File statis yang dapat diakses publik
│   └── uploads/            # Tempat penyimpanan foto profil user
├── views/                  # (VIEW) Tampilan antarmuka HTML
│   ├── auth/               # Form Login & Register
│   └── contacts/           # Form Tambah & Edit Kontak
├── screenshot/             # Dokumentasi gambar aplikasi
├── querydb.sql             # Skema database untuk import
├── index.php               # Halaman Dashboard & Entry Point
└── README.md               # Dokumentasi Proyek