<?php
$title = "Accueil";
$description = "Ma description";
?>

<?php include_once("layout/header.php"); ?>

<body>

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
    <item><p id="bold">Le nom de ma video</p></item>
    <item><p id=small>24/06/18<img class="puce" src="img/clock.svg"></p></item>
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
    <item><p id="bold">Le nom de ma video</p></item>
    <item><p id="smallhug">Catégorie/05'30</p></item>
  </div>
</div>

<div class="card-half">
  <div class="player-half">
    <video controls src="img/mavideo.mp4" style="width: 100%; height: 100%"></video>
  </div>
  <div class="etiquette-half">
    <item><p id="bold" class="bold">Le nom de ma video</p></item>
    <item><p id="smallhug" class="small">Catégorie/05'30</item>
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
    <item><p id="smallhug" class="small">Catégorie/05'30</item>
  </div>
</div>
</div>
</section>


</section>


<?php include_once("layout/footer.php"); ?>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
