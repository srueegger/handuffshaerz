<section class="section" id="team">
	<div class="container mb-5">
		<div class="row mb-5">
			<div class="col-12 text-center">
				<h2><?php the_field('front_s5_title'); ?></h2>
			</div>
		</div>
		<?php
		$args = array(
			'posts_per_page' => -1,
			'post_type' => 'huh_team',
			'post_status' => 'publish',
			'orderby' => 'menu_order',
			'order' => 'ASC'
		);
		$team = get_posts($args);
		if(!empty($team)):
			global $post;
			?>
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel owl-theme teamcarousel">
						<?php
						foreach($team as $post):
							setup_postdata( $post );
							$image = get_field('team_image');
							?>
							<div class="team-item">
								<div class="inner">
									<picture>
										<source data-srcset="<?php echo $slide['sizes']['teamfoto-xl-2x']; ?> 2x, <?php echo $image['sizes']['teamfoto-xl']; ?> 1x" media="(min-width: 1200px)">
										<source data-srcset="<?php echo $slide['sizes']['teamfoto-lg-2x']; ?> 2x, <?php echo $image['sizes']['teamfoto-lg']; ?> 1x" media="(min-width: 992px)">
										<source data-srcset="<?php echo $slide['sizes']['teamfoto-md-2x']; ?> 2x, <?php echo $image['sizes']['teamfoto-md']; ?> 1x" media="(min-width: 768px)">
										<source data-srcset="<?php echo $slide['sizes']['teamfoto-sm-2x']; ?> 2x, <?php echo $image['sizes']['teamfoto-sm']; ?> 1x" media="(min-width: 576px)">
										<img data-src="<?php echo $image['sizes']['teamfoto-xs']; ?>" data-srcset="<?php echo $image['sizes']['teamfoto-xs-2x']; ?> 2x" alt="<?php echo $image['alt']; ?>" class="img-fluid lazy">
									</picture>
									<h3>
										<?php the_title(); ?>
										<span class="borderspan"></span>
										<span class="borderspan"></span>
									</h3>
									<span class="team-function"><?php the_field('team_function'); ?></span>
									<?php
									if(have_rows('team_social_media')):
										echo '<ul>';
										while(have_rows('team_social_media')):
											the_row();
											echo '<li><a href="'.get_sub_field('url').'" target="_blank"><i class="'.get_sub_field('icon').'"></i></a></li>';
										endwhile;
										echo '</ul>';
									endif;
									?>
								</div>
							</div>
							<?php
						endforeach;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
			<?php
		endif;
		?>
	</div>
</section>