<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FitzStudio
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            
            <nav class="social-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
            </nav><!-- .social-menu -->
            
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fitzstudio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fitzstudio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fitzstudio' ), 'fitzstudio', '<a href="https://automattic.com/" rel="designer">Beth Fitzgerald</a>' ); ?>
		</div><!-- .site-info -->

       </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>