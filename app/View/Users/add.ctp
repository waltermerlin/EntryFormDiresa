<h1>Add Users</h1>

<?php
	echo $this->Form->create('User');
	echo $this->Form->input('name');
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->input('password_confirmation', array('type' => 'password'));
	echo $this->Form->end('Save');
