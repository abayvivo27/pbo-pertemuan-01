# Lab Sheet Pertemuan 1: Paradigma Pemrograman Berorientasi Objek

## Identitas Mahasiswa
* **Nama:** M. Fitriannur Akbar
* **NIM:** 24.24.031635
* **Program Studi:** Pendidikan Teknologi Informasi
* **Fakultas:** Bahasa Ilmu Pengetahuan dan Teknologi
* **Universitas:** Universitas Muhammadiyah Palangkaraya

## Nama Repositori
`pbo-php-2424031635`

## 3 Perbedaan Gaya Prosedural dan OOP yang Dirasakan
1. **Struktur Data dan Perilaku:** Pada gaya prosedural, data buku disimpan dalam *array asosiatif* dan proses pencetakannya ditulis terpisah di dalam perulangan `foreach`. Pada gaya OOP, data (properti `$judul`, `$penulis`, `$tahun`) dan perilaku (`info()`) dibungkus menjadi satu kesatuan di dalam `class Buku`.
2. **Keamanan dan Kejelasan Tipe Data:** Pada gaya OOP dengan *constructor* bertipe (`string`, `int`) dan *return type* `: string` pada `info()`, kesalahan tipe data atau struktur *key* *array* yang salah ketik (seperti typo `'judul'`) lebih mudah dihindari dibandingkan *array* asosiatif pada gaya prosedural.
3. **Keterbacaan dan Kemudahan Pengembangan:** Saat jumlah data dan logika bertambah (misalnya menambah fitur cek tahun terbit atau format tampilan lain), pemanggilan `$itemBuku->info()` pada OOP terasa lebih terstruktur dan mudah dikembangkan ulang tanpa mengubah kode perulangan utama.
