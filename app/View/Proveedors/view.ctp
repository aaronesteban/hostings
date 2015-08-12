<div class='row'>	
	<div class="actions col-md-2">
		<h3><?php echo __('Acciones'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Proveedor'), array('action' => 'edit', $proveedor['Proveedor']['id']), array( 'class' => 'btn btn-sm btn-warning')); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar Proveedor'), array('action' => 'delete', $proveedor['Proveedor']['id']), array( 'class' => 'btn btn-sm btn-danger boton'), array(), __('Estás seguro que deseas eliminar a este proveedor?', $proveedor['Proveedor']['id'])); ?> </li>
		</ul>
	</div>
	<div class="proveedors view col-md-10 text_right">
	<h2><?php echo __('Proveedor'); ?></h2>
		<dl>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Nombre: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($proveedor['Proveedor']['name']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Url: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($proveedor['Proveedor']['url']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Creado: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($proveedor['Proveedor']['created']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Modificado: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($proveedor['Proveedor']['modified']); ?>
					&nbsp;
				</dd>
			</div>
		</dl>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Servicios relaccionados'); ?></h3>
	<?php if (!empty($proveedor['Servicio'])): ?>
	<table cellpadding = "0" cellspacing = "0" class='table'>
	<tr>
		<th><?php echo __('Nombre'); ?></th>
		<th class='vencimiento'><?php echo __('Vencimiento'); ?></th>
		<th class='pvp'><?php echo __('PVP'); ?></th>
		<th class='estado'><?php echo __('Cancelado'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($proveedor['Servicio'] as $servicio): ?>
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