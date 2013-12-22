<div class="info">
	<h2>Listado de Ofertas</h2>
	<table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo __('titulo'); ?></th>
            <th><?php echo __('activa'); ?></th>
            <th><?php echo __('vacantes'); ?></th>
            <th><?php echo __('fecha limite'); ?></th>
            <th><?php echo __('empresa'); ?></th>
            <th><td></td><th class="action_simply"><?php echo __('Acciones'); ?></th><td></td></th>
        </tr>
        <?php
        foreach ($ofertas as $oferta): ?>
        <tr>
                <td><?php echo h($oferta['Oferta']['titulo']); ?></td>
                <td><?php if($oferta['Oferta']['activa']) echo __('Si'); else echo __('No');?></td>
                <td><?php echo h($oferta['Oferta']['vacantes']); ?></td>
                <td><?php echo h($oferta['Oferta']['fecha_limite']); ?></td>
                <td><?php echo h($oferta['Empresa']['nombre_social']); ?></td>
                <td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_search.png", array(
						    "alt" => "Info",
						    "class" => "thumbs",
						    'url' => array('action' => 'view', $oferta['Oferta']['id']),
						));
	                ?></td>
	                <td><?php
	                	echo $this->Html->image("https://cdn1.iconfinder.com/data/icons/simplicio/128x128/file_edit.png", array(
						    "alt" => "Edit",
						    "class" => "thumbs",
						    'url' => array('action' => 'edit', $oferta['Oferta']['id']),
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
								$oferta['Oferta']['id']
							),
							array('escape' => false),
							__('¿Realmente desea eliminar a: %s?', strtoupper($oferta['Oferta']['titulo']))
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
		<li><?php echo $this->Html->link(__('Crear Oferta'),array('action'=>'add'));?></li>
		<li><?php echo $this->Html->link(__('Top 5'),array('action'=>'recientes'));?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>