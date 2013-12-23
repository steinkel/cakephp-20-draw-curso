<div class="actions">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Inicio'), array('controller' => 'pages', 'action' => 'index')); ?></li>
	</ul>
</div>
<div class="ofertas index">
	<h2><?php echo __('Ofertas más recientes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Titulo</th>
		<th>Vacantes</th>
		<th>Fecha Limite</th>
		<th>Empresa</th>
	</tr>
	<?php
	foreach ($ofertas as $oferta): ?>
	<tr>
		<td><?php echo h($oferta['Oferta']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['vacantes']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['fecha_limite']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($oferta['Empresa']['nombre_social'], array('controller' => 'empresas', 'action' => 'view', $oferta['Empresa']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
