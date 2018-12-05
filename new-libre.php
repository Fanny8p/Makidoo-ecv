
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
		<p style="margin-bottom: 60px;">Le scénario libre vous permet de créer votre propre histoire avec un nombre de plans illimité. Choisissez le temps, rythmez votre vidéo avec de la musique, et devenez maître de votre vidéo.</p>
		<form>
			<p>
				<input type="text" class="formulaire" name="Nom du projet" value="Nom du projet"/>
			</p>
		</form>
		<p class="formulaire-title">Format</p>
		<div style="display: flex;">
			<p class="formulaire-round">minutes</p>
			<p class="formulaire-round1">secondes</p>
		</div>
		<p class="formulaire-title">Durée</p>
		<div style="display: flex;">
			<p class="formulaire-round">vertical</p>
			<p class="formulaire-round1">horizontal</p>
		</div>
		<div style="display: flex;">
			<p class="btn-formulaire">commencer</p>
		</div>
	</div>
</section>


<?php include_once("layout/footer.php"); ?>


	<script>
		var flkty = new Flickity('.gallery');
		flkty.select( 4 );
	</script>
