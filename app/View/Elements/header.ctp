<ul class="nav nav-tabs">	
	
	<li <?= ($this->params['controller'] == 'clientes') ? 'class="active"' : '' ; ?>>
		<?=$this->Html->link('Clientes', array('controller' => 'clientes', 'action' => 'index'));?>
	</li>

	<li <?= ($this->params['controller'] == 'servicios') ? 'class="active"' : '' ; ?>>
		<?=$this->Html->link('Servicios', array('controller' => 'servicios', 'action' => 'index'));?>
	</li>

	<li <?= ($this->params['controller'] == 'proveedors') ? 'class="active"' : '' ; ?>>
		<?=$this->Html->link('Proveedores', array('controller' => 'proveedors', 'action' => 'index'));?>
	</li>

	<li <?= ($this->params['controller'] == 'facturas') ? 'class="active"' : '' ; ?>>
		<?=$this->Html->link('Facturas', array('controller' => 'facturas', 'action' => 'index'));?>
	</li>

	<li <?= ($this->params['controller'] == 'users') ? 'class="active"' : '' ; ?>>
		<?= $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index'));?>
	</li>

	<?if(!empty($this->Session->read('Auth.User'))):?>
		<li class="logout"><a href="<?= Router::url(array('controller' => 'users', 'action' => 'logout')); ?>">Salir</a></li>
	<?endif;?>

</ul>

