<?php 
$page ='mentions-parametres';
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
  <section class="mentions">
    <div class="content position-relative" id="full-width">
      <h1 class="parametres-title">Makidoo est édité par la société :</h1>
      <p>Makidoo<br>
        SAS au Capital social de 56 357,00 €<br>
        Siège social : Dream And Achieve – 123 boulevard Louis Blanc 85000 La Roche Sur Yon<br>
        Directeur de la publication : M. Julien Comte en sa qualité de président.<br>
        SIRET : 82162053100011<br>
        TVA Intracommunautaire : FR 37821620531<br>
        N° téléphone : +33 (0)2 51 34 05 67<br>
        E-mail : contact@makidoo.io
      </p><br>
      <h1 class="parametres-title">Propriétés intellectuelles</h1>
      <p>Les contenus du site makidoo.io (structure, design, textes, images, animations, logo) sont la propriété exclusive de la société Makidoo. Toute utilisation d’éléments du site makidoo.io y compris la reproduction, la modification, la diffusion ou la republication, sans l’autorisation écrite préalable de la société Makidoo est strictement interdite. Toute demande d’autorisation de reproduction totale ou partielle de ce site doit être adressée à contact@makidoo.io.</p><br>
      <h1 class="parametres-title">Limitation de responsabilité
      </h1>
      <p>Le site makidoo.io ne saurait être tenu pour responsable des erreurs rencontrées sur le site, problèmes techniques, interprétation des informations publiées et conséquences de leur utilisation. En conséquence, l’utilisateur reconnaît utiliser ces informations sous sa responsabilité exclusive.</p>
    </div>
  </section>
</section>

<script type="text/javascript" src="js/flickity.js"></script>

<script>
  var flkty = new Flickity('.gallery');
  flkty.select( 2 );
</script>



<?php include_once("layout/footer.php"); ?>