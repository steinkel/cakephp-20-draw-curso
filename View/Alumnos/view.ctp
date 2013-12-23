<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $alumno['Alumno']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="info">
<h2><?php  echo __('Alumno');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primer Apellido'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['primer_apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundo Apellido'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['segundo_apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="info">
<h2><?php  echo __('Focos relacionados');?></h2>
	<table cellpadding="0" cellspacing="0">
        <tr>
                        <th><?php echo __('id'); ?></th>
                        <th><?php echo __('nombre'); ?></th>
                        <th><td></td><th class="action_simply"><?php echo __('Acciones'); ?></th><td></td></th>
        </tr>
        <?php
        foreach ($alumno['Foco'] as $foco): ?>
        <tr>
                <td><?php echo h($foco['id']); ?></td>
                <td><?php echo h($foco['nombre']); ?></td>
                <td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_search.png", array(
						    "alt" => "Info",
						    "class" => "thumbs",
						    'url' => array('controller'=>'focos','action' => 'view', $foco['id']),
						));
	                ?></td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_edit.png", array(
						    "alt" => "Edit",
						    "class" => "thumbs",
						    'url' => array('controller'=>'focos','action' => 'edit', $foco['id']),
						));
	                ?></td>
	                <td><?php
	                	
	                	echo $this->Form->postLink(
						    $this->Html->image(
						    	"https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_delete.png",
						    	array("alt" => "Eliminar","class"=>"thumbs")
						    ),
						    array(
						    	'controller'=>'focos',
								'action' => 'delete',
								$foco['id']
							),
							array('escape' => false),
							__('¿Realmente desea eliminar a: %s?', strtoupper($foco['nombre']))
						);
	                ?></td>
                </td>
        </tr>
<?php endforeach; ?>
        </table>
</div>