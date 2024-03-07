
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<Legend>Belanja Online</Legend>
		<div class="row">
			<div class="col-12">
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                <label class="col-4">Produk Pilihan</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="radio1_0" type="radio" class="custom-control-input" value="tv"> 
                        <label for="radio1_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="radio1_1" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="radio1_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="radio1_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                        <label for="radio1_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="jumlah">Jumlah Beli</label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" type="number" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">kirim</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
} elseif ($produk == "mesin cuci"){
    $total_harga = $jumlah * $hargaMesin;
} else {
    $total_harga = "0 ";
}

echo "<h2> Struk Pembelian</h2> <br>";
echo "Nama Customer: $customer <br>";
echo "Produk Pilahan: $produk <br>";
echo "Jumlah: $jumlah <br>";
echo "Total Harga: RP.  $total_harga <br>";
}


?>
