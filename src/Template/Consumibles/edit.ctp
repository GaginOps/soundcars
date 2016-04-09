<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $consumible->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $consumible->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Consumibles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Perdida'), ['controller' => 'Perdida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Perdida'), ['controller' => 'Perdida', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consumibles form large-9 medium-8 columns content">
    <?= $this->Form->create($consumible) ?>
    <fieldset>
        <legend><?= __('Edit Consumible') ?></legend>
        <?php
            echo $this->Form->input('consu');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
