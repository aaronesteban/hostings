<div class='row'>	
	<div class="actions col-md-2">
		<h3><?php echo __('Acciones'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?></li>
		</ul>
	</div>
	<div class="servicios index col-md-9">
		<h2><?php echo __('Servicios'); ?></h2>
		<table cellpadding="0" cellspacing="0" class='table'>
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
				<th><?php echo $this->Paginator->sort('proveedor_id'); ?></th>
				<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('vencimiento'); ?></th>
				<th><?php echo $this->Paginator->sort('pvp', 'PVP'); ?></th>
				<th><?php echo $this->Paginator->sort('cancelado'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($servicios as $servicio): ?>
		<tr>
			<td>
				<?php echo $this->Html->link($servicio['Cliente']['name'], array('controller' => 'clientes', 'action' => 'view', $servicio['Cliente']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($servicio['Proveedor']['name'], array('controller' => 'proveedors', 'action' => 'view', $servicio['Proveedor']['id'])); ?>
			</td>
			<td><?php echo h($servicio['Servicio']['name']); ?>&nbsp;</td>
			<td><?php echo h($servicio['Servicio']['vencimiento']); ?>&nbsp;</td>
			<td><?php echo h($servicio['Servicio']['pvp']); ?>&nbsp;</td>
			<td><?php echo h($servicio['Servicio']['cancelado']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $servicio['Servicio']['id']), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $servicio['Servicio']['id']), array('class' => 'btn btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $servicio['Servicio']['id']), array('class' => 'btn btn-danger'), array('confirm' => __('Estás seguro que deseas eliminar este servicio?', $servicio['Servicio']['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Página {:page} de {:pages}')
		));
		?>	</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
</div>