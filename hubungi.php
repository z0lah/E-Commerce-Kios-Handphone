<?php
require("koneksi.php");
$nama = $_POST["nama"];
$pesan = $_POST["pesan"];
$email = $_POST["email"];
$simpan = mysql_query("INSERT INTO cs VALUES('', '$nama', '$email', '$pesan', now())");
if ($simpan) {
	echo "Pesan terkirim";
	header("location:index.php");
}
else {
	echo "gagal";
}
?>