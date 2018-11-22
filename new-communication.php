<?php 
$page ='communication';
include_once("layout/header.php"); 
?>
<section class="top-bar">
	<div class="container">
		<div class="arrow"><a href="mes-projets.php"><img src="img/arrow.svg"></a></div>
		<div class="menu-title"><h1>Nouveau projet</h1></div>
		<div class="arrow"></div>
	</div>
</section>
</section>

<section class="main">
	<?php include_once("layout/top-bar-p.php") ?>
	<section class="scenario">
		<img class="icon-projet" src="img/edit.svg">
		<div class="content">
			<p id="bold-color">Clip Event court</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero aperiam quas tempora, hic aliquam iste voluptas doloribus laboriosam architecto fugiat in reprehenderit repudiandae molestiae nesciunt quos a voluptatem voluptate, nisi.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</section>
	<hr>
	<section class="scenario">
		<img class="icon-projet" src="img/edit.svg">
		<div class="content">
			<p id="bold-color">Suivi de projet</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero aperiam quas tempora, hic aliquam iste voluptas doloribus laboriosam architecto fugiat in reprehenderit repudiandae molestiae nesciunt quos a voluptatem voluptate, nisi.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</section>
	<hr><section class="scenario">
		<img class="icon-projet" src="img/edit.svg">
		<div class="content">
			<p id="bold-color">Rapport de rendez-vous</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero aperiam quas tempora, hic aliquam iste voluptas doloribus laboriosam architecto fugiat in reprehenderit repudiandae molestiae nesciunt quos a voluptatem voluptate, nisi.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</section>
	<hr><section class="scenario">
		<img class="icon-projet" src="img/edit.svg">
		<div class="content">
			<p id="bold-color">Interview</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero aperiam quas tempora, hic aliquam iste voluptas doloribus laboriosam architecto fugiat in reprehenderit repudiandae molestiae nesciunt quos a voluptatem voluptate, nisi.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</section>

	<?php include_once("layout/footer.php"); ?>

	<script>
		var flkty = new Flickity('.gallery');
		flkty.select( 1 );
	</script>