<script>
  $(document).ready(function () {
        
         $('#agregarauto').on('click',function(){
            var ca=$('#carro').val();
            var ma=$('#marca').val();
            var ye=$('#year').val();
            var mo=$('#modelo').val();
            var ti=$('#tipo').val();
            var v=2;
            $.ajax({
                data: {"carro":ca,"validador":v,"marca":ma,"year":ye,"modelo":mo,"tipo":ti},
                url:   '',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        
                },
                success:  function (response){
                    console.log(response);
                   
                                 }
                 });
         });

         $('#agregartlf').on('click',function(){
            var nu=$('#numero').val();
            var v=1;
            $.ajax({
                data: {"numero":nu,"validador":v},
                url:   '',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        
                },
                success:  function (response){
                    console.log(response);
                   
                                 }
                 });
         });
         });
     
</script>

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
        <table>
            <tr>
                <td><?= $this->Form->input('numero',['id'=>'numero','label'=>'nuevo numero telefonico']) ?></td>
                <td><?= $this->Form->button('agregar telefono',['id'=>'agregartlf','type'=>'button']) ?></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><?= $this->Form->input('carro',['id'=>'carro','label'=>'nuevo auto']) ?></td>
                <td><?= $this->Form->input('marca',['label'=>'marca','placeholder'=>'ingrese el auto del cliente']);?></td>
                <td><?= $this->Form->input('year',['label'=>'Año','placeholder'=>'ingrese el auto del cliente']);?></td>
                <td><?= $this->Form->input('modelo',['label'=>'modelo','placeholder'=>'ingrese el auto del cliente']);?></td>
                <td><?= $this->Form->input('tipo',['label'=>'tipo de auto','options'=>['auto'=>'carro','camioneta'=>'camioneta']]);?><td>
                <td><?= $this->Form->button('agregar auto',['id'=>'agregarauto','type'=>'button']) ?></td>
            </tr>
        </table>
        
    </div>

