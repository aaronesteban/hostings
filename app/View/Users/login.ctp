<div class="users form-group logueate">
<?//echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array(
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
        <legend>
            <?php echo('Por favor introduce tu usuario y contraseña'); ?>
        </legend>
        <?php 
	        echo $this->Form->input('username', array('class'=>'form-control'));
	        echo $this->Form->input('password', array('class'=>'form-control'));
    	?>
    </fieldset>
<?php echo $this->Form->button('Entrar', array('class' => 'btn btn-sm btn-success')); ?>
</div>