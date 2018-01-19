<?php
get_header();
$imagenesPost = rwmb_meta('thumbnail-slider');
global $post;
$post_slug=trim($post->post_name);
$category = str_replace (" ", "", $post_slug);
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
	    			<div class="info-img margin-single single-servicios-img">
	    				<img src="<?php echo $urlSingle; ?>" alt="Foto de titulares">
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
	    <section id="titulares">
	    	<div class="container-fluid">
	    		<h2>Lista de Equipos</h2>
<!-- 	    		<p>
					Texto explicativo de la lista de equipos
	    		</p>
 -->				<?php
				$args = array(
					'post_type' => 'equipos',
					'category_name' => $category,
					'order'  => 'ASC'
				);
				$query = new WP_Query( $args );		
				if ( $query->have_posts() ) : 
					$pos = 0;
					while ( $query->have_posts() ) : $query->the_post(); 	
					$caracteristicas = rwmb_meta('caracteristicas-equipo');
					$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
					?>
			    		<div class="titulares-snippet seccion-equipos">
			    			<div class="snippet-img">
			    				<img src="<?php echo $url; ?>" alt="Foto de Snnipet">
			    			</div>
			    			<div class="snippet-text invertido" style="padding-left: 4.5%">
			    				<div class="wrap-snnipet">
				    				<h3 class="titulo-equipos"><?php the_title() ?></h3>
				    				<?php  
				    					the_excerpt();
										// if( !empty($caracteristicas) ):
				    				?>
				    					<!-- <ul> -->
				    						<?php  
											// foreach ($caracteristicas  as $caracteristica ):
				    						?>
				    						<!-- <li><?php echo $caracteristica; ?></li> -->
				    						<?php  
											// endforeach;
				    						?>
				    					<!-- </ul> -->
			    					<?php 
										// endif;
			    					?>
				    				<a href="<?php the_permalink(); ?>">Ver más</a>
			    				</div>
			    			</div>
			    		</div>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					esc_html_e( 'No hay equipos publicados en luces hasta ahora' );
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