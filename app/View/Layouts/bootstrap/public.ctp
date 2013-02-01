<!--    Bootstrap Cakephp v1.0  --> 
<!--    Bootstrap WhiteForm  v1.0  --> 
<!DOCTYPE html>
<html>
	<head> 
		<title>Inscripciones - Programa de Segunda Especialización</title>
		<?php echo $this->Html->css('/bootstrap/css/bootstrap'); ?>
		<?php echo $this->Html->css('/bootstrap/css/bootstrap-responsive'); ?>
		<?php echo $this->Html->css('/bootstrap/css/bootstrap-datepicker'); ?>
		<?php echo $this->Html->css('/bootstrap/css/me.module'); ?>
		<?php echo $this->Html->css('/bootstrap/css/bootstrap-validate'); ?>
		
		<?php echo $this->Html->css('/theme/css/master'); ?>

		
		<?php echo $this->Html->script('jquery-1.8.2'); ?>
		<?php echo $this->Html->script('jquery.validate.min'); ?>
		<?php echo $this->Html->script('/bootstrap/js/es/validate'); ?>
		
		<?php echo $this->Html->script('/bootstrap/js/bootstrap.min'); ?>
		<?php echo $this->Html->script('/bootstrap/js/bootstrap-datepicker'); ?>
		


		<?php echo $this->Html->script('/js/me/tools'); ?>

		<?php echo $this->Html->script('/theme/js/validation'); ?>

	</head>
	<body>
		<header class="header">
			<div class="container">
				<div class="logo-wrap pull-left">
					<div class="logo-img">
						<a href="">
							<?php echo $this->Html->image('/theme/img/logo.png'); ?>
						</a>
					</div>
				</div>
				
				<div class="pull-right">
					<div class="logo-img">
						<a href="http://www.unapsegundafie.edu.pe">
							<?php echo $this->Html->image('/theme/img/se_.png'); ?>
						</a>
					</div>
				</div>
				

			</div>
			<div class="header-bottom"></div>
		</header>
			
		<div class="container">

			<div class="row">
				<div class="span12"><?php echo $this->fetch('content'); ?></div>                
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<?php echo $this->element('sql_dump'); ?>
			</div>
		</footer>
		<?php echo $this->Html->script('/bootstrap/js/me/datepicker'); ?>
	</body>
</html>x