<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Viewport metatags -->
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- iOS webapp metatags -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<!-- iOS webapp icons -->
<link rel="apple-touch-icon" href="touch-icon-iphone.html" />
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.html" />
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-retina.html" />

<!-- CSS Reset -->
<?php echo $this->Html->css("/dandelion/css/reset")?>
<!--  Fluid Grid System -->
<?php echo $this->Html->css("/dandelion/css/fluid")?>
<!-- Login Stylesheet -->
<?php echo $this->Html->css("/dandelion/css/login")?>

<!-- Required JavaScript Files -->
<?php echo $this->Html->script(array('/dandelion/js/jquery-1.7.2.min','/dandelion/js/jquery.placeholder','/dandelion/plugins/validate/jquery.validate.min')); ?>

<!-- Core JavaScript Files -->
<?php echo $this->Html->script('/dandelion/js/core/dandelion.login'); ?>

<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
?>

<title>Dandelion Admin - Login</title>

</head>

<body>


<div id="da-login">
	<div id="da-login-box-wrapper">
		<div id="da-login-top-shadow">
		</div>
		<div id="da-login-box">
			<div id="da-login-box-header">
				<h1>Login</h1>
			</div>
			<div id="da-login-box-content">
				<?php echo $this->Session->flash(); ?>


				<?php echo $this->fetch('content'); ?>
				
			</div>
			<div id="da-login-box-footer">
				
				<div id="da-login-tape"></div>
			</div>
		</div>
		<div id="da-login-bottom-shadow">
		</div>
	</div>
</div>
				<?php echo $this->element('sql_dump'); ?>
	
</body>

</html>
