<?php get_header(); ?>
<div class="container">
    
   <?php while(have_posts()): the_post() ?>

  
    <?php the_content(); ?>
    
    <?php endwhile; ?>
    
    <div id="yaMap"></div>
<?php get_footer(); ?>
