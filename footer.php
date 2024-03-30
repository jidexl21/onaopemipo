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
</main>
<div class="modal fade" id="staticBackdrop2312" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
</body>
    <script src="<?php bloginfo("template_directory");?>/lib/jquery/js/jquery.min.js"></script>
    <script src="<?php bloginfo("template_directory");?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php bloginfo("template_directory");?>/js/main.js"></script>
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

    <style>
      div#root > div {
        background-color: transparent;
      }
    </style>

<?php wp_footer(); ?>

</body>
</html>
