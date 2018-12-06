<div class="gallery js-flickity">
  <div class="gallery-cell <?php if($page == 'profil') echo 'is-active'; ?>">
    <a href="parametres.php">
      <img src="img/user<?php if($page == 'profil') echo '-blanc'; ?>.svg" class="icon-menu">
      <span class="slide-menu__span marge-picto <?php if($page == 'profil') echo 'is-active'; ?>">Profil</span>
    </a>
  </div>
  <div class="gallery-cell <?php if($page == 'abonnement') echo 'is-active'; ?>">
    <a href="#">
      <img src="img/target<?php if($page == 'abonnement') echo '-blanc'; ?>.svg" class="icon-menu">
      <span class="slide-menu__span <?php if($page == 'abonnement') echo 'is-active'; ?>">Abonnement</span>
    </a>
  </div>
  <div class="gallery-cell <?php if($page == 'mentions-legales') echo 'is-active'; ?>">
    <a href="#">
      <img src="img/courthouse<?php if($page == 'mentions-legales') echo '-blanc'; ?>.svg" class="icon-menu">
      <span class="slide-menu__span marge-picto <?php if($page == 'mentions-legales') echo 'is-active'; ?>">Mentions</span>
    </a>
  </div>
  
  </div>