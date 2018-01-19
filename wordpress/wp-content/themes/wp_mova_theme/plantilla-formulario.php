<?php
/* 
 * Template Name: Plantilla Formularios
 * Plantilla para cada Formulario
 * 19.09.2017
*/
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>	
	    <section id="slider-full">
		    <div class="separador-vibracion"></div>
	    	<div class="container-fluid">
				<div class="row">
				        <div class="mapa-footer" style="width: 100%; height: 100%; position: relative;">
				            <div id="map" class="mapa" style="min-height: 450px;"></div>
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
						<?php the_content(); ?>
					</div>	
				</div>				
			</div>
		</section>
		<section id="footer">
			<div class="inicio"></div>
		</section>		
	</main>	    
</body>
<?php  
	endwhile; else :
		esc_html_e( 'Sorry, no posts matched your criteria.' );
	endif;

	get_footer();
?>
<script>
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDfTrgTvedXbG7pSIw1OT6CSQyzUzP9lM0&callback=initMap";
    // Use any selector
    $("head").append(s);

	// Codgo para Google Maps 
	// Api Key sacada camilo.tabares@gvbgencia.co *** AIzaSyDfTrgTvedXbG7pSIw1OT6CSQyzUzP9lM0 ***
	function initMap() {
	    var uluru = {lat: 6.2443695, lng: -75.6512524};
	    var map = new google.maps.Map(document.getElementById('map'), {
	        zoom: 11,
	        center: uluru,
	        styles: [
	                    {
	                        "featureType": "administrative",
	                        "elementType": "labels.text.fill",
	                        "stylers": [
	                            {
	                                "color": "#444444"
	                            }
	                        ]
	                    },
	                    {
	                        "featureType": "landscape",
	                        "elementType": "all",
	                        "stylers": [
	                            {
	                                "color": "#f2f2f2"
	                            }
	                        ]
	                    },
	                    {
	                        "featureType": "poi",
	                        "elementType": "all",
	                        "stylers": [
	                            {
	                                "visibility": "off"
	                            }
	                        ]
	                    },
	                    {
	                        "featureType": "road",
	                        "elementType": "all",
	                        "stylers": [
	                            {
	                                "saturation": -100
	                            },
	                            {
	                                "lightness": 45
	                            }
	                        ]
	                    },
	                    {
	                        "featureType": "road.highway",
	                        "elementType": "all",
	                        "stylers": [
	                            {
	                                "visibility": "simplified"
	                            }
	                        ]
	                    },
	                    {
	                        "featureType": "road.arterial",
	                        "elementType": "labels.icon",
	                        "stylers": [
	                            {
	                                "visibility": "off"
	                            }
	                        ]
	                    },
	                    {
	                        "featureType": "transit",
	                        "elementType": "all",
	                        "stylers": [
	                            {
	                                "visibility": "off"
	                            }
	                        ]
	                    },
	                    {
	                        "featureType": "water",
	                        "elementType": "all",
	                        "stylers": [
	                            {
	                                "color": "#46bcec"
	                            },
	                            {
	                                "visibility": "on"
	                            }
	                        ]
	                    }
	                ]          
	    });
	    var marker = new google.maps.Marker({
	        position: uluru,
	        map: map
	    });
	}
</script>					
