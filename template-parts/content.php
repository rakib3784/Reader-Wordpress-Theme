<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reader
 */

$bg_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );

?>

        <article id="post-<?php echo get_the_ID();?>" <?php post_class('background-bg');?> data-image-src="<?php echo $bg_image[0]; ?>">
          <div class="overlay">
            <div class="post-content">
            	<?php 
                    if ( has_post_thumbnail() ) { ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php } 
                
            		reader_post_meta();

        					if ( is_single() ) :
        						the_title( '<h1 class="entry-title">', '</h1>' );
        					else :
        						the_title( '<h2 class="entry-title"><a class="grid__item" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        					endif;

        					?>	
        				<p class="description">
                	<?php the_excerpt();?>
                    <div class="continue-reading pull-left">
                        <a href="<?php the_permalink();?>">Continue reading ...</a>
                    </div>
              	</p><!-- /.description -->
            </div><!-- /.post-content -->

          </div><!-- /.overlay -->
        </article><!-- /.post type-post  -->
