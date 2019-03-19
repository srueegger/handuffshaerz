<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div id="slideheader">
				<div class="topheader">
					<div class="container">
						<div class="row">
							<div class="col-3 d-none d-md-block">
								<div class="headericons">
									<ul class="list-inline">
										<li class="list-inline-item"><a href="#" target="_blank"><i style="color: #3b5998;" class="fab fa-facebook fa-3x fa-fw"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-md-6 text-center">
								<a href="<?php echo HOME_URI; ?>">
									<picture>
										<img class="logoimage" src="<?php echo THEME_IMAGES; ?>/logo.jpg" alt="">
									</picture>
								</a>
							</div>
							<div class="col-3 d-none d-md-block">
								<h1 class="pageinfo"><?php bloginfo('description'); ?><h1>
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