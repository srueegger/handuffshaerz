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
								<a class="nav-link" href="#aboutus">Über uns</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#offer">Unser Angebot</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#subscribe">Kurs Anmeldung</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contact">Kontakt</a>
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
			<section class="section my-5" id="aboutus">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center mb-5">
							<h2>Über uns</h2>
						</div>
						<div class="row">
							<div class="col-12 col-md-6 aboutus-item">
								<span class="fa-stack fa-3x">
									<i class="fas fa-heart fa-stack-2x"></i>
									<i class="fas fa-bolt fa-stack-1x fa-inverse"></i>
								</span>
								<h3 class="mb-4">Lorem Ipsum</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
							</div>
							<div class="col-12 col-md-6 aboutus-item">
								<span class="fa-stack fa-3x">
									<i class="fas fa-heart fa-stack-2x"></i>
									<i class="fas fa-archway fa-stack-1x fa-inverse"></i>
								</span>
								<h3 class="mb-4">Lorem Ipsum</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
							</div>
							<div class="col-12 col-md-6 aboutus-item">
								<span class="fa-stack fa-3x">
									<i class="fas fa-heart fa-stack-2x"></i>
									<i class="fas fa-atom fa-stack-1x fa-inverse"></i>
								</span>
								<h3 class="mb-4">Lorem Ipsum</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
							</div>
							<div class="col-12 col-md-6 aboutus-item">
								<span class="fa-stack fa-3x">
									<i class="fas fa-heart fa-stack-2x"></i>
									<i class="fas fa-baby fa-stack-1x fa-inverse"></i>
								</span>
								<h3 class="mb-4">Lorem Ipsum</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
							</div>
							<div class="col-12 col-md-6 aboutus-item">
								<span class="fa-stack fa-3x">
									<i class="fas fa-heart fa-stack-2x"></i>
									<i class="fas fa-bat fa-stack-1x fa-inverse"></i>
								</span>
								<h3 class="mb-4">Lorem Ipsum</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
							</div>
							<div class="col-12 col-md-6 aboutus-item">
								<span class="fa-stack fa-3x">
									<i class="fas fa-heart fa-stack-2x"></i>
									<i class="fas fa-cat fa-stack-1x fa-inverse"></i>
								</span>
								<h3 class="mb-4">Lorem Ipsum</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section" id="offer">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center my-5">
							<h2 class="text-white">Unser Angebot</h2>
						</div>
					</div>
					<div class="row justify-content-center pb-5">
						<div class="col-12 col-md-4 offer-item mb-3">
							<div class="inner">
								<i class="fas fa-briefcase-medical fa-4x"></i>
								<h3 class="my-4">Fundierte Ausbildung</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
								<button type="button" class="btn w-100">Mehr erfahren</button>
							</div>
						</div>
						<div class="col-12 col-md-4 offer-item mb-3">
							<div class="inner">
								<i class="fas fa-briefcase-medical fa-4x"></i>
								<h3 class="my-4">Neuste Standards</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
								<button type="button" class="btn w-100">Mehr erfahren</button>
							</div>
						</div>
						<div class="col-12 col-md-4 offer-item mb-3">
							<div class="inner">
								<i class="fas fa-briefcase-medical fa-4x"></i>
								<h3 class="my-4">Garantierter Erfolg</h3>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
								<button type="button" class="btn w-100">Mehr erfahren</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section" id="subscribe">
				<div class="container mb-5">
					<div class="row">
						<div class="col-12 text-center my-5">
							<h2>Kursanmeldung</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-md-6 subscribe-item">
							<picture>
									<img src="https://via.placeholder.com/540x304/000000" class="img-fluid" alt="">
							</picture>
							<div class="inner">
								<h3 class="my-3">BLS-AED Komplettkurs</h3>
								<div class="item-meta mb-3">
									<span class="meta">
										<span class="inner-meta">
											<span class="meta-icon-container">
												<i class="fal fa-clock"></i>
											</span>
											<span class="meta-txt">4 Stunden</span>
										</span>
									</span>
									<span class="meta">
										<span class="inner-meta">
											<span class="meta-icon-container">
												<i class="fal fa-map-marker"></i>
											</span>
											<span class="meta-txt">Basel</span>
										</span>
									</span>
									<span class="meta">
										<span class="inner-meta">
											<span class="meta-icon-container">
												<i class="fal fa-coins"></i>
											</span>
											<span class="meta-txt">100 CHF</span>
										</span>
									</span>
								</div>
								<p>Die Bezeichnung «BLS-AED» steht für die beiden Begriffe «Basic Life Support» und «Automated External Defibrillator». Der Kurs vermittelt das richtige Verhalten in Notsituationen und erklärt das Zusammenspiel von Herz-Lungen-Wiederbelebung und dem Einsatz eines automatisierten externen Defibrillators. Der BLS-AED-SRC-Komplettkurs ist durch das SRC (Swiss Resuscitation Council) anerkannt</p>
								<p><button type="button" class="btn btn-outline-primary w-100">Jetzt anmelden!</button></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section" id="contact">
				<div class="container mb-5">
					<div class="row">
						<div class="col-12 text-center">
							<h2>Kontakt</h2>
						</div>
					</div>
				</div>
				<div class="map">
					<div class="marker" data-lat="47.5804166" data-lng="7.5938656">
						<h4>Kurslokal Stücki Park</h4>
						<p class="address">
							Hochbergerstrasse 70
							<br>
							4057 Basel
						</p>
						<p>Weitere Wegbeschriebung blabla</p>
					</div>
				</div>
				<div class="contactform">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center my-3">
								<h3>Schreib uns</h3>
							</div>
							<div class="col-12">
								<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer>
			<div class="container">
				<div class="row py-5 text-center text-white">
					<div class="col-12">
						<picture>
							<img class="logoimage" src="<?php echo THEME_IMAGES; ?>/logo.jpg" alt="">
						</picture>
					</div>
					<div class="col-12 my-3 claim">
						<p>Ausbildung für First Responder</p>
					</div>
				</div>
			</div>
		</footer>
		<div class="subfooter py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center text-white">
						<p class="mb-0"><i class="far fa-copyright"></i> <?php echo date('Y'); ?> Hand uffs Härz</p>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
