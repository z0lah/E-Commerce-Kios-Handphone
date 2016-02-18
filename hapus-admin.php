<?php
require('header.php');
$query=mysql_query("SELECT * FROM admin");
$no=1;
echo '
	<div class="container">
		<div class="panel panel-default">
			<table class="table">
				<tr>
					<td>#</td>
					<td>Username</td>
					<td>Password</td>
					<td></td>
				</tr>';
while($lihat=mysql_fetch_array($query)){			
echo '			<tr>
					<td>'. $no++ .'</td>
					<td>'. $lihat["username"].'</td>
					<td>******</td>
					<td><a href="adm_hapus.php?id='.$lihat["id"].'">Hapus</a> </td>
					
				</tr>';
}
				
				
echo '			</table>	
			</div>
		</div>';


require('footer.php');
?>