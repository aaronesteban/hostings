<div class="facturas form agrega_factura">
<?php echo $this->Form->create('Factura', array(
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
		<legend><?php echo __('Nueva Factura'); ?></legend>
	<?php
		echo $this->Form->input('servicio_id', array('class'=>'form-control'));
		echo $this->Form->input('fecha', array('class'=>'form-control'));
		echo $this->Form->input('pvp', array('label' => 'PVP', 'class'=>'form-control'));
		echo $this->Form->input('pagado', array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-sm btn-success')); ?>
</div>
