<?php
/* 
 * Template Name: Plantilla Blog
 * Plantilla para Landing de Blog
 * 19.09.2017
*/
get_header();
?>
	    <section id="slider-full">
		    <div class="separador-vibracion"></div>
	    	<div class="container-fluid">
				<div class="row">
						<div class="owl-carousel owl-theme slider-inicio">
							<div class="item">
								<img class="img-responsive " src="<?php bloginfo('template_url'); ?>/img/slider-1.jpg" alt="Titulo de la Imagen">
							</div>
							<div class="item">
								<img class="img-responsive " src="<?php bloginfo('template_url'); ?>/img/slider-2.jpg" alt="Titulo de la Imagen">
							</div>
							<div class="item">
								<img class="img-responsive " src="<?php bloginfo('template_url'); ?>/img/slider-3.jpg" alt="Titulo de la Imagen">
							</div>
							

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
		    				<h1>OVERVIEW</h1>
		    				<p>
		    				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut voluptas similique in porro sint saepe alias, iusto quas ab voluptatem fugiat culpa aperiam? Nulla rerum quidem accusamus voluptatum eveniet accusantium.
		    				<br>
		    				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit autem optio, expedita est quasi. Esse nesciunt animi, veniam eum iure totam veritatis numquam! Fuga officiis ad animi molestias, ex, odio.
		    				</p>	    					
	    				</div>
	    			</div>
	    			<div class="info-img">
	    				<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de titulares">
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    <section id="titulares">
	    	<div class="container-fluid">
	    		<h2>Eventos Realizados</h2>
	    		<div class="spacer-eventos"></div>
	    		<div class="titulares-snippet">
	    			<div class="snippet-img invertido">
	    				<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
	    			</div>	    		
	    			<div class="snippet-text invertido">
	    				<div class="wrap-snnipet">
		    				<h3>Lorem ipsum dolor sit amet</h3>
		    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusamus vitae ad voluptate iusto harum error expedita.</p>
		    				<a href="#">Ver más</a>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="titulares-snippet">
	    			<div class="snippet-img invertido">
	    				<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
	    			</div>	    		
	    			<div class="snippet-text invertido">
	    				<div class="wrap-snnipet">
		    				<h3>Lorem ipsum dolor sit amet</h3>
		    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusamus vitae ad voluptate iusto harum error expedita.</p>
		    				<a href="#">Ver más</a>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="titulares-snippet">
	    			<div class="snippet-img invertido">
	    				<img src="<?php bloginfo('template_url'); ?>/img/photo-sample-info.jpg" alt="Foto de Snnipet">
	    			</div>	    		
	    			<div class="snippet-text invertido">
	    				<div class="wrap-snnipet">
		    				<h3>Lorem ipsum dolor sit amet</h3>
		    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima accusamus vitae ad voluptate iusto harum error expedita.</p>
		    				<a href="#">Ver más</a>
	    				</div>
	    			</div>
	    		</div>

	    	</div>
	    </section>
	</main>	    
</body>
<?php  
	get_footer();
?>