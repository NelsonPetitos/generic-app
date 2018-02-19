<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gase $gase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gase'), ['action' => 'edit', $gase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gase'), ['action' => 'delete', $gase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gases view large-9 medium-8 columns content">
    <h3><?= h($gase->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $gase->has('country') ? $this->Html->link($gase->country->id, ['controller' => 'Countries', 'action' => 'view', $gase->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Major') ?></th>
            <td><?= h($gase->major) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Minor') ?></th>
            <td><?= h($gase->minor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locality') ?></th>
            <td><?= h($gase->locality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ns') ?></th>
            <td><?= h($gase->ns) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ew') ?></th>
            <td><?= h($gase->ew) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullgaz') ?></th>
            <td><?= h($gase->fullgaz) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gase->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lat') ?></th>
            <td><?= $this->Number->format($gase->lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Long') ?></th>
            <td><?= $this->Number->format($gase->long) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Spectotal') ?></th>
            <td><?= $this->Number->format($gase->spectotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gentotal') ?></th>
            <td><?= $this->Number->format($gase->gentotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sptotal') ?></th>
            <td><?= $this->Number->format($gase->sptotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clatmax') ?></th>
            <td><?= $this->Number->format($gase->clatmax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clongmin') ?></th>
            <td><?= $this->Number->format($gase->clongmin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clongmax') ?></th>
            <td><?= $this->Number->format($gase->clongmax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gase->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gase->modified) ?></td>
        </tr>
    </table>
</div>
