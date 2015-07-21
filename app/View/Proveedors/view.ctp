<div class="proveedors view">
<h2><?php echo __('Proveedor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($proveedor['Proveedor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedor'), array('action' => 'edit', $proveedor['Proveedor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedor'), array('action' => 'delete', $proveedor['Proveedor']['id']), array(), __('Are you sure you want to delete # %s?', $proveedor['Proveedor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Servicios'); ?></h3>
	<?php if (!empty($proveedor['Servicio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Proveedor Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Vencimiento'); ?></th>
		<th><?php echo __('Pvp'); ?></th>
		<th><?php echo __('Cancelado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proveedor['Servicio'] as $servicio): ?>
		<tr>
			<td><?php echo $servicio['id']; ?></td>
			<td><?php echo $servicio['user_id']; ?></td>
			<td><?php echo $servicio['cliente_id']; ?></td>
			<td><?php echo $servicio['proveedor_id']; ?></td>
			<td><?php echo $servicio['name']; ?></td>
			<td><?php echo $servicio['vencimiento']; ?></td>
			<td><?php echo $servicio['pvp']; ?></td>
			<td><?php echo $servicio['cancelado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'servicios', 'action' => 'view', $servicio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'servicios', 'action' => 'edit', $servicio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'servicios', 'action' => 'delete', $servicio['id']), array(), __('Are you sure you want to delete # %s?', $servicio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
