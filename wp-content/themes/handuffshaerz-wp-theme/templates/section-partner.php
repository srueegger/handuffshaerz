<section class="section" id="partner">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center mb-5">
				<h2 class="text-white"><?php the_field('front_s3_title'); ?></h2>
			</div>
		</div>
		<?php
		if(have_rows('front_s3_partner')):
			echo '<div class="row justify-content-center pb-5">';
			$count_items = count(get_field('front_s3_partner'));
			$col_lg = 'col-lg-6';
			$logosize_xl = 'partnerlogo-xl';
			$logosize_lg = 'partnerlogo-lg';
			if($count_items == 3):
				$col_lg = 'col-lg-4';
				$logosize_xl = 'partnerlogo-xl-small';
				$logosize_lg = 'partnerlogo-xs';
			endif;
			while(have_rows('front_s3_partner')):
				the_row();
				$image = get_sub_field('logo');
				$btn = get_sub_field('btn');
				$title_addon = '';
				if(get_sub_field('subtitle') != ''):
					$title_addon = ' - <span class="subtitle">'.get_sub_field('subtitle').'</span>';
				endif;
				?>
				<div class="col-12 <?php echo $col_lg; ?> offer-item mb-3">
					<div data-av-animation="flipInY" class="inner animatein spped-<?php echo get_row_index(); ?>">
						<picture>
							<source srcset="<?php echo $image['sizes'][$logosize_xl]; ?>" media="(min-width: 1200px)">
							<source srcset="<?php echo $image['sizes']['partnerlogo-lg']; ?>" media="(min-width: 992px)">
							<source srcset="<?php echo $image['sizes']['partnerlogo-md']; ?>" media="(min-width: 768px)">
							<source srcset="<?php echo $image['sizes']['partnerlogo-sm']; ?>" media="(min-width: 576px)">
							<img class="img-fluid" src="<?php echo $image['sizes']['partnerlogo-xs']; ?>" alt="<?php echo $image['alt']; ?>">
						</picture>
						<h3 class="my-4"><?php the_sub_field('title'); ?><?php echo $title_addon; ?></h3>
						<div class="smhgts">
						<?php the_sub_field('txt'); ?>
						</div>
						<a href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>" class="btn w-100"><?php echo $btn['title']; ?></a>
					</div>
				</div>
				<?php
			endwhile;
			echo '</div>';
		endif;
		?>
	</div>
</section>