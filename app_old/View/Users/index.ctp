<div class='row'>	
	<div class="actions col-md-2">
		<h4><?php echo __('Acciones'); ?></h4>
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-sm btn-primary')); ?></li>
		</ul>
	</div>
	<div class="users index col-md-10">
		<h1><?php echo __('Usuarios'); ?></h1>
		<div class='table_pagination'>	
			<table cellpadding="0" cellspacing="0" class='table'>
				<thead>
					<tr>
							<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
							<th><?php echo $this->Paginator->sort('email'); ?></th>
							<th><?php echo $this->Paginator->sort('username'); ?></th>
							<th class="actions"><?php echo __('Acciones'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user): ?>
						<tr class="informacion_usuario">
							<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
							<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
							<td class="actions_user">
								<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-xs btn-danger', 'confirm' => __('Estás seguro que deseas eliminar este usuario?', $user['User']['id']))); ?>
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