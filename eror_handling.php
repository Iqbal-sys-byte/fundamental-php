<?php
function bagiAngka(int $pembilang, int $penyebut): float {
    if ($penyebut === 0) {
        throw new Exception("Kesalahan: Pembagian dengan angka nol tidak diperbolehkan!");
    }
    return $pembilang / $penyebut;
}

try {
    echo "Hasil Pembagian: " . bagiAngka(10, 0) . "\n";
} catch (Exception $e) {
    echo "Peringatan Sistem: " . $e->getMessage() . "\n";
} finally {
    echo "Proses evaluasi pembagian selesai.";
}
