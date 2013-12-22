<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $empresa['Empresa']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="empresas view">
<h2><?php  echo __('Empresa');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Social'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nombre_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cif'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['cif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="info">
<h2><?php  echo __('Ofertas relacionadas');?></h2>
	<table cellpadding="0" cellspacing="0">
        <tr>
			<th><?php echo __('Titulo'); ?></th>
			<th><?php echo __('Activa'); ?></th>
			<th><?php echo __('Vacantes'); ?></th>
			<th><?php echo __('Creada'); ?></th>
			<th><?php echo __('Fecha Limite'); ?></th>
            <th><td></td><th class="action_simply"><?php echo __('Acciones'); ?></th><td></td></th>
        </tr>
        <?php
        foreach ($empresa['Oferta'] as $oferta): ?>
        <tr>
				<td><?php echo $oferta['titulo'];?></td>
				<td><?php echo $oferta['activa'];?></td>
				<td><?php echo $oferta['vacantes'];?></td>
				<td><?php echo $oferta['created'];?></td>
				<td><?php echo $oferta['fecha_limite'];?></td>
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