<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Geocorp');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?>

		<title>
			<?php echo $cakeDescription ?>:
			
		</title>
		<style type="text/css">.flash-msg {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 10000;
}</style>
<?php  ?>
		<?php 
			echo $this->Html->meta('icon');
			$this->Html->charset;
			echo $this->Html->meta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no']);
			echo $this->fetch('meta');
		echo $this->Html->css('fonts.css'); 
echo $this->Html->css('jquery-ui.min');
			echo $this->Html->css('bootstrap.min.css');
			echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
			echo $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
			echo $this->Html->css('//fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic');
			echo $this->Html->css('CakeAdminLTE');
			echo $this->fetch('css');
			//echo $this->Html->script('libs/jquery-1.10.2.min');
			//echo $this->Html->script('libs/bootstrap.min');
			
			echo $this->fetch('script');
		?>
	</head>

	<body class="skin-blue fixed">
<?php if (isset($current_user)): ?>





		<?php echo $this->element('menu/top_menu'); ?>
		<?php endif; ?>
		<div class="wrapper row-offcanvas row-offcanvas-left">
		<?php if (isset($current_user)): ?>
			<?php echo $this->element('menu/left_sidebar'); ?>

		<?php endif; ?>
			<!-- Right side column. Contains the navbar and content of the page -->
<?php if (isset($current_user)): ?>
		    <aside class="right-side">  
		    	<section class="content-header">
				    <h1>
				        
				        <small>Panel de control</small>
				    </h1>
				  <section> 
				<?php endif; ?>
				<section class="content"> 
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
				</section>
			</aside><!-- /.right-side -->
			
	<script type="text/javascript">
		//$("#foto").fileinput();
		
		var basePath = "<?php echo Router::url('/'); ?>"
	</script>
	<br>
			<div id="msg"></div>
					</div><!-- ./wrapper -->
			
		
		
<?php echo $this->Html->script('jquery.min'); ?>
<?php echo $this->Html->script('jquery-ui.min'); ?>
<?php //echo $this->Html->script('search'); ?>
		<?php
		
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('CakeAdminLTE/app');
			echo $this->fetch('script');
		?>
		
	</body>

</html>