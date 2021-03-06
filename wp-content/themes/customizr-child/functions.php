<?php
/**
 * * include child theme stylesheet after the original stylesheet
 * */
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );
function child_theme_styles() {
	// wp_deregister_style( 'customizr-style' ); 
	// wp_deregister_style( 'customizr-style-css' ); 
	// wp_dequeue_style( 'customizr-style' ); 
	// wp_dequeue_style( 'customizr-style-css' ); 
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// 	wp_enqueue_style( 'child-theme-style', get_stylesheet_directory_uri() .'/style.css' , array('parent-style'));

// ideally should happen here - but because the header gets assembled weirdly, this gets overwritten
// // 	 for caching we need dynamic css url version number
// 	$modificated = date( 'YmdHi', filemtime( get_stylesheet_directory() . '/style.css' ) );
// // 	wp_enqueue_style( 'child-theme-style', get_stylesheet_uri(), array(), $modificated );
// 	wp_enqueue_style( 'child-theme-style', get_stylesheet_uri(), array('parent-style'), $modificated );
}

add_action('wp_head', 'overwrite_buggy_header_child_styles');
function overwrite_buggy_header_child_styles(){
    $modificated = date( 'YmdHi', filemtime( get_stylesheet_directory() . '/style.css' ) );

    ?>
<link rel='stylesheet' id='child-theme-style-css'  href='<?php echo get_stylesheet_uri() . "?ver=" . $modificated ?>' type='text/css' media='all' />
    <?php
}

/* 
 * DISABLE WORDPRESS ADMIN BAR FOR ALL USERS BUT ADMINS
 * */
// show_admin_bar(false);

/*
 * FONTS
 * */
add_action( 'wp_enqueue_scripts', 'my_google_font' );
function my_google_font() {
	wp_enqueue_style( $handle = 'my-google-font', $src = 'http://fonts.googleapis.com/css?family=Amatic+SC|Cabin', $deps = array(), $ver = null, $media = null );
}

/*
 * MOBILE / DESKTOP ONLY CONTENT
 * */
add_shortcode('desktoponly', 'shailan_desktop_only_shortcode');
function shailan_desktop_only_shortcode($atts, $content = null){ 
    if( !wp_is_mobile() ){ 
        return wpautop( do_shortcode( $content ) ); 
    } else {
        return null; 
    } 
}
add_shortcode('mobileonly', 'shailan_mobile_only_shortcode');
function shailan_mobile_only_shortcode($atts, $content = null){ 
    if( wp_is_mobile() ){ 
        return  wpautop( do_shortcode( $content ) ); 
    } else {
        return null; 
    } 
}