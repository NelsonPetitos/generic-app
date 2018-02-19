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

$cakeDescription = 'Collection d\'herbier';

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
            <div class="col-12">
             <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= $this->Url->build(['_name' => 'home']) ?>">Site</a></li>
                <li class="breadcrumb-item"><a href="<?= $this->Url->build(['_name' => 'herbarium-collection']) ?>">Biodiversité végétale</a></li>
                <?= $this->fetch('Breadcrumb'); ?>
              </ol>
             </nav>              
            </div>
            <div class="col-md-3">
               <?= $this->fetch('Menu'); ?>
            </div>
            <div class="col-md-9">
               <?= $this->fetch('content') ?>
            </div>   
         </div>
      </div>
    </div>
    
    <?= $this->element('footer'); ?>
    
    <script src="bower_components/jquery/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
