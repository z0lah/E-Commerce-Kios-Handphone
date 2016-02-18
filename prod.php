<?php
require("header.php");

$nama = $_GET['nama'];

$query = mysql_query("SELECT * FROM produk WHERE produk_nama='". $nama ."'");
while ($data=mysql_fetch_array($query)){
echo "
<div class='container'>    
    <div class='panel panel-default>
		<div class='panel-heading text-center'>
			<h3>" . $data['produk_nama'] ."</h3>
		</div>
		<div style='margin:auto;text-align:center;'>
			<img src='gambar/". $data['produk_gambar'] ."'>
		</div>
		<div class='panel-content'>	
			<table class='table'>
			<tr><td>Jenis Produk</td>
				<td> : </td>
				<td> " . $data['produk_jenis'] ."</td>
			</tr>
			<tr><td>Merk Produk</td>
				<td> : </td>
				<td> " . $data['produk_merk'] ."</td>
			</tr>
			<tr><td>Type Produk</td>
				<td> : </td>
				<td> " . $data['produk_type'] ."</td>
			</tr>
			<tr><td>Kondisi Produk</td>
				<td> : </td>
				<td> " . $data['produk_kondisi'] ." </td>
			</tr>
			<tr><td>Stock Produk</td>
				<td> : </td>
				<td> " . $data['produk_stock'] ." </td>
			</tr>
			<tr><td>Harga Produk</td>
				<td> : </td>
				<td> Rp. " . $data['produk_harga'] ." </td>
			</tr>
			<tr><td>Detail Produk</td>
				<td> : </td>
				<td> " . $data['produk_detail'] ." </td>
			</tr>
			</table>
			<br>
			<a href='#'>Order</a>
		</div>
</div>";
}
require("footer.php");
?>