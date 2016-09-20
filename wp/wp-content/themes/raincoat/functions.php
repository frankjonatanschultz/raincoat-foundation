<?php
// Updates DB with new siteurl
// update_option('siteurl','http://dallas.dev');
// update_option('home','http://dallas.dev');

// Include functions
include_once('functions/post-types.php');
include_once('functions/post-thumbs.php');
include_once('functions/scripts.php');
include_once('functions/styles.php');


// Add Actions
add_action('init', 'custom_post_type');
add_action('wp_enqueue_scripts', 'js_scripts');
add_action('wp_enqueue_scripts', 'js_styles');

add_theme_support( 'nav-menus' );

// Add Filters
add_filter('nav_menu_css_class', 'auto_custom_type_class', 10, 2 );


function new_excerpt_more( $more ) {
	global $post;
	return '…';
}

function new_excerpt_length($length) {
    return 50;
}


add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', 'new_excerpt_more');


add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
    }
}

/*
*  Change the Options Page menu to 'Theme Options'
*/

if( function_exists('acf_add_options_page') ) {
	
  acf_add_options_page();
	
}

if( function_exists('acf_set_options_page_title') )
{
  acf_set_options_page_title( __('Header/footer') );
}

if( function_exists('acf_set_options_page_menu') )
{
  acf_set_options_page_menu( __('Header/footer') );
}


add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}


add_filter('img_caption_shortcode', 'my_img_caption_shortcode_filter',10,3);

/**
 * Filter to replace the [caption] shortcode text with HTML5 compliant code
 *
 * @return text HTML content describing embedded figure
 **/
function my_img_caption_shortcode_filter($val, $attr, $content = null)
{
    extract(shortcode_atts(array(
        'id'    => '',
        'align' => '',
        'width' => '',
        'caption' => ''
    ), $attr));

    if ( 1 > (int) $width || empty($caption) )
        return $val;

    $capid = '';
    if ( $id ) {
        $id = esc_attr($id);
        $capid = 'id="figcaption_'. $id . '" ';
        $id = 'id="' . $id . '" aria-labelledby="figcaption_' . $id . '" ';
    }

    return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
    . do_shortcode( $content ) . '<figcaption ' . $capid 
    . 'class="wp-caption-text">' . $caption . '</figcaption></figure>';
}
?>