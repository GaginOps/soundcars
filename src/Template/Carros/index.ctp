<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Carro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="carros index large-9 medium-8 columns content">
    <h3><?= __('Carros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descripcion') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carros as $carro): ?>
            <tr>
                <td><?= $this->Number->format($carro->id) ?></td>
                <td><?= h($carro->descripcion) ?></td>
                <td><?= $carro->has('cliente') ? $this->Html->link($carro->cliente->cedula, ['controller' => 'Clientes', 'action' => 'view', $carro->cliente->id]) : '' ?></td>
                <td><?= h($carro->created) ?></td>
                <td><?= h($carro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $carro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id)]) ?>
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
