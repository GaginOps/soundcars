<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Telefono'), ['action' => 'edit', $telefono->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Telefono'), ['action' => 'delete', $telefono->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefono->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Telefonos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Telefono'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="telefonos view large-9 medium-8 columns content">
    <h3><?= h($telefono->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= h($telefono->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Otronumero') ?></th>
            <td><?= h($telefono->otronumero) ?></td>
        </tr>
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $telefono->has('cliente') ? $this->Html->link($telefono->cliente->full, ['controller' => 'Clientes', 'action' => 'view', $telefono->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($telefono->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($telefono->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($telefono->modified) ?></td>
        </tr>
    </table>
</div>
