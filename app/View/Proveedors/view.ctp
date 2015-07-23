<div class="proveedors view">
<h2><?php echo __('Proveedor'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proveedor'), array('action' => 'edit', $proveedor['Proveedor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Proveedor'), array('action' => 'delete', $proveedor['Proveedor']['id']), array(), __('Estás seguro que deseas eliminar a este proveedor?', $proveedor['Proveedor']['id'])); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Servicios relaccionados'); ?></h3>
	<?php if (!empty($proveedor['Servicio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Vencimiento'); ?></th>
		<th><?php echo __('PVP'); ?></th>
		<th><?php echo __('Cancelado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($proveedor['Servicio'] as $servicio): ?>
		<tr>
			<td><?php echo $servicio['name']; ?></td>
			<td><?php echo $servicio['vencimiento']; ?></td>
			<td><?php echo $servicio['pvp']; ?></td>
			<td><?php echo $servicio['cancelado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'servicios', 'action' => 'view', $servicio['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'servicios', 'action' => 'edit', $servicio['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'servicios', 'action' => 'delete', $servicio['id']), array(), __('Estás seguro que deseas eliminar este servicio?', $servicio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
