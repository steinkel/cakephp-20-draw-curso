<div class="empresas view">
<h2><?php  echo __('Empresa');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Social'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombre_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cif'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['cif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresa'), array('action' => 'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ofertas');?></h3>
	<?php if (!empty($empresa['Oferta'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Activa'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Vacantes'); ?></th>
		<th><?php echo __('Fecha Limite'); ?></th>
		<th><?php echo __('Empresa Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($empresa['Oferta'] as $oferta): ?>
		<tr>
			<td><?php echo $oferta['id'];?></td>
			<td><?php echo $oferta['titulo'];?></td>
			<td><?php echo $oferta['activa'];?></td>
			<td><?php echo $oferta['created'];?></td>
			<td><?php echo $oferta['modified'];?></td>
			<td><?php echo $oferta['vacantes'];?></td>
			<td><?php echo $oferta['fecha_limite'];?></td>
			<td><?php echo $oferta['empresa_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ofertas', 'action' => 'view', $oferta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ofertas', 'action' => 'edit', $oferta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ofertas', 'action' => 'delete', $oferta['id']), null, __('Are you sure you want to delete # %s?', $oferta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
