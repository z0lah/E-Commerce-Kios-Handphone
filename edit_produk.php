<?php
require("header.php");
if (isset( $_SESSION['status']) == "admin") {
$id = $_GET["id"];
$query = mysql_query(' SELECT * FROM produk WHERE produk_id="'.$id.'"');
$produk = mysql_fetch_array($query);
echo '
<div class="container">
<h2 class="form-signin-heading" align="center">Masukan data produk yang akan di tambahkan</h2>

<form action="tambah_produk_proses.php" method="post" enctype="multipart/form-data">

<div class="form-">
    <label>Nama Produk</label>
    <input class="form-control" type="text" maxlength="20" name="nama" autofocus required value="'.$produk["produk_nama"].'">
</div>

<div class="form-group">
    <label>Merk Produk</label>
    <input class="form-control" type="text" maxlength="20" name="merk" required value="'.$produk["produk_merk"].'">
</div>

<div class="form-group">
    Type Produk
    <input class="form-control" type="text" maxlength="20" name="type" required value="'.$produk["produk_type"].'">
</div>

<div class="form-group">
    Jenis Produk</td>
        <select class="form-control"  name="jenis">
        <option value="HP">HP</option>
        <option value="Aksesoris">Aksesoris</option> 
        </select>
</div>

<div class="form-group">
    Kondisi Produk
    <select class="form-control" name="kondisi">
        <option value="Baru">Baru</option>
        <option value="Bekas">Bekas</option>
        </select>
</div>

<div class="form-group">
    Stock Produk
    <input class="form-control"  class="form-control"  type="number" maxlength="20" name="stock" required value="'.$produk["produk_stock"].'">
</div>

<div class="form-group">
    Harga Produk
</div>

<div class="form-group">
    <input class="form-control"  type="number" maxlength="20" name="harga" required value="'.$produk["produk_harga"].'">
</div>

<div class="form-group">
    Detail Produk
    <TEXTAREA class="form-control"  NAME="detail" 
        ROWS="7" COLS="45" placeholder="Detail Produk">'.$produk["produk_detail"].'</TEXTAREA>
</div>

<div class="form-group">
    <button class="btn btn-lg btn-primary btn-block" type="submit" value="Simpan">Simpan</button>
</form>
</div>';
}
else {
   echo 'Hanya Admin yang berhak menambah produk';
}

require("footer.php");
?>