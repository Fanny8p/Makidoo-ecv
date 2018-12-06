<?php 
$page ='abonnement';
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
  <section class="parametres">
    <div class="content position-relative" id="align-center">
      <h1>Abonnement gratuit</h1>
      <p>option actuelle</p>
      <br>
      <br>
      <hr>
      <br>
      <br>
      <h1>Abonnement payant</h1>
      <p>30€/mois</p>
        <ul>
          <li>Accès de nouveaux thèmes</li>
          <li>Accès à une banque de son</li>
          <li>Accès à une banque d’image</li>
          <li>Et pleins d’autres avantages !</li>
        </ul>
<button class="btn-formulaire"></button>
    </div>
  </section>
</section>

<script type="text/javascript" src="js/flickity.js"></script>

<script>
  var flkty = new Flickity('.gallery');
  flkty.select( 2 );
</script>

<?php include_once("layout/footer.php") ?>