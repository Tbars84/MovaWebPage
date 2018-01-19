<?php
/* 
 * Template Name: Plantilla Blog
 * Plantilla para Landing de Blog
 * 19.09.2017
*/
get_header();
$tituloIntro = rwmb_meta('titulo-introduccion');
$textoIntro = rwmb_meta( 'texto-introduccion');
?>
		<div class="padd-movile"></div>	
	    <section id="slider-full" style="max-height: 520px;overflow: hidden;">
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
		<section id="lista-thumbnail"  class="nuestros-servicios">
			<div class="container-fluid">
				<h5>NUESTROS EVENTOS</h5>
					<div class="thumbails-wrap">
						<div class="thumbnail-item" style="margin: 0 5%">
							<h6>EVENTOS CORPORATIVOS Y EMPRESARIALES</h6>
							<div class="item-img item-eventos">
								<div class="info">
									<div class="info-center" style="color: #FFFFFF;">
										<div style="display:table-cell; vertical-align: middle;">
											<p style="color: white; text-align: center;">
											Eventos dirigidos a empresas, organizaciones, entidades públicas, etc.
											</p>

										</div>
									</div>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/our-services-1.jpg" alt="">
							</div>
						</div>

						<div class="thumbnail-item" style="margin: 0 5%">
							<h6>CONCIERTOS</h6>
							<div class="item-img item-eventos">
								<div class="info">
									<div class="info-center" style="color: #FFFFFF;">
										<div style="display:table-cell; vertical-align: middle;">
											<p style="color: white; text-align: center;">
											Espectáculos artísticos y de entretenimiento.												
											</p>

										</div>
									</div>
								</div>
								<img src="<?php bloginfo('template_url'); ?>/img/our-services-2.jpg" alt="">
							</div>
						</div>

					</div>
				</div>	
		</section>	   
	    <section id="titulares">
	    	<div class="container-fluid">
				<?php  
				$args = array(
					'post_type' => 'post',
					'order'  => 'ASC'
				);
				$query = new WP_Query( $args );		
				if ( $query->have_posts() ) : 
					while ( $query->have_posts() ) : $query->the_post(); 	
					$caracteristicas = rwmb_meta('caracteristicas-servicio');
				?>
	    		<div class="titulares-snippet">
	    			<div class="snippet-img invertido snippet-eventos" >
	    				<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
	    			</div>	    		
	    			<div class="snippet-text invertido snnipet-eventos" >
	    				<div class="wrap-snnipet">
		    				<h3 ><?php the_title(); ?></h3>
		    				<p>
								<?php echo(get_the_excerpt()); ?> 
		    				</p>
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