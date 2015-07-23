<div class="servicios form">
<?php echo $this->Form->create('Servicio'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Servicio'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('proveedor_id');
		echo $this->Form->input('name', array('label' => 'Nombre'));
		echo $this->Form->input('vencimiento');
		echo $this->Form->input('pvp', array('label' => 'PVP'));
		echo $this->Form->input('cancelado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
