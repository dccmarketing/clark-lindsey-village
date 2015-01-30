<?php if ( has_nav_menu( 'work' ) ) {

	$menu['theme_location']		= 'work';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-work';
	$menu['container_class'] 	= 'menu nav-work';
	$menu['menu_id']         	= 'menu-work-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>