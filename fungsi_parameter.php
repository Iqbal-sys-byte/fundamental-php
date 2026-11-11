<?php
function hitungRataRata(int $nilaiTugas, int $nilaiUjian): float {
    return ($nilaiTugas + $nilaiUjian) / 2;
}

function tentukanKelulusan(float $rataRata): string {
    return $rataRata >= 75 ? "Lulus" : "Tidak Lulus";
}

$namaSiswa = 'Muhammad Iqbal Qaulan Hanif';
$rata = hitungRataRata(85, 90);
$status = tentukanKelulusan($rata);

echo "Siswa: $namaSiswa | Rata-rata: $rata | Status: $status";
