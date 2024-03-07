<?php
$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

// Daftar Harga
$hargaTV = 4200000;
$hargaKulkas = 3100000;
$hargaMesin = 3800000;

//hitung total
if ($produk == "tv"){
    $total_harga = $jumlah * $hargaTV;
} elseif ($produk == "kulkas"){
    $total_harga = $hargaKulkas * $jumlah;
} elseif ($produk == "mesin_cuci"){
    $total_harga = $jumlah * $hargaMesin;
} else {
    $total_harga = "Pilihan Tidak ada ";
}

echo "<h2> Struk Pembelian</h2> <br>";
echo "Nama Customer: $customer <br>";
echo "Produk Pilahan: $produk <br>";
echo "Jumlah: $jumlah <br>";
echo "Total Harga: RP.  $total_harga <br>";



?>