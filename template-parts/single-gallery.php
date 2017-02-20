<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reader
 */


?>

        <article id="post-<?php echo get_the_ID();?>">
          <div class="overlay">
             
                  <div class="post-thumbnail gallery-img">
                  <?php $slides = rwmb_meta('_reader_gallery_images','type=image_advanced'); ?>
                  <?php $count = count($slides); ?>
                  <?php if($count > 0){ ?>
                    <?php $slide_no = 0; ?>
                      <?php foreach( $slides as $slide ): ?>
                          <div class="gallery_images">
                              <?php $images = wp_get_attachment_image_src( $slide['ID'], 'gallery-thumb' ); ?>
                              <img src="<?php echo $images[0]; ?>" alt="">
                          </div>
                          <?php $slide_no++ ?>
                      <?php endforeach; ?>
                      <?php } ?>
                  </div><!-- /.post-thumbnail -->
              
              
              <div class="post-content">
                  <?php reader_post_meta(); ?>
                  <?php the_title( sprintf( '<h1 class="post-title">' ), '</h1>' ); ?>
                  <div class="description">
                    <?php the_content();?>
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
