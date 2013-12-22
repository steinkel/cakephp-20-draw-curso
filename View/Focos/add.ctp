<div class="actions">
	<h2>Acciones</h2>
	<div class="button"><?php echo $this->Html->link(__('Listar Focos'), array('action' => 'index')); ?></div>
	<div class="button"><?php echo $this->Html->link(__('Listar Estudiantes'),array('controller'=>'alumnos','action'=>'index'));?></div>
    <div class="button"><?php echo $this->Html->link(__('Listar Empresas'), array('controller'=>'empresas','action' => 'index')); ?></div>
</div>

<div class="info">
	<h2>Crear nuevo Foco</h2>
	<?php echo $this->Form->create('Foco');?>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('Alumnos',array('multiple'=>'multiple'));
		echo $this->Form->input('Ofertas',array('multiple'=>'multiple'));
	?>
	<?php echo $this->Form->end(__('Submit'));?>
</div>