<div class="ofertas view">
<h2><?php  echo __('Oferta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activa'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['activa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vacantes'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['vacantes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Limite'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['fecha_limite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($oferta['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $oferta['Empresa']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Oferta'), array('action' => 'edit', $oferta['Oferta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Oferta'), array('action' => 'delete', $oferta['Oferta']['id']), null, __('Are you sure you want to delete # %s?', $oferta['Oferta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focos'), array('controller' => 'focos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foco'), array('controller' => 'focos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Focos');?></h3>
	<?php if (!empty($oferta['Foco'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($oferta['Foco'] as $foco): ?>
		<tr>
			<td><?php echo $foco['id'];?></td>
			<td><?php echo $foco['nombre'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'focos', 'action' => 'view', $foco['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'focos', 'action' => 'edit', $foco['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'focos', 'action' => 'delete', $foco['id']), null, __('Are you sure you want to delete # %s?', $foco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foco'), array('controller' => 'focos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
