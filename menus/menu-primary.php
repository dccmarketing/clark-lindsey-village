<?php if ( has_nav_menu( 'primary' ) ) {

	?><nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'dcc-marketing' ); ?></button><?php

			$menu['depth'] 			= 1;
			$menu['theme_location'] = 'primary';

			wp_nav_menu( $menu );

	?></nav><!-- #site-navigation --><?php

} ?>