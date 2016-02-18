<?php
echo ' 
<dv class="container" align="center"><p class="text-center"> &copy;2015</p>';

if (isset( $_SESSION['status']) == "admin") {
    echo '<p class="text-center"><a href="cpanel.php">Control Panel</a>
    <br>
    <a href="logout.php">Logout</a></p>';
    }

echo '</div>

		<div class="modal fade" id="login" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header"  align="center">
						<button type="button" class="close" data-dismiss="modal">x</button>
						<h3>Silahkan Login</h3>
					</div>
					<div class="modal-body">
						<form method="post" action="" name="login_form">
						  <p><input type="text" class="form-control" name="user" placeholder="Username" autofocus required></p>
						  <p><input type="password" class="form-control" name="pass" placeholder="Password" required></p>
						  <p><button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Login</button></p>
						</form>
					</div>
					 
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="hubungi" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header"  align="center">
						<button type="button" class="close" data-dismiss="modal">x</button>
						<h3>Silahkan tulis pesan anda</h3>
					</div>
					<div class="modal-body">
						<form method="post" action="hubungi.php">
						  <p><input type="text" class="form-control" name="nama" placeholder="Nama" autofocus required></p>
						  <p><input type="email" class="form-control" name="email" placeholder="Email" autofocus required></p>
						  <p><input type="text" class="form-control" name="pesan" placeholder="Pesan" required></p>
						  <p><button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Login</button></p>
						</form>
					</div>
					 
				</div>
			</div>
		</div>

	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/carousel.js"></script>
	
</body> </html>';

if ( isset($_POST['login'])) {
    $username = strip_tags(mysql_real_escape_string($_POST['user']));
    $password = md5 (strip_tags(mysql_real_escape_string($_POST['pass'])));
    
    $user1 = mysql_query( "SELECT * FROM admin WHERE `username` = '{$username}'" );
        $user2 = mysql_fetch_array( $user1 );
        if ( $password !== $user2["password"] ){
            echo "<script>alert('Username atau Password salah!');history.go(-1);</script>";
        }
        else {
            $_SESSION['status'] = "admin";
			echo "<script>alert('Login berhasil!');window.location='cpanel.php';</script>";
            exit;
        }
}

?>