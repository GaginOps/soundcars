
<!-- tiene relacion con nueva venta, lista de venta -->
    <h3><?= h($cliente->nombre)  ?></h3>
    <table class="table table-hover">
         <tr>
            
            <td><?= __('C.I:') ?></td>
            <td><?= h($cliente->cedula) ?></td>
        </tr>
        <tr>
            
            <td><?= __('Direccion') ?></td>
            <td><?= h($cliente->direccion) ?></td>
        </tr>
        <tr>
            
            <td><?= __('Email') ?></td>
            <td><?= h($cliente->email) ?></td>
        </tr>

        <tr>
            
            <td><?= __('Creado') ?></td>
            <td><?= h($cliente->created) ?></td>
        </tr>
        <tr>
            
            <td><?= __('Modificado') ?></td>
            <td><?= h($cliente->modified) ?></td>
        </tr>
        <tr>
        <td><?= __('Sexo') ?></td>
       <td> <?= $this->Text->autoParagraph(h($cliente->sexo)); ?></td>
        </tr>
    </table>
    <div class="related">
        <h3><?= __('Registro De Compras') ?></h3>
        <?php if (!empty($cliente->ventatotales)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('total') ?></th>
                <th><?= __('Creado') ?></th>
                <th><?= __('Modificado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->ventatotales as $ventat): ?>
            <tr>
                <td><?= h($ventat->id) ?></td>
                <td><?= h($ventat->total) ?></td>
                <td><?= h($ventat->created) ?></td>
                <td><?= h($ventat->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Ventatotales', 'action' => 'view', $ventat->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Ventatotales', 'action' => 'edit', $ventat->id]) ?>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

