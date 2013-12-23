<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="info">
	<h2>Registrar nueva Empresa</h2>
	<?php echo $this->Form->create('Empresa');?>
	<?php
		echo $this->Form->input('nombre_social');
		echo $this->Form->input('cif');
		echo $this->Form->input('email');
		echo $this->Form->input('direccion');
	?>
	<?php echo $this->Form->end(__('Guardar'));?>
</div>