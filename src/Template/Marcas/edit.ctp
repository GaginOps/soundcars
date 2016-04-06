
    <?= $this->Form->create($marca) ?>
    <fieldset>
       
        <h3>Editar Marca</h3>
        <?php
            echo $this->Form->input('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

