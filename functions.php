<?php
function rokophoto_child_styles() {

    $rokophoto_bootstrap = 'rokophoto_bootstrap';

    wp_enqueue_style( 'rokophoto_parent', get_template_directory_uri() . '/style.css',
        array( $rokophoto_bootstrap  )
    );
}
add_action( 'wp_enqueue_scripts', 'rokophoto_child_styles' );
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
         update_option( 'theme_mods_' . get_template(), $value );
         return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
?>