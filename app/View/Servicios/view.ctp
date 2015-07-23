<div class="servicios view">
<h2><?php echo __('Servicios'); ?></h2>
	<dl>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servicio['Cliente']['name'], array('controller' => 'clientes', 'action' => 'view', $servicio['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proveedor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($servicio['Proveedor']['name'], array('controller' => 'proveedors', 'action' => 'view', $servicio['Proveedor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vencimiento'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['vencimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PVP'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['pvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cancelado'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['cancelado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Servicio'), array('action' => 'edit', $servicio['Servicio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Servicio'), array('action' => 'delete', $servicio['Servicio']['id']), array(), __('Estás seguro que deseas eliminar este servicio?', $servicio['Servicio']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Facturas relaccionadas'); ?></h3>
	<?php if (!empty($servicio['Factura'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Pagado'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('PVP'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($servicio['Factura'] as $factura): ?>
		<tr>
			<td><?php echo $factura['pagado']; ?></td>
			<td><?php echo $factura['fecha']; ?></td>
			<td><?php echo $factura['pvp']; ?></td>
			<td><?php echo $factura['created']; ?></td>
			<td><?php echo $factura['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'facturas', 'action' => 'view', $factura['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'facturas', 'action' => 'edit', $factura['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'facturas', 'action' => 'delete', $factura['id']), array(), __('Estás seguro que deseas eliminar esta factura?', $factura['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

