<?php
echo "Nama : Asdi Febriawan Nugroho <br />";
echo "Kelas : X RPL 1 <br />";
$nharian = (90*30/100);
echo "Nilai Harian : $nharian <br />";
$nuts = (76*30/100);
echo "Nilai UTS : $nuts <br />";
$nuas = (89*40/100);
echo "Nilai UAS : $nuas <br />";
$nakhir = $nharian + $nuts + $nuas;
echo "Nilai Akhir : $nakhir <br />";

if($nakhir >= 90 && $nakhir <= 100){
    echo "Predikat Nilai = A+";
}else if ($nakhir >= 85 && $nakhir <= 89){
    echo "Predikat Nilai = A";
}else if ($nakhir >= 80 && $nakhir <= 84){
    echo "Predikat Nilai = B+";
}else if ($nakhir >= 76 && $nakhir <= 79){
    echo "Predikat Nilai = B";
}else if ($nakhir >= 60 && $nakhir <= 75){
    echo "Predikat Nilai = C";
}else if ($nakhir >= 40 && $nakhir <= 59){
    echo "Predikat Nilai = D";
}else if ($nakhir >= 0 && $nakhir <= 39){
    echo "Predikat Nilai = E";
}else{
    echo "Anda Tidak Mendapatkan Predikat";
}




?>