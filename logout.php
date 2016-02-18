<?php

/**
  logout
 */
session_start();
include( 'koneksi.php' );
if ( isset( $_SESSION['status'] ) == "admin" )
{
unset($_SESSION['status']);
header( "Location: index.php" );
}
else
{
echo "Anda tidak login.";
echo " <a href='index.php'>kembali</a>";
}

?>