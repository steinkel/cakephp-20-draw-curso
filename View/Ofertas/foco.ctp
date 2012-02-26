<div class="ofertas index">
<?php
// formulario para buscar por foco
echo $this->Form->create('Oferta', array('action' => 'foco'));
echo $this->Form->input('searchFoco');
echo $this->Form->submit();
echo $this->Form->end();
?>
<?php if (!empty($ofertasDeFoco)) : ?>
	<h2><?php echo __('Ofertas para el Foco : ') . h($ofertasDeFoco['Foco']['nombre']);?></h2>
	<table cellpadding="0" cellspacing="0">
	<?php
	foreach ($ofertasDeFoco['Oferta'] as $oferta): ?>
	<tr>
		<td><?php echo h($oferta['titulo']); ?>&nbsp;</td>
		<td><?php echo h($oferta['vacantes']); ?>&nbsp;</td>
		<td><?php echo h($oferta['fecha_limite']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($oferta['Empresa']['nombre_social'], array('controller' => 'empresas', 'action' => 'view', $oferta['Empresa']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php else : ?>
	<h2>No se encontraron ofertas para este foco</h2>
<?php endif; ?>
</div>
