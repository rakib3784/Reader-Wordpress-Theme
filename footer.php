<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reader
 */

?>
</div><!-- /.wrapper -->
	   <footer class="site-footer text-center">
        <div class="copyright">

          &copy; <a href="esc_url(http://www.demos.jeweltheme.com/reader)">Reader</a> <?php echo date('Y'); ?> | Develpoed With Love by 

                <?php
                  $footer_url=get_theme_mod( 'footer_url' ); 
                  if(!empty($footer_url)){ ?>
                  <a href="https://www.<?php echo get_theme_mod( 'footer_url' ); ?>">
                <?php } else{ ?>
                  <a href="http://demos.jeweltheme.com/reader/">
                  <?php } ?>
              
                <?php 
                  $footer_user=get_theme_mod( 'footer_user' );
                  if(!empty($footer_user)){
                  echo get_theme_mod( 'footer_user' );
                } else{ 
                  echo "Jeweltheme";
                   } ?>
            </a>

        </div><!-- /.copyright -->
      </footer><!-- /.footer-bottom -->

   

    <div id="scroll-to-top" class="scroll-to-top">
	    <i class="fa fa-angle-double-up"></i>    
	  </div>

  
</section>
<?php wp_footer(); ?>

</body>
</html>
