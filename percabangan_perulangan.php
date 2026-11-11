<?php
$materi_pokok = ['Variabel', 'Tipe Data', 'Percabangan', 'Fungsi Dasar'];
echo "Daftar Topik Dipelajari:\n";
foreach ($materi_pokok as $index => $topik) {
    echo ($index + 1) . ". " . $topik . " [Selesai]\n";
}
