<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Perdida'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consumibles'), ['controller' => 'Consumibles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consumible'), ['controller' => 'Consumibles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perdidas index large-9 medium-8 columns content">
    <h3><?= __('Perdidas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('gasto') ?></th>
                <th><?= $this->Paginator->sort('consumible_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perdidas as $perdida): ?>
            <tr>
                <td><?= $this->Number->format($perdida->id) ?></td>
                <td><?= $this->Number->format($perdida->gasto) ?></td>
                <td><?= $perdida->has('consumible') ? $this->Html->link($perdida->consumible->id, ['controller' => 'Consumibles', 'action' => 'view', $perdida->consumible->id]) : '' ?></td>
                <td><?= h($perdida->created) ?></td>
                <td><?= h($perdida->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perdida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perdida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perdida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perdida->id)]) ?>
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
