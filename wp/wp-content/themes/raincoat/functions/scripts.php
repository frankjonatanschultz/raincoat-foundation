<?php
function js_scripts() {
    global $compress_scripts, $concatenate_scripts;
    $compress_scripts = 1;
    $concatenate_scripts = 1;
    define('ENFORCE_GZIP', true); 
 
    if ( !is_admin() ) {
  		wp_enqueue_script( 'mordernizr', '/assets/javascripts/modernizr-custom.js','','',true);
  		wp_enqueue_script( 'vimeo', 'https://player.vimeo.com/api/player.js',array('jquery'),'',true);
  		wp_enqueue_script( 'main', '/assets/javascripts/main.js',array('jquery', 'vimeo'),'',true);
    }
}