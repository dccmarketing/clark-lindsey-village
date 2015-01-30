<?php if ( has_nav_menu( 'helpcenter' ) ) {

	$menu['theme_location']		= 'helpcenter';
	$menu['container'] 			= 'div';
	$menu['container_id']    	= 'menu-helpcenter';
	$menu['container_class'] 	= 'menu nav-helpcenter';
	$menu['menu_id']         	= 'menu-helpcenter-items';
	$menu['menu_class']      	= 'menu-items';
	$menu['depth']           	= 1;
	$menu['fallback_cb']     	= '';

	wp_nav_menu( $menu );

} ?>