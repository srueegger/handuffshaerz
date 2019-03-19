<?php
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
	<main id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		get_template_part('templates/section', 'home');
		get_template_part('templates/section', 'aboutus');
		get_template_part('templates/section', 'partner');
		get_template_part('templates/section', 'subscribe');
		get_template_part('templates/section', 'team');
		get_template_part('templates/section', 'contact');
		?>
	</main>
	<?php
endwhile; endif;
get_footer();