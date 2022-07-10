<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Artimañas 2021</title>
	<?php wp_head(); ?>
</head>

<!-- <body> <?php body_class(  ) ?> -->
	<!-- style="background-color: #171717; -->

	<nav class="navbar navigation navigation-menu">
		<div class="container-fluid">
				<a class="navbar-brand" href="/Artimanas">
					<img src="<?php header_image(); ?>" height="90" width="307" alt="" />
				</a>


		<div class="nav justify-content-end">
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'container-fluid',
				'container_id'      => 'frame-459',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
</div>
		</div>
	</div>
</nav>
