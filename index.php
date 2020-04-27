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
    
    <h2>Penjualan</h2>
    <form action="proses.php" method="post">
      <table>
        <tr>
          <td>Nama Barang</td>
          <td>:</td>
          <td> <input type="text" name="nama_barang" value=""> </td>
        </tr>
        <tr>
          <td>Harga Barang</td>
          <td>:</td>
          <td> <input type="number" name="harga_barang" value=""> </td>
        </tr>
        <tr>
          <td>Jumlah Barang</td>
          <td>:</td>
          <td> <input type="number" name="jumlah" value=""> </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>
            <input type="submit" name="" value="Proses">
            <input type="reset" name="" value="Reset">
            <br>
            *diskon, jika total +200000
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>