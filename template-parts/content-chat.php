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
                reader_post_meta();

                if ( is_single() ) :
                  the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                  the_title( '<h2 class="entry-title"><a class="grid__item" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                ?>  
            </div><!-- /.post-content -->

          </div><!-- /.overlay -->
        </article><!-- /.post type-post  -->