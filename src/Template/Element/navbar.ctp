<?php
    $menu1 = ($activeMenu == 1)?'active':'';
    $menu2 = ($activeMenu == 2)?'active':'';
    $menu3 = ($activeMenu == 3)?'active':'';
    $menu4 = ($activeMenu == 4)?'active':'';
?>
<nav class="navbar navbar-expand-sm d-print navbar-light bg-light">
  <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= $menu1 ?>">
            <a class="nav-link" href="<?= $this->Url->build(['_name' => 'home']); ?>">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?= $menu2 ?>">
            <a class="nav-link" href="<?= $this->Url->build(['_name' => 'news']); ?>">L'actualité</a>
          </li>
          <li class="nav-item dropdown <?= $menu3 ?>">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Biodiversité végétale
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= $this->Url->build(['_name' => 'herbarium-collection']); ?>">Les collections d'herbier</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Les inventaires forestiers</a>
            </div>
          </li>
          <li class="nav-item <?= $menu4 ?>">
            <a class="nav-link" href="<?= $this->Url->build(['_name' => 'partners']); ?>">Partenariats</a>
          </li>
        </ul>
      </div>
  </div>
</nav>