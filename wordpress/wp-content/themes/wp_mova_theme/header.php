<?php  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title><?php the_title(); ?></title>
<?php 
require_once('header-metas.php');
wp_head();
global $post;
$post_slug=$post->post_name;

?>
</head>
<body>
	<main>
		<p class="slug"><?php echo $post_slug;  ?></p>
		<section id="menu-desktop">
			<div class="menu-desktop-wrap">
				<nav class="navbar-mova">
				    <div class="container-fluid">
				        <!-- Brand and toggle get grouped for better mobile display -->
				        <div class="row">
				        	<div class="col-xs-12 logo-desktop">
				        		<img src="<?php bloginfo('template_url'); ?>/img/logo-mova-small.png" alt="Logo Mova">
				        	</div>
				        </div>
				        <!-- Collect the nav links, forms, and other content for toggling -->
				        <div class="mova-menu">
					        <?php include TEMPLATEPATH .  '/nav-desktop.php'?>
        				</div>
				        <div class="mova-menu movil">
					        <?php include TEMPLATEPATH .  '/nav-desktop-movil.php'?>
        				</div>

		                <div class="menu-toggle">
		                    <div class="one"></div>
		                    <div class="two"></div>
		                    <div class="three"></div>
		                </div>        				
    				</div>
				</nav>
			</div>
		</section>