<?php 

$nilaiHarian = 68;
$nilaiUTS = 80;
$nilaiAkhir = 80;

$apakahNilaiHarianBagus = $nilaiHarian >= 70;
$apakahNilaiUTSBagus = $nilaiUTS >= 80;
$apakahNilaiAkhirBagus = $nilaiAkhir >= 80;

$hasil1 = $apakahNilaiHarianBagus && $apakahNilaiUTSBagus && $apakahNilaiAkhirBagus;
var_dump($hasil1);
echo "NILAI AND : mengapa nilainya false karena Nilai Hariannya di bawah KKM sedangkan nilai KKM nya 70 <br>";

$hasil2 = $apakahNilaiHarianBagus || $apakahNilaiUTSBagus || $apakahNilaiAkhirBagus;
var_dump($hasil2);
echo "NILAI OR : mengapa nilainya true karena Nilai UTS dan Nilai Akhir Pas KKM ";

?>