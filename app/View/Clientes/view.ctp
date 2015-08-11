<div class='row'>
	<div class="actions col-md-2">
		<h3><?php echo __('Acciones'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Cliente'), array('action' => 'edit', $cliente['Cliente']['id']), array( 'class' => 'btn btn-primary')); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array( 'class' => 'btn btn-danger boton'), array(), __('Estás seguro que deseas eliminar a este cliente?', $cliente['Cliente']['id'])); ?> </li>
		</ul>
	</div>

	<div class="clientes view col-md-9">
	<h2><?php echo __('Cliente'); ?></h2>
		<dl>
			<dt><?php echo __('Nombre'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('CIF/NIF'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['cif']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Dirección'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['direccion']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('CP'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['cp']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Localidad'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['localidad']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Provincia'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['provincia']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['email']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Creado'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modificado'); ?></dt>
			<dd>
				<?php echo h($cliente['Cliente']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Servicios relaccionados'); ?></h3>
	<?php if (!empty($cliente['Servicio'])): ?>
	<table cellpadding = "0" cellspacing = "0" class='table'>
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Vencimiento'); ?></th>
		<th><?php echo __('PVP'); ?></th>
		<th><?php echo __('Cancelado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($cliente['Servicio'] as $servicio): ?>
		<tr>
			<td><?php echo $servicio['name']; ?></td>
			<td><?php echo $servicio['vencimiento']; ?></td>
			<td><?php echo $servicio['pvp']; ?></td>
			<td><?php echo $servicio['cancelado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'servicios', 'action' => 'view', $servicio['id']), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'servicios', 'action' => 'edit', $servicio['id']), array('class' => 'btn btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'servicios', 'action' => 'delete', $servicio['id']), array('class' => 'btn btn-danger'), array(), __('Estás seguro que deseas eliminar este servicio?', $servicio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
