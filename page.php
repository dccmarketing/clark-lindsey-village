<?php
/**
 * The template for displaying all pages.
 *
 * @package CL-Village
 */

get_header();

?><div class="container">
	<div class="cs_left">
		<div class="subnav"><?php

			wp_nav_menu(array(
			    'theme_location' => 'primary',
			    'walker' => new Selective_Walker(), // with ID
			));

		?></div><?php

		while ( have_posts() ) : the_post();

			?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header"><?php

					the_title( '<h1 class="entry-title">', '</h1>' );

				?></header><!-- .entry-header -->

				<div class="page-content"><?php

					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'clark-lindsey' ),
						'after'  => '</div>',
					) );

				?></div><!-- .entry-content -->

				<footer class="entry-footer"><?php

					edit_post_link( __( 'Edit', 'clark-lindsey' ), '<span class="edit-link">', '</span>' );

				?></footer><!-- .entry-footer -->
			</article><!-- #post-## --><?php

		endwhile; // end of the loop.

	?></div><!-- .cs_left --><?php

get_sidebar();
get_footer();
?>