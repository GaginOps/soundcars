<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ventatotales'), ['controller' => 'Ventatotales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ventatotale'), ['controller' => 'Ventatotales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bancos index large-9 medium-8 columns content">
    <h3><?= __('Bancos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('banc') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bancos as $banco): ?>
            <tr>
                <td><?= $this->Number->format($banco->id) ?></td>
                <td><?= h($banco->banc) ?></td>
                <td><?= h($banco->created) ?></td>
                <td><?= h($banco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $banco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]) ?>
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
