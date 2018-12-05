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
		<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
			<div class="wrapper-text">
				<p id="bold-color">Clip Event Court</p>
				<p>Vous participez à un événement, un salon, une réunion importante, un afterwork ? Clip Event Court permet d’immortaliser ce moment dans une vidéo musicale très courte, dynamique et structurée.</p>
				<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
			</div>
		</div>
	</section>
	<hr>
	<section class="scenario">
		<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
			<div class="wrapper-text">
				<p id="bold-color">Suivi de projet</p>
				<p>Utilisez ce scénraio afin de montrer l’évolution d’un projet. C’est un film technique, vous suivrez et mettrez en image une chronologie. Vous pouvez utiliser ce scénario régulièrement, afin de montrer l’évolution de manière hebdomadaire ou mensuelle par exemple ?</p>
				<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
			</div>
		</div>
	</section>
	<hr><section class="scenario">
		<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
			<div class="wrapper-text">
				<p id="bold-color">Rapport de Rendez-Vous</p>
				<p>Le modèle de scénario Rapoort/Suivi de rendez-vous permet de faire passer un message de type rappel, remerciement, auprès de vos prospects à la suite à un rdv commercial.</p>
				<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
			</div>
		</div>
	</section>
	<hr><section class="scenario">
		<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
			<div class="wrapper-text">
				<p id="bold-color">Compte Rendu (Interview)</p>
				<p>Avec Compte Rendu, donnez ou prenez la parole pour faire un retour sur un événement, une action commercialen un chantier, une stratégie. Ce modèle vous permet d’illustrer des propos via une automatisation des images vidéos qui vont se superposer à l’interview.</p>
				<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="js/flickity.js"></script>

	<script>
		var flkty = new Flickity('.gallery');
		flkty.select( 1 );
	</script>