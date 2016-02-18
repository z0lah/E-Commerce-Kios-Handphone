<?php
require("header.php");
$id = $_GET['id'];
$hps = mysql_query('DELETE FROM produk WHERE produk_id="'.$id.'"');
if ($hps) {
    header('location:atur_produk.php');
} else {
    echo 'gagal';
}
require("footer.php");
?>