<?php get_header(); ?>
<div class="container">

   <?php while(have_posts()): the_post() ?>

    <div class="row">
        <div class="col-sm-9">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </div>
        <div class="col-sm-3"><?php the_post_thumbnail('thumbnail'); ?></div>
    </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>
