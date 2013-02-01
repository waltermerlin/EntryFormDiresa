<h1>Edit User</h1>
<?php 
	echo $this->Form->create('User', array('action' => 'edit'));
	echo $this->Form->input('name');
	echo $this->Form->input('username');
	echo $this->Form->input('email');
	echo $this->Form->end('Save');
?>