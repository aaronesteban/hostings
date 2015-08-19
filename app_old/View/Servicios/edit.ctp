<div class="servicios form edita_servicio">
<?php echo $this->Form->create('Servicio', array(
    'class' => 'form-inline',
    'inputDefaults' => array(
        'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
        'div' => array('class' => 'control-group'),
        'label' => array('class' => 'control-label'),
        'between' => '<div class="controls">',
        'after' => '</div>',
        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
    )));?>
	<fieldset>
		<legend><?php echo __('Editar Servicio'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id', array('class'=>'form-control'));
		echo $this->Form->input('proveedor_id', array('class'=>'form-control'));
		echo $this->Form->input('name', array('class'=>'form-control'));
		echo $this->Form->input('vencimiento', array('class'=>'form-control'));
		echo $this->Form->input('pvp', array('class'=>'form-control'));
		echo $this->Form->input('cancelado', array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-sm btn-success')); ?>
</div>

