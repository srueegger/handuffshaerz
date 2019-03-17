<?php
//get_header();
//get_footer();
?>
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
							<div class="col-3">
								SOCIAL MEDIA ICONS
							</div>
							<div class="col-6 text-center">
								<a href="<?php echo HOME_URI; ?>">
									<picture>
										<img class="logoimage" src="<?php echo THEME_IMAGES; ?>/logo.jpg" alt="">
									</picture>
								</a>
							</div>
							<div class="col-3">
								KONTAKTINFO
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="container alwaysmenu">
					<div id="mainmenu-container">
						<ul class="nav nav-tabs justify-content-center" role="tablist">
							<li class="nav-item">
								<a class="nav-link" href="#home">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#fat2">Über uns</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#fat3">Link</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#fat4">Link</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#fat5">Link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<main>
			<section class="section" id="home">
				<div class="owl-carousel owl-theme">
					<div>
						<picture>
							<img src="https://via.placeholder.com/1920x1080/0000FF" alt="">
							<figcaption>
								<h1 class="text-white">Cooler Titel</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
							</figcaption>
						</picture>
					</div>
					<div>
						<picture>
							<img src="https://via.placeholder.com/1920x1080/FF0000" alt="">
							<figcaption>
								<h1 class="text-white">Cooler Titel</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
							</figcaption>
						</picture>
					</div>
					<div>
						<picture>
							<img src="https://via.placeholder.com/1920x1080/FFFFF00" alt="">
							<figcaption>
								<h1 class="text-white">Cooler Titel</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
							</figcaption>
						</picture>
					</div>
					<div>
						<picture>
							<img src="https://via.placeholder.com/1920x1080/000000" alt="">
							<figcaption>
								<h1 class="text-white">Cooler Titel</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
							</figcaption>
						</picture>
					</div>
				</div>
			</section>
			<section class="section" id="aboutus">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<h2>Über uns</h2>
						</div>
					</div>
				</div>
			</section>
			<section class="section" id="fat3"></section>
			<section class="section" id="fat4"></section>
			<section class="section" id="fat5"></section>
		</main>
		<?php wp_footer(); ?>
	</body>
</html>
