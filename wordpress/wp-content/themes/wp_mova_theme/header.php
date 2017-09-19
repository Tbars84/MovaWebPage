<?php  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title><?php the_title(); ?></title>
<?php 
	require_once('header-metas.php') 
?>
</head>
<body>
	<main>
		<section id="menu-desktop">
			<div class="menu-desktop-wrap">
				<nav class="navbar-mova">
				    <div class="container-fluid">
				        <!-- Brand and toggle get grouped for better mobile display -->
				        <div class="row">
				        	<div class="col-xs-12 logo-desktop">
				        		<img src="<?php bloginfo('template_url'); ?>/img/logo-mova.png" alt="Logo Mova">
				        	</div>
				        </div>
				        <!-- Collect the nav links, forms, and other content for toggling -->
				        <div class="mova-menu">
					        <?php include TEMPLATEPATH .  '/nav-desktop.php'?>
        				</div>
    				</div>
				</nav>
			</div>
		</section>