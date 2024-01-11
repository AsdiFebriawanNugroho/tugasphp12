<?php

$nilai = 18;

if(
    $nilai <= 18 && $nilai != 19){
        echo "benar";
}else if ($nilai == 28){
    echo "nilainya adalah 28";
}else{
    echo "salah";
}

for($antrian = 1; $antrian <= 15; $antrian++){
    if($antrian == 3 || $antrian == 4){
        echo "Nomor antrian $antrian Tidak tersedia <br />";
    }else if($antrian == 5 || $antrian == 9){
        echo "Nomor antrian $antrian Sedang ada orang <br />";
    }else{
        echo "Nomor antrian $antrian Tersedia <br />";
    }
}




?>