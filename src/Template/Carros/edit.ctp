<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Carros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="carros form large-9 medium-8 columns content">
    <?= $this->Form->create($carro) ?>
    <fieldset>
        <legend><?= __('Edit Carro') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
