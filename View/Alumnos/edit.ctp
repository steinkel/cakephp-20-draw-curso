<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="info">
<?php echo $this->Form->create('Alumno');?>
	<fieldset>
		<legend><?php echo __('Edit Alumno'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('primer_apellido');
		echo $this->Form->input('segundo_apellido');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->input('Foco');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>