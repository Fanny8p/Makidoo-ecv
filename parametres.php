<?php 
$page ='profil';
include_once("layout/header.php"); 
?>
<section class="top-bar">
  <div class="container">
    <div class="arrow"><a href="index.php"><img src="img/arrow.svg"></a></div>
    <div class="menu-title"><h1>Paramètres</h1></div>
    <div class="arrow"></div>
  </div>
</section>
</section>

<section class="main">
  <?php include_once("layout/top-bar-parametres.php") ?>
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

      <script type="text/javascript" src="js/flickity.js"></script>

  <script>
    var flkty = new Flickity('.gallery');
    flkty.select( 3 );
  </script>