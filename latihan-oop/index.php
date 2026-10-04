
<?php
require __DIR__ . '/vendor/autoload.php';

use App\Models\Mahasiswa;
use App\Models\Pengguna;
use App\Models\Admin;
use App\Models\Dosen;

echo "=== DEMO OOP + AUTOLOAD ===\n\n";

// 1) Class dasar: Mahasiswa
$mhs = new Mahasiswa("Andi", 3.6);
echo $mhs->sapa() . "\n";
echo "Status: " . $mhs->statusKelulusan() . "\n\n";

// 2) Inheritance + interface: Admin
$admin = new Admin(
    "Ibu Fitri",
    "fitri@unsia.ac.id",
    password_hash("rahasia123", PASSWORD_DEFAULT),
);
$cek = $admin->login("rahasia123");

echo "[LOGIN] " . $admin->nama() . " => " . ($cek ? "berhasil" : "gagal") . "\n";
$admin->hapusData("mahasiswa");
echo "\n";

// 3) Bonus class Dosen
$dosen = new Dosen(
    "Bapak Joko",
    "joko@unsia.ac.id",
    password_hash("sandi-aman", PASSWORD_DEFAULT),
    ["Pemrograman Berbasis Platform", "Rekayasa Perangkat Lunak"],
);

echo $dosen->tampilkanMataKuliah() . "\n";