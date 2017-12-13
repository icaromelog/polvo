<?php
/*
Template Name: Notícias
*/
get_header(); ?>

<header class="page-title" style="background-image: linear-gradient(rgba(183, 59, 188, 0.9), rgba(183, 59, 188, 0.9)), url('<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/banner-flor.jpg');" role="banner">
  <section class="row column">
    <h1 class="titulo-big"><?php echo the_title(); ?></h1>
  </section>
</header>

<section class="intro" role="main">
  <div class="main-container">
  	<div class="main-grid">
  		<main class="main-content column small-12 medium-8">
        <?php
          $novidades = new WP_Query(
            array(
              'post_type' => 'post',
              'posts_per_page' => 5,
              'paged' => get_query_var('page')
            )
          ); ?>
        <?php if ( $novidades->have_posts() ) : ?>
          <?php while ( $novidades->have_posts() ) : $novidades->the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'post' ); ?>
          <?php endwhile;?>
          <?php
            wp_pagenavi( array( 'query' => $novidades ) );
            wp_reset_postdata(); ?>
        <?php endif; ?>
  		 </main>
  	    <?php get_template_part( 'template-parts/sidebar', 'noticias' ); ?>
  	</div>
  </div>
</section>

<?php get_footer();
