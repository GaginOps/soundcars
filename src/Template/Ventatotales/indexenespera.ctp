
    <h3>Ventas en espera</h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('total') ?></th>
                <th><?= $this->Paginator->sort('cliente_id') ?></th>
                <th><?= $this->Paginator->sort('tipopago') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventatotales as $ventatotale): ?>
            <tr>
                <td><?= $this->Number->format($ventatotale->id) ?></td>
                <td><?= $this->Number->format($ventatotale->total) ?></td>
                <td><?= $ventatotale->has('cliente') ? $this->Html->link($ventatotale->cliente->cedula, ['controller' => 'Clientes', 'action' => 'view', $ventatotale->cliente->id]) : '' ?></td>
                <td><?= h($ventatotale->tipopago) ?></td>
                <td><?= h($ventatotale->created) ?></td>
                <td><?= h($ventatotale->modified) ?></td>
                <td>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?= $this->Html->link(__('Ver'), ['action' => 'viewenespera', $ventatotale->id]) ?></li>
                        <li> <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ventatotale->id]) ?></li>
                        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $ventatotale->id], ['confirm' => __('¿Desea eliminar?', $ventatotale->id)]) ?></li>
                      </ul>
                    </li>                   
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