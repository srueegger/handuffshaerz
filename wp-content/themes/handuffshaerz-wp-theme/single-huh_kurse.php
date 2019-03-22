<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	<main id="course-<?php the_ID(); ?>" <?php post_class('normalpage'); ?>>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					the_title('<h2 class="mb-4">', '</h2>');
					the_field('course_shortinfo');
					$meta = get_field('course_metas');
					?>
					<h3 class="mb-4">Wichtige Eckpunkte</h3>
					<ul class="fa-ul">
						<li><span class="fa-li" ><i class="far fa-coins"></i></span>Kosten: <strong><?php echo $meta['kosten']; ?> CHF</strong></li>
						<li><span class="fa-li" ><i class="far fa-map-marker"></i></span>Kursort: <strong><?php echo $meta['ort']; ?></strong></li>
						<li><span class="fa-li" ><i class="far fa-clock"></i></span>Kursdauer: <strong><?php echo $meta['dauer']; ?></strong></li>
					</ul>
					<h3 class="mb-4">Anmeldung</h3>
					<?php echo do_shortcode( '[gravityform id="'.get_field('setting_course_subscribe_form_id', 'option').'" title="false" description="false" ajax="true" field_values="cid='.get_the_ID().'&cname='.get_the_title().'"]' );
					?>
				</div>
			</div>
		</div>
	</main>
	<?php
endwhile; endif;
get_footer();