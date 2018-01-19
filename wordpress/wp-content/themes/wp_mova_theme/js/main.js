$(document).ready(function($) {
	iniResponsive( $(window).width() );
    $( window ).resize(function() {
        iniResponsive( $(window).width() );
    });
    animarMenu();
    sliderOwl('slider-inicio');
    titularesSnnipet();
    listaThumbnail();
    animaRedes();
    years();
    equiposCotizacion();
    sliderOwl('slider-comentarios' , 'prev-comentarios' , 'next-comentarios');
    $('.padd-movile').css({
    	'height': $('.menu-desktop-wrap').height()
    });
    toggleAnimMenu = new TimelineMax({paused: true});
    toggleAnimMenu.staggerTo($('section#menu-desktop .menu-desktop-wrap .navbar-mova .container-fluid .mova-menu ul li'), 0.2 , {autoAlpha: 1 , display: 'block' , opacity: 1, y:'+=5' }, 0.1);
    var ShowAnim = false;

    $('.inicio').on('click', function() {
		var body = $("html, body");
		body.stop().animate({scrollTop:0}, 1500, 'swing', function() { 
		});    	
    });
	$('.menu-toggle').on('click', function() {
	  $('section#menu-desktop .menu-desktop-wrap .navbar-mova .container-fluid .mova-menu.movil').toggleClass('abreMenu');
	  $(this).toggleClass('on');
	  if (ShowAnim === false) {
	  	toggleAnimMenu.play();	  	
	  	ShowAnim = true;
	  }else if(ShowAnim === true){
		toggleAnimMenu.reverse();
		ShowAnim = false;
	  }
	});
    toggleSliderPrev = new TimelineMax({paused: true});
    toggleSliderPrev.to($('section#comentarios .prev-comentarios'), 0.2 , { scale: 1.2 , left : '-15px' });
    toggleSliderPrev.to($('section#comentarios .prev-comentarios img'), 0.2 , { rotation: 360 } , 0);

    toggleSliderNext = new TimelineMax({paused: true});
    toggleSliderNext.to($('section#comentarios .next-comentarios'), 0.2 , { scale: 1.2 , right : '-15px' });
	toggleSliderNext.to($('section#comentarios .next-comentarios img'), 0.2 , { rotation: 360 } , 0);

	$('section#comentarios .prev-comentarios').mouseenter(function() {
		toggleSliderPrev.play();
	}).mouseleave(function() {
		toggleSliderPrev.reverse();
	});

	$('section#comentarios .next-comentarios').mouseenter(function() {
		toggleSliderNext.play();
	}).mouseleave(function() {
		toggleSliderNext.reverse();
	});	
    $('.logo-desktop').on('click' , function() {
    	window.location.href = "http://camilo-tabares.com/MovaWebPage/wordpress/";
    });
    $('li.proceso').each(function() {
		animaProcesos($(this));
    });    
    $('.item-clientes').each(function() {
    	animaClientesItems($(this));
    });
    if ($('.redes').length !== 0) {
	    $('.redes').each(function(){
	        $(this).on('click' , function(){
	            compartirRedes($(this).attr('rule') , $(this).attr('st_url') , $(this).attr('st_title'));
	        })
	    });    	
    }
    toggleAnim = new TimelineMax({paused: true});
    toggleAnim.staggerTo($('.toggle'), 0.4 , {autoAlpha: 1 , display: 'block' , opacity: 1 }, 0.2);
    $("input[name='verifica-uso-cotizador'").change(function() {
		
		var respuesta = $(this).val().split(",")[0];
		if (respuesta.toLowerCase() == 'si') {
		    $('span.wpcf7-list-item.last').css({
		    	'display': 'block'
		    });			
			$('span.wpcf7-list-item.first').css({
		    	'display': 'none'
		    });			
		    toggleAnim.play();
		}else if (respuesta.toLowerCase() == 'no') {
		    $('span.wpcf7-list-item.last').css({
		    	'display': 'none'
		    });			
			$('span.wpcf7-list-item.first').css({
		    	'display': 'block'
		    });			
		    toggleAnim.reverse().timeScale(1);
    		$('.toggle-select').each(function() {
    			$(this).slideUp('400', function() {
    				$(this).removeClass('active');    				
    			});
    		});
		}
    	// if ($()) {}
	});
});

