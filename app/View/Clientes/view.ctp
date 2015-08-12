<div class='row'>
	<div class="actions col-md-2">
		<h4><?php echo __('Acciones'); ?></h4>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Cliente'), array('action' => 'edit', $cliente['Cliente']['id']), array( 'class' => 'btn btn-sm btn-warning')); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array( 'class' => 'btn btn-sm btn-danger boton'), array(), __('Estás seguro que deseas eliminar a este cliente?', $cliente['Cliente']['id'])); ?> </li>
		</ul>
	</div>

	<div class="clientes view col-md-10 text_right">
	<h1><?php echo __('Cliente'); ?></h1>
		<dl>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Nombre: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['name']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('CIF/NIF: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['cif']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Dirección: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['direccion']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('CP: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['cp']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Localidad: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['localidad']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">	
				<dt class="display_inline"><?php echo __('Provincia: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['provincia']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Email: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['email']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Creado: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['created']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Modificado: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($cliente['Cliente']['modified']); ?>
					&nbsp;
				</dd>
			</div>
		</dl>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Servicios relaccionados'); ?></h3>
	<?php if (!empty($cliente['Servicio'])): ?>
	<table cellpadding = "0" cellspacing = "0" class='table'>
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th class='vencimiento'><?php echo __('Vencimiento'); ?></th>
		<th class='pvp'><?php echo __('PVP'); ?></th>
		<th class= 'estado'><?php echo __('Cancelado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($cliente['Servicio'] as $servicio): ?>
		<tr class="informacion_servicio">
			<td><?php echo $servicio['name']; ?></td>
			<td><?php echo $servicio['vencimiento']; ?></td>
			<td><?php echo $servicio['pvp']; ?></td>
			<td>
				<?if ($servicio['cancelado'] == 1) {
					echo "<span class='rojo'>Si</span>";
				}
				else echo "<span class='verde'>No</span>"; ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'servicios', 'action' => 'view', $servicio['id']), array('class' => 'btn btn-xs btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'servicios', 'action' => 'edit', $servicio['id']), array('class' => 'btn btn-xs btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'servicios', 'action' => 'delete', $servicio['id']), array('class' => 'btn btn-xs btn-danger'), array(), __('Estás seguro que deseas eliminar este servicio?', $servicio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
