<?php
require("header.php");
echo '
	<div id="promo" class="carousel slide carousel-slide" data-ride="carousel" data-interval="4000">    
    
		<ol class="carousel-indicators">
			<li data-target="#promo" data-slide-to="0" class="active"></li>
			<li data-target="#promo" data-slide-to="1"></li>
			<li data-target="#promo" data-slide-to="2"></li>
			<li data-target="#promo" data-slide-to="3"></li>
		</ol>

		<div class="carousel-inner">
			
			<div class="item active">
				<img src="promo/1.jpg">
				
				<div class="container">
					<div class="carousel-caption">
						<h1>Sony Xperia Z</h1>
						<p>Lini terbaru dari Sony siap menemani hari anda</p>
						<p><a class="btn-lg btn-primary" href="prod.php?nama=nokia-lumia-930">Selengkapnya</a>
					</div>
				</div>
			</div>
			
			<div class="item">
				<img src="promo/2.jpg">
				
				<div class="container">
					<div class="carousel-caption">
						<h1>Samsung</h1>
						<p>Produk andalan dari Samsung</p>
						<p><a class="btn-lg btn-primary" href="prod.php?nama=samsung-galaxy-core-">Selengkapnya</a>
					</div>
				</div>
			</div>
			
			<div class="item">
				<img src="promo/3.jpg">
				
				<div class="container">
					<div class="carousel-caption">
						<h1>Apple I-Phone</h1>
						<p>Produk premium bagi user premium</p>
						<p><a class="btn-lg btn-primary" href="prod.php?nama=apple-iphone-6">Selengkapnya</a>
					</div>
				</div>
			</div>
			
			<div class="item">
				<img src="promo/4.jpg">
				
				<div class="container">
					<div class="carousel-caption">
						<h1>Oppo</h1>
						<p>Siap menantang pesaing besar</p>
						<p><a class="btn-lg btn-primary" href="prod.php?nama=OPPO-R7-Plus">Selengkapnya</a>
					</div>
				</div>
			</div>
			
			<a class="left carousel-control" href="#promo" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			
			<a class="right carousel-control" href="#promo" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
	
	<script>
	alert("Website ini hanyalah sample untuk portofolio");
	</script>
	
	';
require("footer.php");
?>