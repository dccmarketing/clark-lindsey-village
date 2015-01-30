<?php
/**
 * Template Name: Home Page
 *
 * Description: The home page template
 *
 * @package CL-Village
 */

get_header();

?><div class="container">
	<div class="cs_left"><?php

		cl_village_front_page_slider();

		?><div class="home-textbanner"><span><?php the_field( 'home_page_text_banner', 'option' ); ?></span></div><?php

		if ( have_rows( 'promo_boxes', 'option' ) ) {

			?><div class="promo_boxes"><?php

			while ( have_rows( 'promo_boxes', 'option' ) ) {

				the_row();

				?><div class="promo_box">
					<a href="<?php the_sub_field( 'box_link' ); ?>" class="promo_box_link">
						<img src="<?php the_sub_field( 'box_image' ); ?>" class="promo_box_image" />
					</a><?php

					if ( get_sub_field( 'box_title' ) ) :

						?><h3><?php the_sub_field('box_title'); ?></h3><?php

					endif;

					if ( get_sub_field( 'box_subtitle' ) ) :

						?><h4><?php the_sub_field('box_subtitle'); ?></h4><?php

					endif;

					if ( get_sub_field( 'box_excerpt' ) ) :

						?><p><?php the_sub_field('box_excerpt'); ?></p><?php

					endif;

				?></div><?php

			} // while

			?></div><?php

		} // box check

		?><br clear="all" />
	</div><!-- .cs_left --><?php

get_sidebar();
get_footer();
?>