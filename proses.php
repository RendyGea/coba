<?php
$nama = $_POST['nama_barang'];
$harga = $_POST['harga_barang'];
$jumlah = $_POST['jumlah'];
 
$hitung = $harga * $jumlah;
 
if ($hitung >= 200000) {
  $diskon = 0.05 * $hitung;
}else{
  $diskon = 0;
}
 
$bayar = $hitung - $diskon;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>:Penjualan</title>
    <style media="screen">
      .link{
        font-family: sans-serif;
        color:blue;
      }
    </style>
  </head>
  <body>
    
    <h2>Hasil Proses Penjualan</h2>
    Nama Barang : <?php echo $nama ?><br>
    Harga Barang : <?php echo $harga ?><br>
    Jumlah Beli : <?php echo $jumlah ?><br>
    Total : <?php echo $hitung ?><br>
    Diskon : <?php echo $diskon ?><br>
    Bayar : <?php echo $bayar ?><br><br>
    <a href="index.php"><< Kembali</a>
  </body>
</html>