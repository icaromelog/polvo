<?php
/**
 * @package lJJardinera / FoundationPress
 * @since 1.0
 */
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<header class="site-header" role="banner">
		<div class="row align-middle align-justify">
			<a class="marca column" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/logo-jardinera.png" alt="Logo LJardinera" /></a>

			<div class="search-bar show-for-medium column">
				<form action="/" method="get">
				    <input type="text" name="s" id="pesquisa" class="search-input" placeholder="Pesquisar" value="<?php the_search_query(); ?>" />
				    <i class="search-icon"><?php get_template_part('src/assets/images/inline', 'pesquisa.svg'); ?></i>
				</form>
			</div>

			<nav class="site-navigation top-bar show-for-medium small-6 column" role="navigation">
				<?php menu_principal(); ?>
			</nav>

			<button type="button" class="hide-for-medium column small-2 mobile-btn" name="button-mobile"><i class="fa fa-bars" aria-hidden="true"></i></button>
		</div>
	</header>

	<?php /* Menu Mobile */ ?>
	<div class="menu-mobile hide-for-medium">
		<nav class="site-navigation column" role="navigation">
			<?php menu_principal(); ?>
		</nav>
	</div>
