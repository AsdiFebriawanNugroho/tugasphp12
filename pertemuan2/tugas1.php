<?php
$barang = 3;
$harga = 150000;
$total = $harga * $barang;
$status = "Proses";

if($total > 100000){
    $total = $harga * $barang - 50000;
}else{
    $total = $harga * $barang;
}



echo "<h1> === Menghitung Pembelian Produk === <br /></h1>";
echo "Nama Barang  : Printer Laserjet 1001 <br />";
echo "Kode Barang : P001 <br />";
echo "Kategori : Elektronik <br />";
echo "Harga Barang : Rp $harga <br />";
echo "Jumlah Barang : $barang <br />";
echo "Total Harga : $total <br />";
if($status == "Proses"){
    echo "Status : <span style='color: yellow;'>$status</span>";
}else if($status == "Sudah Bayar"){
    echo "Status : <span style='color: green;'>$status</span>";
}else{
    echo "Anda Tidak Memiliki Transaksi.";
}

?>