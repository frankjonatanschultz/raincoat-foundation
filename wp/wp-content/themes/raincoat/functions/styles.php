<?php
function js_styles() {
	
	if ( !is_admin() ) {
		wp_enqueue_style('stylesheet', '/assets/stylesheets/stylesheet.css?v=2');
  }
	
}