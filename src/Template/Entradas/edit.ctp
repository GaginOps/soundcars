<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $entrada->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Entradas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entradas form large-9 medium-8 columns content">
    <?= $this->Form->create($entrada) ?>
    <fieldset>
        <legend><?= __('Edit Entrada') ?></legend>
        <?php
            echo $this->Form->input('producto_id', ['options' => $productos]);
            echo $this->Form->input('vieja_cant');
            echo $this->Form->input('nueva_cant');
            echo $this->Form->input('en_inventario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
