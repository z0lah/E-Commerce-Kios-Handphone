<?php
require('header.php');
$query=mysql_query("SELECT * FROM produk");
$no=1;
echo '
	<div class="container">
		<div class="panel panel-default">
			<table class="table">
				<tr>
					<td>#</td>
					<td>Merk</td>
					<td>type</td>
					<td>jenis</td>
					<td>kondisi</td>
					<td>stock</td>
					<td>harga</td>
					<td></td>
				</tr>';
while($lihat=mysql_fetch_array($query)){			
echo '			<tr>
					<td>'. $no++ .'</td>
					<td>'. $lihat["produk_merk"].'</td>
					<td>'. $lihat["produk_type"].'</td>
					<td>'. $lihat["produk_jenis"].'</td>
					<td>'. $lihat["produk_kondisi"].'</td>
					<td>'. $lihat["produk_stock"].'</td>
					<td>'. $lihat["produk_harga"].'</td>
					<td><a href="edit_produk.php?id='.$lihat["produk_id"].'">Edit</a> - <a href="produk_hapus.php?id='.$lihat["produk_id"].'">Hapus</a> </td>
					
				</tr>';
}
				
				
echo '			</table>	
			</div>
		</div>';


require('footer.php');
?>