<?php  
    $meta_boxes[] = array(
        'title'      => __( '2. Thumbnails Slider', 'textdomain' ),
        'post_types' => 'equipos',
        'fields'     => array(
		    array(
		        'name' => esc_html__( 'Thumbnails Slider', 'thumbnail-slider' ),
                'label_description' => esc_html__( 'Slider de máximo 10 imágenes de buena resolución para habilitar el zoom' ),                
		        'id' => 'thumbnail-slider',
		        'type' => 'plupload_image',
		        'max_file_uploads' => 10,
                'max_status'       => true
		    ),
        ),
    );

    $meta_boxes[] = array(
        'title'      => __( '2. Caracteristicas Del Servicio', 'textdomain' ),
        'post_types' => 'servicios',
        'fields'     => array(
            array(

                'name'  => esc_html__( 'Caracteristicas', 'caracteristicas-servicio' ),
                'label_description' => esc_html__( 'Listar las caracteristicas dentro del panel de clonacion', 'caracteristicas-servicio' ),
                'id'    => 'caracteristicas-servicio',
                'type'  => 'text',
                'std'   => esc_html__( 'Default text value', 'caracteristicas-servicio' ),
                'clone' => true,
            ),
        ),
    );
    $meta_boxes[] = array(
        'title'      => __( '1. Caracteristicas Del Equipo', 'textdomain' ),
        'post_types' => 'equipos',
        'fields'     => array(
            array(

                'name'  => esc_html__( 'Caracteristicas', 'caracteristicas-equipo' ),
                'label_description' => esc_html__( 'Listar las caracteristicas Equipo', 'caracteristicas-equipo' ),
                'id'    => 'caracteristicas-equipo',
                'type'  => 'text',
                'std'   => esc_html__( 'Default text value', 'caracteristicas-equipo' ),
                'clone' => true,
            ),
        ),
    );


?>