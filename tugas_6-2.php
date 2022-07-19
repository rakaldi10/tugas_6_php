<?php
// Seorang pedagang menjual jambu dengan harga Rp 15.000/kg. 
// Di dalam tokonya terdapat 6 dus dan di setiap dus berisi 5 kg jambu. 
// Dua bekas tempat jambu itu masih bisa dijual lagi dengan harga Rp 2.000/dus. 
// Berapakah uang hasil penjualan seluruh jambu dan dus tersebut?
// buatlah kode php sehingga tampil seperti gambar dibawah ini 
// dan isilah tanda tanya dengan hasil perhitungan yang dibuat dengan 
// bahasa pemrograman PHP.
$jual = 15000;
$jumlahDus = 6;
$isiPerDus = 5;
$tempatDus = 2000;
$totalDus = 2000 * 2;
$banyakJambu = 6 * 5;
$hasilPenjualan = $banyakJambu * $jual;
$hasil = $hasilPenjualan + $totalDus;
echo "Harga jambu = Rp $jual / Kg<br>";
echo "Harga Kardus = Rp $tempatDus / pcs<br>";
echo "Total Penjualan (Dus dan Jambu) = Rp $hasil<br>";
