<?php

/**
  proses menambah admin
 */

require("header.php");
$username = strip_tags( mysql_real_escape_string($_POST['user']));
$password = strip_tags( mysql_real_escape_string($_POST['pass']));
$passwordmd5 = md5($password);

if ( empty( $username ) || empty( $password )) {
    echo "<script>alert('Form harus di isi!');history.go(-1);</script>";
}
    else {
        $userlist = mysql_query( "SELECT * FROM admin WHERE 'username' = '{$username}'");
        
        if (mysql_num_rows( $userlist ) == 1 ) {
            echo "<script>alert('Nama telah digunakan!');history.go(-1);</script>";
        }
        else {
            mysql_query( "INSERT INTO admin VALUES ( '', '$username', '$passwordmd5') ");
            echo "Admin berhasil di tambahkan";
        }
    }
?>