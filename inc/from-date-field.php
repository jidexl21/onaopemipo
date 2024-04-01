<?php 


function add_from_date_meta_box() {
	add_meta_box(
		'meta_box_datepicker_example', // Unique ID
		'Meta Box with Datepicker',    // Meta Box title
		'meta_box_datepicker_html',    // Callback function
		'post'                         // The selected post type
	);
}

add_action( 'add_meta_boxes', 'add_from_date_meta_box' );



function meta_box_datepicker_html( $post ) {

	$from_date = get_post_meta( $post->ID, '_from_date_meta_key', true );

	?>

	<label for="from_date">From date</label>
	<input name="from_date" type="date" value="<?php echo esc_attr($from_date); ?>">

    <?php

}


function meta_box_datepicker_save( $post_id ) {
	if ( array_key_exists( 'from_date', $_POST ) ) {
	   update_post_meta(
		  $post_id,
		  '_from_date_meta_key',
		  $_POST['from_date']
	   );
	}
 }
 
 add_action( 'save_post', 'meta_box_datepicker_save' );

?>