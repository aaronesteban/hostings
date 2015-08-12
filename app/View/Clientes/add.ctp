<div class="users form-group agrega_cliente">
<?php echo $this->Form->create('Cliente', array(
	'class' => 'form-inline',
	'inputDefaults' => array(
		'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
		'div' => array('class' => 'control-group'),
		'label' => array('class' => 'control-label'),
		'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
	)));?>
	<fieldset>
		<legend><?php echo __('Agregar Cliente'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Nombre completo','class'=>'form-control'));
		echo $this->Form->input('cif', array('label' => 'CIF/NIF','class'=>'form-control'));
		echo $this->Form->input('direccion', array('label' => 'Dirección','class'=>'form-control'));
		echo $this->Form->input('cp', array(
			'div' => array('id' => 'zipbox', 'class' => 'control-group'),
			'label' => 'CP',
			'class'=>'form-control',
			'id' => 'zip'
			));
		echo $this->Form->input('localidad', array(
			'div' => array('id' => 'citybox', 'class' => 'control-group'),
			'label' => 'Ciudad', 
			'class'=>'form-control', 
			'id' => 'city'
			));
		echo $this->Form->input('provincia', array(
			'div' => array('id' => 'statebox', 'class' => 'control-group'),
			'class'=>'form-control', 
			'id' => 'state'
			));
		echo $this->Form->input('email', array('class'=>'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->button('Enviar', array('class' => 'btn btn-sm btn-success')); ?>
</div>

<script>
		$(function() {

			$(document).ready( function() {
			
				$('#citybox').hide();
				$('#statebox').hide();

			});
			
			$('#city').focus( function() {
				
				$(this).autocomplete( "search", "" );
				
			});
			
			// OnKeyDown Function
			$("#zip").keyup(function() {
				var zip_in = $(this);
				var zip_box = $('#zipbox');
				
				if (zip_in.val().length<5)
				{
					zip_box.removeClass('error success');
				}
				else if ( zip_in.val().length>5)
				{
					zip_box.addClass('error').removeClass('success');
				}
				else if ((zip_in.val().length == 5) ) 
				{
					
					// Make HTTP Request
					$.ajax({
						url: "http://api.zippopotam.us/es/" + zip_in.val(),
						cache: false,
						dataType: "json",
						type: "GET",
						success: function(result, success) {
	
							// Slide down the options
							$('#citybox').slideDown();
							$('#statebox').slideDown();

							// ES Post Code Returns multiple location
							cuidad = [];
							set = {};
							provincia = [];
							
							// Copy cities and all possible states over
							for ( ii in result['places']){
								cuidad.push(result['places'][ii]['place name']);
								
								// Get only unique values
								state = result['places'][ii]['state'] ;
								if ( !(state in set) )
								{
									set[state] = true;
									provincia.push(state);
								}
							}
														
							$("#city").autocomplete({ source : cuidad , delay:50, disabled: false, minLength:0 });
							$("#state").autocomplete({ source: provincia, delay:50 , disabled: false, minLength:0 });
							if (result['places'].length > 0){
								$('#city').val(cuidad[0]);
								$('#state').val(provincia[0]); 
							}
							zip_box.addClass('success').removeClass('error');
						},
						error: function(result, success) {
							zip_box.removeClass('success').addClass('error');
						}
					});
				}
		});

	});
			
</script>
