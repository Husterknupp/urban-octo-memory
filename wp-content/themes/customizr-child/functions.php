<?php
/**
 * * include child theme stylesheet after the original stylesheet
 * */

function child_theme_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-theme-css', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));

}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

add_action( 'wp_enqueue_scripts', 'my_google_font' );
function my_google_font() {
	wp_enqueue_style( $handle = 'my-google-font', $src = 'http://fonts.googleapis.com/css?family=Amatic+SC|Cabin', $deps = array(), $ver = null, $media = null );
}

// [desktoponly] shortcode
add_shortcode('desktoponly', 'shailan_desktop_only_shortcode');
function shailan_desktop_only_shortcode($atts, $content = null){ 
    if( !wp_is_mobile() ){ 
        return wpautop( do_shortcode( $content ) ); 
    } else {
        return null; 
    } 
}
 
// [mobileonly] shortcode
add_shortcode('mobileonly', 'shailan_mobile_only_shortcode');
function shailan_mobile_only_shortcode($atts, $content = null){ 
    if( wp_is_mobile() ){ 
        return  wpautop( do_shortcode( $content ) ); 
    } else {
        return null; 
    } 
}