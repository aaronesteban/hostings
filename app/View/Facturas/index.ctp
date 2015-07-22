<div class="facturas index">
	<h2><?php echo __('Facturas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('servicio_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('pvp', 'PVP'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', 'Modificado'); ?></th>
			<th><?php echo $this->Paginator->sort('pagado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($facturas as $factura): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($factura['Servicio']['name'], array('controller' => 'servicios', 'action' => 'view', $factura['Servicio']['id'])); ?>
		</td>
		<td><?php echo h($factura['Factura']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['pvp']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['created']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['modified']); ?>&nbsp;</td>
		<td><?php echo h($factura['Factura']['pagado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $factura['Factura']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $factura['Factura']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $factura['Factura']['id']), array('confirm' => __('Estás seguro que deseas eliminar esta factura?', $factura['Factura']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Factura'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Lista de Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
