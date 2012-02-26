<div class="ofertas index">
	<h2><?php echo __('Ofertas más recientes');?></h2>
	<table cellpadding="0" cellspacing="0">
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
