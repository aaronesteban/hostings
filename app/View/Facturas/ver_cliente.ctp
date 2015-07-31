<section class="ver_factura">	
	<h1>Factura</h1>
	<dl>
		<dt>Nombre:</dt>
		<dd><?=$factura['Servicio']['Cliente']['name']; ?></dd>

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
		<dd><?=$factura['Factura']['pagado'] ?></dd>

	</dl>
	<?$facturacion = Configure::read('Facturacion');?>
	</br>
	<h1>Proveedor</h1>
	<dl>
		<dt>Nombre:</dt>
		<dd><?=$facturacion['nombre']; ?></dd>

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

		<dt>Servicio:</dt>
		<dd><?=$facturacion['email']; ?></dd>

	</dl>
<?
$iva = $factura['Factura']['pvp'] *21/100;
$irpf = $factura['Factura']['pvp'] *15/100;
$total = $factura['Factura']['pvp'] + $iva - $irpf;
?>
	<table>
		<thead>
			<tr>
				<th>Concepto</th>
				<th>Importe</th>
				<th>Descuento</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?=$factura['Factura']['name']; ?></td>
				<td><?=$factura['Factura']['pvp'] ?></td>
				<td>0</td>
				<td><?=$factura['Factura']['pvp'] ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<dl>
						<dt>Subtotal:</dt>
						<dd><?=$factura['Factura']['pvp'] ?></dd>
						<dt>IVA:</dt>
						<dd><?=$iva?></dd>
						<dt>IRPF:</dt>
						<dd><?=$irpf?></dd>
						<dt>Total:</dt>
						<dd><?=$total?></dd>
					</dl>
				</td>
			</tr>
		</tbody>
	</table>
</section>