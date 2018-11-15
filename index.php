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
    <video controls src="img/mavideo.mp4" style="width: 100%; height: 180px;"></video>
  <div class="etiquette">
    <item><p>Le nom de ma video</p></item>
    <item><p>24/06/18<img class="puce" src="img/clock.svg"></p></item>
  </div>
</div>
</section>


</section>



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
