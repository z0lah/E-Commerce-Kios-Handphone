<?php

/**
  melakukan koneksi ke database
 */

$host = "localhost";
$user = "root";
$pass = "";
$db = "project";

$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Gagal! '); 
mysql_select_db($db);

?>