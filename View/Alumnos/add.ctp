<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
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
