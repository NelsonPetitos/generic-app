<?php $this->start('Carossel'); ?>
    <?= $this->element('carossel')?>
<?php $this->end(); ?>

<?php $this->start('Navbar'); ?>
    <?= $this->element('navbar', ['activeMenu' => 2]); ?>
<?php $this->end(); ?>


<?php $this->start('Breadcrumb'); ?>
<div class="col-12">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= $this->Url->build(['_name' => 'home']) ?>">Site</a></li>
    <li class="breadcrumb-item active">L'actualité</li>
  </ol>
 </nav>              
</div>
<?php $this->end(); ?>
 
 
<?php $this->start('Title'); ?>
    <?= $this->element('title', ['title' => 'A la une !']) ?>
<?php $this->end(); ?>




<div class="row mt-4">
    <div class="col">
        <h4>Création</h4>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, illum quae. Alias, fugit quasi. Voluptates quam commodi animi alias eos, veniam ab, praesentium itaque perspiciatis at delectus? Suscipit, molestias, tempore?. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit eligendi dolores nostrum ex dolor repellat vero ea iusto, eveniet. Tenetur error ducimus, dignissimos libero, deserunt facilis expedita. Fuga, dicta blanditiis!</p>
    </div>
</div>


<div class="row mt-4">
    <div class="col">
        
    </div>
    <div class="col">
        
    </div>
    <div class="col">
        
    </div>
</div>