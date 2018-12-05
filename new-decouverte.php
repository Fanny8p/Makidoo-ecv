<?php 
$page ='decouverte';
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
		<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
		<div class="wrapper-text">
			<p id="bold-color">Interview</p>
			<p>
				Un scénario pour interviwer une personne selon le principe des “ 3 questions à “
			</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
		</div>
	</section>
	<hr>
	<section class="scenario">
		<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
		<div class="wrapper-text">
			<p id="bold-color">Voiture à vendre</p>
			<p>Voiture à Vendre est un scénario qui vous permet de mettre en vente un véhicule d’occasion. Suivez le guide, le film fera le tour de la voiture. Vous le pouvez partager où bon ovus semble.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
		</div>
	</section>
	<hr>
	<section class="scenario">
		<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
			<div class="wrapper-text">
				<p id="bold-color">Curriculum Vitae</p>
				<p>Faire votre Curriculum Vitae en vidéo simplement. Avec ce scénario vous allez pouvoir vous présenter dans un film très simple et efficace.</p>
				<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
			</div>
		</div>
	</section>
	<hr><section class="scenario">
		<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
			<div class="wrapper-text">
				<p id="bold-color">Voeux d'anniversaire</p>
				<p>Voeux d’anniversaire permet de partager avec vos amis/votre famille, des voeux, des encouragements, votre affection tout simplement. Demandez à plusieurs personnes d’intervenir en réalisant les plans à plusieurs. Demandez à un proche de se filmer avec son matériel et de vous envoyer son plan. Vous pouvez l’importer directement dans votre film Makidoo !</p>
				<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="js/flickity.js"></script>

	<script>
		var flkty = new Flickity('.gallery');
		flkty.select( 0 );
	</script>