<?php
require('header.php');
$id = $_GET['id'];
$hps = mysql_query('DELETE FROM admin WHERE id="'.$id.'"');
if ($hps) {
    header('location:hapus-admin.php');
} else {
    echo 'gagal';
}
require("footer.php");
?>