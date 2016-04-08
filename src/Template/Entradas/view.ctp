<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entrada'), ['action' => 'edit', $entrada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entrada'), ['action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entradas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entrada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entradas view large-9 medium-8 columns content">
    <h3><?= h($entrada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Producto') ?></th>
            <td><?= $entrada->has('producto') ? $this->Html->link($entrada->producto->full, ['controller' => 'Productos', 'action' => 'view', $entrada->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($entrada->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Vieja Cant') ?></th>
            <td><?= $this->Number->format($entrada->vieja_cant) ?></td>
        </tr>
        <tr>
            <th><?= __('Nueva Cant') ?></th>
            <td><?= $this->Number->format($entrada->nueva_cant) ?></td>
        </tr>
        <tr>
            <th><?= __('En Inventario') ?></th>
            <td><?= $this->Number->format($entrada->en_inventario) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($entrada->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($entrada->modified) ?></td>
        </tr>
    </table>
</div>
