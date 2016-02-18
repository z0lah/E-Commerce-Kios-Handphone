<?php
require("header.php");

$prod = $_GET['prod'];
$kond = $_GET['kond'];
$pilihan = $_GET['pilihan'];

if ($pilihan = 'a') {
	$query = mysql_query('SELECT * FROM produk WHERE produk_kondisi="'. $kond .'" AND produk_jenis="'. $prod .'"');
}
else {
	$query = mysql_query('SELECT * FROM produk WHERE produk_kondisi="'. $kond .'" AND produk_jenis="'. $prod .'" AND produk_merk="'. $pilihan .'"');
}

$query1 = mysql_query('SELECT DISTINCT produk_merk FROM produk WHERE produk_kondisi="'. $kond .'" AND produk_jenis="'. $prod .'"');

echo '<div class="container"> 
		<div class="row">
			<div class="col-lg-2">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">
							Berdasarkan Merk
						<button class="navbar-toggle btn-primary" data-toggle="collapse" data-target=".navMenu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					
					<div class="collapse navbar-collapse navMenu">
						<ul class="nav nav-pills nav-stacked">';
					while($merk=mysql_fetch_array($query1)){
						echo '<li role="presentation"><a href="produk-list.php?prod=hp&kond=baru&pilihan='. $merk["produk_merk"] .'" >'. $merk["produk_merk"] .'</a></li>';}
echo '					</ul>
					</div>
				</div>
			</div>';

echo '		<div class="col-lg-9">';

while($lihat=mysql_fetch_array($query)){
echo '			<div class="col-xs-6 col-md-3 " align="center">
					<a class="thumbnail" href="prod.php?nama='.$lihat["produk_nama"].'">
						<img src="gambar/'.$lihat["produk_gambar"] . '" width="151px" height="170px" alt="Gambar"> 
						<h4><label>'.$lihat["produk_nama"]. '</label></h4>
						<p>Rp. '. $lihat["produk_harga"]. '</p>
					</a>
				</div>';
}
echo '		</div>
		</div>
	</div>';
require("footer.php");
?>