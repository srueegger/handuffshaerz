<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	<main id="page-<?php the_ID(); ?>" <?php post_class('normalpage'); ?>>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					the_title('<h2 class="text-center mb-4">', '</h2>');
					the_content();
					?>
				</div>
			</div>
		</div>
	</main>
	<?php
endwhile; endif;
get_footer();