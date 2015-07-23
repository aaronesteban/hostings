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
