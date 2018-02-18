<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country[]|\Cake\Collection\CollectionInterface $countries
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gases'), ['controller' => 'Gases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gase'), ['controller' => 'Gases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="countries index large-9 medium-8 columns content">
    <h3><?= __('Countries') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iso2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('continent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capital') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ns') ?></th>
                <th scope="col"><?= $this->Paginator->sort('long') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ew') ?></th>
                <th scope="col"><?= $this->Paginator->sort('llunit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latmin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latmax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longmin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longmax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('spectotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $country): ?>
            <tr>
                <td><?= $this->Number->format($country->id) ?></td>
                <td><?= h($country->coname) ?></td>
                <td><?= h($country->iso2) ?></td>
                <td><?= h($country->continent) ?></td>
                <td><?= h($country->region) ?></td>
                <td><?= h($country->capital) ?></td>
                <td><?= $this->Number->format($country->lat) ?></td>
                <td><?= h($country->ns) ?></td>
                <td><?= $this->Number->format($country->long) ?></td>
                <td><?= h($country->ew) ?></td>
                <td><?= h($country->llunit) ?></td>
                <td><?= $this->Number->format($country->latmin) ?></td>
                <td><?= $this->Number->format($country->latmax) ?></td>
                <td><?= $this->Number->format($country->longmin) ?></td>
                <td><?= $this->Number->format($country->longmax) ?></td>
                <td><?= $this->Number->format($country->spectotal) ?></td>
                <td><?= h($country->created) ?></td>
                <td><?= h($country->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $country->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $country->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
