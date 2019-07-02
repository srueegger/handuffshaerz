<section class="section" id="home">
	<?php
	$slides = get_field('front_s1_slider');
	if(!empty($slides)):
		echo '<div class="owl-carousel owl-theme homecarousel">';
		foreach($slides as $slide):
			$title = $slide['title'];
			$caption = $slide['caption'];
			?>
			<div>
				<picture>
					<source data-srcset="<?php echo $slide['sizes']['fullwidth-xl-2x']; ?> 2x, <?php echo $slide['sizes']['fullwidth-xl']; ?> 1x" media="(min-width: 1200px)">
					<source data-srcset="<?php echo $slide['sizes']['fullwidth-lg-2x']; ?> 2x, <?php echo $slide['sizes']['fullwidth-lg']; ?> 1x" media="(min-width: 992px)">
					<source data-srcset="<?php echo $slide['sizes']['fullwidth-md-2x']; ?> 2x, <?php echo $slide['sizes']['fullwidth-md']; ?> 1x" media="(min-width: 768px)">
					<source data-srcset="<?php echo $slide['sizes']['fullwidth-sm-2x']; ?> 2x, <?php echo $slide['sizes']['fullwidth-sm']; ?> 1x" media="(min-width: 576px)">
					<img class="lazy" data-src="<?php echo $slide['sizes']['fullwidth-xs']; ?>" data-srcset="<?php echo $slide['sizes']['fullwidth-xs-2x']; ?> 2x" alt="<?php echo $slide['alt']; ?>">
					<?php if($title != '' || $caption != ''): ?>
						<figcaption>
							<?php if($title != ''): ?>
								<h1 class="text-white"><?php echo $title ?></h1>
								<?php
							endif;
							if($caption != ''):
								?>
								<p class="text-white"><?php echo nl2br($caption); ?></p>
							<?php endif; ?>
						</figcaption>
					<?php endif; ?>
				</picture>
			</div>
			<?php
		endforeach;
		echo '</div>';
	endif;
	?>
</section>