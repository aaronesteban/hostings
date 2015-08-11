<div class="proveedors form">
<?php echo $this->Form->create('Proveedor', array(
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
		<legend><?php echo __('Editar Proveedor'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Nombre'));
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-success')); ?>
</div>

