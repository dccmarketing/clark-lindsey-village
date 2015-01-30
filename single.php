<?php
/**
 * The template for displaying all single posts.
 *
 * @package CL-Village
 */

get_header();

?><div class="container">
	<div class="cs_left"><?php

		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header single"><?php

						the_title( '<h1 class="entry-title">', '</h1>' );

					?></header><!-- .entry-header -->

					<div class="entry-content"><?php

						the_content();

					?></div><!-- .entry-content --><?php

					if ( 'post' == get_post_type() ) :

						?><div class="entry-meta"><?php

							cl_village_posted_on();

						?></div><!-- .entry-meta --><?php

					endif;

					?><footer class="entry-footer"><?php

						cl_village_entry_footer();

					?></footer><!-- .entry-footer -->
				</article><!-- #post-## --><?php

			endwhile;

		endif;

	?></div><!-- .cs_left --><?php

get_sidebar();
get_footer(); ?>