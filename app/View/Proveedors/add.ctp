<div class="proveedors form">
<?php echo $this->Form->create('Proveedor'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Nombre'));
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
