<div class="ofertas index">
	<h2><?php echo __('Ofertas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('activa');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('vacantes');?></th>
			<th><?php echo $this->Paginator->sort('fecha_limite');?></th>
			<th><?php echo $this->Paginator->sort('empresa_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($ofertas as $oferta): ?>
	<tr>
		<td><?php echo h($oferta['Oferta']['id']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['activa']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['created']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['modified']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['vacantes']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['fecha_limite']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($oferta['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $oferta['Empresa']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $oferta['Oferta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $oferta['Oferta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $oferta['Oferta']['id']), null, __('Are you sure you want to delete # %s?', $oferta['Oferta']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Oferta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focos'), array('controller' => 'focos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foco'), array('controller' => 'focos', 'action' => 'add')); ?> </li>
	</ul>
</div>
