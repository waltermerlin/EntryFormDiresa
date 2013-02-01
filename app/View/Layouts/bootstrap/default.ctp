<!--    Bootstrap Cakephp v1.0  --> 
<!--    Bootstrap WhiteForm  v1.0  --> 
<!DOCTYPE html>
<html>
	<head> 
		<title>Segunda Especialización - Economía</title>
		<?php echo $this->Html->css('/bootstrap/css/bootstrap'); ?>
		<?php echo $this->Html->css('/bootstrap/css/bootstrap-responsive'); ?>
		<?php echo $this->Html->css('/bootstrap/css/bootstrap-datepicker'); ?>
		<?php echo $this->Html->css('/bootstrap/css/me.module'); ?>
		
		<?php echo $this->Html->css('/theme/css/master'); ?>

		
		<?php echo $this->Html->script('jquery-1.8.2'); ?>
		<?php echo $this->Html->script('/bootstrap/js/bootstrap.min'); ?>
		<?php echo $this->Html->script('/bootstrap/js/bootstrap-datepicker'); ?>
		<?php echo $this->Html->script('/bootstrap/js/jqBootstrapValidation'); ?>


		<?php echo $this->Html->script('/js/me/tools'); ?>

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
				<div class="header-toolbar pull-right">
					<div class="user-profile pull-left">
						<div class="user-avatar"><img src=""></div>
						<div class="user-info">Admin <span>Admistrador</span> </div>
					</div>
					<div class="header-button-container pull-left">
						<ul>
							<li class="logout">
								<?php echo $this->Html->link('logout',  array('controller'=>'users', 'action'=>'logout')); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="header-bottom"></div>
		</header>
			
		<div class="container">

			<div class="row">
				<div class="span3">
					<ul class="nav nav-list bs-docs-sidenav affix">
						<?php if ( $this->request->params['controller'] == 'home'): ?>
							<li class="active" >
								<a href=<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'index')); ?>>
	                        		<i class="icon-chevron-right"></i> Inicio
	                        	</a>
							</li>
						<?php else: ?>	
							<li>
								<a href=<?php echo $this->Html->url(array('controller' => 'home', 'action' => 'index')); ?>>
	                        		<i class="icon-chevron-right"></i> Inicio
	                        	</a>
							</li>
						<?php endif; ?>

						
					</ul>
				</div>
				<div class="span9"><?php echo $this->fetch('content'); ?></div>                
			</div>
		</div>

		<footer class="footer">
			<div class="container">
				<?php echo $this->element('sql_dump'); ?>
			</div>
		</footer>
		<?php echo $this->Html->script('/bootstrap/js/me/datepicker'); ?>		
	</body>
</html>