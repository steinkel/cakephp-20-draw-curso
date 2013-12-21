<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Portal Empleo: '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<link rel="shortcut icon" href="../images.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500italic,300italic,700' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->css('final');
		echo $this->Html->script('jquery-1.10.2.min');
		echo $this->Html->script('popups');
		echo $scripts_for_layout;
	?>
</head>
<body onload="pop()">
	<div id="container">
		<div id="header">
			<div>
				<div><?php echo $this->Html->image('images.png', array('alt' => 'Portal Empleo'))?></div>
			</div>
			<div>
				<div><h1><?php echo __('Portal Empleo: '); echo $title_for_layout; ?></h1></div>
			</div>			
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			PE empleo © 2013
		</div>
	</div>
</body>
</html>
