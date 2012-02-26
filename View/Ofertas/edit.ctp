<div class="ofertas form">
<?php echo $this->Form->create('Oferta');?>
	<fieldset>
		<legend><?php echo __('Edit Oferta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('activa');
		echo $this->Form->input('vacantes');
		echo $this->Form->input('fecha_limite');
		echo $this->Form->input('empresa_id');
		echo $this->Form->input('Foco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Oferta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Oferta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focos'), array('controller' => 'focos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foco'), array('controller' => 'focos', 'action' => 'add')); ?> </li>
	</ul>
</div>
