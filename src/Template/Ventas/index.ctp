

   <h3><?= __('Buscar producto') ?></h3>
            
             <?php
  
  echo $this->Form->input('buscador',['label'=>'','id'=>'b','placeholder'=>'Buscar producto','options'=>$producto]);
 
   echo $this->Form->button('enviar',['id'=>'enviar']); 
    ?>


<div class="row grid-divider">
    <div class="col-sm-6">
      <div class="col-padding">
         
            <div class="form-area"> 
         
            
            
            
            
                <?= $this->Form->create($venta) ?>
                <fieldset>
                    <h3>Agregar Venta</h3>
                    <?php
                        
                        echo $this->Form->input('produc',['disabled','label'=>'Producto elegido','options'=>$producto]);
                        echo $this->Form->input('producto_id',['type'=>'hidden','options'=>$producto]);
                        echo $this->Form->input('precio_u',['label'=>'Precio unidad','readonly']);
                        echo $this->Form->input('cantidad');
                        echo $this->Form->input('subtotal',['readonly']);
                        echo $this->Form->input('descuento',['label'=>'¿desea realizar un descuento?','options'=>[
                          'no'=>'no','si'=>'si']]);
                        echo $this->Form->input('valor',['readonly']);
                        echo $this->Form->input('rest',['readonly']);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
     
            
            <?= $this->Form->end() ?>
            
            
            
            
</div>
    </div>
            </div>
    
          </form>   
            
    
    
    
    
    
    
    

