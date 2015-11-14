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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title> Bookinglayer -	
	<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->script('jquery-2.1.4.min');
		echo $this->Html->meta('icon');
		echo $this->Html->css(array( 'cake.generic','style','bootstrap', 'bootstrap-theme.min.css'));		
		
		echo $this->Html->css('style');


		echo $this->fetch('meta');

		echo $this->fetch('script');
		
	?>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script src='http://julian.com/research/velocity/build/jquery.velocity.min.js'></script>
	<script src='http://julian.com/research/velocity/build/velocity.ui.js'></script>
	<script src="../js/velocity.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
	
	            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="navbar-brand"><img class="img-responsive" src="<?php echo $this->webroot; ?>img/logo-om.png"></a>
	        </div>
	        <!-- Collection of nav links and other content for toggling -->
	        <div id="navbarCollapse" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li class="active"><a href="http://www.bookinglayer.com/">BookingLayer</a></li>
	                <li><a href="http://localhost:8888/cakephp-2.7.5/posts/">View Posts</a></li>
	                <li><a href="http://localhost:8888/cakephp-2.7.5/posts/add">Add Posts</a></li>
	            </ul>
	         
	</nav>
	<div id="container">
		<div id="header">
			
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
	
		</div>
	</div>
	
</body>
</html>
