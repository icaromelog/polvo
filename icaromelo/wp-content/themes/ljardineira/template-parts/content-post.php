<?php
/**
 * Content Post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-block'); ?>>
	<figure class="post-thumb" style="background-image: url('<?php the_post_thumbnail_url('fp-small'); ?>');"></figure>
	<div class="post-wrap">
		<header>
			<a class="post-title"><?php the_title(); ?></a>
		</header>
		<div class="post-content">
			<?php the_excerpt(); ?>
			<a class="post-link" href="<?php the_permalink(); ?>">Continue Lendo</a>
		</div>
	</div>
</article>
