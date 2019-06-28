		<footer>
			<div class="container">
				<div class="row py-5 text-center text-white">
					<div class="col-6 col-md-4 mb-4 mb-md-0">
						<picture>
							<img data-src="<?php echo THEME_IMAGES; ?>/src-generic.png" class="img-fluid lazy" alt="SRC Generic Logo">
						</picture>
					</div>
					<div class="col-6 col-md-4 mb-4 mb-md-0">
						<picture>
							<img data-src="<?php echo THEME_IMAGES; ?>/src-kompakt.png" class="img-fluid lazy" alt="SRC Kompakt Logo">
						</picture>
					</div>
					<div class="col-12 col-md-4">
						<div class="logoclaim">
							<picture>
								<img class="logoimage lazy" data-src="<?php echo THEME_IMAGES; ?>/logo-white.svg" alt="Hand uffs Härz Logo">
							</picture>
							<p class="claim">Ausbildung für First Responder</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="subfooter">
			<div class="container py-5">
				<div class="row">
					<div class="col-12 text-center text-white">
						<p class="mb-0"><i class="far fa-copyright"></i> <?php echo date('Y'); ?> Hand uffs Härz</p>
					</div>
				</div>
			</div>
			<?php
			$menulocations = get_nav_menu_locations();
			$menuitems = wp_get_nav_menu_items($menulocations['footer-menu']);
			if(!empty($menuitems)):
				?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 text-right">
							<ul class="list-inline">
								<?php
								foreach($menuitems as $menuitem):
									$active = '';
									if($menuitem->object_id == get_the_ID()):
										$active = ' active';
									endif;
									echo '<li class="list-inline-item footer"><a class="footerlink'.$active.'" href="'.$menuitem->url.'">'.$menuitem->title.'</a></li>';
								endforeach;
								?>
							</ul>
						</div>
					</div>
				</div>
				<?php
			endif;
			?>
		</div>
		<div id="scrolltotop"><i class="fal fa-arrow-alt-to-top"></i></div>
		<?php wp_footer(); ?>
	</body>
</html>