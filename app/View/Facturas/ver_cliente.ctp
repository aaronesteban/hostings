<?
$facturacion = Configure::read('Facturacion');
$iva = $factura['Factura']['pvp'] * $factura['Factura']['iva'] / 100;
$irpf = $factura['Factura']['pvp'] * $factura['Factura']['irpf'] /100;
$total = $factura['Factura']['pvp'] + $iva - $irpf;
?>

<div class="col-xs-6">
	<h1><a href=" "><img alt="" src="logo.png" /> Logo aquí </a></h1>
</div>
<div class="col-xs-6 text-right">
	<h1>FACTURA</h1>
	<h1><small>Factura #001</small></h1>
</div>

<div class="row">
	<div class="col-xs-5">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>De: <?=$facturacion['nombre']; ?></h4>
			</div>
			<div class="panel-body">
				<dl>
					<dt>C.I.F:</dt>
					<dd><?=$facturacion['cif']; ?></dd>

					<dt>Dirección:</dt>
					<dd><?=$facturacion['direccion']; ?></dd>

					<dt>CP:</dt>
					<dd><?=$facturacion['cp']; ?></dd>

					<dt>Localidad:</dt>
					<dd><?=$facturacion['localidad']; ?></dd>

					<dt>Provincia:</dt>
					<dd><?=$facturacion['pais']; ?></dd>

					<dt>Contacto:</dt>
					<dd><?=$facturacion['email']; ?></dd>

				</dl>
			</div>
		</div>
	</div>
	<div class="col-xs-5 col-xs-offset-2 text-right">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Para : <?=$factura['Servicio']['Cliente']['name']; ?></h4>
			</div>
			<div class="panel-body">
				<dl>
					<dt>C.I.F:</dt>
					<dd><?=$factura['Servicio']['Cliente']['cif']; ?></dd>

					<dt>Dirección:</dt>
					<dd><?=$factura['Servicio']['Cliente']['direccion']; ?></dd>

					<dt>CP:</dt>
					<dd><?=$factura['Servicio']['Cliente']['cp']; ?></dd>

					<dt>Localidad:</dt>
					<dd><?=$factura['Servicio']['Cliente']['localidad']; ?></dd>

					<dt>Provincia:</dt>
					<dd><?=$factura['Servicio']['Cliente']['provincia']; ?></dd>

					<dt>Servicio:</dt>
					<dd><?=$factura['Factura']['name']; ?></dd>

					<dt>Vencimiento:</dt>
					<dd><?=$factura['Factura']['fecha']; ?></dd>

					<dt>PVP:</dt>
					<dd><?=$factura['Factura']['pvp'] ?></dd>

					<dt>Pagado:</dt>
					<dd>
						<?if ($factura['Factura']['pagado'] == 1) {
							echo "Si";
						}
						else echo "No"; ?>
					</dd>				
				</dl>
			</div>
		</div>
	</div>
</div>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>
				<h4>Servicio</h4>
			</th>
			<th>
				<h4>Descripción</h4>
			</th>
			<th>
				<h4>Descuento</h4>
			</th>
			<th>
				<h4>Tarifa / Precio</h4>
			</th>
			<th>
				<h4>Sub-Total</h4>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?=$factura['Factura']['name']; ?></td>
			<td>Alquiler de hosting</td>
			<td class=" text-right ">0</td>
			<td class=" text-right "><?=$factura['Factura']['pvp'] ?> €</td>
			<td class=" text-right "><?=$factura['Factura']['pvp'] ?> €</td>
		</tr>
	</tbody>
</table>
<div class="row text-right">
	<div class="col-xs-3 col-xs-offset-7">
		<strong>
			Sub Total:<br>
			Impuestos (IVA <?=$factura['Factura']['iva']?>%):<br>
			Impuestos (IRPF <?=$factura['Factura']['irpf']?>%):<br>
			Total:<br>
		</strong>
	</div>
	<div class="col-xs-2">
		<strong>
			<?=$factura['Factura']['pvp'] ?> €<br>
			<?=$iva?> €<br>
			<?=$irpf?> €<br>
			<?=$total?> €<br>
		</strong>
	</div>
</div>
