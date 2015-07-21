<div class="facturas form">
<?php echo $this->Form->create('Factura'); ?>
	<fieldset>
		<legend><?php echo __('Edit Factura'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('servicio_id');
		echo $this->Form->input('pagado');
		echo $this->Form->input('fecha');
		echo $this->Form->input('pvp');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Factura.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Factura.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
