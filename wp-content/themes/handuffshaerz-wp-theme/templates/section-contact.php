<section class="section" id="contact">
	<div class="container mb-5">
		<div class="row">
			<div class="col-12 text-center">
				<h2><?php the_field('front_s6_title'); ?></h2>
			</div>
		</div>
	</div>
	<?php
	$location = get_field('front_s6_map');
	if(!empty($location)):
		?>
		<div class="map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				<h4><?php the_field('front_s6_map_a1'); ?></h4>
				<p class="address">
					<?php the_field('front_s6_map_a2'); ?>
					<br>
					<?php the_field('front_s6_map_a3'); ?>
				</p>
				<p><?php the_field('front_s6_map_a4'); ?></p>
			</div>
		</div>
	<?php endif; ?>
	<div class="contactform">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center my-3">
					<h3><?php the_field('front_s6_form_title'); ?></h3>
				</div>
				<div class="col-12">
					<?php echo do_shortcode( '[gravityform id="'.get_field('front_s6_form_id').'" title="false" description="false" ajax="true"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>