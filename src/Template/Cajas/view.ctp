<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Caja'), ['action' => 'edit', $caja->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Caja'), ['action' => 'delete', $caja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caja->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cajas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caja'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cajas view large-9 medium-8 columns content">
    <h3><?= h($caja->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($caja->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= $this->Number->format($caja->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($caja->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($caja->modified) ?></td>
        </tr>
    </table>
</div>
