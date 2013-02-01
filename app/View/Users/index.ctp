<div class='grid_4'>
    <div class='da-panel'>
        <div class='da-panel-header'>
            <span class='da-panel-title'>
                <?php echo $this->Html->image('/dandelion/images/icons/color/wand.png', array( 'alt'=>'')); ?>
                Users
            </span>
            
        </div>
        <div class='da-panel-content'>
			<table class="da-table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>User Name</th>
						<th>Email</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php  foreach ($users as $user): ?>
						<tr>
							<td><?php echo $user['User']['id']; ?></td>
							<td><?php echo $this->Html->link( $user['User']['name'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?></td>
							<td><?php echo $user['User']['username']; ?></td>
							<td><?php echo $user['User']['email']; ?></td>
							<td>
								<?php if ($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
									<?php echo $this->Html->link("Editar", array('action' => 'edit', $user['User']['id'])) ; ?>
									<?php echo $this->Form->postLink("Borrar", array('action' => 'delete', $user['User']['id']) , array('confirm' => '¿Estas seguro?')) ; ?>
								<?php endif;?>
							</td>

						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
        </div>
<h1></h1>


<?php echo $this->Html->link("Nuevo", array('controller' => 'users', 'action' => 'add') );?>