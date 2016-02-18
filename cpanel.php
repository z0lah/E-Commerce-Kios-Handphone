<?php 
require('header.php');

echo '
	<div class="container">
		<div class="page-heder text-center well">
			<h2>Control Panel</h2>
		</div>
		
		<div class="col-xs-6 col-md-3 " align="center">
			<a class="thumbnail" href="tambah_produk.php">
				<h4><label>Tambah Produk</label></h4>
				<small>Menambahkan produk baru pada website</small>
			</a>
		</div>
		
		<div class="col-xs-6 col-md-3 " align="center">
			<a class="thumbnail" href="tambah_admin.php">
				<h4><label>Tambah Admin</label></h4>
				<small>Menambahkan admin baru pada website</small>
			</a>
		</div>
		
		<div class="col-xs-6 col-md-3 " align="center">
			<a class="thumbnail" href="atur_produk.php">
				<h4><label>Edit Produk</label></h4>
				<small>Memperbarui data produk</small>
			</a>
		</div>		

		<div class="col-xs-6 col-md-3 " align="center">
			<a class="thumbnail" href="atur_promo.php">
				<h4><label>Promo</label></h4>
				<small>Mengatur halaman promosi home</small>
			</a>
		</div>
		
		<div class="col-xs-6 col-md-3 " align="center">
			<a class="thumbnail" href="pesan_masuk.php">
				<h4><label>Pesan</label></h4>
				<small>Melihat Pesan masuk</small>
			</a>
		</div>

		<div class="col-xs-6 col-md-3 " align="center">
			<a class="thumbnail" href="hapus-admin.php">
				<h4><label>Hapus Admin</label></h4>
				<small>Menghapus ID salah satu admin</small>
			</a>
		</div>		
		';

echo '
	</div>';
require('footer.php');
?>