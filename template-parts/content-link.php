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
            <?php $link_text = rwmb_meta( '_reader_link_text' ); ?>
            <div class="post-content">
              <?php 
                reader_post_meta();

                  if ( is_single() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                  else :
                    the_title( '<h2 class="entry-title"><a class="grid__item" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                  endif;

                  ?>  
              <span class="link">
                  <?php
                      if( $link_text ) { ?>
                      <div  class="attachmentlink">
                          
                          <a class="attach-link" href="<?php echo rwmb_meta( '_reader_link' ); ?>" > <?php echo rwmb_meta( '_reader_link' ); ?></a>
                      </div>
                  <?php } ?>
              </span>
            </div><!-- /.post-content -->
          </div><!-- /.overlay -->
        </article><!-- /.post type-post  -->