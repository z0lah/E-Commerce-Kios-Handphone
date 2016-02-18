<?php 
require('header.php');
$query = mysql_query('SELECT * FROM cs');
echo ' <div class="container">
			<h3 align="center">Pesan Masuk</h3>
		<div class="well">';
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
							$lihat["email"] .' || '.
							$lihat["waktu"].'
						</div>
					</div>';
			}
echo '		</div>
		</div>
		</div>';


require('footer.php');
?>