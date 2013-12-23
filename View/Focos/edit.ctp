<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="info">
<?php echo $this->Form->create('Foco');?>
	<fieldset>
		<legend><?php echo __('Editar Foco'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('Alumno');
		echo $this->Form->input('Empresa',array('multiple'=>'multiple'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar'));?>
</div>