<?php
    $menu1 = ($activeMenu == 1)?'active':'';
    $menu2 = ($activeMenu == 2)?'active':'';
    $menu3 = ($activeMenu == 3)?'active':'';
    $menu4 = ($activeMenu == 4)?'active':'';
    $menu5 = ($activeMenu == 5)?'active':'';
?>
 <div class="list-group mb-3">
  <a href="<?= $this->Url->build(['_name' => 'herbarium-collection']) ?>" class="list-group-item list-group-item-action <?= $menu1 ?>">Accueil</a>
  <a href="#" class="list-group-item list-group-item-action <?= $menu2 ?>">Échantillons</a>
  <a href="#" class="list-group-item list-group-item-action <?= $menu3 ?>">Collecteurs</a>
  <a href="#" class="list-group-item list-group-item-action <?= $menu4 ?>">Taxons</a>
  <a href="<?= $this->Url->build(['controller' => 'gases', 'prefix' => 'collection']); ?>" class="list-group-item list-group-item-action disabled <?= $menu5 ?>">Localités</a>
</div>