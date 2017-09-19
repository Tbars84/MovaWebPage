<?php 

	wp_nav_menu(
		array(
			'theme_location' => 'header-nav',
			'container_class' => '',
			'container_id' => '',
			'container' => false,
			'items_wrap' => '<ul>%3$s</ul>',
			'after' => '<div class="hover-menu"></div>'
		)
	);
?>