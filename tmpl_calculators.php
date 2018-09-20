<?php
/*
  Template Name: Шаблон страниц с калькуляторами
 */
?>

<!-- Здесь html/php код шаблона -->
<?php get_header(); ?>
</div>
</div>

<div class="container-fluid">

    <?php while (have_posts()): the_post() ?>

        <?php the_content(); ?>

    <?php endwhile; ?>
</div>
<?php get_footer(); ?>