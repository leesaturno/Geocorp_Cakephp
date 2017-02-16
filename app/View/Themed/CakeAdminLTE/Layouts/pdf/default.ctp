<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
			echo $this->Html->css('fonts'); 

			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
			echo $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
			echo $this->Html->css('//fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic');
			echo $this->Html->css('CakeAdminLTE');
	?>
</head>
<body>
	<div id="container">
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>