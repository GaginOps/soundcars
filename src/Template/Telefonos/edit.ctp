<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $telefono->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $telefono->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Telefonos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="telefonos form large-9 medium-8 columns content">
    <?= $this->Form->create($telefono) ?>
    <fieldset>
        <legend><?= __('Edit Telefono') ?></legend>
        <?php
            echo $this->Form->input('numero');
            echo $this->Form->input('otronumero');
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
