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
										<source srcset="<?php echo $image['sizes']['teamfoto-xl']; ?>" media="(min-width: 1200px)">
										<source srcset="<?php echo $image['sizes']['teamfoto-lg']; ?>" media="(min-width: 992px)">
										<source srcset="<?php echo $image['sizes']['teamfoto-md']; ?>" media="(min-width: 768px)">
										<source srcset="<?php echo $image['sizes']['teamfoto-sm']; ?>" media="(min-width: 576px)">
										<img src="<?php echo $image['sizes']['teamfoto-xs']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
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