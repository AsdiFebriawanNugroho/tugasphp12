<?php 

$nilaiAbsen = 75;
$nilaiAkhir = 70;

$apakahNilaiAbsenBagus = $nilaiAbsen >= 70;
$apakahNilaiAkhirBagus = $nilaiAkhir >= 66;

$hasil = $apakahNilaiAbsenBagus && $apakahNilaiAkhirBagus;
var_dump($hasil);


?>