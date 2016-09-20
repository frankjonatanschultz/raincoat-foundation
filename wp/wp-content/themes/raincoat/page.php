<?php get_header(); ?>
  
  <?php if(get_field('video_embed')) : ?>
    <section class="section-video_embed">
      <div class="video-embed fold-out">
        <?php the_field('video_embed'); ?>
        <div class="overlay">
          <img src="<?php echo get_field('video_overlay')['url']; ?>" />
          <a class="play-btn"></a>
        </div>
      </div>
    </section>
  <?php endif; ?>
  
  <section class="dark-bg">
    
    <div class="columns">
      <div class="column full">
        
        <?php while( have_posts() ) : the_post(); ?>
        <article class="featured-page">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <a class="btn btn-yellow btn-arrow bold arrow-left ext-left" href="/">
            <span>Back</span>
          </a>
        </article>
        <?php endwhile; ?>
        
      </div>
    </div>
    
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