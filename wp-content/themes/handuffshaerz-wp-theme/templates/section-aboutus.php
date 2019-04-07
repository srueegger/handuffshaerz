<section class="section mb-5 mt-3" id="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mb-5">
				<h2><?php the_field('front_s2_title'); ?></h2>
			</div>
		</div>
		<?php
		if(have_rows('front_s2_boxes')):
			echo '<div class="row pb-5 aboutus-container">';
			while(have_rows('front_s2_boxes')):
				the_row();
				if (get_row_index() % 2 != 0):
					$animation = 'bounceInLeft';
				else:
					$animation = 'bounceInRight';
				endif;
				?>
				<div class="col-12 col-md-6 aboutus-item">
					<div data-av-animation="<?php echo $animation; ?>" class="animatein speed-<?php echo get_row_index(); ?>">
						<span class="fa-stack fa-3x">
							<i class="fas fa-heart fa-stack-2x"></i>
							<i class="<?php the_sub_field('icon'); ?> fa-stack-1x fa-inverse animated infinite pulse"></i>
						</span>
						<h3 class="mb-4"><?php the_sub_field('title'); ?></h3>
						<?php the_sub_field('txt'); ?>
					</div>
				</div>
				<?php
			endwhile;
			echo '</div>';
		endif;
		?>
	</div>
</section>