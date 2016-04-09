<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perdida'), ['action' => 'edit', $perdida->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perdida'), ['action' => 'delete', $perdida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perdida->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perdidas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perdida'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consumibles'), ['controller' => 'Consumibles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consumible'), ['controller' => 'Consumibles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perdidas view large-9 medium-8 columns content">
    <h3><?= h($perdida->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Consumible') ?></th>
            <td><?= $perdida->has('consumible') ? $this->Html->link($perdida->consumible->id, ['controller' => 'Consumibles', 'action' => 'view', $perdida->consumible->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($perdida->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Gasto') ?></th>
            <td><?= $this->Number->format($perdida->gasto) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($perdida->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($perdida->modified) ?></td>
        </tr>
    </table>
</div>
