<div class="facturas view">
<h2><?php echo __('Factura'); ?></h2>
	<dl>
		<dt><?php echo __('Servicio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($factura['Servicio']['name'], array('controller' => 'servicios', 'action' => 'view', $factura['Servicio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PVP'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['pvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagado'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['pagado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Factura'), array('action' => 'edit', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Factura'), array('action' => 'delete', $factura['Factura']['id']), array(), __('Estás seguro que deseas eliminar esta factura?', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Facturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Factura'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista de Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
