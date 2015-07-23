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

