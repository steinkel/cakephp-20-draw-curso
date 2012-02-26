<div class="empresas form">
<?php echo $this->Form->create('Empresa');?>
	<fieldset>
		<legend><?php echo __('Edit Empresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_social');
		echo $this->Form->input('cif');
		echo $this->Form->input('email');
		echo $this->Form->input('direccion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Empresa.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Empresa.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('controller' => 'ofertas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('controller' => 'ofertas', 'action' => 'add')); ?> </li>
	</ul>
</div>
