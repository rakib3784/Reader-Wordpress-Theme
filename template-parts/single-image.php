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

        
        <article id="post-<?php echo get_the_ID();?>">
          <div class="overlay">
             <?php if ( has_post_thumbnail() ) { ?>
                <div class="post-thumbnail single-image">
                  <?php the_post_thumbnail('full'); ?>
                </div>
              <?php } ?>
            <div class="post-content">
              <?php reader_post_meta(); ?>
                <?php the_title( sprintf( '<h2 class="post-title">' ), '</h2>' ); ?>
                <div class="entry"><?php the_content();?>
                  <?php
                    wp_link_pages( array(
                      'before' => '<div class="page-links">' . __( 'Pages:', 'reader' ),
                      'after'  => '</div>',
                    ) );
                  ?>
                </div>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) :
                  comments_template();
                endif;
                ?>
            </div><!-- /.post-content -->

          </div><!-- /.overlay -->
        </article><!-- /.post type-post  -->
