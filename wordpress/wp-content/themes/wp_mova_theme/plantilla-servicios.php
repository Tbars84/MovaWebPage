<?php
/* 
 * Template Name: Plantilla Servicios
 * Plantilla para Landing de Servicios
 * 19.09.2017
*/
get_header();
$tituloIntro = rwmb_meta('titulo-introduccion');
$textoIntro = rwmb_meta( 'texto-introduccion');
$tituloServicios = rwmb_meta( 'titulo-servicios');
$textoServicios = rwmb_meta( 'texto-nuestros-servicios');
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
	    			<div class="info-img single-servicios-img">
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
	    <section id="titulares" class="servicios">
	    	<div class="container-fluid">
	    		<h2><?php echo $tituloServicios; ?></h2>
					<?php echo $textoServicios; ?>
				<?php
				$args = array(
					'post_type' => 'servicios',
					'order'  => 'ASC'
				);
				$query = new WP_Query( $args );		
				if ( $query->have_posts() ) : 
					$pos = 0;
					while ( $query->have_posts() ) : $query->the_post(); 	
					$caracteristicas = rwmb_meta('caracteristicas-servicio');
					$pos ++;					
					if ($pos % 2 == 0):
					?>
			    		<div class="titulares-snippet desktop">
			    			<div class="snippet-img invertido">
			    				<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
			    			</div>
			    			<div class="snippet-text invertido">
			    				<div class="wrap-snnipet">
				    				<h3><?php the_title() ?></h3>
				    				<p>
				    					<?php echo(get_the_excerpt()); ?>
				    				</p>
				    				<?php  
										if( !empty($caracteristicas) ):
				    				?>
				    					<ul>
				    						<?php  
											foreach ($caracteristicas  as $caracteristica ):
				    						?>
				    						<li><?php echo $caracteristica; ?></li>
				    						<?php  
											endforeach;
				    						?>
				    					</ul>
			    					<?php 
										endif;
			    					?>
				    				<a href="<?php the_permalink(); ?>">Ver más</a>
			    				</div>
			    			</div>
			    		</div>					
					<?php
  					else:
						?>
			    		<div class="titulares-snippet desktop">
			    			<div class="snippet-text">
			    				<div class="wrap-snnipet">
				    				<h3><?php the_title() ?></h3>
				    				<p>
				    					<?php echo(get_the_excerpt()); ?>
				    				</p>
				    				<?php  
										if( !empty($caracteristicas) ):
				    				?>
				    					<ul>
				    						<?php  
											foreach ($caracteristicas  as $caracteristica ):
				    						?>
				    						<li><?php echo $caracteristica; ?></li>
				    						<?php  
											endforeach;
				    						?>
				    					</ul>
			    					<?php 
										endif;
			    					?>
				    				<a href="<?php the_permalink(); ?>">Ver más</a>
			    				</div>
			    			</div>
			    			<div class="snippet-img">
			    				<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
			    			</div>
			    		</div>
						<?php
  					endif;
						?>
			    		<div class="titulares-snippet movil">
			    			<div class="snippet-text">
			    				<div class="wrap-snnipet">
				    				<h3><?php the_title() ?></h3>
				    				<p>
				    					<?php echo(get_the_excerpt()); ?>
				    				</p>
				    				<?php  
										if( !empty($caracteristicas) ):
				    				?>
				    					<ul>
				    						<?php  
											foreach ($caracteristicas  as $caracteristica ):
				    						?>
				    						<li><?php echo $caracteristica; ?></li>
				    						<?php  
											endforeach;
				    						?>
				    					</ul>
			    					<?php 
										endif;
			    					?>
				    				<a href="<?php the_permalink(); ?>">Ver más</a>
			    				</div>
			    			</div>
			    			<div class="snippet-img">
			    				<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
			    			</div>
			    		</div>
						<?php

					endwhile;
					wp_reset_postdata();
				else :
					esc_html_e( 'No hay servicios publicados en el momento' );
				endif;
				?>
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