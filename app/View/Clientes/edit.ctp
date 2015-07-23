<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Editar Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => 'Nombre completo'));
		echo $this->Form->input('cif', array('label' => 'CIF/NIF'));
		echo $this->Form->input('direccion', array('label' => 'Dirección'));
		echo $this->Form->input('cp', array('label' => 'CP'));
		echo $this->Form->input('localidad');
		echo $this->Form->input('provincia');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>

