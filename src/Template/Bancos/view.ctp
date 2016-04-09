<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banco'), ['action' => 'edit', $banco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banco'), ['action' => 'delete', $banco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ventatotales'), ['controller' => 'Ventatotales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ventatotale'), ['controller' => 'Ventatotales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bancos view large-9 medium-8 columns content">
    <h3><?= h($banco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Banc') ?></th>
            <td><?= h($banco->banc) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($banco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($banco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($banco->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ventatotales') ?></h4>
        <?php if (!empty($banco->ventatotales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Total') ?></th>
                <th><?= __('Cliente Id') ?></th>
                <th><?= __('Tipopago') ?></th>
                <th><?= __('Banco Id') ?></th>
                <th><?= __('Descuentot') ?></th>
                <th><?= __('Valort') ?></th>
                <th><?= __('Restt') ?></th>
                <th><?= __('Espera') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($banco->ventatotales as $ventatotales): ?>
            <tr>
                <td><?= h($ventatotales->id) ?></td>
                <td><?= h($ventatotales->total) ?></td>
                <td><?= h($ventatotales->cliente_id) ?></td>
                <td><?= h($ventatotales->tipopago) ?></td>
                <td><?= h($ventatotales->banco_id) ?></td>
                <td><?= h($ventatotales->descuentot) ?></td>
                <td><?= h($ventatotales->valort) ?></td>
                <td><?= h($ventatotales->restt) ?></td>
                <td><?= h($ventatotales->espera) ?></td>
                <td><?= h($ventatotales->created) ?></td>
                <td><?= h($ventatotales->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ventatotales', 'action' => 'view', $ventatotales->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ventatotales', 'action' => 'edit', $ventatotales->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ventatotales', 'action' => 'delete', $ventatotales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ventatotales->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
