<div class='row'>	
	<div class="actions col-md-2">
		<h4><?php echo __('Acciones'); ?></h4>
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('action' => 'add'), array('class' => 'btn btn-sm btn-primary')); ?></li>
		</ul>
	</div>
	<div class="servicios index col-md-10">
		<h1><?php echo __('Servicios'); ?></h1>
		<div class="table_pagination">
			<table cellpadding="0" cellspacing="0" class='table'>
				<thead>
					<tr>
							<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
							<th><?php echo $this->Paginator->sort('proveedor_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
							<th class='vencimiento'><?php echo $this->Paginator->sort('vencimiento'); ?></th>
							<th class='pvp'><?php echo $this->Paginator->sort('pvp', 'PVP'); ?></th>
							<th class='estado'><?php echo $this->Paginator->sort('cancelado'); ?></th>
							<th class="actions"><?php echo __('Acciones'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($servicios as $servicio): ?>
						<tr class="informacion_servicio">
							<td>
								<?php echo $this->Html->link($servicio['Cliente']['name'], array('controller' => 'clientes', 'action' => 'view', $servicio['Cliente']['id'])); ?>
							</td>
							<td>
								<?php echo $this->Html->link($servicio['Proveedor']['name'], array('controller' => 'proveedors', 'action' => 'view', $servicio['Proveedor']['id'])); ?>
							</td>
							<td><?php echo h($servicio['Servicio']['name']); ?>&nbsp;</td>
							<td><?php echo $this->Time->format('d-m-Y', $servicio['Servicio']['vencimiento']); ?>&nbsp;</td>
							<td><?php echo h($servicio['Servicio']['pvp']); ?>&nbsp;</td>
							<td>
								<?if ($servicio['Servicio']['cancelado'] == 1) {
									echo "<span class='rojo'>Si</span>";
								}
								else echo "<span class='verde'>No</span>"; ?>
								&nbsp;
							</td>
							<td class="actions">
								<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $servicio['Servicio']['id']), array('class' => 'btn btn-xs btn-info')); ?>
								<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $servicio['Servicio']['id']), array('class' => 'btn btn-xs btn-warning')); ?>
								<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $servicio['Servicio']['id']), array('class' => 'btn btn-xs btn-danger', 'confirm' => __('Estás seguro que deseas eliminar este servicio?', $servicio['Servicio']['id']))); ?>
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