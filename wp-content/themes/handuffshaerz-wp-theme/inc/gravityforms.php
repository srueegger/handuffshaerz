<?php
/***************************************
 * Add Bootstrap Classes to Gravityforms Submit Button
 ***************************************/
function add_custom_css_classes( $button, $form ) {
	$dom = new DOMDocument();
	$dom->loadHTML( $button );
	$input = $dom->getElementsByTagName( 'input' )->item(0);
	$classes = "btn btn-primary";
	$input->setAttribute( 'class', $classes );
	return $dom->saveHtml( $input );
}
add_filter( 'gform_submit_button', 'add_custom_css_classes', 10, 2 );

/***************************************
 * PLZ vor Ort im Adressfeld anzeigens
 ***************************************/
function address_format( $format ) {
	return 'zip_before_city';
}
add_filter( 'gform_address_display_format', 'address_format' );