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
    <?= $this->fetch('Navbar'); ?>
    
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
    
    <footer class="container-fluid mt-4" style="background-color: lightgray">
        <div class="container">
           <div class="row d-flex align-items-center"  style="min-height: 100px">
               <div class="col-md-10">
                   <div class="row">
                        <div class="col-md"><a href="<?= $this->Url->build(['_name' => 'site-plan']); ?>">Plan du site</a></div>
                        <div class="col-md"><a href="#">Liens utiles</a></div>
                        <div class="col-md"><a href="#">Mentions légales</a></div>
                        <div class="col-md"><a href="#">Contacts</a></div>
                        <div class="col-md"><a href="#">Crédits</a></div>
                    </div>
                </div>
                <div class="col-md-2 text-right align-self-end font-italic font-weight-light">Copyright 2018</div>
           </div>
        </div>
    </footer>
    
    <script src="bower_components/jquery/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
