<div class="users form-group">
<?php echo $this->Form->create('Cliente', array(
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
<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-success')); ?>
</div>
