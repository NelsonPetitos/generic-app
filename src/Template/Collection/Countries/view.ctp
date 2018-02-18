<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gases'), ['controller' => 'Gases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gase'), ['controller' => 'Gases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="countries view large-9 medium-8 columns content">
    <h3><?= h($country->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coname') ?></th>
            <td><?= h($country->coname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iso2') ?></th>
            <td><?= h($country->iso2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Continent') ?></th>
            <td><?= h($country->continent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($country->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capital') ?></th>
            <td><?= h($country->capital) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ns') ?></th>
            <td><?= h($country->ns) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ew') ?></th>
            <td><?= h($country->ew) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Llunit') ?></th>
            <td><?= h($country->llunit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($country->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lat') ?></th>
            <td><?= $this->Number->format($country->lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Long') ?></th>
            <td><?= $this->Number->format($country->long) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latmin') ?></th>
            <td><?= $this->Number->format($country->latmin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latmax') ?></th>
            <td><?= $this->Number->format($country->latmax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longmin') ?></th>
            <td><?= $this->Number->format($country->longmin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longmax') ?></th>
            <td><?= $this->Number->format($country->longmax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Spectotal') ?></th>
            <td><?= $this->Number->format($country->spectotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($country->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($country->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Gases') ?></h4>
        <?php if (!empty($country->gases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Major') ?></th>
                <th scope="col"><?= __('Minor') ?></th>
                <th scope="col"><?= __('Locality') ?></th>
                <th scope="col"><?= __('Lat') ?></th>
                <th scope="col"><?= __('Ns') ?></th>
                <th scope="col"><?= __('Long') ?></th>
                <th scope="col"><?= __('Ew') ?></th>
                <th scope="col"><?= __('Spectotal') ?></th>
                <th scope="col"><?= __('Gentotal') ?></th>
                <th scope="col"><?= __('Sptotal') ?></th>
                <th scope="col"><?= __('Clatmax') ?></th>
                <th scope="col"><?= __('Clongmin') ?></th>
                <th scope="col"><?= __('Clongmax') ?></th>
                <th scope="col"><?= __('Fullgaz') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->gases as $gases): ?>
            <tr>
                <td><?= h($gases->id) ?></td>
                <td><?= h($gases->country_id) ?></td>
                <td><?= h($gases->major) ?></td>
                <td><?= h($gases->minor) ?></td>
                <td><?= h($gases->locality) ?></td>
                <td><?= h($gases->lat) ?></td>
                <td><?= h($gases->ns) ?></td>
                <td><?= h($gases->long) ?></td>
                <td><?= h($gases->ew) ?></td>
                <td><?= h($gases->spectotal) ?></td>
                <td><?= h($gases->gentotal) ?></td>
                <td><?= h($gases->sptotal) ?></td>
                <td><?= h($gases->clatmax) ?></td>
                <td><?= h($gases->clongmin) ?></td>
                <td><?= h($gases->clongmax) ?></td>
                <td><?= h($gases->fullgaz) ?></td>
                <td><?= h($gases->created) ?></td>
                <td><?= h($gases->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Gases', 'action' => 'view', $gases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Gases', 'action' => 'edit', $gases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gases', 'action' => 'delete', $gases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
