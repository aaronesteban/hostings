<div class="proveedors form agrega_proveedor">
<?php echo $this->Form->create('Proveedor', array(
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
		<legend><?php echo __('Agregar Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Nombre', 'class'=>'form-control'));
		echo $this->Form->input('url', array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-sm btn-success')); ?>
</div>
