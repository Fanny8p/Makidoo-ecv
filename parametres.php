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
  <section class="parametres">
    <div class="content position-relative" id="full-width">
      <form>
        <p>
          <input type="text" class="formulaire" name="Nom" value="Lebras" placeholder="Nom" />
          <img class="icon-parametres pen" src="img/edit.svg" />
        </p>
      </form>

      <form>
        <p>
          <input type="text" class="formulaire" name="Prénom" value="Célia" placeholder="Prénom" />
          <img class="icon-parametres pen" src="img/edit.svg" />
        </p>
      </form>

      <form>
        <p>
          <input type="email" class="formulaire" pattern=".+@globex.com" size="30" value="lebras@gmail.com" required>
          <img class="icon-parametres pen" src="img/edit.svg" />
        </p>
      </form>

      <form>
        <p>
          <input type="password" id="pass" name="password" minlength="8" value="********" required>
          <img class="icon-parametres pen" src="img/edit.svg" />
        </p>
      </form> 
    </div>
  </section>
</section>

<script type="text/javascript" src="js/flickity.js"></script>

<script>
  var flkty = new Flickity('.gallery');
  flkty.select( 0 );
</script>

<?php include_once("layout/footer.php") ?>