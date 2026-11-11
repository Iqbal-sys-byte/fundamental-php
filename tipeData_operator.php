<?php
$nama = 'Muhammad Iqbal Qaulan Hanif';
$nilai = 90;
$kehadiran = 85;
$kelas = 'XII RPL 1';

if ($nilai > 100 || $nilai < 0) {
    echo "Peringatan: Nilai tidak valid (di luar rentang 0-100).";
    exit;
}

if ($kehadiran > 100 || $kehadiran < 0) {
    echo "Peringatan: Persentase kehadiran tidak valid.";
    exit;
}

$status = ($nilai >= 75 && $kehadiran >= 80) ? 'Lulus' : 'Tidak Lulus';
$predikat = $status === 'Lulus' ? ($nilai >= 90 ? 'A' : 'B') : 'C';

echo "=== Sistem Kelulusan Siswa ===\n";
echo "Nama : " . $nama . "\n";
echo "Nilai : " . $nilai . "\n";
echo "Kehadiran : " . $kehadiran . "%\n";
echo "Kelas : " . $kelas . "\n";
echo "Status : " . $status . "\n";
echo "Predikat : " . $predikat . "\n";
