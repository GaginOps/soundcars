<script type="text/javascript">
$(document).ready(function(){
    $('.addtocar').on('click',function(event){
        $.ajax({
            type:"POST",
            url:"",
            data:{
                id:$(this).attr('id'),
                cantidad:1
            },
            dataType:"html",
            success:function(data){
                alert("exito");
            },
            error:function(){
                alert("error");
            }
        });
        return false;
    });
});
</script>


    <h3><?= h($producto->numero_serie) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Numero Serie') ?></th>
            <td><?= h($producto->numero_serie) ?></td>
        </tr>
        <tr>
            <th><?= __('Modelo') ?></th>
            <td><?= h($producto->modelo) ?></td>
        </tr>
        <tr>
            <th><?= __('Caracteristicas') ?></th>
            <td><?= h($producto->caracteristicas) ?></td>
        </tr>
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($producto->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Existencia') ?></th>
            <td><?= $this->Number->format($producto->existencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Precio') ?></th>
            <td><?= $this->Number->format($producto->precio) ?></td>
        </tr>
        <tr>
            <th><?= __('photo') ?></th>
            <td><img src="<?php echo $producto->dir. $producto->photo; ?>"></td>  
        </tr>
        <tr>
            <th><?= __('Empresa') ?></th>
            <td><?= $producto->has('empresa') ? $this->Html->link($producto->empresa->nombre, ['controller' => 'Empresas', 'action' => 'view', $producto->empresa->id]) : '' ?></td>
        </tr>
        
        <tr>
            <th><?= __('Marca') ?></th>
            <td><?= $producto->has('marca') ? $this->Html->link($producto->marca->nombre, ['controller' => 'Marcas', 'action' => 'view', $producto->marca->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Creado') ?></th>
            <td><?= h($producto->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modificado') ?></th>
            <td><?= h($producto->modified) ?></td>
        </tr>

       
    </table>
    
</div>
