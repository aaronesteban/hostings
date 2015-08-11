<div class="facturas form">
<?php echo $this->Form->create('Factura', array(
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
		<legend><?php echo __('Nueva Factura'); ?></legend>
	<?php
		echo $this->Form->input('servicio_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('pvp', array('label' => 'PVP'));
		echo $this->Form->input('pagado');
	?>
	</fieldset>
<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-success')); ?>
</div>
