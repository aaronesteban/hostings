<div class='row'>
	<div class="actions col-md-2">
		<h4><?php echo __('Acciones'); ?></h4>
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Cliente'), array('action' => 'add'), array( 'class' => 'btn btn-sm btn-primary')); ?></li>
		</ul>
	</div>
	<div class="clientes index col-md-10">
		<h1><?php echo __('Clientes'); ?></h1>
		<div class='table_pagination'>	
			<table cellpadding="0" cellspacing="0" class="table">
				<thead>
					<tr>
							<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
							<th class='nif'><?php echo $this->Paginator->sort('cif', 'CIF/NIF'); ?></th>
							<th><?php echo $this->Paginator->sort('direccion', 'Dirección'); ?></th>
							<th class='codigopostal'><?php echo $this->Paginator->sort('cp', 'CP'); ?></th>
							<th><?php echo $this->Paginator->sort('localidad', 'Ciudad'); ?></th>
							<th><?php echo $this->Paginator->sort('provincia'); ?></th>
							<th><?php echo $this->Paginator->sort('email'); ?></th>
							<th><?php echo $this->Paginator->sort('created', 'Creado'); ?></th> 				
							<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
							<th class="actions"><?php echo __('Acciones'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($clientes as $cliente): ?>
						<tr class="informacion_cliente">
							<td><?php echo h($cliente['Cliente']['name']); ?>&nbsp;</td>
							<td><?php echo h($cliente['Cliente']['cif']); ?>&nbsp;</td>
							<td><?php echo h($cliente['Cliente']['direccion']); ?>&nbsp;</td>
							<td><?php echo h($cliente['Cliente']['cp']); ?>&nbsp;</td>
							<td><?php echo h($cliente['Cliente']['localidad']); ?>&nbsp;</td>
							<td><?php echo h($cliente['Cliente']['provincia']); ?>&nbsp;</td>
							<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
							<td><?php echo $this->Time->format('d-m-Y', $cliente['Cliente']['created']); ?>&nbsp;</td>
							<td><?php echo $this->Time->format('d-m-Y', $cliente['Cliente']['modified']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $cliente['Cliente']['id']), array('class' => 'btn btn-xs btn-info')); ?>
								<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id']), array('class' => 'btn btn-xs  btn-warning')); ?>
								<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $cliente['Cliente']['id']), array('class' => 'btn btn-xs btn-danger'), __('Estás seguro que deseas eliminar a este cliente?', $cliente['Cliente']['id'])); ?>
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