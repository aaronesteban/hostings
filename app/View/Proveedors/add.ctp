<div class="proveedors form">
<?php echo $this->Form->create('Proveedor'); ?>
	<fieldset>
		<legend><?php echo __('Add Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proveedors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
