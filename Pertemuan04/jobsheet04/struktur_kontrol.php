<?php 
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf : A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
        echo "Nilai huruf : B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
        echo "Nilai huruf : C";
    } elseif ($nilaiNumerik < 70) {
        echo "Nilai huruf : D";
    }
    echo "<br>";

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

    echo "<br>";

    $jumlahLahan = 10;
    $tanamanPerlahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++) { 
        $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
    }

    echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

    echo "<br>";
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "Total skor ujian adalah: $totalSkor";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60) {
            echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }

    echo "<h2>Soal 1: Menghitung Total Nilai Siswa</h2>";

    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

    sort($nilaiSiswa);

    $nilaiYangDigunakan = array_slice($nilaiSiswa, 2, 6);

    $totalNilai = array_sum($nilaiYangDigunakan);

    echo "Daftar nilai awal: " . implode(", ", [85, 92, 78, 64, 90, 75, 88, 79, 70, 96]) . "<br>";
    echo "Nilai setelah diurutkan: " . implode(", ", $nilaiSiswa) . "<br>";
    echo "Nilai yang digunakan (setelah 2 terendah & 2 tertinggi dibuang): " . implode(", ", $nilaiYangDigunakan) . "<br>";
    echo "Total nilai yang akan digunakan adalah: $totalNilai";

    echo "<h2>Soal 2: Menghitung Harga Setelah Diskon</h2>";

    $hargaAwal = 120000;
    $persentaseDiskon = 20;
    $syaratDiskon = 100000;

    echo "Harga awal produk: Rp " . number_format($hargaAwal) . "<br>";

    if ($hargaAwal > $syaratDiskon) {
        $jumlahDiskon = $hargaAwal * ($persentaseDiskon / 100);

        $hargaAkhir = $hargaAwal - $jumlahDiskon;

        echo "Anda mendapatkan diskon sebesar $persentaseDiskon% (Rp " . number_format($jumlahDiskon) . ")<br>";
        echo "Harga yang harus dibayar adalah: Rp " . number_format($hargaAkhir) ;
    } else {
        echo "Harga yang harus dibayar adalah: Rp " . number_format($hargaAwal) ;
    }


echo "<h2>Soal 3: Cek Hadiah Pemain Game</h2>";

/**
 * Fungsi untuk memeriksa skor pemain dan menampilkan hasilnya.
 * @param int $skorPemain Skor yang akan diperiksa.
 */
function cekSkorPemain($skorPemain) {
    $batasHadiah = 500;
    
    echo "Total skor pemain adalah: $skorPemain<br>";

    if ($skorPemain > $batasHadiah) {
        $jawaban = "YA";
    } else {
        $jawaban = "TIDAK";
    }
    
    echo "Apakah pemain mendapatkan hadiah tambahan? $jawaban";
}

    echo "<b>--- Contoh 1 ---</b><br>";
    cekSkorPemain(650);

    echo "<br><br>";

    echo "<b>--- Contoh 2 ---</b><br>";
    cekSkorPemain(480);

?>