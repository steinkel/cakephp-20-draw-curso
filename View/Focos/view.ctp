<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $foco['Foco']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="info">
<h2><?php  echo __('Foco');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($foco['Foco']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($foco['Foco']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="info">
<h2><?php  echo __('Estudiantes relacionados');?></h2>
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
        foreach ($foco['Alumno'] as $alumno): ?>
        <tr>
                <td><?php echo h($alumno['nombre']); ?></td>
                <td><?php echo h($alumno['primer_apellido']); ?></td>
                <td><?php echo h($alumno['segundo_apellido']); ?></td>
                <td><?php echo h($alumno['email']); ?></td>
                <td><?php echo h($alumno['telefono']); ?></td>
                <td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_search.png", array(
						    "alt" => "Info",
						    "class" => "thumbs",
						    'url' => array('controller'=>'alumnos','action' => 'view', $alumno['id']),
						));
	                ?></td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_edit.png", array(
						    "alt" => "Edit",
						    "class" => "thumbs",
						    'url' => array('controller'=>'alumnos','action' => 'edit', $alumno['id']),
						));
	                ?></td>
	                <td><?php
	                	
	                	echo $this->Form->postLink(
						    $this->Html->image(
						    	"https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_delete.png",
						    	array("alt" => "Eliminar","class"=>"thumbs")
						    ),
						    array(
						    	'controller'=>'alumnos',
								'action' => 'delete',
								$alumno['id']
							),
							array('escape' => false),
							__('¿Realmente desea eliminar a: %s?', strtoupper($alumno['nombre']))
						);
	                ?></td>
                </td>
        </tr>
<?php endforeach; ?>
        </table>
</div>
<div class="info">
<h2><?php  echo __('Ofertas relacionadas');?></h2>
	<table cellpadding="0" cellspacing="0">
        <tr>
                        <th><?php echo __('titulo'); ?></th>
                        <th><?php echo __('activa'); ?></th>
                        <th><?php echo __('vacantes'); ?></th>
                        <th><?php echo __('fecha limite'); ?></th>
                        <th><td></td><th class="action_simply"><?php echo __('Acciones'); ?></th><td></td></th>
        </tr>
        <?php
        foreach ($foco['Oferta'] as $oferta): ?>
        <tr>
                <td><?php echo h($oferta['titulo']); ?></td>
                <td><?php echo h($oferta['activa']); ?></td>
                <td><?php echo h($oferta['vacantes']); ?></td>
                <td><?php echo h($oferta['fecha_limite']); ?></td>
                <td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_search.png", array(
						    "alt" => "Info",
						    "class" => "thumbs",
						    'url' => array('controller'=>'ofertas','action' => 'view', $oferta['id']),
						));
	                ?></td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_edit.png", array(
						    "alt" => "Edit",
						    "class" => "thumbs",
						    'url' => array('controller'=>'ofertas','action' => 'edit', $oferta['id']),
						));
	                ?></td>
	                <td><?php
	                	
	                	echo $this->Form->postLink(
						    $this->Html->image(
						    	"https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_delete.png",
						    	array("alt" => "Eliminar","class"=>"thumbs")
						    ),
						    array(
						    	'controller'=>'ofertas',
								'action' => 'delete',
								$oferta['id']
							),
							array('escape' => false),
							__('¿Realmente desea eliminar a: %s?', strtoupper($oferta['titulo']))
						);
	                ?></td>
                </td>
        </tr>
<?php endforeach; ?>
        </table>
</div>