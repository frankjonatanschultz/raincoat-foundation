<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>
  
  
  <section class="section-video_embed">
    <div class="video-embed">
      <?php the_field('video_embed'); ?>
      <div class="overlay">
        <img src="<?php echo get_field('video_overlay')['url']; ?>" />
        <a class="play-btn"></a>
      </div>
    </div>
  </section>
  
  
  <section class="dark-bg">
    
    <?php if(have_rows('featured_pages')) : ?>
      <div class="columns">
        <?php 
          while(have_rows('featured_pages')) : the_row();
            $post_object = get_sub_field('page');
            if( $post_object ) : 
            	$post = $post_object;
            	setup_postdata( $post ); 
            	?>
            	<div class="column full">
              	<article class="featured-page">
                  <h2><?php the_title(); ?></h2>
                  
                  <?php the_excerpt(); ?>
                  
                  <?php if(get_the_content() !== "") : ?>
                    <a class="btn btn-blue btn-arrow bold ext-left" href="<?php the_permalink(); ?>">
                      <span>More on this</span>
                    </a>
                  <?php endif; ?>
              	</article>
            	</div>
              
              <?php
            endif;
            wp_reset_query();
          endwhile;
        ?>
      </div>
    <?php endif; ?>
    
    
    
        
    <?php 
      $latest = new WP_Query('posts_per_page=-1');
      if($latest->have_posts()) : ?>
        <div class="columns news-items">
          <?php while( $latest->have_posts() ) : $latest->the_post(); ?>
            <div class="column half">
              <div class="news-item">
                <article>
                  <h3><?php the_title(); ?></h3>
                  <h4 class="blue"><?php the_time('F jS Y'); ?></h4>
                  <?php the_content(); ?>
                </article>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
    <?php endif; ?>
        
    
  </section>

<?php get_footer(); ?>