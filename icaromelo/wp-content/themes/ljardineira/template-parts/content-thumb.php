<?php
/**
 * Content Post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-block post-block-sidebar'); ?>>
	<figure class="post-thumb post-thumb-sidebar" style="background-image: url('<?php the_post_thumbnail_url('fp-small'); ?>');"></figure>
	<div class="post-wrap post-wrap-sidebar">
		<header>
			<a class="post-title post-title-sidebar"><?php the_title(); ?></a>
		</header>
	</div>
</article>
