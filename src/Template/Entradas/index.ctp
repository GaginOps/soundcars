<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entrada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entradas index large-9 medium-8 columns content">
    <h3><?= __('Entradas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('producto_id') ?></th>
                <th><?= $this->Paginator->sort('vieja_cant') ?></th>
                <th><?= $this->Paginator->sort('nueva_cant') ?></th>
                <th><?= $this->Paginator->sort('en_inventario') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entradas as $entrada): ?>
            <tr>
                <td><?= $this->Number->format($entrada->id) ?></td>
                <td><?= $entrada->has('producto') ? $this->Html->link($entrada->producto->full, ['controller' => 'Productos', 'action' => 'view', $entrada->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($entrada->vieja_cant) ?></td>
                <td><?= $this->Number->format($entrada->nueva_cant) ?></td>
                <td><?= $this->Number->format($entrada->en_inventario) ?></td>
                <td><?= h($entrada->created) ?></td>
                <td><?= h($entrada->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
