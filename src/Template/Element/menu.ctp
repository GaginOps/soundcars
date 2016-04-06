<?php 

$session = $this->request->session();

if ($session->check('Auth.User.id')) {
    ?>

<nav class="navbar navbar-default ">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><?php echo $this->Html->link("Menu", array('controller'=>'Pages', 'action'=>'display', 'home'));?></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Empleados<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link("Listado De Empleados", array('controller'=>'users', 'action'=>'index'));?>
            <li><?php echo $this->Html->link("Agregar Nuevo Empleado", array('controller'=>'users', 'action'=>'add'));?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clientes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link("Listado De Clientes", array('controller'=>'clientes', 'action'=>'index'));?>
            <li><?php echo $this->Html->link("Agregar Nuevo Cliente", array('controller'=>'clientes', 'action'=>'add'));?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Empresas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link("Listado De Empresas", array('controller'=>'empresas', 'action'=>'index'));?>
            <li><?php echo $this->Html->link("Agregar Nueva Empresa", array('controller'=>'empresas', 'action'=>'add'));?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Marcas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link("Listado De Marcas", array('controller'=>'marcas', 'action'=>'index'));?>
            <li><?php echo $this->Html->link("Agregar Una Nueva Marca", array('controller'=>'marcas', 'action'=>'add'));?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Productos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link("Listado De productos", array('controller'=>'productos', 'action'=>'index'));?>
            <li><?php echo $this->Html->link("Agregar Una Nuevo aproducto", array('controller'=>'productos', 'action'=>'add'));?></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ventas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link("Panel de ventas", array('controller'=>'ventas', 'action'=>'index'));?>
           <li><?php echo $this->Html->link("Listado De Todas las Ventas", array('controller'=>'ventatotales', 'action'=>'index'));?>
               <li><?php echo $this->Html->link("Listado De Ventas En Espera", array('controller'=>'ventatotales', 'action'=>'indexenespera'));?>
          </ul>
        </li>


      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo $this->Html->link('Salir',array('controller' => 'users', 'action' => 'logout')); ?>
</li>
      </ul>
    </div>
  </div>
</nav>
<?php }?>