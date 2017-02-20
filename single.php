<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reader
 */

get_header(); ?>

  <div class="main-content media-body wrapper">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/single', get_post_format() ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php endif; ?>
	</div>

<?php

get_footer();
