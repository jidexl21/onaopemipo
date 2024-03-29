<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onaopemipo
 */

?>

	<footer id="colophon" class="site-footer">

	</footer><!-- #colophon -->
</div><!-- #page -->

  <!-- FOOTER -->
  <footer>
    <div class="container">
	<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'onaopemipo' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'onaopemipo' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'onaopemipo' ), 'onaopemipo', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </div>

  </footer>



    <script src="lib/jquery/js/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>


      

</main>
</body>
<?php wp_footer(); ?>

</body>
</html>
