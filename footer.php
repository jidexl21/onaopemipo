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
  <?php
    $args = array(
				'theme_location' => 'menu-2',
        'menu_id'        => 'footer-menu',
				'depth'      => 2,
				'container'  => false,
				'menu_class'     => 'quicklinks'
		);		
	?>
<div class="footer">
<div class="container">
	<div class="row">
    <div class="col-md-6">
    <?php if (has_nav_menu('menu-1')) : wp_nav_menu($args); else: ?>
      <ul class="quicklinks">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Manage Cookie Settings</a></li>
        <li><a href="#">Your privacy settings</a></li>
        <li><a href="#">Terms and Conditions</a></li>
      </ul>
    <?php endif; ?>
    </div>
    <div class="col-md-6">
      <?php if(function_exists("DISPLAY_ULTIMATE_PLUS")) { echo DISPLAY_ULTIMATE_PLUS(); }?> 
    </div>
<div>

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
