<?php

$config = array(
	'semanas_aviso' => '+3 weeks',
	'Email' => array(
		'Subject' => array(
			'first_email' => 'Primer aviso',
			'second_email' => 'Segundo aviso: paga la coca',
			'third_email' => 'Tercer aviso kiooo',
			'pagado_email' => 'Factura pagada', 
		),
		'Text' => array(
			'first_text' => 'Primer texto',
			'second_text' => 'Segundo texto',
			'third_email' => 'Tercer texto',
			'pagado_email' => 'texto pagado'
		),
	),
	'factura' => array(
		'irpf' => '15',
		'iva' => '21'
		),
	'Facturacion' => array(
		'nombre' => 'De Ramos & Serch',
		'cif' => '29085354-G',
		'direccion' => 'C/Doctor Alcalay Nª15',
		'cp' => '50006',
		'localidad' => 'Zaragoza',
		'pais' => 'España',
		'email' => 'ennety@gmail.com'
		//'email' => 'hola@deramos&serch.com'
	),

	'Stripe' => array(
		'TestSecret' => '00000000000000',
		'LiveSecret' => '0000000000000000',
		'TestPublishable' => '0000000000000000',
		'LivePublishable' => '0000000000000000000',
		'currency' => 'eur',
		'mode' => 'Test'
	),
);