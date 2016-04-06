
    <h3><?= __('Productos') ?></h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('numero_serie') ?></th>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('modelo') ?></th>
                <th><?= $this->Paginator->sort('existencia') ?></th>
                <th><?= $this->Paginator->sort('precio') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $this->Number->format($producto->id) ?></td>
                <td><?= h($producto->numero_serie) ?></td>
                <td><?= $this->Number->format($producto->codigo) ?></td>
                <td><?= h($producto->modelo) ?></td>
                <td><?= $this->Number->format($producto->existencia) ?></td>
                <td><?= $this->Number->format($producto->precio) ?></td>
                <td>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?= $this->Html->link(__('Ver'), ['action' => 'view', $producto->id]) ?></li>
                        <li> <?= $this->Html->link(__('Editar'), ['action' => 'edit', $producto->id]) ?></li>
                        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $producto->id], ['confirm' => __('¿Desea eliminar este producto?', $producto->id)]) ?></li>
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
