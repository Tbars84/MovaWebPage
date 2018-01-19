<?php
/* 
 * Template Name: Plantilla Inicio
 * Plantilla para el Inicio
 * 19.09.2017
*/
get_header();
$tituloIntro = rwmb_meta('titulo-introduccion');
$tituloSlider = rwmb_meta('titulo-slider');
$textoIntro = rwmb_meta( 'texto-introduccion');

$textoServicios = rwmb_meta( 'texto-servicios');
$tituloServicios = rwmb_meta( 'titulo-servicios');
$textoProd = rwmb_meta( 'texto-prod');
$tituloProd = rwmb_meta( 'titulo-prod');
$textoBooking = rwmb_meta( 'texto-booking');
$tituloBooking = rwmb_meta( 'titulo-booking');
$textoAlquiler = rwmb_meta( 'texto-alquiler');
$tituloAlquiler = rwmb_meta( 'titulo-alquiler');

$tituloEquipos = rwmb_meta('titulo-equipos');
$textoEquipos = rwmb_meta('texto-equipos');

$procesosTitulo = rwmb_meta('titulo-proceso');
$quoteTitulo = rwmb_meta('titulo-proceso-quote');
$quoteTexto = rwmb_meta('texto-proceso-quote');
$bookingTitulo = rwmb_meta('titulo-proceso-booking');
$bookingTexto = rwmb_meta('texto-proceso-booking');
$lockTitulo = rwmb_meta('titulo-proceso-lock');
$lockTexto = rwmb_meta('texto-proceso-lock');
$gameTitulo = rwmb_meta('titulo-proceso-game');
$gameTexto = rwmb_meta('texto-proceso-game');

$clientesInicio = rwmb_meta('titulo-clientes-inicio');

