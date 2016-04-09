<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Perdidas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consumibles'), ['controller' => 'Consumibles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consumible'), ['controller' => 'Consumibles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perdidas form large-9 medium-8 columns content">
    <?= $this->Form->create($perdida) ?>
    <fieldset>
        <legend><?= __('Add Perdida') ?></legend>
        <?php
            echo $this->Form->input('gasto');
            echo $this->Form->input('consumible_id', ['options' => $consumibles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
