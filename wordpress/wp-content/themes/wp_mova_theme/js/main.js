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
    sliderOwl('slider-comentarios' , 'prev-comentarios' , 'next-comentarios');    
    $('.item-clientes').each(function() {
    	animaClientesItems($(this));
    });
});

//FUNCION DE MEDIDAS RESPONSIVE 
function iniResponsive(Wh){
	// ASPECTO DE RATIO: 16:9 PREDETERMINADO PARA CADA SECCIÓN EN VERSIÓN DESKTOP
	$('section').not('section#slider-full , section#menu-desktop , #info-halfScreen , section#titulares , section#break-line-info, section#lista-thumbnail ').css({'height': (Wh * 0.562 ) , 'max-height' : '850px' });
		if (Wh <= 359) {
			// ASPECTO DE RATIO: 1:1 PREDETERMINADO PARA CADA SECCIÓN EN VERSIÓN MOVIL Y TABLETS
		}
		else if (Wh >= 360 && Wh <= 650) {
			// ASPECTO DE RATIO: 1:1 PREDETERMINADO PARA CADA SECCIÓN EN VERSIÓN MOVIL Y TABLETS
		}
		else if (Wh >= 651 && Wh <= 991) {
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
		$('section#clientes').css({
			'height': 'auto',
			'max-height' : 'initial'
		});
}		
function animarMenu(){
	$('.mova-menu>ul>li>a').each(function(event) {

		$(this).mouseover(function(event) {
			var menuOver = new TimelineMax();
			menuOver.to($(this).parent().find('.hover-menu'), .3, { bottom:"0%" , opacity: 1});
			menuOver.to($(this).parent(), .2, { backgroundColor:"rgba(146, 0, 0, 0.33)"} , 0);
		}).mouseout(function(event) {
			var menuOut = new TimelineMax();
			menuOut.to($(this).parent().find('.hover-menu'), .8, {bottom:"-10%" , opacity : 0 });
			menuOut.to($(this).parent(), 1, { backgroundColor:"rgba(146, 0, 0, 0)"} , 0);
		});
	});
}
function titularesSnnipet(){
	if ($('.titulares-snippet')!= 0) {
		$('.snippet-img').height($('.snippet-text').innerHeight())
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
	TweenMax.to($('.separador-vibracion') , .5 , { bottom : '0px' , opacity: 1 , ease: Circ.easeOut , delay: .5 })
    // INICIALIZA SLIDER
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
function animaClientesItems(item){
	var animaitem = new TimelineMax({paused: true})
	animaitem
	.to(item.find('.item-logo-clientes-cont') , 0.5 , {top: '-100%',ease:Linear.easeNone})
	.to(item.find('.item-logo-clientes-cont').find('img') , 0.5 , {scale: 0.1 , ease:Linear.easeNone}, 0)
	.fromTo(item.find('h5') , 0.5 ,{top: '100%' , opacity: 0 , scale: 0.9} , {top: '50%' , opacity: 1, scale: 1 ,ease:Linear.easeNone}, 0.2);

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