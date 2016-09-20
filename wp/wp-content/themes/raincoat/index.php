<?php get_header(); ?>

  <?php if (have_posts()) : ?>
  
    <?php while (have_posts()) : the_post(); ?>
      <article>
        <p class="small caps"><?php echo date_i18n("j F, Y" ,strtotime($post->post_date)); ?></p>
  			<h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  
  <?php endif; ?>  

<?php get_footer(); ?>