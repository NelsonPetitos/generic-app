<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Generic';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/styles.css">    
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->fetch('Carossel'); ?>
   <nav class="navbar navbar-expand-sm d-print navbar-light bg-light">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">L'actualité</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Biodiversité végétale
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Les collections d'herbiers</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Les inventaires forestiers</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Partenariats</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    
    <div class="container-fluid">
      <?= $this->Flash->render() ?>
      <div class="container set-min-height">
         <div class="row">   
            <?= $this->fetch('Title'); ?>
            <?= $this->fetch('Breadcrumb'); ?>
         </div>
        <?= $this->fetch('content') ?>
      </div>
    </div>
    
    <footer class="container-fluid mt-4 d-flex align-items-center" style="min-height: 100px; background-color: lightgray">
        <div class="container">
           <div class="row">
               <div class="col-md-10">
                   <div class="row">
                        <div class="col-md"><a href="#">Plan du site</a></div>
                        <div class="col-md"><a href="#">Liens utiles</a></div>
                        <div class="col-md"><a href="#">Mentions légales</a></div>
                        <div class="col-md"><a href="#">Contacts</a></div>
                        <div class="col-md"><a href="#">Crédits</a></div>
                    </div>
                </div>
                <div class="col-md-2 set-border text-right">Copyright 2018</div>
           </div>
        </div>
    </footer>
    
    <script src="bower_components/jquery/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
