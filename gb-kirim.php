<?php
require("koneksi.php");
$nama = $_POST["nama"];
$pesan = $_POST["pesan"];

$simpan = mysql_query("INSERT INTO gb VALUES('', '$nama', '$pesan', now())");
if ($simpan) {
	header ("location:buku-tamu.php");
}
else {
	echo "gagal";
}
?>