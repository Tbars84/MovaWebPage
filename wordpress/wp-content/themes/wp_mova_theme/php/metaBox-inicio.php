<?php  
    $meta_boxes[] = array(
        'title'      => __( '1. Contenido principal (Introduce información inicial de cada página)', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
                'id'   => 'titulo-slider',
                'name' => __( 'Titulo Slider Principal', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'titulo-introduccion',
                'name' => __( 'Titulo Introduccion', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-introduccion',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),              
        ),
    );
    $meta_boxes[] = array(
        'title'      => __( '2. Presentación Nuestros servicios (Inicio)', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
                'id'   => 'titulo-servicios',
                'name' => __( 'Titulo de Servicios', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-servicios',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),
            array(
                'id'   => 'titulo-prod',
                'name' => __( 'Titulo Producción', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-prod',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),
            array(
                'id'   => 'titulo-booking',
                'name' => __( 'Titulo Booking', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-booking',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),             
            array(
                'id'   => 'titulo-alquiler',
                'name' => __( 'Titulo Alquiler de equipos', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-alquiler',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),             


        ),
    );
    $meta_boxes[] = array(
        'title'      => __( '3. Presentación Equipos (Inicio)', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
                'id'   => 'titulo-equipos',
                'name' => __( 'Titulo de equipos', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-equipos',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),             
        ),
    );
    $meta_boxes[] = array(
        'title'      => __( '4. Presentación nuestros procesos (Inicio)', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
                'id'   => 'titulo-proceso',
                'name' => __( 'Titulo de Servicios', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'titulo-proceso-quote',
                'name' => __( 'Titulo Procesos', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-proceso-quote',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),
            array(
                'id'   => 'titulo-proceso-booking',
                'name' => __( 'Titulo Booking', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-proceso-booking',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),
            array(
                'id'   => 'titulo-proceso-lock',
                'name' => __( 'Titulo Alquiler de equipos', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-proceso-lock',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),
            array(
                'id'   => 'titulo-proceso-game',
                'name' => __( 'Titulo Game', 'textdomain' ),
                'type'    => 'text'
            ),
            array(
                'id'   => 'texto-proceso-game',
                'name' => __( 'Texto', 'textdomain' ),
                'rows' => 5,
                'type'    => 'wysiwyg',
                'std'     => esc_html__( '' ),
            ),
        ),
    );
    $meta_boxes[] = array(
        'title'      => __( '5. Presentación Clientes (Inicio)', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
            array(
                'id'   => 'titulo-clientes-inicio',
                'name' => __( 'Titulo de equipos', 'textdomain' ),
                'type'    => 'text'
            ),
        ),
    );

?>