<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Caja'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cajas index large-9 medium-8 columns content">
    <h3><?= __('Cajas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cajas as $caja): ?>
            <tr>
                <td><?= $this->Number->format($caja->id) ?></td>
                <td><?= $this->Number->format($caja->numero) ?></td>
                <td><?= h($caja->created) ?></td>
                <td><?= h($caja->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caja->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caja->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caja->id)]) ?>
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
