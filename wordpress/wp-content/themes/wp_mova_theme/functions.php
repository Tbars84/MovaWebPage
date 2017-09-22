<?php
// add_filter('show_admin_bar', '__return_false');

if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );


// REGISTRO DE MENUS DINAMICOS
function register_my_menus(){

    register_nav_menus(array(
                            'header-nav' => 'Menu principal',
                            )
    );
}
function wp_nav_menu_remove_attributes( $menu ){
    return $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '/', $menu );
}
add_filter( 'wp_nav_menu', 'wp_nav_menu_remove_attributes' );
add_action('init' , 'register_my_menus' );

// REGISTRO DE METABOXES PARA ADMINISTRACION PRESONALIZADA
// add_filter( 'rwmb_meta_boxes', 'wp_meta_boxes' );
// function wp_meta_boxes( $meta_boxes ) {
//     // //INCLUDES PARA LOS PODS ADMINISTRATIVOS
//     // include("php/metaBox-inicio.php");
//     // include("php/metaBox-agencia.php");
//     // include("php/metaBox-proyectos.php");
//     // include("php/metaBox-blog.php");
//     // include("php/metaBox-Equipo.php");
//     // return $meta_boxes;
// }


?>