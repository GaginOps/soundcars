
<!-- tenia relacion con nueva venta -->

    <h3><?= __('Clientes') ?></h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('cedula') ?></th>
                <th><?= $this->Paginator->sort('direccion') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->nombre) ?></td>
                <td><?= $this->Number->format($cliente->cedula) ?></td>
                <td><?= h($cliente->direccion) ?></td>
                <td><?= h($cliente->email) ?></td>
                <td>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->id]) ?></li>
                        <li> <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id]) ?></li>
                        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $cliente->id], ['confirm' => __('¿Desea eliminar este cliente?', $cliente->id)]) ?></li>
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
