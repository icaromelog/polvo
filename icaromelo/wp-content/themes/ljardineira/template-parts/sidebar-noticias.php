<?php
/**
 * Sidebar Home
 *
 */
?>

<aside class="sidebar sidebar-noticias small-12 medium-4 column">
  <h1 class="titulo-small">As 5 mais lidas</h1>
  <?php
    $novidades = new WP_Query(
      array(
        'post_type' => 'post',
        'posts_per_page' => 5
      )
    ); ?>
  <?php if ( $novidades->have_posts() ) : ?>
    <?php while ( $novidades->have_posts() ) : $novidades->the_post(); ?>
      <?php get_template_part( 'template-parts/content', 'thumb' ); ?>
    <?php endwhile;?>
    <?php
      wp_reset_postdata(); ?>
  <?php endif; ?>
</aside>
