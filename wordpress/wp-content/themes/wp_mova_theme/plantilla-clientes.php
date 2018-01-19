<?php
/* 
 * Template Name: Plantilla CLientes
 * Plantilla para CLientes
 * 19.09.2017
*/
get_header();
$tituloIntro = rwmb_meta('titulo-introduccion');
$textoIntro = rwmb_meta( 'texto-introduccion');

?>
		<div class="padd-movile"></div>	
	    <section id="slider-full" style="max-height: 520px; overflow: hidden;">
		    <div class="separador-vibracion"></div>
	    	<div class="container-fluid">
				<div class="row">
						<div class="titulo-cotizacion-inicio">
							<p>
								<?php the_title(); ?>
							</p>
							<a href="http://camilo-tabares.com/MovaWebPage/wordpress/cotizador/">Solicitar Cotización</a>
						</div>
						<div class="owl-carousel owl-theme slider-inicio">
							<?php
							$args = array(
								'post_type' => 'slider',
								'order'  => 'ASC'
							);
							 $query = new WP_Query( $args );		
							if ( $query->have_posts() ) : 
								while ( $query->have_posts() ) : $query->the_post(); 	
									$imagenesSlider = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
							?>
							<div class="item">
								<img class="img-responsive " src="<?php echo $imagenesSlider; ?>" />
							</div>
							<?php  
								endwhile;
								wp_reset_postdata();
							else :
								esc_html_e( 'Debes ingresar imagenes dentro del pod de slider' );
							endif;
							?>
						</div>
					</div>
					<div class="textutra-bottom"></div>
				</div>
	    	</div>
	    </section>
	    <section id="info-halfScreen">
	    	<div class="container-fluid">
	    		<div class="info-wrap">
	    			<div class="info-text">
	    				<div class="wrap-info">
		    				<h1><?php echo $tituloIntro; ?></h1>
		    				<p>
								<?php echo $textoIntro; ?>
		    				</p>	    					
	    				</div>
	    			</div>
	    			<div class="info-img">
	    			<?php  
	    			if ( have_posts() ) : while ( have_posts() ) : the_post();
	    				$urlSingle = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
	    			?>	
	    				<img src="<?php echo $urlSingle; ?>" alt="Foto de titulares">
					<?php  
						endwhile; 
						wp_reset_postdata();
					else :
						esc_html_e( 'Sorry, no posts matched your criteria.' );
					endif;
					?>	 	    				
					</div>
	    		</div>
	    	</div>
	    </section>
		<section id="clientes">
	    	<div class="container-fluid">
	    		<h2>Nuestros Clientes</h2>
				<div class="row">
					<div class="spacer"></div>
				</div>	    		
	    		<div class="row">
					<?php
					$args = array(
						'post_type' => 'clientes-thumbslider',
						'order'  => 'ASC'
					);
					 $query = new WP_Query( $args );
					if ( $query->have_posts() ) : 
						while ( $query->have_posts() ) : $query->the_post(); 	
							$clientesBg = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
					        $imagenesClientes = rwmb_meta('blog-bg');
					        $imagenLogoCliente = array_shift($imagenesClientes);
					?>
	    			<div class="col-xs-5 item-clientes">
	    				<div class="item-logo-clientes-cont">
	    					<img class="item-clientes-logo" src="<?php echo $imagenLogoCliente['full_url']; ?>" alt="">
	    				</div>
	    				<h5><?php the_title();?></h5>
	    				<img class="item-clientes-bg" src="<?php echo $clientesBg; ?>" alt="">
	    			</div>
					<?php  
						endwhile;
						wp_reset_postdata();
					else :
						esc_html_e( 'No hay LOGOS de clientes' );
					endif;
					?>
	    		</div>
			</div>			
		</section>
		<section id="break-line-info"  class="cotizador">
			<div class="container-fluid">
				<h4>Cotizador en Línea</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa harum maxime sequi blanditiis provident voluptatem quod fugit ad libero doloribus facere reiciendis adipisci molestias, assumenda dolorum beatae dolor amet cumque!</p>
				<a href="http://camilo-tabares.com/MovaWebPage/wordpress/cotizador/">Solicitar Cotización</a>				
			</div>
		</section>	
		<section id="footer">
			<div class="inicio"></div>
		</section>
	</main>	    
</body>
<?php  
	get_footer();
?>