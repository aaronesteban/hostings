<div class="facturas form">
<?php echo $this->Form->create('Factura'); ?>
	<fieldset>
		<legend><?php echo __('Editar Factura'); ?></legend>
	<?php
		echo $this->Form->input('servicio_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('pvp');
		echo $this->Form->input('pagado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Factura.id')), array(), __('Estás seguro que deseas eliminar esta factura?', $this->Form->value('Factura.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Facturas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
