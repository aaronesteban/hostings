<div class='row'>
	<div class="actions col-md-2">
		<h4><?php echo __('Acciones'); ?></h4>
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Factura'), array('action' => 'add'), array('class' => 'btn btn-sm btn-primary')); ?></li>
		</ul>
	</div>
	<div class="facturas index col-md-10">
		<h1><?php echo __('Facturas'); ?></h1>
		<div class='table_pagination'>	
			<table cellpadding="0" cellspacing="0" class='table'>
				<thead>
					<tr>
							<th><?php echo $this->Paginator->sort('servicio_id'); ?></th>
							<th class='fecha'><?php echo $this->Paginator->sort('fecha'); ?></th>
							<th class='pvp'><?php echo $this->Paginator->sort('pvp', 'PVP'); ?></th>
							<th><?php echo $this->Paginator->sort('created', 'Creado'); ?></th>
							<th><?php echo $this->Paginator->sort('modified', 'Modificado'); ?></th>
							<th class='estado'><?php echo $this->Paginator->sort('pagado'); ?></th>
							<th class="actions"><?php echo __('Acciones'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($facturas as $factura): ?>
						<tr class="informacion_factura">
							<td>
								<?php echo $this->Html->link($factura['Servicio']['name'], array('controller' => 'servicios', 'action' => 'view', $factura['Servicio']['id'])); ?>
							</td>
							<td><?php echo $this->Time->format('d-m-Y', $factura['Factura']['fecha']); ?>&nbsp;</td>
							<td><?php echo h($factura['Factura']['pvp']); ?>&nbsp;</td>
							<td><?php echo $this->Time->format('d-m-Y', $factura['Factura']['created']); ?>&nbsp;</td>
							<td><?php echo $this->Time->format('d-m-Y', $factura['Factura']['modified']); ?>&nbsp;</td>
							<td>
								<?if ($factura['Factura']['pagado'] == 1) {
									echo "<span class='verde'>Si</span>";
								}
								else echo "<span class='rojo'>No</span>"; ?>
								&nbsp;
							</td>
							<td class="actions">
								<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $factura['Factura']['id']), array('class' => 'btn btn-xs btn-info')); ?>
								<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $factura['Factura']['id']), array('class' => 'btn btn-xs btn-warning')); ?>
								<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $factura['Factura']['id']), array('class' => 'btn btn-xs btn-danger', 'confirm' => __('Estás seguro que deseas eliminar esta factura?', $factura['Factura']['id']))); ?>
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