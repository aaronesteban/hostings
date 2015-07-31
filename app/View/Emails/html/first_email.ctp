<!DOCTYPE html>
<html>
<body>
	<h1>Factura</h1>
		<dl>
			<dt><strong>Nombre:  </strong><?=$cliente['name']; ?></dt>
			<br/>
			<dt><strong>C.I.F:  </strong><?=$cliente['cif']; ?></dt>
			<br/>
			<dt><strong>Dirección:  </strong><?=$cliente['direccion']; ?></dt>
			<br/>
			<dt><strong>CP:  </strong><?=$cliente['cp']; ?></dt>
			<br/>
			<dt><strong>Localidad:  </strong><?=$cliente['localidad']; ?></dt>
			<br/>
			<dt><strong>Provincia:  </strong><?=$cliente['provincia']; ?></dt>
			<br/>
			<dt><strong>Nombre del servicio:  </strong><?=$factura['Factura']['name']; ?></dt>
			<br/>
			<dt><strong>Vencimiento:  </strong><?=$factura['Factura']['fecha']; ?></dt>
			<br/>
			<dt><strong>PVP:  </strong><?=$factura['Factura']['pvp'] ?></dt>
			<br/>
			<dt><strong>Pagado:  </strong><?=$factura['Factura']['pagado'] ?></dt>
			<br/>
		</dl>
	<?=Router::url(array('controller'=>'Facturas', 'action' => 'ver_cliente', $factura['Factura']['id']), true);?>
</body>