<div class="col-12 my-4">
   <?php if(isset($logo) && $logo == true): ?>
    <h3><?= $this->Html->image('logo-ird.png', ['height' => '30', 'width' => '35']); ?> <?= $title ?> </h3>
    <?php else: ?>
    <h3><?= $title ?> </h3>
    <?php endif; ?>
</div>