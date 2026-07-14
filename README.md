## Kader+ API (Backend)

Repository ini berisi backend API untuk aplikasi **Kader+**, sebuah sistem informasi posyandu digital yang dirancang untuk membantu **Kader** di lapangan dan **Admin (Puskesmas/Bidan)** dalam mengelola data Posyandu, Kader, serta Pasien (Balita & Ibu Hamil).

---

## Fitur Utama (Kebutuhan Sistem)
*   **Multi-Aktor:** Mendukung akses untuk Admin Puskesmas/Bidan (Super Admin) dan Kader Posyandu.
*   **Arsitektur Relasional:** Integrasi penuh antar tabel Posyandu, Kader, dan Pasien (Balita & Ibu Hamil).
*   **Endpoints API Siap Pakai:** Menyediakan jalur pengiriman data (POST) dan pengambilan data (GET).

---

## Struktur Database (ERD)
Database dirancang menggunakan **SQLite** dengan relasi sebagai berikut:
1.  **Posyandu** (`One-to-Many`) -> **Kader** (1 Posyandu memiliki banyak kader).
2.  **Posyandu** (`One-to-Many`) -> **Pasien** (1 Posyandu memiliki banyak pasien Balita/Ibu Hamil).

---

## Daftar Endpoints API

| Entitas | Method | Endpoint | Fungsi |
| :--- | :--- | :--- | :--- |
| **Posyandu** | `GET` | `/api/posyandu` | Menampilkan seluruh data posyandu |
| | `POST` | `/api/posyandu` | Menambahkan posyandu baru |
| **Kader** | `GET` | `/api/kader` | Menampilkan data kader & posyandunya |
| | `POST` | `/api/kader` | Mendaftarkan kader baru |
| **Pasien** | `GET` | `/api/pasien` | Menampilkan data pasien (Balita & Ibu Hamil) |
| | `POST` | `/api/pasien` | Menambahkan pasien baru |

---

## Teknologi yang Digunakan
*   **Framework:** Laravel (v11)
*   **Local Server:** Laravel Herd (macOS)
*   **Database:** SQLite
*   **API Testing:** Postman
