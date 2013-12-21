<div class="actions">
	<h2>Acciones</h2>
	<div class="button"><?php echo $this->Html->link(__('Crear Estudiante'),array('action'=>'add'));?></div>
    <div class="button"><?php echo $this->Html->link(__('Listar Focos'), array('controller' => 'focos', 'action' => 'index')); ?></div>
    <div class="button"><?php echo $this->Html->link(__('Crear Foco'), array('controller' => 'focos', 'action' => 'add')); ?></div>
</div>
<div class="info">
	<h2>Listado de Alumnos</h2>
	<table cellpadding="0" cellspacing="0">
        <tr>
                        <th><?php echo __('nombre'); ?></th>
                        <th><?php echo __('primer apellido'); ?></th>
                        <th><?php echo __('segundo apellido'); ?></th>
                        <th><?php echo __('email'); ?></th>
                        <th><?php echo __('teléfono'); ?></th>
                        <th><td></td><th class="action_simply"><?php echo __('Acciones'); ?></th><td></td></th>
        </tr>
        <?php
        foreach ($alumnos as $alumno): ?>
        <tr>
                <td><?php echo h($alumno['Alumno']['nombre']); ?></td>
                <td><?php echo h($alumno['Alumno']['primer_apellido']); ?></td>
                <td><?php echo h($alumno['Alumno']['segundo_apellido']); ?></td>
                <td><?php echo h($alumno['Alumno']['email']); ?></td>
                <td><?php echo h($alumno['Alumno']['telefono']); ?></td>
                <td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_search.png", array(
						    "alt" => "Info",
						    "class" => "thumbs",
						    'url' => array('action' => 'view', $alumno['Alumno']['id']),
						));
	                ?></td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_edit.png", array(
						    "alt" => "Edit",
						    "class" => "thumbs",
						    'url' => array('action' => 'edit', $alumno['Alumno']['id']),
						));
	                ?></td>
	                <td><?php
	                	
	                	echo $this->Form->postLink(
						    $this->Html->image(
						    	"https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_delete.png",
						    	array("alt" => "Eliminar","class"=>"thumbs")
						    ),
						    array(
								'action' => 'delete',
								$alumno['Alumno']['id']
							),
							array('escape' => false),
							__('¿Realmente desea eliminar a: %s?', strtoupper($alumno['Alumno']['nombre']))
						);
	                ?></td>
                </td>
        </tr>
<?php endforeach; ?>
        </table>
</div>