<?php  foreach ($phases as $phase): ?>
	<ul>
		<li><?php echo $this->Html->link($phase['Phase']['name'], array('controller' => 'students', 'action' => 'add', $phase_id = $phase['Phase']['id'] ));?></li>
	</ul>
<?php endforeach; ?>