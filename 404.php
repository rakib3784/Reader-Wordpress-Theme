<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Reader
 */

get_header(); ?>

			<div class="container main-content media-body wrapper">

				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'reader' ); ?></h1>
				</header><!-- .page-header -->

				
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'reader' ); ?></p>

					

			</div><!-- .page-content -->
			

<?php
get_footer();
