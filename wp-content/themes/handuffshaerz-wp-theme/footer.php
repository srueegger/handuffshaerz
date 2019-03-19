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
									echo '<li class="list-inline-item"><a class="footerlink'.$active.'" href="'.$menuitem->url.'">'.$menuitem->title.'</a></li>';
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
		<?php wp_footer(); ?>
	</body>
</html>