<div class="info">
	<h2>Listado de Focos</h2>
	<table cellpadding="0" cellspacing="0">
        <tr>
                        <th><?php echo __('id'); ?></th>
                        <th><?php echo __('nombre'); ?></th>
                        <th><td></td><th class="action_simply"><?php echo __('Acciones'); ?></th><td></td></th>
        </tr>
        <?php
        foreach ($focos as $foco): ?>
        <tr>
                <td><?php echo h($foco['Foco']['id']); ?></td>
                <td><?php echo h($foco['Foco']['nombre']); ?></td>
                <td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_search.png", array(
						    "alt" => "Info",
						    "class" => "thumbs",
						    'url' => array('action' => 'view', $foco['Foco']['id']),
						));
	                ?></td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_edit.png", array(
						    "alt" => "Edit",
						    "class" => "thumbs",
						    'url' => array('action' => 'edit', $foco['Foco']['id']),
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
								$foco['Foco']['id']
							),
							array('escape' => false),
							__('¿Realmente desea eliminar a: %s?', strtoupper($foco['Foco']['nombre']))
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
		<li><?php echo $this->Html->link(__('Crear Foco'),array('action'=>'add'));?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>