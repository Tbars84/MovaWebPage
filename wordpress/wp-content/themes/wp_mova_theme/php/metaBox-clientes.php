<?php  
    $meta_boxes[] = array(
        'title'      => __( '1. Logo Empresa', 'textdomain' ),
        'post_types' => 'clientes-thumbslider',
        'fields'     => array(
		    array(
		        'name' => esc_html__( 'Imagen Background', 'blog-bg' ),
		        'id' => 'blog-bg',
		        'type' => 'plupload_image',
		        'max_file_uploads' => 1,
                'max_status'       => true
		    ),
        ),
    );
?>