<?php

/**
  proses menambah produk
 */
require('header.php');

$nama_produk = $_POST['nama'];
$produk_merk = $_POST['merk'];
$produk_type = $_POST['type'];
$jenis_produk = $_POST['jenis'];
$kondisi_produk = $_POST['kondisi'];
$stock_produk = $_POST['stock'];
$harga_produk = $_POST['harga'];
$detail_produk = $_POST['detail'];

$nama_baru = $nama_produk;
$nama = str_replace(' ', '-', $nama_baru);

$gambar = $_FILES['gambar']['name'];
move_uploaded_file($_FILES['gambar']['tmp_name'], "produk/gambar/".$_FILES['gambar']['name']);

$input = mysql_query("INSERT INTO produk VALUES('','$nama','$produk_merk', '$produk_type', '$gambar', '$jenis_produk','$kondisi_produk','$stock_produk','$harga_produk','$detail_produk')");


if ($input) {  
$tpl_file = "tpl.txt"; 
$tpl_path = "tpl/";
$produk_path = "produk/";
$placeholders = array("{ID}");
$data = $nama;

$tpl = file_get_contents($tpl_path.$tpl_file);
$new_produk_file = str_replace($placeholders, $data, $tpl); 
$new_file_name = $nama.".php"; 

$fp = fopen($produk_path.$new_file_name, "w");
fwrite($fp, $new_produk_file);
fclose($fp);
header( "Location: produk/".$nama .".php" );
            exit;
}

else {
    echo "<script>alert('Gambar". $fileName . "Gagal!');history.go(-1);</script>";
}

?>