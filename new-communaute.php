<?php 
$page ='communaute';
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
			<p id="bold-color">Crow funding</p>
			<p>CrowFunding est un modèle permettant de présenter sa start-up, un projet d’entreprise afin de solliciter des fonds, via une plateforme de crowfunding par exemple.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</div>
</section>
<hr>
<section class="scenario">
	<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
		<div class="wrapper-text">
			<p id="bold-color">Crow funding illustré</p>
			<p>CrowFunding est un modèle permettant de présenter sa start-up, un projet d’entreprise afin de solliciter des fonds, via une plateforme de crowfunding par exemple.</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</div>
</section>
<hr><section class="scenario">
	<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
		<div class="wrapper-text">
			<p id="bold-color">Clip Twitter</p>
			<p>Clip Twitter est un scénario pour faire une vidéo musicale très découpée, c’est à dire très dynamique avec des successions de plans très courts alternés, sans interviews. Un outil de communication redoutable pour illustrer un événement par exemple !</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</div>
</section>
<hr><section class="scenario">
	<div class="content position-relative">
		<img class="icon-projet pen" src="img/edit.svg" />
		<div class="wrapper-text">
			<p id="bold-color">Jeux concours (Interview)</p>
			<p>Jeux Concours vous mermet d’annoncer un concours sur les réseaux sociaux ! Donnez une touche plus professionnelle à vos jeux avec ce scénario !</p>
			<span id="icone"><p style="padding-right: 10px;"><strong>Durée :</strong> 01'45</p><p><strong>Plans :</strong> 4</p></span>
		</div>
	</div>
</section>


<script type="text/javascript" src="js/flickity.js"></script>

	<script>
		var flkty = new Flickity('.gallery');
		flkty.select( 3 );
	</script>