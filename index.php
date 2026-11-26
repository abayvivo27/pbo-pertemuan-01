<?php
// LAB 1 - Gaya prosedural vs OOP
// Spesifikasi: class Buku dengan constructor(string $judul, string $penulis, int $tahun)
// dan method info(): string yang memuat judul & tahun.

// 1) Versi prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
    ['judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980],
    ['judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009],
];

echo "=== Versi Prosedural ===\n";
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}

echo "\n=== Versi OOP ===\n";

// 2) Versi OOP
class Buku
{
    public string $judul;
    public string $penulis;
    public int $tahun;

    public function __construct(string $judul, string $penulis, int $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    public function info(): string
    {
        return "{$this->judul} - {$this->penulis} ({$this->tahun})";
    }
}

// Buat 3 object Buku lalu tampilkan info()-nya
$daftarBuku = [
    new Buku('Laskar Pelangi', 'Andrea Hirata', 2005),
    new Buku('Bumi Manusia', 'Pramoedya Ananta Toer', 1980),
    new Buku('Negeri 5 Menara', 'Ahmad Fuadi', 2009),
];

foreach ($daftarBuku as $itemBuku) {
    echo $itemBuku->info() . "\n";
}
