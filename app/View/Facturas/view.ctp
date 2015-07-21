<div class="facturas view">
<h2><?php echo __('Factura'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servicio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($factura['Servicio']['name'], array('controller' => 'servicios', 'action' => 'view', $factura['Servicio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagado'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['pagado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pvp'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['pvp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($factura['Factura']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Factura'), array('action' => 'edit', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Factura'), array('action' => 'delete', $factura['Factura']['id']), array(), __('Are you sure you want to delete # %s?', $factura['Factura']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Facturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factura'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
