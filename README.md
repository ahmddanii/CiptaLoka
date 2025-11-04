# 🪶 CiptaLoka — Marketplace Kerajinan Lokal

> Platform digital berbasis Laravel untuk memfasilitasi penjualan dan pembelian **produk kerajinan tangan lokal**, menghubungkan **pengrajin (penjual)** dengan **konsumen (pembeli)** dalam satu ekosistem modern dan mudah digunakan.

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-38B2AC?logo=tailwindcss)
![License](https://img.shields.io/badge/license-MIT-green)

---

## 🧭 Deskripsi Singkat

**CiptaLoka** adalah marketplace yang berfokus pada pengrajin lokal Indonesia.  
Aplikasi ini memiliki dua tipe pengguna utama:

-   🧵 **Penjual**: dapat menambahkan produk kerajinan, mengelola stok, dan melihat pesanan masuk.
-   🛍️ **Pembeli**: dapat menelusuri produk, menambahkan ke keranjang, dan melakukan pemesanan.

Dirancang menggunakan **Laravel 10**, **Blade Template**, dan **MySQL** untuk performa cepat serta struktur database yang efisien.

---

## ⚙️ Fitur Utama

| Modul                    | Fitur                                               |
| ------------------------ | --------------------------------------------------- |
| **Autentikasi**          | Login, Register, dan Role (Admin, Penjual, Pembeli) |
| **Produk**               | CRUD Produk, Upload Gambar, Kategori, dan Rating    |
| **Marketplace**          | List Produk, Detail Produk, dan Pencarian           |
| **Keranjang & Checkout** | Tambah ke Keranjang, Total Belanja, Pesanan         |
| **Dashboard Penjual**    | Statistik Produk & Penjualan                        |
| **Review Produk**        | Pembeli dapat memberikan rating & komentar          |

---

## 🗂️ Struktur Database

**Tabel utama:**

-   `users` → data pengguna (role: admin, penjual, pembeli)
-   `categories` → kategori produk
-   `products` → data produk dan foto
-   `carts` → keranjang belanja
-   `orders` & `order_items` → data transaksi
-   `reviews` → ulasan & rating produk

---

## 🧰 Tech Stack

| Layer               | Teknologi                                  |
| ------------------- | ------------------------------------------ |
| **Backend**         | Laravel 10 (PHP 8.2)                       |
| **Frontend**        | Blade Template + TailwindCSS               |
| **Database**        | MySQL                                      |
| **Auth & Role**     | Laravel Breeze + Spatie Laravel Permission |
| **Environment**     | Laragon (Localhost), Node.js v20+          |
| **Version Control** | Git & GitHub                               |

---