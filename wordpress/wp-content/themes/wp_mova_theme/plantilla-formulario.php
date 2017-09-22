<?php
/* 
 * Template Name: Plantilla Formularios
 * Plantilla para cada Formulario
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
	    <section id="formulario" >
			<div class="container-fluid">
				<div class="row">
					<div class="wrap-form">
						<?php echo do_shortcode('[contact-form-7 id="54" title="Cotizador"]'); ?>
					</div>	
				</div>				
			</div>
		</section>
	</main>	    
</body>
<?php  
	get_footer();
?>