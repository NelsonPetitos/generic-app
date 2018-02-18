<?php $this->start('Carossel'); ?>
    <?= $this->element('carossel')?>
<?php $this->end(); ?>



<?php $this->start('Breadcrumb'); ?>
<div class="col-12">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
  </ol>
 </nav>              
</div>
<?php $this->end(); ?>
 
 
<?php $this->start('Title'); ?>
<div class="col-12 my-5">
    <h3><?= $this->Html->image('logo-ird.png', ['height' => '30', 'width' => '35']); ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
</div>
<?php $this->end(); ?>
  
<div class="row mt-5">
    <div class="col-md-8">
        <div class="row">
            <div class="col">
                <h4>Création</h4>
                <p class="text-justify" >L'Herbier du Gabon a été créé en 1984 comme herbier de référence au sein de l'Institut de Pharmacopée et de Médecine Traditionnelle <b>(IPHAMETRA)</b>, l'un des instituts du Centre National de Recherche Scientifique et Technique <b>(CENAREST)</b>. Il est devenu l'Herbier National du Gabon <b>(HNG)</b> compte tenu de son grand nombre de collections.  Le nombre de plantes récoltées au Gabon est estimé à 100 000. Mais parmi les 65 000 données informatisées et répertoriées dans une base de données, près de 50 000 spécimens sont physiquement présents à l’Herbier  National du Gabon et leur gestion se fait au quotidien.  Des Ptéridophytes aux plantes à fleurs, une grande diversité du monde végétal est représentée à l’Herbier National du Gabon. Plus de 5 000 espèces de plantes vasculaires  réparties dans 186 familles environ sont connues au Gabon.</p>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <h4>Les missions</h4>
                <ul class="text-justify">
                    <li>Récolte botanique à l’échelle nationale</li>
                    <li>Conservation des collections de plantes</li>
                    <li>Assistance à l’identification des plantes</li>
                    <li>Mettre des collections à la disposition de la recherche et l'enseignement</li>
                    <li>Fournir des informations sur les espèces rares et menacées</li>
                    <li>Identifier les foyers de la biodiversité végétale au Gabon</li>
                    <li>Aider les OG et ONG à développer des stratégies rassurantes dans le domaine de la conservation de la biodiversité végétale</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img class="d-block w-100" src="http://via.placeholder.com/286x180" alt="Card image">
          <div class="card-body">
            <h5 class="card-title">Actualité</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content...</p>
            <a href="#" class="btn btn-primary">Lire la suite</a>
          </div>
        </div>
    </div>
</div>