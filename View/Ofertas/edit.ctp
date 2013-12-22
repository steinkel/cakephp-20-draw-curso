<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
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
<?php echo $this->Form->end(__('Guardar'));?>
</div>
