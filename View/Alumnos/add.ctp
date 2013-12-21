<div class="actions">
	<h2>Acciones</h2>
	<div class="button"><?php echo $this->Html->link(__('Listar Estudiantes'),array('action'=>'index'));?></div>
    <div class="button"><?php echo $this->Html->link(__('Listar Focos'), array('controller' => 'focos', 'action' => 'index')); ?></div>
    <div class="button"><?php echo $this->Html->link(__('Crear Foco'), array('controller' => 'focos', 'action' => 'add')); ?></div>
</div>

<div class="info">
	<h2>Registrar nuevo Alumno</h2>
	<?php echo $this->Form->create('Alumno');?>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('primer_apellido');
		echo $this->Form->input('segundo_apellido');
		echo $this->Form->input('email');
		echo $this->Form->input('telefono');
		echo $this->Form->input('Foco');
	?>
	<?php echo $this->Form->end(__('Submit'));?>
</div>