//FUNCION DE MEDIDAS RESPONSIVE 
function iniResponsive(Wh){
	// ASPECTO DE RATIO: 16:9 PREDETERMINADO PARA CADA SECCIÓN EN VERSIÓN DESKTOP
	$('section').not('section#slider-full , section#menu-desktop , #info-halfScreen , section#titulares , section#break-line-info, section#lista-thumbnail ').css({'height': (Wh * 0.562 ) , 'max-height' : '850px' });
		if (Wh <= 650) {
			// ASPECTO DE RATIO: 1:1 PREDETERMINADO PARA CADA SECCIÓN EN VERSIÓN MOVIL Y TABLETS
			$('section#comentarios').css({
				'height': Wh * 0.8,
				'max-height': 'initial'
			});
		}
		else if (Wh >= 651 && Wh <= 800) {
			// ASPECTO DE RATIO: 1:1 PREDETERMINADO PARA CADA SECCIÓN EN VERSIÓN MOVIL Y TABLETS
			$('section#comentarios').css({
				'height': Wh * 0.8,
				'max-height': 'initial'
			});

		}
		else if (Wh >= 801 && Wh <= 991) {
			// ASPECTO DE RATIO: 1:1 PREDETERMINADO PARA CADA SECCIÓN EN VERSIÓN MOVIL Y TABLETS
		}
		else if (Wh >= 992 && Wh <= 1350) {
			$('section#comentarios').css({
				'height':  (Wh * 0.562 ) - $('section#menu-desktop').height()
			});
		}
		else if (Wh >= 1351) {
			$('.item').each(function(){
				$(this).css({'max-height' : $(document).height()*.7})
			})
			$('section#comentarios').css({
				'height':  Wh * 0.562
			});
		}
		// MEDIDAS GLOBALES
		$('#info-halfScreen , section#titulares, section#break-line-info , section#lista-thumbnail').css({'max-height' : 'initial'});
		$('section#clientes , section#formulario , section#procesoInicio , section#footer').css({
			'height': 'auto',
			'max-height' : 'initial'
		});
}		
function animarMenu(){
	var animaSubmenu = new TimelineMax({paused: true})
	animaSubmenu
	.staggerTo($('ul.sub-menu li') , 0.05 , {autoAlpha: 1, display:'block', ease:Linear.easeNone}, 0.1)
	var slug = $('.slug').text();
	$('.mova-menu>ul>li>a').each(function(event) {
		var linkMenu = $(this).text();
		if (linkMenu.toLowerCase() !== slug ) {
			$(this).mouseover(function(event) {
				var menuOver = new TimelineMax();
				menuOver.to($(this).parent().find('.hover-menu'), .3, { opacity: 1});
			}).mouseout(function(event) {
				var menuOut = new TimelineMax();
				menuOut.to($(this).parent().find('.hover-menu'), .8, { opacity : 0 });
			});
		}
		else if(linkMenu.toLowerCase() == slug){
			$(this).parent().find('.hover-menu').css('opacity', 1);
		}
		var serviciosBoton = $(this).text();
		if ( serviciosBoton.includes("Servicios") ){
			console.log(serviciosBoton);
			$(this).parent().mouseover(function() {
				animaSubmenu.play();
			}).mouseout(function() {
				animaSubmenu.reverse();
			});
		}
	});

}
function titularesSnnipet(){
	if ($('.titulares-snippet')!= 0) {
		if ($(window).width() >= 981) {
			$('.snippet-img').height( $('.snippet-img').width()*0.85 );
		}
	}else{
		console.log('no hay seccion titulares')
	}
}
function listaThumbnail(){

	if ($('.thumbnail-item').length !== 0) {
		$('.thumbnail-item').each(function() {
			var animThumbnail = new TimelineMax({paused: true});
				animThumbnail.to($(this).find('.item-img').find('.info'), .3 , { top:"50%" , opacity: 1});
			$(this).mouseover(function(event) {
				animThumbnail.play();
			}).mouseout(function(event) {
				animThumbnail.reverse();
			});
			$(this).on('click', function() {
				modalSingle('abre' , $(this).attr('relUrl') , $(this).find('h6').text())
			});

		});
	}
}

// SLIDER CON FULL WIDTH
function sliderOwl(clase , btnPrev , btnNext){
    var sliderFull = $('.'+clase);
    // CONFIGURAR EL AUTOWITH
    sliderFull.find('.item').each(function(){
		$(this).css({'width' : $(document).width() })
	})

	posSeparador = 0;
	TweenMax.to($('.separador-vibracion') , .5 , { bottom : posSeparador , opacity: 1 , ease: Circ.easeOut , delay: .5 })
    // INICIALIZA SLIDER
    if (clase == 'slider-inicio') {
		sliderFull.owlCarousel({
			autoWidth:true,
		    animateOut: 'slideOutDown',
		    animateIn: 'fadeInDown',
		    items:1,
		    loop: true, 
		    autoplay: true,
		    dots: false,
		    video:true,
	    	smartSpeed:850,
	    	rewindSpeed: 500,
		});
    }else{
		sliderFull.owlCarousel({
			autoWidth:true,
		    animateOut: 'slideOutDown',
		    animateIn: 'fadeInDown',
		    items:1,
		    loop: true, 
		    autoplay: false,
		    dots: false,
		    video:true,
	    	smartSpeed:850,
	    	rewindSpeed: 500,
		});

    }

	if (btnPrev) {
		$('.'+btnPrev).on('click' , function(){
			sliderFull.trigger('prev.owl.carousel');			
		})
	}
	if (btnNext) {
		$('.'+btnNext).on('click' , function(){
			sliderFull.trigger('next.owl.carousel');			
		})
	}
}
// FUNCION PARA ANIMAR CLIENTES
function animaProcesos(item){
	var animaProcesos = new TimelineMax({paused: true})
	animaProcesos.to(item.find('.cuadro'), 0.2 , { scale : 0.95 });

	item.mouseover(function() {
		animaProcesos.play();
	}).mouseout(function() {
		animaProcesos.reverse();
	});
}