?>
		<div class="padd-movile"></div>	
	    <section id="slider-full">
		    <div class="separador-vibracion"></div>
	    	<div class="container-fluid">
				<div class="row">
						<div class="titulo-cotizacion-inicio">
							<p class="titulo-inicio">
								<?php echo $tituloSlider; ?>
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
								<?php echo $textoIntro; ?>
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
		<section id="lista-thumbnail"  class="nuestros-servicios">
			<div class="container-fluid">

				<h5><?php echo $tituloServicios; ?></h5>
					<?php echo $textoServicios; ?>

					<div class="thumbails-wrap">
						<div class="thumbnail-item" style="cursor: auto;">
							<h6><?php echo $tituloProd; ?></h6>
							<div class="item-img">
								<div class="info">
									<div class="info-center">
										<div style="display:table-cell; vertical-align: middle">
											<?php echo $textoProd; ?>											
										</div>
									</div>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/our-services-1.jpg" alt="">
							</div>
						</div>

						<div class="thumbnail-item" style="cursor: auto;">
							<h6><?php echo $tituloBooking; ?></h6>
							<div class="item-img">
								<div class="info">
									<div class="info-center">
										<div style="display:table-cell; vertical-align: middle">
											<?php echo $textoBooking; ?>										
										</div>
									</div>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/our-services-2.jpg" alt="">
							</div>
						</div>

						<div class="thumbnail-item" style="cursor: auto;">
							<h6><?php echo $tituloAlquiler; ?></h6>
							<div class="item-img">
								<div class="info">
									<div class="info-center">
										<div style="display:table-cell; vertical-align: middle">
											<?php echo $textoAlquiler; ?>										
										</div>
									</div>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/our-services-3.jpg" alt="">
							</div>
						</div>
					</div>
				</div>	
		</section>	    
	    <section id="titulares">
	    	<div class="container-fluid desktop">
	    		<h2><?php echo $tituloEquipos; ?></h2>
					<?php echo $textoEquipos; ?>
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
					$thumbServicios = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
					$pos ++;					
					if ($pos % 2 == 0):
					?>
			    		<div class="titulares-snippet servicios desktop">
			    			<div class="snippet-img invertido">
			    				<?php 
			    				if (!empty($thumbServicios) ) {
				    				 ?>
				    				<img src="<?php echo $thumbServicios; ?>" alt="Foto de Snnipet">
				    				<?php  
			    				}else{
			    					?>
			    					<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
		    					<?php  
		    					}
		    					?>
			    			</div>	    		
			    			<div class="snippet-text invertido">
			    				<div class="wrap-snnipet">
				    				<h3><?php the_title() ?></h3>
				    				<p>
				    					<?php echo(get_the_excerpt()); ?>
				    				</p>
				    				<?php  
									$args = array(
										'post_type' => 'servicios',
										'order'  => 'ASC'
									);
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
			    				<?php 
			    				if (!empty($thumbServicios) ) {
				    				 ?>
				    				<img src="<?php echo $thumbServicios; ?>" alt="Foto de Snnipet">
				    				<?php  
			    				}else{
			    					?>
			    					<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
		    					<?php  
		    					}
		    					?>
			    			</div>
			    		</div>
						<?php
  					endif;

						?>
			    		<div class="titulares-snippet movil">
			    			<div class="snippet-img">
			    				<?php 
			    				if (!empty($thumbServicios) ) {
				    				 ?>
				    				<img src="<?php echo $thumbServicios; ?>" alt="Foto de Snnipet">
				    				<?php  
			    				}else{
			    					?>
			    					<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
		    					<?php  
		    					}
		    					?>
			    			</div>			    			
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
		<section id="procesoInicio">
			<div class="container-fluid">
				<h2><?php echo $procesosTitulo; ?></h2>
				<ul class="lista-procesos">
					<li class="proceso">
						<div class="cuadro">
							<img src="<?php bloginfo('template_url'); ?>/img/proceso-1.jpg" alt="">
						</div>
						<div class="contenido-proceso">
							<h5><?php echo $quoteTitulo; ?></h5>
							<?php echo $quoteTexto; ?>
						</div>
					</li>
					<li class="proceso">
						<div class="cuadro">
							<img src="<?php bloginfo('template_url'); ?>/img/proceso-2.jpg" alt="">
						</div>
						<div class="contenido-proceso">
							<h5><?php echo $bookingTitulo; ?></h5>
							<?php echo $bookingTexto; ?>
						</div>
					</li>
					<li class="proceso">
						<div class="cuadro">
							<img src="<?php bloginfo('template_url'); ?>/img/proceso-3.jpg" alt="">
						</div>
						<div class="contenido-proceso">
							<h5><?php echo $lockTitulo; ?></h5>
							<?php echo $lockTexto; ?>
						</div>
					</li>
					<li class="proceso">
						<div class="cuadro">
							<img src="<?php bloginfo('template_url'); ?>/img/proceso-4.jpg" alt="">
						</div>
						<div class="contenido-proceso">
							<h5><?php echo $gameTitulo; ?></h5>
							<?php echo $gameTexto; ?>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<section id="comentarios">
	    	<div class="container-fluid">
				<div class="row">
						<div class="prev-comentarios">
							<img src="<?php bloginfo('template_url'); ?>/img/prev-img.png" alt="">
						</div>
						<div class="next-comentarios">
							<img src="<?php bloginfo('template_url'); ?>/img/next-img.png" alt="">
						</div>
						<div class="owl-carousel owl-theme slider-comentarios">
							<?php
							$args = array(
								'post_type' => 'comentarios-clientes',
								'order'  => 'ASC'
							);
							 $query = new WP_Query( $args );		
							if ( $query->have_posts() ) : 
								while ( $query->have_posts() ) : $query->the_post(); 	
									$iconoComent = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
							?>
							<div class="item">
								<div class="testimoios-item">
									<div class="icon">
										<img class="img-responsive desktop" src="<?php echo $iconoComent; ?>" />
									</div>
									<h6><?php the_title(); ?></h6>
									<div class="texto">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							<?php  
								endwhile;
								wp_reset_postdata();
							else :
								esc_html_e( 'No hay comentarios de CLientes' );
							endif;
							?>
						</div>
					</div>
					<div class="textutra-bottom"></div>
				</div>
	    	</div>			
		</section>
		<section id="clientes">
	    	<div class="container-fluid">
	    		<h2><?php echo $clientesInicio; ?></h2>
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