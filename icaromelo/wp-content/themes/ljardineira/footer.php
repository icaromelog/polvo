<?php
/**
 * @package lJJardinera / FoundationPress
 * @since 1.0
 */
?>

<div class="footer">
	<footer class="footer-container align-middle">
		<nav class="site-navigation small-12 medium-6 column" role="navigation">
			<?php menu_footer(); ?>
		</nav>
		<div class="footer-social small-12 medium-3 column">
			<h1 class="titulo-small">Redes Sociais</h1>
		  <ul class="social">
		    <li class="social-item facebook"><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		    <li class="social-item instagram"><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		    <li class="social-item youtube"><a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
		  </ul>
		</div>
		<a class="marca column" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/logo-branco.png" alt="Logo LJardinera" /></a>
	</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
