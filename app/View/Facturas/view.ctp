<div class='row'>	
	<div class="actions col-md-2">
		<h3><?php echo __('Acciones'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Editar Factura'), array('action' => 'edit', $factura['Factura']['id']), array( 'class' => 'btn btn-sm btn-warning')); ?> </li>
			<li><?php echo $this->Form->postLink(__('Eliminar Factura'), array('action' => 'delete', $factura['Factura']['id']), array( 'class' => 'btn btn-sm btn-danger boton'), array(), __('Estás seguro que deseas eliminar esta factura?', $factura['Factura']['id'])); ?> </li>
		</ul>
	</div>
	<div class="facturas view col-md-10 text_right">
	<h2><?php echo __('Factura'); ?></h2>
		<dl>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Servicio: '); ?></dt>
				<dd class="display_inline">
					<?php echo $this->Html->link($factura['Servicio']['name'], array('controller' => 'servicios', 'action' => 'view', $factura['Servicio']['id'])); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Fecha: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($factura['Factura']['fecha']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('PVP: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($factura['Factura']['pvp']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Creado: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($factura['Factura']['created']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Modificado: '); ?></dt>
				<dd class="display_inline">
					<?php echo h($factura['Factura']['modified']); ?>
					&nbsp;
				</dd>
			</div>
			<div class="mb5">
				<dt class="display_inline"><?php echo __('Pagado: '); ?></dt>
				<dd class="display_inline">
					<?if ($factura['Factura']['pagado'] == 1) {
						echo "<span class='verde'>Si</span>";
					}
					else echo "<span class='rojo'>No</span>"; ?>
				</dd>
			</div>
		</dl>
	</div>
</div>