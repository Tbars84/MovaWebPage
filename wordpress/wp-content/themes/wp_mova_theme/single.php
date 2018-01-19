<?php
get_header();
$imagenesPost = rwmb_meta('blog-bg');
?>
		<div class="padd-movile"></div>	
	    <section id="slider-full" style="max-height: 520px; overflow: hidden;">
		    <div class="separador-vibracion"></div>
	    	<div class="container-fluid">
				<div class="row">
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
    			<?php  
    			if ( have_posts() ) : while ( have_posts() ) : the_post();
    				$urlSingle = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    			?>	
	    		<div class="info-wrap">
	    			<div class="info-text margin-single">
	    				<div class="wrap-info">
		    				<h1><?php the_title(); ?></h1>
		    				<p>
		    					<?php echo(get_the_excerpt()); ?>
		    				</p>	    					
	    				</div>
	    			</div>
	    			<div class="info-img margin-single">
	    				<img src="<?php echo $urlSingle; ?>" alt="Foto de titulares">
	    			</div>
	    		</div>
	    		<div class="info-wrap">
	    			<div class="info-text single-more-content">
	    				<div class="wrap-info">
							<?php the_content(); ?>
	    				</div>
	    			</div>
	    			<div class="info-img margin-single">
	    			</div>
	    		</div>
				<?php  
					endwhile; 
					wp_reset_postdata();
				else :
					esc_html_e( 'Sorry, no posts matched your criteria.' );
				endif;
				?>	    		
	    	</div>
	    </section>
		<section id="break-line-info"  class="cotizador">
			<div class="container-fluid">
				<h4>Cotizador en Línea</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa harum maxime sequi blanditiis provident voluptatem quod fugit ad libero doloribus facere reiciendis adipisci molestias, assumenda dolorum beatae dolor amet cumque!</p>
				<a href="http://localhost/Proyectos/Mova/MovaWebPage/wordpress/cotizador/">Solicitar Cotización</a>
			</div>
		</section>
		<section id="lista-thumbnail"  class="nuestros-servicios">
			<div class="container-fluid">
				<h5>Galeria de Imágenes</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>					  
					<div class="thumbails-wrap">
						<?php  
						foreach ($imagenesPost as $imagenPost) {
						?>

						<div class="thumbnail-item" relUrl="<?php echo $imagenPost['full_url']; ?>">
							<h6><?php echo $imagenPost['alt']; ?></h6>
							<div class="item-img">
								<div class="info">
									<div class="info-center">
										<div style="display:table-cell vertical-align: middle;">
											<?php echo $imagenPost['description']; ?>											
										</div>
									</div>
								</div>

								<img src="<?php echo $imagenPost['url']; ?>" alt="<?php echo $imagenPost['title']; ?>">
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>	
			<div id="modal">
				<div class="contenedor-modal">
					<div class="boton-cerrar">
						<img src="<?php bloginfo('template_url'); ?>/img/boton-cerrar.png" alt="Cerrar">
					</div>
					<div class="item-modal">
						<div class="pieFot"></div>
						<img src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
		<section id="footer">
			<div class="inicio" style="top: -20%;"></div>
			<div class="compartir-redes">
				<div class="redes redes-icon" rule="fb" st_url="<?php the_permalink(); ?>" st_title="<?php echo the_title(); ?>">
					<img class="front" src="<?php bloginfo('template_url'); ?>/img/fb-bn.png" alt="">
					<img class="over" src="<?php bloginfo('template_url'); ?>/img/fb-red.png" alt="">
				</div>
				<div class="redes redes-icon" rule="tw" st_url="<?php the_permalink(); ?>" st_title="<?php echo the_title(); ?>">
					<img class="front" src="<?php bloginfo('template_url'); ?>/img/tw-bn.png" alt="">
					<img class="over" src="<?php bloginfo('template_url'); ?>/img/tw-red.png" alt="">
				</div>
			</div>			
		</section>		
	</main>	    
</body>
<?php  
	get_footer();
?>