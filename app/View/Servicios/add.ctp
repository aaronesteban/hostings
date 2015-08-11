<div class="servicios form">
<?php echo $this->Form->create('Servicio', array(
    'class' => 'form-group',
    'inputDefaults' => array(
        'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
        'div' => array('class' => 'control-group'),
        'label' => array('class' => 'control-label'),
        'between' => '<div class="controls">',
        'after' => '</div>',
        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
    )));?>
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
<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-success')); ?>
</div>