<div class="row grid-divider">
    <div class="col-sm-6">
      <div class="col-padding">
          <div class="form-area">  
       
          
          
          
          
          
         
    <?= $this->Form->create($ventatotale) ?>
    <fieldset>
        <h3><?= __('Datos de Venta') ?></h3>
        <?php

            echo $this->Form->input('cliente_id', ['options' => $clientes]);
            echo $this->Form->input('tipopago',['id'=>'tipopago','label'=>'Tipo de pago','options'=>['efectivo'=>'efectivo','punto'=>'punto']]);
            echo $this->Form->input('banco',['label'=>'banco','disabled','id'=>'banco']);
        ?>
        
        
       
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">CREAR CLIENTE NUEVO
</button>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro De Cliente</h4>
      </div>
      <div class="modal-body">
        	
    <?= $this->Form->create($cliente) ?>
    <fieldset>
    <h3><?= __('Agregar Nuevo Cliente') ?></h3>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('cedula');
            echo $this->Form->input('edad',['options'=>
                ['18 a 21'=>'18 a 21',
                '22 a 25'=>'22 a 25',
                '26 a 30'=>'26 a 35',
                '36 a 40'=>'41 a 45',
                '46 a 50'=>'46 a 50',
                '51 en adelante'=>'51 en adelante'
                ]
                ]);
            echo $this->Form->input('sexo',['options'=>['M','F']]);
            echo $this->Form->input('direccion');
            echo $this->Form->input('email');
            echo $this->Form->input('numero',['label'=>'numero de telefono']);
            echo $this->Form->input('otronumero',['label'=>'numero de telefono opcional']);
            echo $this->Form->input('carro',['label'=>'automovil','placeholder'=>'ingrese el auto del cliente']);
            echo $this->Form->input('marca',['label'=>'marca','placeholder'=>'ingrese el auto del cliente']);
            echo $this->Form->input('year',['label'=>'Año','placeholder'=>'ingrese el auto del cliente']);
            echo $this->Form->input('modelo',['label'=>'modelo','placeholder'=>'ingrese el auto del cliente']);
            echo $this->Form->input('tipo',['label'=>'tipo de auto','options'=>['auto'=>'carro','camioneta'=>'camioneta']]);
        ?>
    </fieldset>
    <td><?= $this->Form->button('Crear cliente',['id'=>'ncliente','type'=>'button']) ?></td>
    
      </div> 
        </div> 
      </div> 
          
          
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
            
    
          </form>
 </div>
    </div> 
        </div>
    </div>
       
          
           <h3><?= __('Ventas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('producto') ?></th>
                <th><?= $this->Paginator->sort('precio_u') ?></th>
                <th><?= $this->Paginator->sort('cantidad') ?></th>
                <th><?= $this->Paginator->sort('subtotal') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            
        </thead>
        <tbody>
            <?php foreach ($ventas as $venta): ?>
            <tr>
                <td><?= $this->Number->format($venta->id) ?></td>
                <td><?= $venta->has('producto') ? $this->Html->link($venta->producto->numero_serie, ['controller' => 'Productos', 'action' => 'view', $venta->producto->id]) : '' ?></td>
                <td><?= $this->Number->format($venta->precio_u) ?></td>
                <td><?= $this->Number->format($venta->cantidad) ?></td>
                <td><?= $this->Number->format($venta->subtotal) ?></td>
                <td><?= h($venta->created) ?></td>
                <td><?= h($venta->modified) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $venta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
          
          
        
        
    </fieldset>
    <table>
        <tr>
            <th>Total Bs.</th>
        </tr>
        <tr>
        <?php foreach ($total as $t): ?>
        
          <td>
            <?= $this->Number->format($t->total) ?>
          </td>
        </tr>
        <tr>
          <th>
          Descuento de Bs:
          </th>
        </tr>
        <tr>
           <td>
          <?= $this->Number->format($t->resta) ?>
          </td>
        </tr>
        <tr>
          <th>
          Total real Bs:
          </th>
        </tr>
        <tr>
           <td>
          <?= $this->Number->format($t->total-$t->resta) ?>
          </td>
        </tr>
         <?php endforeach; ?>
        <
    </table>
    <?php echo $this->Form->input('total', ['type' => 'hidden','value'=>$t->total-$t->resta]); ?>
    <table>
      <tr>
        <td><?= $this->Form->button('Vender',['id'=>'venta','type'=>'button']) ?></td>
        <td><?= $this->Form->button('Enviar a espera',['id'=>'espera','type'=>'button']) ?></td>
      </tr> 
    </table>
   
</div>
</div>
</div>

<script>
  $(document).ready(function () {
        $('#venta').on('click',function(){
            var c=$('#cliente-id').val();
            var t=$('#tipopago').val();
            var v=$('#total').val();
            var b=$('#banco').val();
            $.ajax({
                data: {"cliente_id" : c,"tipopago": t, "total":v,"banco":b},
                url:   'ventatotales/add',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                        location.reload();
                },
                success:  function (response){
                    console.log(response);        
                                 }
                 });
         });
        $('#espera').on('click',function(){
            var c=$('#cliente-id').val();
            var t=$('#tipopago').val();
            var v=$('#total').val();
            var b=$('#banco').val();
            var e=1;
            $.ajax({
                data: {"cliente_id" : c,"tipopago": t, "total":v,"banco":b,"espera":e},
                url:   'ventatotales/enespera',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                        location.reload();
                },
                success:  function (response){
                    console.log(response);        
                                 }
                 });
         });
        $('#enviar').on('click',function(){
            var producto=$('#b').val();

            var consulta=$.ajax({
                data: {"producto" : producto},
                url:   '',
                type:  'post',
                dataType:'json',
                beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");

                },
                success:  function (response){
                    console.log(response);        
                                 }
         }); 
       consulta.done(function (data) {
             console.log(data);
             $("#producto-id").val(data.miproducto);
             $("#produc").val(data.miproducto);
             $("#precio-u").val(data.preciou);

          }); 
        });



        
         $('#cantidad').blur(mult)
         function mult(){
          var pre= $("#precio-u").val();
          var cantidad= $("#cantidad").val();
          var valor=pre*cantidad;
          $("#subtotal").val(valor);
         }

          $('#valor').blur(resta)
         function resta(){
          var s= $("#subtotal").val();
          var v= $("#valor").val();
          var t=s-v;
          $("#rest").val(t);
         }


        
      
         $('#ncliente').on('click',function(){
            var n=$('#nombre').val();
            var c=$('#cedula').val();
            var e=$('#edad').val();
            var s=$('#sexo').val(); 
            var d=$('#direccion').val();
            var em=$('#email').val();
            var nu=$('#numero').val();
            var on=$('#otronumero').val();
            var ca=$('#carro').val();
            var ma=$('#marca').val();
            var ye=$('#year').val();
            var mo=$('#modelo').val();
            var ti=$('#tipo').val();
            $.ajax({
                data: {"nombre" : n,"cedula": c, "edad":e,"sexo":s,"direccion":d,"email":em,"numero":nu,"otronumero":on,"carro":ca
                ,"marca":ma,"year":ye,"modelo":mo,"tipo":ti},
                url:   'clientes/add2',
                type:  'post',
                dataType:'json', beforeSend: function (xhr) {
                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        console.log("enviado");
                        location.reload();
                },
                success:  function (response){
                    console.log(response);
                   
                                 }
                 });
         });

         

         $('#b').select2();

         $('#cliente-id').select2();
        $("#tipopago").change(function(){
        if($('#tipopago').val()=='punto'){
            $('#banco').prop("disabled", false);
        }else{
            $('#banco').prop("disabled", true);
        }
        });
        
        $("#descuento").change(function(){
        if($('#descuento').val()=='si'){
            $('#valor').prop("readonly", false);
        }else{
            $('#valor').prop("readonly", true);
        }
        }); 
      });
</script>


