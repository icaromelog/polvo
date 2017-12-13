<?php
/*
Template Name: Home
*/
get_header(); ?>

<header class="front-hero" role="banner">
  <article class="intro align-middle">
    <h2 class="column intro-title">“Na simplicidade está a <span>sabedoria</span>”
    <legend class="intro-legend">- La Jardinera</legend>
    </h2>
  </article>
</header>

<section class="intro" role="main">
  <div class="main-container">
  	<div class="main-grid">
  		<main class="main-content column small-12 medium-8">
        <h2 class="titulo-big">Novidades</h2>
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
  	    <?php get_template_part( 'template-parts/sidebar', 'home' ); ?>
  	</div>
  </div>
</section>

<?php get_footer();
