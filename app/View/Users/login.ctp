<?php echo $this->Form->create(null, array('id'=>'da-login-form')); ?>
	<div id='da-login-input-wrapper'>
		<div class='da-login-input'>
			<?php echo $this->Form->input('username', array('id'=>'da-login-username', 'placeholder'=>'Username', 'label'=>'' )); ?>
		</div>
		<div class='da-login-input'>
			<?php echo $this->Form->input('password', array('id'=>'da-login-password', 'placeholder'=>'Password', 'label'=>'' )); ?>
		</div>
	</div>
	<div id='da-login-button'>
		<?php echo $this->Form->submit('Login', array('id'=>'da-login-submit')); ?>
	</div>
<?php echo $this->Form->end(); ?>