<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consumible'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Perdida'), ['controller' => 'Perdida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Perdida'), ['controller' => 'Perdida', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consumibles index large-9 medium-8 columns content">
    <h3><?= __('Consumibles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('consu') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consumibles as $consumible): ?>
            <tr>
                <td><?= $this->Number->format($consumible->id) ?></td>
                <td><?= h($consumible->consu) ?></td>
                <td><?= h($consumible->created) ?></td>
                <td><?= h($consumible->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consumible->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consumible->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consumible->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consumible->id)]) ?>
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
