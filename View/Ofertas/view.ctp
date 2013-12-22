<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $oferta['Oferta']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="info">
<h2><?php  echo __('Oferta');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activa'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['activa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vacantes'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['vacantes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Limite'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['fecha_limite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($oferta['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $oferta['Empresa']['id'])); ?>
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
        foreach ($oferta['Foco'] as $foco): ?>
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