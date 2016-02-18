<?php 
require("header.php");
echo '
<div class="container">
<h2 class="form-signin-heading" align="center">Silahkan Login</h2><br />
<form class="form-signin" role="form" method="post" action="login_proses.php">
    <input type="text" name="user" placeholder="Username" class="form-control" autofocus required>
    <input type="password" name="pass" placeholder="Password" class="form-control" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
</form>
</div>';

require("footer.php");