<?php 
$page ='decouverte';
include_once("layout/header.php"); 
?>

<link rel="stylesheet" type="text/css" href="main.css" />
<?php include_once("layout/header.php"); ?>
<section class="top-bar">
  <div class="container">
    <div class="arrow"><a href="index.php"><img src="img/arrow.svg"></a></div>
    <div class="menu-title"><h1>Tutoriels</h1></div>
    <div class="arrow"></div>
  </div>
</section>
  <?php include_once("layout/top-bar-tuto.php") ?>
</section>


  
<section class="main" id="tuto">
  
  <section class="last-projects">
    <div class="card-full">
      <a href="tuto_page2.php">
      <video controls class="player-full" id="videoexpl" style="width: 100%;" >
        <source src="video/mavideo.mp4"/>
      </video>
      </a>
      <div class="etiquette">
       <a href="tuto_page2.php"> <p id="bold">Comment éditer un <br>générique avec Makidoo</p></a>
        <p id=small><span id="icone">24/06/18<img class="puce" src="img/clock.svg"></span></p>
      </div>
    </div>
  </section>

  <section class="last-projects">
    <div class="card-full">
      <video controls class="player-full" id="videoexpl" style="width: 100%;" >
        <source src="video/mavideo.mp4"/>
      </video>
      <div class="etiquette">
        <p id="bold">Comment éditer un <br>générique avec Makidoo</p>
        <p id=small><span id="icone">24/06/18<img class="puce" src="img/clock.svg"></span></p>
      </div>
    </div>
  </section>

</section>

<?php include_once("layout/footer.php"); ?>