<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Wir bieten zertifizierte Nothilfe, BLS-AED Komplett- und Kompaktkurse für diverse Zielgruppen an.">
		<?php
		wp_head();
		?>
		<script type="text/javascript">
			window.addEventListener("load", function(){
				window.cookieconsent.initialise({
					"palette": {
						"popup": {
						"background": "#f00000",
						"text": "#ffffff"
						},
						"button": {
						"background": "#000000",
						"text": "#ffffff"
						}
					},
					"theme": "edgeless",
					"position": "bottom-left",
					"content": {
						"message": "<?php the_field('cookiebanner_txt', 'option'); ?>",
						"dismiss": "<?php the_field('cookiebanner_btn_txt', 'option'); ?>",
						"link": "<?php the_field('cookiebanner_link_text', 'option'); ?>",
						"href": "<?php echo get_permalink( get_option('wp_page_for_privacy_policy') ); ?>"
					}
				});
			});
		</script>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div id="slideheader">
				<div class="topheader">
					<div class="container">
						<div class="row">
							<div class="col-3 d-none d-md-block">
								<?php
								$menulocations = get_nav_menu_locations();
								$menuitems = wp_get_nav_menu_items($menulocations['socialmedia-menu']);
								if(!empty($menuitems)):
									echo '<div class="headericons"><ul class="list-inline">';
									foreach($menuitems as $menuitem):
										$icon = get_field('sm_icon', $menuitem);
										$color = get_field('sm_icon_color', $menuitem);
										echo '<li class="list-inline-item"><a title="'.$menuitem->title.'" href="'.$menuitem->url.'" target="'.$menuitem->target.'"><i style="color: '.$color.';" class="'.$icon.' fa-3x fa-fw"></i></a></li>';
									endforeach;
									echo '</ul></div>';
								endif;
								?>
							</div>
							<div class="col-12 col-md-6 text-center">
								<a href="<?php echo HOME_URI; ?>">
									<picture>
										<img class="logoimage" src="<?php echo THEME_IMAGES; ?>/logo-black.svg" alt="">
									</picture>
								</a>
							</div>
							<div class="col-3 d-none d-md-block">
								<h1 class="pageinfo"><?php bloginfo('description'); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="container alwaysmenu">
					<div id="mainmenu-container" class="mainmenu-scroll">
						<?php
						$menulocations = get_nav_menu_locations();
						$menuitems = wp_get_nav_menu_items($menulocations['main-menu']);
						huh_print_menu_items($menuitems, 'nav nav-tabs justify-content-center d-none d-lg-flex');
						?>
						<button class="hamburger hamburger--stand d-inline-block d-lg-none" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
					<div id="mobilemenu" class="mainmenu-scroll">
						<?php huh_print_menu_items($menuitems); ?>
					</div>
				</div>
			</div>
		</header>