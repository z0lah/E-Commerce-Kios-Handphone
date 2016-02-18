<?php
require("header.php");
$query = mysql_query('SELECT * FROM profil');

echo '
		<div class="container">';
			
while($lihat=mysql_fetch_array($query)){
echo 	$lihat["map"];
}
echo '	</div>';

require("footer.php");
?>