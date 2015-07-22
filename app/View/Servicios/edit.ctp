<div class="servicios form">
<?php echo $this->Form->create('Servicio'); ?>
	<fieldset>
		<legend><?php echo __('Editar Servicio'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('proveedor_id');
		echo $this->Form->input('name');
		echo $this->Form->input('vencimiento');
		echo $this->Form->input('pvp');
		echo $this->Form->input('cancelado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Servicio.id')), array(), __('Estás seguro que deseas eliminar este servicio?', $this->Form->value('Servicio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Servicios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Proveedors'), array('controller' => 'proveedors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('controller' => 'proveedors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Facturas'), array('controller' => 'facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Factura'), array('controller' => 'facturas', 'action' => 'add')); ?> </li>
	</ul>
</div>
