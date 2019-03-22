<section class="section" id="subscribe">
	<div class="container mb-5">
		<div class="row">
			<div class="col-12 text-center my-5">
				<h2><?php the_field('front_s4_title'); ?></h2>
			</div>
		</div>
		<?php
		$args = array(
			'posts_per_page' => -1,
			'post_type' => 'huh_kurse',
			'post_status' => 'publish',
			'orderby' => 'menu_order',
			'order' => 'ASC'
		);
		$kurse = get_posts($args);
		if(!empty($kurse)):
			echo '<div class="row justify-content-center">';
			$post_class = array(
				'col-12',
				'col-md-6',
				'subscribe-item'
			);
			global $post;
			foreach($kurse as $post):
				setup_postdata( $post );
				$image = get_field('course_image');
				$meta = get_field('course_metas');
				?>
				<div id="course-<?php the_ID(); ?>" <?php post_class( $post_class ); ?>>
					<picture>
							<source srcset="<?php echo $image['sizes']['kursfoto-xl']; ?>" media="(min-width: 1200px)">
							<source srcset="<?php echo $image['sizes']['kursfoto-lg']; ?>" media="(min-width: 992px)">
							<source srcset="<?php echo $image['sizes']['kursfoto-md']; ?>" media="(min-width: 768px)">
							<source srcset="<?php echo $image['sizes']['kursfoto-sm']; ?>" media="(min-width: 576px)">
							<img src="<?php echo $image['sizes']['kursfoto-xs']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>">
					</picture>
					<div class="inner">
						<?php the_title('<h3 class="my-3">', '</h3>'); ?>
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
						<?php the_field('course_shortinfo'); ?>
						<p><button type="button" data-courseid="<?php the_ID(); ?>" class="btn btn-outline-primary w-100 showcoursesubscribe"><?php the_field('course_btn_txt'); ?></button></p>
					</div>
				</div>
				<?php
			endforeach;
			wp_reset_postdata();
			echo '</div>';
		endif;
		?>
		<div id="coursedetail" class="container mt-5"></div>
	</div>
</section>