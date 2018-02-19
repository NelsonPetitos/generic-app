<?php $this->start('Navbar'); ?>
    <?= $this->element('navbar', ['activeMenu' => 3]); ?>
<?php $this->end(); ?>


<?php $this->start('Breadcrumb'); ?>
    <li class="breadcrumb-item active">Collections d'herbier</li>
<?php $this->end(); ?>
 
 
<?php $this->start('Title'); ?>
    <?= $this->element('title', ['title' => 'Les collections d\'herbier']) ?>
<?php $this->end(); ?>


<?php $this->start('Menu'); ?>
    <?= $this->element('menu', ['activeMenu' => 5]); ?>
<?php $this->end(); ?>


<div class="row">
   <div class="col-12">
    <table class="table table-sm table-striped table-bordered table-hover">
        <thead class="thead-dark" >
            <tr>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('major') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locality') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('long') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gases as $gase): ?>
            <tr>
                <th scope="row"><?= $gase->has('country') ? $this->Html->link($gase->country->coname, ['controller' => 'Countries', 'action' => 'view', $gase->country->id]) : '' ?></th>
                <td><?= h($gase->major) ?></td>
                <td><?= h($gase->locality) ?></td>
                <td><?= $this->Number->format($gase->lat) ?></td>
                <td><?= $this->Number->format($gase->long) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gase->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
   </div>
    
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </nav>
</div>
