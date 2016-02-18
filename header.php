<?php
session_start();
require('koneksi.php');
echo '
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    
    
    <div class="navbar navbar-inverse navbar-fixed-top" id="cn">
        <div class="container">
            <a href="index.php" class="navbar-brand">
				Konterku
			</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
            </button>
			
			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="index.php">Home</a>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk <b class="caret"></b></a>
						<ul class="dropdown-menu">
								<li><a href="produk-list.php?prod=hp&kond=baru&pilihan=a">HP baru</a></li>
								<li><a href="produk-list.php?prod=hp&kond=bekas&pilihan=a">HP bekas</a></li>
								<li><a href="produk-list.php?prod=aksesoris&kond=baru&pilihan=a">Aksesoris</a></li>
							</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tentang kami<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="profil.php">Profil</a></li>
							<li><a href="lokasi.php">Lokasi</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kontak<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a data-toggle="modal" href="#hubungi">Hubungi kami</a></li>
							<li><a href="buku-tamu.php">Buku tamu</a></li>  
						</ul>
					</li>
					
					'; 
					if (isset( $_SESSION['status']) != "admin") {
						echo '
						<li>
							<a class="btn" data-toggle="modal" href="#login" >Login</a>
						</li>';
					}
	echo '			
					
				</ul>
			</div>
		</div>
    
	</div>
';
?>