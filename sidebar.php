<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package CL-Village
 */

if ( ! is_active_sidebar( 'sidebar' ) ) { return; }

?><div id="secondary" class="widget-area sidebar" role="complementary">
	<div class="helpcenterheader"><span>Help Center</span></div><?php

	get_template_part( 'menus/menu', 'helpcenter' );

	dynamic_sidebar( 'sidebar' );

?></div><!-- #secondary -->