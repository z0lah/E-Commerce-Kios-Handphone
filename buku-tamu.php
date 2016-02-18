<?php
require("header.php");
$query = mysql_query('SELECT * FROM gb');

echo '	<div class="container">
			<h3 align="center">Buku Tamu</h3>
		<div class="well">
				<a class="btn btn-block btn-primary" data-toggle="modal" href="#pesan">Tulis pesan</a><br>
			';
				while($lihat=mysql_fetch_array($query)){
					echo '
					<div class="panel panel-default">
						<div class="panel-heading">'.
							$lihat["nama"] .'
						</div>
						
						<div class="panel-content">'.
							$lihat["pesan"].'
						</div>
						
						<div class="panel-content"><br>'.
							$lihat["tgl"].'
						</div>
					</div>';
			}
echo '		</div>
		</div>
		</div>';

echo '<div class="modal fade" id="pesan" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header"  align="center">
						<button type="button" class="close" data-dismiss="modal">x</button>
						<h3>Silahkan tulis pesan anda</h3>
					</div>
					<div class="modal-body">
						<form method="post" action="gb-kirim.php">
						  <p><input type="text" class="form-control" name="nama" placeholder="Nama" autofocus required></p>
						  <p><input type="text" class="form-control" name="pesan" placeholder="Pesan" required></p>
						  <p><button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Kirim</button></p>
						</form>
					</div>
					 
				</div>
			</div>
		</div>';

require("footer.php");