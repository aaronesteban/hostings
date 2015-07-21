<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Cliente'); ?></legend>
	<?php
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
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista de Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
