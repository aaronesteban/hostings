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
	<title>
		Facturación de hostings
		<?//php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link rel="stylesheet" type="text/css" href="/hostings/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/hostings/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/hostingscss/index.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<!-- <h1>Gestión de hostings</h1> -->
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			 <?/*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
			<p>
				<?php echo $cakeVersion; ?>
			</p>
				);
			*/?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>

	<script type="text/javascript">
		$('#flashMessage').delay(5000).fadeOut(500);
	</script>
	
</body>
</html>
