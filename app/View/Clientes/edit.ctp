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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar cliente'), array('action' => 'delete', $this->Form->value('Cliente.id')), array(), __('Estás seguro que deseas eliminar a este cliente?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
