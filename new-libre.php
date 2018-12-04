
<link rel="stylesheet" type="text/css" href="main.css" />
 
<?php 
$page ='libre';
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
		<p id="bold-color">Format libre</p>
		<p>Le scénario libre vous permet de créer votre propre histoire avec un nombre de plans illimité. Choisissez le temps, rythmez votre vidéo avec de la musique, et devenez maître de votre vidéo.</p>
		<p class="formulaire">Nom du projet</p>
		<p>Format</p>
		<div style="display: flex;">
			<p class="formulaire-round">minutes</p>
			<p class="formulaire-round1">secondes</p>
		</div>
		<p>Durée</p>
		<div style="display: flex;">
			<p class="formulaire-round">vertical</p>
			<p class="formulaire-round1">horizontal</p>
		</div>
		<p class="btn">commencer</p>
	</div>
</section>


<?php include_once("layout/footer.php"); ?>


	<script>
		var flkty = new Flickity('.gallery');
		flkty.select( 4 );
	</script>
