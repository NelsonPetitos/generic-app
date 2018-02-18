<?php $this->start('Carossel'); ?>
    <?= $this->element('carossel'); ?>
<?php $this->end(); ?>

<?php $this->start('Navbar'); ?>
    <?= $this->element('navbar', ['activeMenu' => 0]); ?>
<?php $this->end(); ?>

<?php $this->start('Breadcrumb'); ?>
<div class="col-12">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= $this->Url->build(['_name' => 'home']) ?>">Site</a></li>
    <li class="breadcrumb-item active">Le plan</li>
  </ol>
 </nav>              
</div>
<?php $this->end(); ?>
 
 
<?php $this->start('Title'); ?>
    <?= $this->element('title', ['title' => 'Naviger à travers notre site']); ?>
<?php $this->end(); ?>




<div class="row mt-4">
    <div class="col">
        <ol type="I">
            <li><b>Accueil</b>
                <p class="text-justify"><b>Page d'accueil</b> avec la présentation en quelques lignes de l'Herbier national du Gabon, son historique, ses collections, ses principaux partenaires, ses contacts.</p>
                <p>Exemple :</p>
                <p class="text-justify">Le Gabon est sur le plan botanique l'un des pays les plus diversifiés d'Afrique tropicale (Pomeroy., 1993). Avec une superficie de 267660 Km2, il héberge environ 6000 à 10000 espèces végétales (Breteler., 1989 ; Christy et al., 2003). Signataire de la Conférence de Rio de Janeiro en 1992, le Gabon, qui l'oblige à conserver sa ressource naturelle renouvelable. Ainsi, va-t-il initier, dans sa politique intérieure, la création d'espaces de terre pour planter des arbres provenant de Libreville et d'autres régions du monde. C'est dans ce contexte que la station expérimentale de Sibang ou Arboretum de Sibang a été créée dans les années 1930, d'après Dany TOUNG, 2010, dans son mémoire intitulé "Connaissance de la flore arborescente plantée et spontanée de l'arboretum de Sibang".</p>
            </li><br/>
            
            <li><b>L'actualité</b>
                <ol type="a">
                    <li><b>Les événements</b></li>
                    <p class="text-justify">Signaler les événements tels que les missions sur le terrain, les visites de botanistes à l'Herbier, des vidéos si possible, les projets en cours...</p>
                    <li><b>Les publications</b></li>
                    <p class="text-justify">Signaler les dernières publications scientifiques et les volumes de la flore disponibles ....</p>
                </ol>
            </li><br/>
            
            <li><b>Biodiversité végétale</b>
                <ol type="a">
                    <li><b>Les  collections d'herbier</b></li>
                    <p class="text-justify">Lien vers la consultation des données des collections d'herbier par spécimens, collecteurs, taxons, localités, noms vernaculaires, photos. Chaque type de consultation s'ouvre sur un tableau de données avec la possiblité d'appliquer des filtres sur chaque colonne. (ex avec les taxons : rechercher toutes les espèces appartenant à une famille donnée ou à un genre, etc ...).</p>
                    
 
                    <div class="media">
                        <img class="mr-3 align-self-center" src="http://via.placeholder.com/100x100" alt="Generic placeholder image">
                        <div class="media-body">
                          <p class="text-justify">La distribution géographique des données sera affiché pour chaque type de consultation avec le choix donné sur le type de carte (topographique ou satellite) ainsi que les scans disponibles des spécimens d'herbier.</p>
                        </div>
                    </div>

                    
                    <li><b>Les inventaires forestiers</b></li>
                    <p class="text-justify">Lien vers la consultation des données d'inventaire avec filtre sur les différents types de données : zone, noms communs, genre, nom d'espèce, famille, année. Lien vers les collections via le nom de l'espèce.</p>
                </ol>
            </li><br/>
            
            <li><b>Partenariats</b>
                <p class="text-justify">Liste des partenaires avec logo, photo et contacts</p>
            </li>
        </ol>
    </div>
</div>