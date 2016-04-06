
    <h3><?= h($empresa->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($empresa->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($empresa->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($empresa->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Productos') ?></h4>
        <?php if (!empty($empresa->productos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Numero Serie') ?></th>
                <th><?= __('Codigo') ?></th>
                <th><?= __('Modelo') ?></th>
                <th><?= __('Caracteristicas') ?></th>
                <th><?= __('Existencia') ?></th>
                <th><?= __('Precio') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->productos as $productos): ?>
            <tr>
                <td><?= h($productos->id) ?></td>
                <td><?= h($productos->numero_serie) ?></td>
                <td><?= h($productos->codigo) ?></td>
                <td><?= h($productos->modelo) ?></td>
                <td><?= h($productos->caracteristicas) ?></td>
                <td><?= h($productos->existencia) ?></td>
                <td><?= h($productos->precio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $productos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $productos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $productos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
