<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<!-- Viewport metatags -->
<meta name='HandheldFriendly' content='true' />
<meta name='MobileOptimized' content='320' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />

<!-- iOS webapp metatags -->
<meta name='apple-mobile-web-app-capable' content='yes' />
<meta name='apple-mobile-web-app-status-bar-style' content='black' />

<!-- iOS webapp icons -->
<link rel='apple-touch-icon' href='touch-icon-iphone.html' />
<link rel='apple-touch-icon' sizes='72x72' href='touch-icon-ipad.html' />
<link rel='apple-touch-icon' sizes='114x114' href='touch-icon-retina.html' />

<?php echo $this->Html->css('/dandelion/css/login')?>


<!-- CSS Reset -->
<?php echo $this->Html->css('/dandelion/css/reset.css'); ?>
<!--  Fluid Grid System -->
<?php echo $this->Html->css('/dandelion/css/fluid.css'); ?>
<!-- Theme Stylesheet -->
<?php echo $this->Html->css('/dandelion/css/dandelion.theme.css'); ?>
<!--  Main Stylesheet -->
<?php echo $this->Html->css('/dandelion/css/dandelion.css'); ?>
<!-- Demo Stylesheet -->
<?php echo $this->Html->css('/dandelion/css/demo.css'); ?>

<!-- jQuery JavaScript File -->
<?php echo $this->Html->script('/dandelion/js/jquery-1.7.2.min.js'); ?>

<!-- jQuery-UI JavaScript Files -->
<?php echo $this->Html->script('/dandelion/jui/js/jquery-ui-1.8.20.min.js'); ?>
<?php echo $this->Html->script('/dandelion/jui/js/jquery.ui.timepicker.min.js'); ?>
<?php echo $this->Html->script('/dandelion/jui/js/jquery.ui.touch-punch.min.js'); ?>
<?php echo $this->Html->css('/dandelion/jui/css/jquery.ui.all.css'); ?>

<!-- Plugin Files -->

<!-- FileInput Plugin -->
<?php //echo $this->Html->script('/dandelion/js/jquery.fileinput.js'); ?>
<!-- Placeholder Plugin -->
<?php //echo $this->Html->script('/dandelion/js/jquery.placeholder.js'); ?>
<!-- Mousewheel Plugin -->
<?php //echo $this->Html->script('/dandelion/js/jquery.mousewheel.min.js'); ?>
<!-- Scrollbar Plugin -->
<?php //echo $this->Html->script('/dandelion/js/jquery.tinyscrollbar.min.js'); ?>
<!-- Tooltips Plugin -->
<?php //echo $this->Html->script('/dandelion/plugins/tipsy/jquery.tipsy-min.js'); ?>
<?php echo $this->Html->css('/dandelion/plugins/tipsy/tipsy'); ?>

<!-- Validation Plugin -->
<?php echo $this->Html->script('/dandelion/plugins/validate/jquery.validate.js'); ?>

<!-- Statistic Plugin JavaScript Files (requires metadata and excanvas for IE) -->
<?php echo $this->Html->script('/dandelion/js/jquery.metadata.js'); ?>
<!--[if lt IE 9]>
<?php echo $this->Html->script('/dandelion/js/excanvas.js'); ?>
<![endif]-->
<?php echo $this->Html->script('/dandelion/js/core/plugins/dandelion.circularstat.min.js'); ?>

<!-- Wizard Plugin -->
<?php echo $this->Html->script('/dandelion/js/core/plugins/dandelion.wizard.min.js'); ?>

<!-- Fullcalendar Plugin -->
<?php echo $this->Html->script('/dandelion/plugins/fullcalendar/fullcalendar.min.js'); ?>
<?php echo $this->Html->script('/dandelion/plugins/fullcalendar/gcal.js'); ?>

<?php echo $this->Html->css('/dandelion/plugins/fullcalendar/fullcalendar'); ?>

<!--<link rel='stylesheet' href='dandelion/plugins/fullcalendar/fullcalendar.print.css' media='print' />-->

<!-- Load Google Chart Plugin -->
<?php //echo $this->Html->script('/dandelion/https://www.google.com/jsapi'); ?>
<script type='text/javascript'>
	// Load the Visualization API and the piechart package.
	//google.load('visualization', '1.0', {'packages':['corechart']});
</script>
<!-- Debounced resize script for preventing to many window.resize events
      Recommended for Google Charts to perform optimally when resizing -->
<?php echo $this->Html->script('/dandelion/js/jquery.debouncedresize.js'); ?>

