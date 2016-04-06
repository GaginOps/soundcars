
    <h3><?= __('Empresas') ?></h3>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('creada') ?></th>
                <th><?= $this->Paginator->sort('modificada') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresas as $empresa): ?>
            <tr>
                <td><?= $this->Number->format($empresa->id) ?></td>
                <td><?= h($empresa->nombre) ?></td>
                <td><?= h($empresa->created) ?></td>
                <td><?= h($empresa->modified) ?></td>
                <td>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><?= $this->Html->link(__('Ver'), ['action' => 'view', $empresa->id]) ?></li>
                        <li> <?= $this->Html->link(__('Editar'), ['action' => 'edit', $empresa->id]) ?></li>
                        <li><?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $empresa->id], ['confirm' => __('¿Desea eliminar a este empresa?', $empresa->id)]) ?></li>
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
