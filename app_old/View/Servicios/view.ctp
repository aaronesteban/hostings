<div class='row'>	
	<div class="actions col-md-2">
		<h4><?php echo __('Acciones'); ?></h4>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Servicio'), array('action' => 'edit', $servicio['Servicio']['id']), array( 'class' => 'btn btn-sm btn-warning')); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar Servicio'), array('action' => 'delete', $servicio['Servicio']['id']),array( 'class' => 'btn btn-sm btn-danger boton'), array(), __('Estás seguro que deseas eliminar este servicio?', $servicio['Servicio']['id'])); ?> </li>
		</ul>
	</div>
	<div class="servicios view col-md-10 text_right">

	<h1><?php echo __('Servicios'); ?></h1>
		<dl>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Cliente: '); ?></dt>
				<dd class="display_inline">
					<?php echo $this->Html->link($servicio['Cliente']['name'], array('controller' => 'clientes', 'action' => 'view', $servicio['Cliente']['id'])); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Proveedor: '); ?></dt>
				<dd class="display_inline">
					<?php echo $this->Html->link($servicio['Proveedor']['name'], array('controller' => 'proveedors', 'action' => 'view', $servicio['Proveedor']['id'])); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Nombre: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($servicio['Servicio']['name']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Vencimiento: '); ?></dt>
				<dd class="display_inline">
					<?php echo $this->Time->format('d-m-Y', $servicio['Servicio']['vencimiento']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('PVP: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($servicio['Servicio']['pvp']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Cancelado: '); ?></dt>
				<dd class="display_inline">
					<?if ($servicio['Servicio']['cancelado'] == 1) {
							echo "<span class='rojo'>Si</span>";
						}
						else echo "<span class='verde'>No</span>"; ?>
					&nbsp;
				</dd>
			</div>
		</dl>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Facturas relaccionadas'); ?></h3>
	<?php if (!empty($servicio['Factura'])): ?>
	<table cellpadding = "0" cellspacing = "0" class='table'>
	<tr>
		<th class='estado'><?php echo __('Pagado'); ?></th>
		<th class='fecha'><?php echo __('Fecha'); ?></th>
		<th class='pvp'><?php echo __('PVP'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($servicio['Factura'] as $factura): ?>
		<tr class='informacion_factura'>
			<td>
				<?if ($factura['pagado'] == 1) {
					echo "<span class='verde'>Si</span>";
				}
				else echo "<span class='rojo'>No</span>"; ?>
			</td>
			<td><?php echo $factura['fecha']; ?></td>
			<td><?php echo $factura['pvp']; ?></td>
			<td><?php echo $this->Time->format('d-m-Y', $factura['created']); ?></td>
			<td><?php echo $this->Time->format('d-m-Y', $factura['modified']); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'facturas', 'action' => 'view', $factura['id']), array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'facturas', 'action' => 'edit', $factura['id']), array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'facturas', 'action' => 'delete', $factura['id']), array('class' => 'btn btn-xs btn-danger'), array(), __('Estás seguro que deseas eliminar esta factura?', $factura['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
