<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info" style='line-height: 1.3em'>
			National Institute of Physics, 
			University of the Philippines, Diliman <br/> 
			Quezon City 1101, Philippines <br/>
			Telephone: +63 2 981 8500 loc. 3701-03 <br/>

			<!-- <?php do_action( 'twentytwelve_credits' ); ?> -->
			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>