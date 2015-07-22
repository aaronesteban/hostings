<li><?=$this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index'));?></li>
<li><?=$this->Html->link('Clientes', array('controller' => 'clientes', 'action' => 'index'));?></li>
<li><?=$this->Html->link('Servicios', array('controller' => 'servicios', 'action' => 'index'));?></li>
<li><?=$this->Html->link('Proveedores', array('controller' => 'proveedors', 'action' => 'index'));?></li>
<li><?=$this->Html->link('Facturas', array('controller' => 'facturas', 'action' => 'index'));?></li>
<?if(!empty($this->Session->read('Auth.User'))):?>
	<li><a href="<?= Router::url(array('controller' => 'users', 'action' => 'logout')); ?>">Logout</a></li>
	<li><a href="<?= Router::url(array('controller' => 'users', 'action' => 'add')); ?>">Registrar usuarios</a></li>
<?else:?>
	<li><a href="<?= Router::url(array('controller' => 'users', 'action' => 'login')); ?>">Login</a></li>
<?endif;?>
