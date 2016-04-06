
    <h3>Total De Ventas</h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('cliente') ?></th>
                <th><?= $this->Paginator->sort('carro') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
                <th><?= __('Cotizaciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventatotales as $ventatotale): ?>
            <tr>
                <td><?= $ventatotale->has('cliente') ? $this->Html->link($ventatotale->cliente->full, ['controller' => 'Clientes', 'action' => 'view', $ventatotale->cliente->id]) : '' ?></td> 
                <td><?= h($ventatotale->created) ?></td>
                <td>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?= $this->Html->link(__('Ver'), ['action' => 'view', $ventatotale->id]) ?></li>
                        <li> <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ventatotale->id]) ?></li>
                        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $ventatotale->id], ['confirm' => __('¿Desea eliminar?', $ventatotale->id)]) ?></li>
                      </ul>
                    </li>                   
                </td>
                <td>
                    <div class="related">
                            <table cellpadding="0" cellspacing="0" class="table table-bordered">
                                <tr>
                                    <th><?= __('producto') ?></th>
                                    <th><?= __('precio_u') ?></th>
                                    <th><?= __('cantidad') ?></th>
                                    <th><?= __('subtotal') ?></th>
                                </tr>
                                <?php foreach ($ventatotale->items as $item): ?>
                                <tr>
                                    <td><?= $item->has('producto') ? $this->Html->link($item->producto->full, ['controller' => 'Productos', 'action' => 'view', $item->producto->id]) : '' ?></td>
                                    <td><?= h($item->precio_u) ?></td>
                                    <td><?= h($item->cantidad) ?></td>
                                    <td><?= h($item->subtotal) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                            
                        </div>                      
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