<!-- Demo JavaScript Files -->
<?php echo $this->Html->script('/dandelion/js/demo/demo.dashboard'); ?>

<!-- Demo JavaScript UI -->
<?php echo $this->Html->script('/dandelion/js/demo/demo.ui'); ?>

<!-- Core JavaScript Files -->
<?php echo $this->Html->script('/dandelion/js/core/dandelion.core'); ?>

<!-- DataTables Plugin -->
<?php echo $this->Html->script('/dandelion/plugins/datatables/jquery.dataTables.min.js'); ?>


<!-- Demo JavaScript Files -->
<?php echo $this->Html->script('/dandelion/js/demo/demo.tables.js'); ?>

<!-- Customizer JavaScript File (remove if not needed) -->
<?php //echo $this->Html->script('/dandelion/js/core/dandelion.customizer'); ?>

<?php echo $this->Html->script('/dandelion/js/me/tools'); ?>

<title>Dandelion Admin - Dashboard</title>

</head>

<body>

	<!-- Dandelion Customizer (remove if not needed) -->
    <div id='da-customizer'>
    	<div id='da-customizer-content'>
        	<ul>
            	<li>
                	<span class='da-customizer-title'>Background Pattern</span>
                    <span id='da-customizer-body-bg'></span>
                </li>
                <li>
                	<span>Header Pattern</span>
                    <span id='da-customizer-header-bg'></span>
                </li>
                <li>
                	<span>
                    	Layout
                        <span title='This functionality can only provide you the CSS for background and header patterns. Instructions to switch between fixed or fluid layout can be found in the documentation.' class='da-tooltip-w da-customizer-tooltip'>
                    		[?]
                        </span>
                    </span>
                    <ul id='da-customizer-layouts' class='clearfix'>
                    	<li>
                        	<input type='radio' id='da-customizer-fluid' name='da-layout' checked='checked' />
                        	<label for='da-customizer-fluid'>Fluid</label>
                        </li>
                    	<li>
                        	<input type='radio' id='da-customizer-fixed' name='da-layout' />
                            <label for='da-customizer-fixed'>Fixed</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <div id='da-customizer-button'>
            	<button class='da-button red'>Get CSS</button>
            </div>
        </div>
        <span id='da-customizer-pulldown'></span>
    </div>

	<!-- Main Wrapper. Set this to 'fixed' for fixed layout and 'fluid' for fluid layout' -->
	<div id='da-wrapper' class='fluid'>
    
        <!-- Header -->
        <div id='da-header'>
        
        	<div id='da-header-top'>
                
                <!-- Container -->
                <div class='da-container clearfix'>
                    
                    <!-- Logo Container. All images put here will be vertically centere -->
                    <div id='da-logo-wrap'>
                        <div id='da-logo'>
                            <div id='da-logo-img'>
                                <a href='dashboard.html'>
                                    <?php echo $this->Html->image('/dandelion/images/logo.png', array( 'alt'=>'Dandelion Admin')); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Header Toolbar Menu -->
                    <div id='da-header-toolbar' class='clearfix'>
                        <div id='da-user-profile'>
                            <div id='da-user-avatar'>
                                <?php echo $this->Html->image('/dandelion/images/pp.jpg', array( 'alt'=>'')); ?>
                            </div>
                            <div id='da-user-info'>
                                John Doe
                                <span class='da-user-title'>Creative Director</span>
                            </div>
                            <ul class='da-header-dropdown'>
                                <li class='da-dropdown-caret'>
                                    <span class='caret-outer'></span>
                                    <span class='caret-inner'></span>
                                </li>
                                <li class='da-dropdown-divider'></li>
                                <li><a href='dashboard.html'>Dashboard</a></li>
                                <li class='da-dropdown-divider'></li>
                                <li><a href='#'>Profile</a></li>
                                <li><a href='#'>Settings</a></li>
                                <li><a href='#'>Change Password</a></li>
                            </ul>
                        </div>
                        <div id='da-header-button-container'>
                        	<ul>
                            	<li class='da-header-button notif'>
                                	<span class='da-button-count'>32</span>
                                	<a href='#'>Notifications</a>
                                    <ul class='da-header-dropdown'>
                                        <li class='da-dropdown-caret'>
                                            <span class='caret-outer'></span>
                                            <span class='caret-inner'></span>
                                        </li>
                                        <li>
                                        	<span class='da-dropdown-sub-title'>Notifications</span>
                                        	<ul class='da-dropdown-sub'>
                                                <li class='unread'>
                                                    <a href='#'>
                                                        <span class='message'>
                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                        </span>
                                                        <span class='time'>
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='unread'>
                                                    <a href='#'>
                                                        <span class='message'>
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class='time'>
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='read'>
                                                    <a href='#'>
                                                        <span class='message'>
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class='time'>
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='read'>
                                                    <a href='#'>
                                                        <span class='message'>
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class='time'>
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class='da-dropdown-sub-footer'>
                                            	View all notifications
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            	<li class='da-header-button message'>
                                	<span class='da-button-count'>5</span>
                                	<a href='#'>Messages</a>
                                    <ul class='da-header-dropdown'>
                                        <li class='da-dropdown-caret'>
                                            <span class='caret-outer'></span>
                                            <span class='caret-inner'></span>
                                        </li>
                                        <li>
                                        	<span class='da-dropdown-sub-title'>Messages</span>
                                        	<ul class='da-dropdown-sub'>
                                                <li class='unread'>
                                                    <a href='#'>
                                                        <span class='message'>
                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                        </span>
                                                        <span class='time'>
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='unread'>
                                                    <a href='#'>
                                                        <span class='message'>
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class='time'>
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='read'>
                                                    <a href='#'>
                                                        <span class='message'>
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class='time'>
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class='read'>
                                                    <a href='#'>
                                                        <span class='message'>
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class='time'>
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class='da-dropdown-sub-footer'>
                                            	View all messages
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            	<li class='da-header-button logout'>                                	
                                    <?php if($logged_in): ?>
                                        <?php echo $this->Html->link('logout',  array('controller'=>'users', 'action'=>'logout')); ?>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                                    
                </div>
            </div>
            
            <div id='da-header-bottom'>
                <!-- Container -->
                <div class='da-container clearfix'>
                
                	<div id='da-search'>
                    	<form>
                        	<input type='text' placeholder='Search...' />
                        </form>
                    </div>
                	
                    <!-- Breadcrumbs -->
                    <div id='da-breadcrumb'>
                        <ul>
                            <li class='active'><span><?php echo $this->Html->image('/dandelion/images/icons/black/16/home.png', array( 'alt'=>'Home')); ?>Dashboard</span></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <!-- Content -->
        <div id='da-content'>
            
            <!-- Container -->
            <div class='da-container clearfix'>
                
	            <!-- Sidebar Separator do not remove -->
                <div id='da-sidebar-separator'></div>
                
                <!-- Sidebar -->
                <div id='da-sidebar'>
                
                    <!-- Main Navigation -->
                    <div id='da-main-nav' class='da-button-container'>
                        <ul>
                            <li class='active'>
                            	<a href='dashboard.html'>
                                	<!-- Icon Container -->
                                	<span class='da-nav-icon'>
                                    	<?php echo $this->Html->image('/dandelion/images/icons/black/32/home.png', array( 'alt'=>'Dashboard')); ?>
                                    </span>
                                	Inicio
                                </a>
                            </li>                            
                            <li>
                            	<a href=<?php echo $this->Html->url(array('controller' => 'modalities', 'action' => 'allList', 2)); ?>>
                                	<!-- Icon Container -->
                                	<span class='da-nav-icon'>
                                    	<?php echo $this->Html->image('/dandelion/images/icons/black/32/day_calendar.png', array( 'alt'=>'Calendar')); ?>
                                    </span>
                                	Diplomado
                                </a>
                            </li>
                            <li>
                            	<a href=<?php echo $this->Html->url(array('controller' => 'modalities', 'action' => 'allList', 1)); ?> >
                                	<!-- Icon Container -->
                                	<span class='da-nav-icon'>
                                    	<?php echo $this->Html->image('/dandelion/images/icons/black/32/file_cabinet.png', array( 'alt'=>'File Handling')); ?>
                                    </span>
                                	Segunda Especializacion
                                </a>
                            </li>                            
                        </ul>
                    </div>
                    
                </div>
                
                <!-- Main Content Wrapper -->
                <div id='da-content-wrap' class='clearfix'>
                
                	<!-- Content Area -->
                	<div id='da-content-area'>
                        <?php echo $this->fetch('content'); ?>
                        <div class='grid-4'>
                            <?php echo $this->element('sql_dump'); ?>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <!-- Footer -->
        <div id='da-footer'>
        	<div class='da-container clearfix'>
            	<p>Copyright 2012. Dandelion Admin. All Rights Reserved.</p>                
            </div>
        </div>
        
    </div>
    
</body>

</html>
    