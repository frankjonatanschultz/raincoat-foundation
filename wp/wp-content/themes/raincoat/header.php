<!doctype html>

<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  
    <title>
    	<?php 
    	if(is_front_page()) {
	    	bloginfo('name');
    	} else {
	    	echo wp_title('', false) . ' | ' . get_bloginfo('name');
	    }
	    ?>
  	</title>
  	
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <meta name="viewport" id="viewport" content="user-scalable=no, initial-scale=1, width=device-width" />
    
    <!-- Favicons:
    <link rel="shortcut icon" href="/favicons/favicon.ico">
  	<link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
  	<link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
  	<link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
  	<link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
  	<link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
  	<link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
  	<link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
  	<link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
  	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
  	<link rel="icon" type="image/png" href="/favicons/favicon-192x192.png" sizes="192x192">
  	<link rel="icon" type="image/png" href="/favicons/favicon-160x160.png" sizes="160x160">
  	<link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
  	<link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
  	<link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
  	<meta name="msapplication-TileColor" content="#f2f9f4">
  	<meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
  	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
    -->
    
    <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>
    
    <div id="wrapper">
    
      <header class="yellow-bg"> 
        <div class="columns borders">
          <div class="column col-left"></div>
          <div class="column col-right"></div>
        </div>
        <div class="columns">     
          <div class="column col-left">
      			<h1 class="site-title">
        			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home">
          			<?php bloginfo( 'name' ); ?>
        			</a>
        		</h1>
          </div>
          <div class="column col-right">
        		<?php the_field('header_text', 'option'); ?>
          </div>
        </div>
        <div class="columns borders">
          <div class="column col-left"></div>
          <div class="column col-right"></div>
        </div>
      </header>
      
      <div class="main">
