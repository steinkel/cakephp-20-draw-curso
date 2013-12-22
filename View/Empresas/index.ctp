<div class="info">
	<h2>Listado de Empresas</h2>
	<table cellpadding="0" cellspacing="0">
        <tr>
			<th><?php echo __('nombre_social');?></th>
			<th><?php echo __('cif');?></th>
			<th><?php echo __('email');?></th>
			<th><?php echo __('direccion');?></th>
            <th><td></td><th class="action_simply"><?php echo __('Acciones'); ?></th><td></td></th>
        </tr>
        <?php
        foreach ($empresas as $empresa): ?>
        <tr>
				<td><?php echo h($empresa['Empresa']['nombre_social']); ?></td>
				<td><?php echo h($empresa['Empresa']['cif']); ?></td>
				<td><?php echo h($empresa['Empresa']['email']); ?></td>
				<td><?php echo h($empresa['Empresa']['direccion']); ?></td>
                <td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_search.png", array(
						    "alt" => "Info",
						    "class" => "thumbs",
						    'url' => array('action' => 'view', $empresa['Empresa']['id']),
						));
	                ?></td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_edit.png", array(
						    "alt" => "Edit",
						    "class" => "thumbs",
						    'url' => array('action' => 'edit', $empresa['Empresa']['id']),
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
								$empresa['Empresa']['id']
							),
							array('escape' => false),
							__('¿Realmente desea eliminar a: %s?', strtoupper($empresa['Empresa']['nombre_social']))
						);
	                ?></td>
                </td>
        </tr>
		<?php endforeach; ?>
    </table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Crear Empresa'),array('action'=>'add'));?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>