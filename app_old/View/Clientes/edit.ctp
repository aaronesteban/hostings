<div class="clientes form edita_cliente">
	<?php echo $this->Form->create('Cliente', array(
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
			<legend><?php echo __('Editar Cliente'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name', array('label' => 'Nombre completo', 'class'=>'form-control'));
			echo $this->Form->input('cif', array('label' => 'CIF/NIF', 'class'=>'form-control'));
			echo $this->Form->input('direccion', array('label' => 'Dirección', 'class'=>'form-control'));
			echo $this->Form->input('cp', array('label' => 'CP', 'class'=>'form-control'));
			echo $this->Form->input('localidad', array('class'=>'form-control'));
			echo $this->Form->input('provincia', array('class'=>'form-control'));
			echo $this->Form->input('email', array('class'=>'form-control'));
		?>
		</fieldset>
	<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-sm btn-success')); ?>
</div>

