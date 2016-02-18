<?php
require("header.php");
$query = mysql_query('SELECT * FROM profil WHERE id="1"');
$lihat=mysql_fetch_array($query);

echo '
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Tentang kami</h3>
				</div>
				<div class="panel-body">';
		
echo 			$lihat["profil"];

echo '			</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Alamat</h3>
				</div>
			<div class="panel-body">';
		
echo 			$lihat["alamat"];

echo '		</div>
		</div>';

require("footer.php");
?>