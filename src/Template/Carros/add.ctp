
<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
    <?= $this->Form->create($carro) ?>
    <fieldset>
        <legend><?= __('Add Carro') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
            echo $this->Form->input('cliente_id', ['options' => $clientes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</form>
    </div>
</div>
</div>
