<?php 
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;
    
    echo "Hasil penjumlahan :  {$hasilTambah} <br>";
    echo "Hasil pengurangan :  {$hasilKurang} <br>";
    echo "Hasil perkalian   :   {$hasilKali} <br>";
    echo "Hasil pembagian   :   {$hasilBagi} <br>";
    echo "Hasil sisa bagi   :   {$sisaBagi} <br>";
    echo "Hasil pangkat     :   {$pangkat} <br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "<br>";
    echo "Hasil sama :  {$hasilSama} <br>";
    echo "Hasil tidak sama :  {$hasilTidakSama} <br>";
    echo "Hasil lebih kecil   :   {$hasilLebihKecil} <br>";
    echo "Hasil lebih besar   :   {$hasilLebihBesar} <br>";
    echo "Hasil lebih kecil sama   :   {$hasilLebihKecilSama} <br>";
    echo "Hasil lebih besar sama     :   {$hasilLebihBesarSama} <br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "<br>";
    echo "Hasil AND :  {$hasilAnd} <br>";
    echo "Hasil OR :  {$hasilOr} <br>";
    echo "Hasil NOT A   :   {$hasilNotA} <br>";
    echo "Hasil NOT B   :   {$hasilNotB} <br>";

    $op = $a += $b;
    $op1 = $a -= $b;
    $op2 = $a *= $b;
    $op3 = $a /= $b;
    $op4 = $a %= $b;

    echo "<br>";
    echo "Hasil Operasi 1   :  {$op} <br>";
    echo "Hasil Operasi 2   :  {$op1} <br>";
    echo "Hasil Operasi 3   :   {$op2} <br>";
    echo "Hasil Operasi 4   :   {$op3} <br>";
    echo "Hasil Operasi 5   :   {$op4} <br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "<br>";
    echo "Hasil identik   :  {$hasilIdentik} <br>";
    echo "Hasil tidak identik   :  {$hasilTidakIdentik} <br>";

    echo "<br>";
    $total_kursi = 45;
    $kursi_terisi = 28;

    $kursi_kosong = $total_kursi - $kursi_terisi;

    $persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

    echo "Total kursi di restoran : " . $total_kursi . "<br>";
    echo "Kursi yang terisi : " . $kursi_terisi . "<br>";
    echo "Kursi yang masih kosong : " . $kursi_kosong . "<br>";

    echo "Persentase kursi kosong : " . number_format($persentase_kosong, 2) . "%";

?>