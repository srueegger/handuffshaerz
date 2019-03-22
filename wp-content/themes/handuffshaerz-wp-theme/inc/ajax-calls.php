<?php
/***************************************
 * Anzeigen der kompletten Kursinformationen und Anmeldeformular
 ***************************************/
function huh_ajax_get_course_info() {
	$course_id = esc_attr( $_POST['course_id'] );
	$image = get_field('course_image', $course_id);
	$meta = get_field('course_metas', $course_id);
	?>
	<div class="row">
		<div class="col-12 col-md-6 subscribe-item">
			<picture>
				<source srcset="<?php echo $image['sizes']['kursfoto-xl']; ?>" media="(min-width: 1200px)">
				<source srcset="<?php echo $image['sizes']['kursfoto-lg']; ?>" media="(min-width: 992px)">
				<source srcset="<?php echo $image['sizes']['kursfoto-md']; ?>" media="(min-width: 768px)">
				<source srcset="<?php echo $image['sizes']['kursfoto-sm']; ?>" media="(min-width: 576px)">
				<img src="<?php echo $image['sizes']['kursfoto-xs']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>">
			</picture>
			<div class="inner">
				<h3 class="my-3"><?php echo get_the_title($course_id); ?></h3>
				<div class="item-meta mb-3">
					<span class="meta">
						<span class="inner-meta">
							<span class="meta-icon-container">
								<i class="fal fa-clock"></i>
							</span>
							<span class="meta-txt"><?php echo $meta['dauer']; ?> Stunden</span>
						</span>
					</span>
					<span class="meta">
						<span class="inner-meta">
							<span class="meta-icon-container">
								<i class="fal fa-map-marker"></i>
							</span>
							<span class="meta-txt"><?php echo $meta['ort']; ?></span>
						</span>
					</span>
					<span class="meta">
						<span class="inner-meta">
							<span class="meta-icon-container">
								<i class="fal fa-coins"></i>
							</span>
							<span class="meta-txt"><?php echo $meta['kosten']; ?> CHF</span>
						</span>
					</span>
				</div>
				<?php the_field('course_shortinfo', $course_id); ?>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<?php
			if(have_rows('course_dates', $course_id)):
				echo '<h6 class="mb-3">Folgende Kursdaten stehen zur Verfügung:</h6><ul class="fa-ul">';
				while(have_rows('course_dates', $course_id)):
					the_row();
					$startdate = get_sub_field('startdate');
					$currentdate = date('Y-m-d H:i:s');
					//Datum nur anzeigen wenn es in der Zukunft liegt
					if($currentdate < $startdate):
						$startdate_array = explode(' ', $startdate);
						$enddate = get_sub_field('enddate');
						$enddate_array = explode(' ', $enddate);
						$showdate = '';
						//Wenn Event am gleichen Tag startet und endet:
						if($startdate_array[0] == $enddate_array[0]):
							$showdate = strftime('%d. %B %Y', strtotime($startdate_array[0])) . ' von '.date(get_option( 'time_format' ), strtotime($startdate)).' bis '.date(get_option( 'time_format' ), strtotime($enddate)).' Uhr';
						else:
							//Event startet und endet an unterschiedlichen Tagen
							$showdate = strftime('%d. %B %Y', strtotime($startdate_array[0])) .' '. date(get_option( 'time_format' ), strtotime($startdate)) . ' bis ' . strftime('%d. %B %Y', strtotime($enddate_array[0])) .' '. date(get_option( 'time_format' ), strtotime($enddate));
						endif;
						echo '<li><span class="fa-li" ><i class="fas fa-calendar-star text-danger"></i></span>'.$showdate.'</li>';
					endif;
				endwhile;
				echo '</ul>';
			endif;
			if(have_rows('course_yourstuff', $course_id)):
				echo '<h6 class="mb-3">Das bringst du mit:</h6><ul class="fa-ul">';
				while(have_rows('course_yourstuff', $course_id)):
					the_row();
					echo '<li><span class="fa-li" ><i class="fas fa-check-square text-danger"></i></span>'.get_sub_field('txt').'</li>';
				endwhile;
				echo '</ul>';
			endif;
			if(have_rows('course_content', $course_id)):
				echo '<h6 class="mb-3">Kursinhalte:</h6><ul class="fa-ul">';
				while(have_rows('course_content', $course_id)):
					the_row();
					echo '<li><span class="fa-li" ><i class="fas fa-check-square text-danger"></i></span>'.get_sub_field('txt').'</li>';
				endwhile;
				echo '</ul>';
			endif;
			if(have_rows('course_targetgroup', $course_id)):
				echo '<h6 class="mb-3">Zielgruppe:</h6><ul class="fa-ul">';
				while(have_rows('course_targetgroup', $course_id)):
					the_row();
					echo '<li><span class="fa-li" ><i class="fas fa-check-square text-danger"></i></span>'.get_sub_field('txt').'</li>';
				endwhile;
				echo '</ul>';
			endif;
			?>
			<p><button type="button" class="btn btn-outline-primary w-100">Hier anmelden!</button></p>
		</div>
	</div>
	<?php
	exit();
}
add_action( 'wp_ajax_huh_ajax_get_course_info', 'huh_ajax_get_course_info' );
add_action( 'wp_ajax_nopriv_huh_ajax_get_course_info', 'huh_ajax_get_course_info' );