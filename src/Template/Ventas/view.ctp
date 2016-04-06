<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Venta'), ['action' => 'edit', $venta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venta'), ['action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ventas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ventas view large-9 medium-8 columns content">
    <h3><?= h($venta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Producto') ?></th>
            <td><?= $venta->has('producto') ? $this->Html->link($venta->producto->id, ['controller' => 'Productos', 'action' => 'view', $venta->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($venta->id) ?></td>
        </tr>
        <tr>
            <th><?= __('precio unidad') ?></th>
            <td><?= $this->Number->format($venta->precio_u) ?></td>
        </tr>
         <tr>
            <th><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($venta->cantidad) ?></td>
        </tr>
        <tr>
            <th><?= __('sub total') ?></th>
            <td><?= $this->Number->format($venta->subtotal) ?></td>
        </tr>
        
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($venta->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($venta->modified) ?></td>
        </tr>
    </table>
</div>
