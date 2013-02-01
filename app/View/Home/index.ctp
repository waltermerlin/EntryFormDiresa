<section>
    <div class="page-header">
        <h1>Inicio &raquo; <small><?php echo $current_phase[0]['Phase']['name']; ?></small></h1>
    </div>
	<div class="tabbable tabs-right">
		
		<ul class="nav nav-tabs" >
			<?php $temp = true; ?>
			<?php foreach ($modalitiess as $modality): ?>
				<?php if($temp): ?>
				<?php $temp = false; ?>
					<li class="active">
				<?php else: ?>			
					<li class="">
				<?php endif;?>
						<a href="#mod<?php echo $modality['Modality']['id'] ?>" data-toggle="tab">
							<?php echo $modality['Modality']['name']?>	
						</a>
					</li>
			<?php endforeach; ?>
		</ul>

		<div class="tab-content">
			<?php $temp = true; ?>
			<?php foreach ($modalitiess as $modality): ?>
				<?php if($temp): ?>
					<?php $temp = false; ?>
					<div class="tab-pane active" id="mod<?php echo $modality['Modality']['id']?>">
				<?php else: ?>			
					<div class="tab-pane" id="mod<?php echo $modality['Modality']['id']?>">						
				<?php endif;?>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Especialidad</th>
								<th>Inscritos</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0; ?>
							<?php foreach ($modality['Specialty'] as $specialty): ?>
								<tr>
									<td>
										<?php echo $i = $i+1 ?>
									</td>
									<td>
										<?php echo $specialty['name']; ?>
									</td>
									<td>
										<?php echo $count[$specialty['id']];?>
									</td>
									<td>
										<?php echo $this->Html->Link('Ver', array('controller'=>'SpecialtyMemberships', 'action' => 'showList', $specialty['id'])); ?>	
									</td>									
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			<?php endforeach; ?>
		</div>

	</div>

	

</section>