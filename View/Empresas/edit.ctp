<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="info">
<?php echo $this->Form->create('Empresa');?>
	<fieldset>
		<legend><?php echo __('Editar Empresa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_social');
		echo $this->Form->input('cif');
		echo $this->Form->input('email');
		echo $this->Form->input('direccion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar'));?>
</div>