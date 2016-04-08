<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Telefono'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="telefonos index large-9 medium-8 columns content">
    <h3><?= __('Telefonos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('otronumero') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($telefonos as $telefono): ?>
            <tr>
                <td><?= $this->Number->format($telefono->id) ?></td>
                <td><?= h($telefono->numero) ?></td>
                <td><?= h($telefono->otronumero) ?></td>
                <td><?= $telefono->has('cliente') ? $this->Html->link($telefono->cliente->full, ['controller' => 'Clientes', 'action' => 'view', $telefono->cliente->id]) : '' ?></td>
                <td><?= h($telefono->created) ?></td>
                <td><?= h($telefono->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $telefono->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telefono->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telefono->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefono->id)]) ?>
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
