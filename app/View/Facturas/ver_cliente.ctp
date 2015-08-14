<?
$facturacion = Configure::read('Facturacion');
$iva = $factura['Factura']['pvp'] * $factura['Factura']['iva'] / 100;
$irpf = $factura['Factura']['pvp'] * $factura['Factura']['irpf'] /100;
$total = $factura['Factura']['pvp'] + $iva - $irpf;
?>
<div class="row">
	<div class="col-xs-6">
		<img class="logo" alt="logo" src="http://deramosandserch.com/img/logo_deramosandserch.svg">
	</div>
	<div class="col-xs-6 text-right">
		<h1>FACTURA #001</h1>
	</div>
</div>
<div class="row">
	<div class="col-xs-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>De: <?=$facturacion['nombre']; ?></h4>
			</div>
			<div class="panel-body">
				<dl>
					<div class="mb5">
						<dt class="display_inline">C.I.F:</dt>
						<dd class="display_inline"><?=$facturacion['cif']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Dirección:</dt>
						<dd class="display_inline"><?=$facturacion['direccion']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">CP:</dt>
						<dd class="display_inline"><?=$facturacion['cp']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Localidad:</dt>
						<dd class="display_inline"><?=$facturacion['localidad']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Provincia:</dt>
						<dd class="display_inline"><?=$facturacion['pais']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Contacto:</dt>
						<dd class="display_inline"><?=$facturacion['email']; ?></dd>
					</div>
				</dl>
			</div>
		</div>
	</div>
	<div class="col-xs-6 text-right">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Para : <?=$factura['Servicio']['Cliente']['name']; ?></h4>
			</div>
			<div class="panel-body">
				<dl>
					<div class="mb5">
						<dt class="display_inline">C.I.F:</dt>
						<dd class="display_inline"><?=$factura['Servicio']['Cliente']['cif']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Dirección:</dt>
						<dd class="display_inline"><?=$factura['Servicio']['Cliente']['direccion']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">CP:</dt>
						<dd class="display_inline"><?=$factura['Servicio']['Cliente']['cp']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Ciudad:</dt>
						<dd class="display_inline"><?=$factura['Servicio']['Cliente']['localidad']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Provincia:</dt>
						<dd class="display_inline"><?=$factura['Servicio']['Cliente']['provincia']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Servicio:</dt>
						<dd class="display_inline"><?=$factura['Factura']['name']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Vencimiento:</dt>
						<dd class="display_inline"><?=$factura['Factura']['fecha']; ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">PVP:</dt>
						<dd class="display_inline"><?=$factura['Factura']['pvp'] ?></dd>
					</div>
					<div class="mb5">
						<dt class="display_inline">Pagado:</dt>
						<dd class="display_inline">
							<?if ($factura['Factura']['pagado'] == 1) {
								echo "<span class='verde'>Si</span>";
							}
							else echo "<span class='rojo'>No</span>"; ?>
						</dd>
					</div>				
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
				<h4>Descuento %</h4>
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
			Impuestos (IVA +<?=$factura['Factura']['iva']?>%):<br>
			Impuestos (IRPF -<?=$factura['Factura']['irpf']?>%):<br>
			Total:<br>
		</strong>
	</div>
	<div class="col-xs-2 mb20">
		<strong>
			<?=$factura['Factura']['pvp'] ?> €<br>
			<?=$iva?> €<br>
			<?=$irpf?> €<br>
			<?=$total?> €<br>
		</strong>
	</div>
</div>
<div class="row">
	<div class = "col-xs-6">
		<?if($factura['Factura']['pagado'] == 0):?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Métodos de pago</h4>
				</div>
				<div class="panel-body">
					 <span class="display_block">Paypal</span>
					 <span class="display_block">Stripe</span>
				</div>
			</div>
		<?elseif($factura['Factura']['pagado'] == 1):?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Acciones</h4>
				</div>
				<div class="panel-body">
					<span class="btn btn-sm btn-primary">Descargar Factura</span>
				</div>
			</div>
		<?endif;?>
	</div>
	<div class="col-xs-6">
		<div class="span7">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h4> Datos de contacto </h4>
				</div>
				<div class=" panel-body">
					<span class="display_block">Email:<a href="mailto:<?=$facturacion['email']; ?>"><?=$facturacion['email']; ?></a></span>
					<span class="display_block">Móvil: <a href="Tel:0034696657774">696657774</a></span>
					<span class="display_block">Web: <a href="http://www.deramosandserch.com">deramosandserch.com</a></span>
				</div>
			</div>
		</div>
	</div>
</div>