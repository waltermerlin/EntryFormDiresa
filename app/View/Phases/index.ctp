</section>
	<div class="page-header"><h1>Fases &raquo; <small>Lista</small></h1></div>	

	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Fecha de inicio</th>
				<th>Fecha de cierre</th>
				<th>Stado</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php  foreach ($phases as $phase): ?>
				<tr>
					<td><?php echo $i = $i+1 ?></td>
					<td><?php echo $phase['Phase']['name']; ?></td>
					<td><?php echo $phase['Phase']['start_date']; ?></td>
					<td><?php echo $phase['Phase']['end_date']; ?></td>
					<td><?php echo $phase['Phase']['state']; ?></td>
					<td>
						<?php if ($current_user['role'] == 'admin'): ?>
							<?php echo $this->Html->link("Editar", array('action' => 'edit', $phase['Phase']['id'])) ; ?>
							<?php echo $this->Form->postLink("Borrar", array('action' => 'delete', $phase['Phase']['id']) , array('confirm' => '¿Estas seguro?')) ; ?>
						<?php endif;?>
					</td>

				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<?php echo $this->Html->link("Nueva Fase", array('controller' => 'phases', 'action' => 'add') );?>
<section>