<?php
/**
 * The main template file.
 *
 * @package Clark-lindsey
 */

get_header();

?><div class="container">
	<div class="cs_left"><?php

		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			clarklindsey_paging_nav();

		else :

			get_template_part( 'content', 'none' );

		endif;

	?></div><!-- .cs_left --><?php

get_sidebar();
get_footer();
?>