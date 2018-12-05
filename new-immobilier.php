<?php 
$page ='immobilier';
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
			<p id="bold-color">Visite de quartier</p>
			<p>Faites découvrir un quatier avec ce scénario. Vous allez être guidé dans un format très court court qui vous permet de mettre en avant l’ambiance générale du lieu.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</div>
</section>
<hr>
<section class="scenario">
	<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
		<div class="wrapper-text">
			<p id="bold-color">Visite immobilière</p>
			<p>Maison à vendre est un scénario permettant de mettre en avant un bien immobilier de taille moyenne. Faites votre visite en vidéo, c’est simple.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</div>
</section>
<hr><section class="scenario">
	<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
		<div class="wrapper-text">
			<p id="bold-color">Teasing de quartier</p>
			<p>Teasing Immobilier est un modèle qui vous permet de montrer en moins de 10 secondes un bien immobilier</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</div>
</section>
<hr><section class="scenario">
	<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
		<div class="wrapper-text">
			<p id="bold-color">Compte Rendu (Interview)</p>
			<p>Avec compte Rendu, donnez ou prenez la parole pour un retour sur un événement, une action commerciale, un chantier, une statégie. Ce modèle vous permet d’illustrer des propos via une automatisation des images vidéos qui vont se superposer à l’interview.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</div>
</section>

<script type="text/javascript" src="js/flickity.js"></script>

	<script>
		var flkty = new Flickity('.gallery');
		flkty.select( 2 );
	</script>