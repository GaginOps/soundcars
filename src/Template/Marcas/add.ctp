<div class="container">
<div class="col-lg-6 col-lg-offset-3 text-center">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">

    <?= $this->Form->create($marca) ?>
    <fieldset>
        <legend><?= __('Add Marca') ?></legend>
        <?php
            echo $this->Form->input('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</form>
    </div>
</div>
</div>