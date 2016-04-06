<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carro'), ['action' => 'edit', $carro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carro'), ['action' => 'delete', $carro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carros view large-9 medium-8 columns content">
    <h3><?= h($carro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($carro->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Cliente') ?></th>
            <td><?= $carro->has('cliente') ? $this->Html->link($carro->cliente->cedula, ['controller' => 'Clientes', 'action' => 'view', $carro->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($carro->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($carro->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($carro->modified) ?></td>
        </tr>
    </table>
</div>
