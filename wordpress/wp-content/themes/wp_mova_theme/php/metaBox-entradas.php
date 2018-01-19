<?php  
    $meta_boxes[] = array(
        'title'      => __( '1. Thumbnail Sliders', 'textdomain' ),
        'post_types' => 'post',
        'fields'     => array(
		    array(
		        'name' => esc_html__( 'Imagen Background', 'blog-bg' ),
                'label_description' => esc_html__( 'Slider de máximo 10 imágenes de buena resolución para habilitar el zoom' ), 
		        'id' => 'blog-bg',
		        'type' => 'plupload_image',
		        'max_file_uploads' => 10,
                'max_status'       => true
		    ),
        ),
    );
?>