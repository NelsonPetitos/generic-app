<?php $this->start('Carossel'); ?>
    <?= $this->element('carossel')?>
<?php $this->end(); ?>

<?php $this->start('Navbar'); ?>
    <?= $this->element('navbar', ['activeMenu' => 4]); ?>
<?php $this->end(); ?>


<?php $this->start('Breadcrumb'); ?>
<div class="col-12">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= $this->Url->build(['_name' => 'home']) ?>">Site</a></li>
    <li class="breadcrumb-item active">Partenariat(s)</li>
  </ol>
 </nav>              
</div>
<?php $this->end(); ?>
 
 
<?php $this->start('Title'); ?>
    <?= $this->element('title', ['title' => 'Les partenaires associés au projet']) ?>
<?php $this->end(); ?>
   

<div class="row mt-4">
    <div class="col">
        <ul class="list-unstyled">
          <li class="media">
<!--            <img class="mr-3" src="..." alt="Generic placeholder image">-->
            <img class="mr-3" src="http://via.placeholder.com/150x150" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0 mb-1"><a href="#">Adresse du site web du partenaire</a></h5>
              <p class="text-justify">
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, deserunt, ad. Ea cum, eum voluptas iste libero praesentium velit fugit! Reiciendis quis, nisi, doloribus deleniti mollitia expedita inventore itaque ab!
              </p>
            </div>
          </li>
          <li class="media mt-4">
            <img class="mr-3" src="http://via.placeholder.com/150x150" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0 mb-1"><a href="#">Adresse du site web du partenaire</a></h5>
              <p class="text-justify">
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, deserunt, ad. Ea cum, eum voluptas iste libero praesentium velit fugit! Reiciendis quis, nisi, doloribus deleniti mollitia expedita inventore itaque ab!
              </p>
            </div>
          </li>
          <li class="media mt-4">
            <img class="mr-3" src="http://via.placeholder.com/150x150" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0 mb-1"><a href="#">Adresse du site web du partenaire</a></h5>
              <p class="text-justify">
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, deserunt, ad. Ea cum, eum voluptas iste libero praesentium velit fugit! Reiciendis quis, nisi, doloribus deleniti mollitia expedita inventore itaque ab!
              </p>
            </div>
          </li>
          <li class="media mt-4">
            <img class="mr-3" src="http://via.placeholder.com/150x150" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0 mb-1"><a href="#">Adresse du site web du partenaire</a></h5>
              <p class="text-justify">
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, deserunt, ad. Ea cum, eum voluptas iste libero praesentium velit fugit! Reiciendis quis, nisi, doloribus deleniti mollitia expedita inventore itaque ab!
              </p>
            </div>
          </li>
        </ul>
    </div>
</div>