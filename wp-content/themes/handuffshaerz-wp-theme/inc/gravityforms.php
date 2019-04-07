<?php
/***************************************
 * Add Bootstrap Classes to Gravityforms Submit Button
 ***************************************/
function huh_add_custom_css_classes( $button, $form ) {
	$dom = new DOMDocument();
	$dom->loadHTML( $button );
	$input = $dom->getElementsByTagName( 'input' )->item(0);
	$classes = "btn btn-primary";
	$input->setAttribute( 'class', $classes );
	return $dom->saveHtml( $input );
}
add_filter( 'gform_submit_button', 'huh_add_custom_css_classes', 10, 2 );

/***************************************
 * PLZ vor Ort im Adressfeld anzeigens
 ***************************************/
function huh_address_format( $format ) {
	return 'zip_before_city';
}
add_filter( 'gform_address_display_format', 'huh_address_format' );

/***************************************
 * Bestellformular Kursdaten raussuchen und in Auswahlmenü ausgeben
 ***************************************/
function huh_select_date_options_in_order_form( $form ) {
	//Nur ausführen wenn wir auf der Bestellseite sind:
	//print_r($form);
	if(is_singular( 'huh_kurse' )):
		$preis = get_field('course_metas')['kosten'];
		$preis = number_format($preis , 2, '.','');
		foreach ( $form['fields'] as &$field ):
			if ( $field->type != 'product' || strpos( $field->cssClass, 'input-course-dates' ) === false ):
				continue;
			endif;
			$choices = array();
			if(have_rows('course_dates')):
				$field->placeholder = 'Wähle ein Datum';
				$currentdate = date('Y-m-d H:i:s');
				while(have_rows('course_dates')):
					the_row();
					$startdate = get_sub_field('startdate');
					$showdate = '';
					if($currentdate < $startdate):
						$startdate_array = explode(' ', $startdate);
						$enddate = get_sub_field('enddate');
						$enddate_array = explode(' ', $enddate);
						//Wenn Event am gleichen Tag startet und endet:
						if($startdate_array[0] == $enddate_array[0]):
							$showdate = strftime('%d. %B %Y', strtotime($startdate_array[0])) . ' von '.date(get_option( 'time_format' ), strtotime($startdate)).' bis '.date(get_option( 'time_format' ), strtotime($enddate)).' Uhr';
						else:
							//Event startet und endet an unterschiedlichen Tagen
							$showdate = strftime('%d. %B %Y', strtotime($startdate_array[0])) .' '. date(get_option( 'time_format' ), strtotime($startdate)) . ' bis ' . strftime('%d. %B %Y', strtotime($enddate_array[0])) .' '. date(get_option( 'time_format' ), strtotime($enddate));
						endif;
						$choices[] = array('text' => $showdate, 'value' => $startdate.' - '.$enddate, 'price' => 'CHF '.$preis);
					endif;
				endwhile;
			else:
				$field->placeholder = 'Zurzeit gibt es keine freien Kursdaten!';
			endif;
			$field->choices = $choices;
		endforeach;
	endif;
	return $form;
}
add_filter( 'gform_pre_render_'.get_field('setting_course_subscribe_form_id', 'option'), 'huh_select_date_options_in_order_form' );
add_filter( 'gform_pre_validation_'.get_field('setting_course_subscribe_form_id', 'option'), 'huh_select_date_options_in_order_form' );
add_filter( 'gform_pre_submission_filter_'.get_field('setting_course_subscribe_form_id', 'option'), 'huh_select_date_options_in_order_form' );
add_filter( 'gform_admin_pre_render_'.get_field('setting_course_subscribe_form_id', 'option'), 'huh_select_date_options_in_order_form' );

/***************************************
 * Bestellformular Alter prüfen
 ***************************************/
function huh_verify_minimum_age($validation_result){
	$form = $validation_result['form'];
	$dob = rgpost('input_13');
	$minimum_age = 14;
    $age = date('Y') - substr($dob, 0, 4);
	if (strtotime(date('Y-m-d')) - strtotime(date('Y') . substr($dob, 4, 6)) < 0):
		$age--;
	endif;
    if( $age < $minimum_age ):
        $validation_result['is_valid'] = false;
        foreach($form['fields'] as &$field):
            if($field['id'] == '13'):
                $field['failed_validation'] = true;
                $field['validation_message'] = 'Du musst mindestens 14 Jahre alt sein.';
                break;
			endif;
		endforeach;
    endif;
    $validation_result['form'] = $form;
    return $validation_result;
}
add_filter('gform_validation_2', 'huh_verify_minimum_age');