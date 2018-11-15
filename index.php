<?php
$title = "Accueil";
$description = "Ma description";
?>

<?php include_once("layout/header.php"); ?>

<!-- ma top bar -->
<section class="top-bar">
  <div class="container">
    <div class="arrow"></div>
    <div class="menu-title"><h1>Accueil</h1></div>
    <div class="arrow"></div>
  </div>
</section>

  </section>
    </header>



<section class="main">
<section class="last-projects">
  <div class="titre-section">
      <h2>Mes derniers projets</h2>
  </div>
<div class="card-full">
  <div class="player-full">
    <video controls src="img/mavideo.mp4" style="width: 100%;"></video>
  </div>
  <div class="etiquette">
    <p id="bold">Le nom de ma video</p>
    <p id=small><span id="icone">24/06/18<img class="puce" src="img/clock.svg"></span></p>
  </div>
</div>
</section>

<section class="community-video">
  <div class="titre-section">
      <h2>Les vidéos de la communauté</h2>
  </div>
<div class="card">
<div class="card-half">
  <div class="player-half">
    <video controls src="img/mavideo.mp4" style="width: 100%; height: 100%;"></video>
  </div>
  <div class="etiquette-half">
    <p id="bold">Le nom de ma video</p>
    <p id="smallhug">Catégorie/05'30</p>
  </div>
</div>

<div class="card-half">
  <div class="player-half">
    <video controls src="img/mavideo.mp4" style="width: 100%; height: 100%"></video>
  </div>
  <div class="etiquette-half">
    <p id="bold" class="bold">Le nom de ma video</p>
    <p id="smallhug" class="small">Catégorie/05'30
  </div>
</div>
</div>

<div class="card">
<div class="card-half">
  <div class="player-half">
    <video controls src="img/mavideo.mp4" style="width: 100%; height: 100%;"></video>
  </div>
  <div class="etiquette-half">
    <item><p id="bold">Le nom de ma video</p></item>
    <item><p id="smallhug">Catégorie/05'30</p></item>
  </div>
</div>

<div class="card-vide"></div>

<div class="card-half">
  <div class="player-half">
    <video controls src="img/mavideo.mp4" style="width: 100%; height: 100%"></video>
  </div>
  <div class="etiquette-half">
    <item><p id="bold" class="bold">Le nom de ma video</p></item>
    <item><p id="smallhug" class="small">Catégorie/05'30</p></item>
  </div>
</div>
</div>
</section>


</section>

</body>


<?php include_once("layout/footer.php"); ?>