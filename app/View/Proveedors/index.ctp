<div class='row'>	
	<div class="actions col-md-2">
		<h4><?php echo __('Acciones'); ?></h4>
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Proveedor'), array('action' => 'add'), array('class' => 'btn btn-sm btn-primary')); ?></li>
		</ul>
	</div>
	<div class="proveedors index col-md-10">
		<h1><?php echo __('Proveedores'); ?></h1>
		<div class='table_pagination'>
			<table cellpadding="0" cellspacing="0" class='table'>
				<thead>
					<tr>
							<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
							<th><?php echo $this->Paginator->sort('url'); ?></th>
							<th><?php echo $this->Paginator->sort('created', 'Creado'); ?></th>
							<th><?php echo $this->Paginator->sort('modified', 'Modificado'); ?></th>
							<th class="actions"><?php echo __('Acciones'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($proveedors as $proveedor): ?>
					<tr class="informacion_proveedor">
						<td><?php echo h($proveedor['Proveedor']['name']); ?>&nbsp;</td>
						<td><?php echo h($proveedor['Proveedor']['url']); ?>&nbsp;</td>
						<td><?php echo h($proveedor['Proveedor']['created']); ?>&nbsp;</td>
						<td><?php echo h($proveedor['Proveedor']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $proveedor['Proveedor']['id']), array('class' => 'btn btn-xs btn-info')); ?>
							<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $proveedor['Proveedor']['id']), array('class' => 'btn btn-xs btn-warning')); ?>
							<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $proveedor['Proveedor']['id']), array('class' => 'btn btn-xs btn-danger'), array('confirm' => __('Estás seguro que deseas eliminar a este proveedor?', $proveedor['Proveedor']['id']))); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));

			echo $this->Paginator->counter(array(
				'format' => __('Pagina {:page} de {:pages}')
			));
		
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>
</div>