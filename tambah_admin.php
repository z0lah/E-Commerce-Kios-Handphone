<?php
require("header.php");
if (isset( $_SESSION['status']) == "admin") {
echo '
<div class="container">
<h2 class="form-signin-heading" align="center">Masukan data Admin baru</h2><br />
<form method="post" action="tambahadmin.php">
    <input class="form-control" type="text" name="user" placeholder="Username">
    <input class="form-control" type="password" name="pass" placeholder="Password">
    <button class="btn btn-block btn-primary" type="submit">Tambahkan</button>
</form>';
}
else {
    echo "Hanya admin yang berhak menambahkan admin baru!";
}
require("footer.php");
?>