<?php
/**
 * @package Clark-Lindsey
 */

?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header justcontent"><?php

		the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );

	?></header><!-- .entry-header -->

	<div class="entry-content"><?php

		the_excerpt();

	?></div><!-- .entry-content --><?php

	if ( 'post' == get_post_type() ) :

		?><div class="entry-meta"><?php

			clarklindsey_posted_on();

		?></div><!-- .entry-meta --><?php

	endif;

	?><footer class="entry-footer"><?php

		clarklindsey_entry_footer();

	?></footer><!-- .entry-footer -->
</article><!-- #post-## -->