// FUNCION PARA ANIMAR CLIENTES
function animaClientesItems(item){
	var animaitem = new TimelineMax({paused: true})
	animaitem
	.to(item.find('.item-logo-clientes-cont') , 0.3 , {top: '-100%',ease:Linear.easeNone})
	.to(item.find('.item-logo-clientes-cont').find('img') , 0.3 , {scale: 0.1 , ease:Linear.easeNone}, 0)
	.fromTo(item.find('h5') , 0.3 ,{top: '100%' , opacity: 0 , scale: 0.9} , {top: '50%' , opacity: 1, scale: 1 ,ease:Linear.easeNone}, 0.2);

	item.mouseover(function() {
		animaitem.play();
	}).mouseout(function() {
		animaitem.reverse();
	});
}
function modalSingle(active , relUrl , pieFot){
	console.log('abre');
	var animModal = new TimelineMax({ paused: true});
	animModal
		.to($('#modal') , .5 , { autoAlpha: 1, display:'block',  opacity: 1 , top: '0px' })
	if ($('.item-modal').length !== 0) {
		$('.item-modal').width($(window).width()* 0.8)
	}
	if (active !== undefined) {
		$('.item-modal').empty();
		$('.item-modal').append('<div class="pieFot">'+pieFot+'</div><img src="'+relUrl+'" alt="" />');
	}
	if (active == 'abre') {
		animModal.play();
	}
	$('body').on('click', '.boton-cerrar', function() {
		animModal.reverse();
	})
}
function animaRedes(){
	var iconSet = $('.redes-icon')
	iconSet.each(function() {
        var AnimacionRedes = new TimelineMax({paused: true , ease: Power0.easeNone});
        AnimacionRedes
            .to($(this).find('.front'), 0.8, {scale: 1.3, opacity: 0})
            .fromTo($(this).find('.over'), 0.9, {opacity: 0, scale: 1.2, force3D:false}, {scale: 1, opacity: 1 , force3D:false} , 0)

		$(this).mouseover(function() {
			AnimacionRedes.play();
		}).mouseout(function() {
			AnimacionRedes.reverse();
		});
		$(this).on('click', function() {

		});
	});
}
function years(startYear) {
        var currentYear = new Date().getFullYear(), years = [];
        startYear = startYear || 1984;
		
        while ( startYear <= currentYear+20 ) {
                years.push(startYear++);
                $("#yearEvent").append('<option value=1>'+startYear+'</option>');
        }
        return years;
}
function equiposCotizacion(){
    $('.toggle').each(function() {
    	var claseExpandir = $(this).attr('class').replace('toggle ', '');
    	var animToggleOver = new TimelineMax({paused: true})
    	.to($(this) , 0.4 , { backgroundColor: '#eeeeee'});
    	$(this).mouseover(function() {
    		animToggleOver.play();
    	}).mouseout(function(event) {
    		animToggleOver.reverse();
    	});
    	$(this).on('click', function() {
    		$('.toggle-select').each(function() {
    			$(this).slideUp('400', function() {
    				$(this).removeClass('active');    				
    			});
    		});
    		$('.toggle-select.'+claseExpandir).slideDown('400', function() {
    			$(this).toggleClass('active')
    		});
    	});
    });	
}
function compartirRedes(ruleAttr , urlAttr , titleAttr){
    var rule = ruleAttr; //$(this).attr('rule'); 
    var url = urlAttr; //$(this).attr('st_url');
    var title = titleAttr; //$(this).attr('st_title');
    if (rule == 'fb') {
        window.open(
            'https://www.facebook.com/sharer/sharer.php?u='+url,
            'facebook-share-dialog',
            'width=450,height=450');
            return false;
    }
    if (rule == 'tw') {
            window.open(
                'http://twitter.com/home?status='+title+' - '+url+' vía @mova',
                'Compartir en Twitter',
                config='height=300, width=500'
            );
    }
}