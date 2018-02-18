<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $country->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Gases'), ['controller' => 'Gases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gase'), ['controller' => 'Gases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="countries form large-9 medium-8 columns content">
    <?= $this->Form->create($country) ?>
    <fieldset>
        <legend><?= __('Edit Country') ?></legend>
        <?php
            echo $this->Form->control('coname');
            echo $this->Form->control('iso2');
            echo $this->Form->control('continent');
            echo $this->Form->control('region');
            echo $this->Form->control('capital');
            echo $this->Form->control('lat');
            echo $this->Form->control('ns');
            echo $this->Form->control('long');
            echo $this->Form->control('ew');
            echo $this->Form->control('llunit');
            echo $this->Form->control('latmin');
            echo $this->Form->control('latmax');
            echo $this->Form->control('longmin');
            echo $this->Form->control('longmax');
            echo $this->Form->control('spectotal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
