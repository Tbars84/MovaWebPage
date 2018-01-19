<?php
// add_filter('show_admin_bar', '__return_false');

if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );


// REGISTRO DE MENUS DINAMICOS
function register_my_menus(){

    register_nav_menus(array(
                            'header-nav' => 'Menu principal',
                            'header-nav-movil' => 'Menu principal Movil',
                            )
    );
}
function wp_nav_menu_remove_attributes( $menu ){
    return $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '/', $menu );
}
add_filter( 'wp_nav_menu', 'wp_nav_menu_remove_attributes' );
add_action('init' , 'register_my_menus' );

add_filter('wpcf7_form_elements', function($content) {
$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
return $content;
});

// REGISTRO DE METABOXES PARA ADMINISTRACION PRESONALIZADA
add_filter( 'rwmb_meta_boxes', 'wp_meta_boxes' );

function wp_meta_boxes( $meta_boxes ) {
    //INCLUDES PARA LOS PODS ADMINISTRATIVOS
    include("php/metaBox-inicio.php");
    include("php/metaBox-clientes.php");
    include("php/metaBox-entradas.php");
    include("php/metaBox-servicios.php");
    // include("php/metaBox-Equipo.php");
    // include("php/metaBox-slider-proyectos.php");
    return $meta_boxes;
}
add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib($array) {
return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}

// * Hide editor on specific pages.

add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
// Get the Post ID.
$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
if( !isset( $post_id ) ) return;
// Hide the editor on the page titled 'Homepage'
$homepgname = get_the_title($post_id);

remove_post_type_support('page', 'editor');

// Hide the editor on a page with a specific page template
// Get the name of the Page Template file.
$template_file = get_post_meta($post_id, '_wp_page_template', true);
if($template_file == 'my-page-template.php'){ // the filename of the page template
remove_post_type_support('page', 'editor');
}
}
?>