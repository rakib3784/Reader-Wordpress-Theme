<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reader
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php if ( is_single() ) { body_class( 'media single' ); } else { body_class(); } ?>>


    <button type="button" id="toggleMenu" class="toggle_menu">
      <i class="fa fa-bars"></i>
    </button>

    <div id="theSidebar" class="sidebar media-left vertical_nav">

      

      <nav class="navbar" role="navigation">

        

        <div class="navbar-header">
        	
          <?php if ( get_theme_mod( 'reader_logo' ) ) : ?>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
         
                <img src="<?php echo get_theme_mod( 'reader_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
         
            </a>
         
            <?php else : ?>
                       
            
               <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo"></a>
                <p class="site-description"><?php bloginfo( 'description' ); ?></p>
           
                       
        <?php endif; ?>
        </div>

       

        <div id="navbar" class="side-nav">
            <?php
              $args = array(
                      'theme_location' => 'primary',
                      'depth' => 2,
                      'container' => false,
                      'container_class' => 'mastnav fullheight', 
                      'menu_class'  => 'nav navbar-nav',
                      'walker'  => new BootstrapNavMenuWalker()
                      );
                wp_nav_menu($args);  
              ?>
                        
        </div><!--/.navbar-collapse -->

      </nav>    
	     
          <?php 
             if ( is_active_sidebar( 'blog-sidebar' ) ){
              dynamic_sidebar( 'blog-sidebar' );      
             }
           ?>
      
		

      <div class="widget widget_social theia_sticky">
        <div class="widget-details">

          <?php $twitter=get_theme_mod( 'twitter' ); if(!empty($twitter)){ ?><a href="https://www.twitter.com/<?php echo get_theme_mod( 'twitter' ); ?>"><i class="icon ti-twitter"></i><?php } else{echo "";} ?></a>
          <?php $skype=get_theme_mod( 'skype' ); if(!empty($skype)){ ?><a href="https://www.skype.com/<?php echo get_theme_mod( 'skype' ); ?>"><i class="icon ti-skype"></i><?php } else{echo "";} ?></a>
          <?php $instagram=get_theme_mod( 'instagram' ); if(!empty($instagram)){ ?><a href="https://www.instagram.com/<?php echo get_theme_mod( 'instagram' ); ?>"><i class="icon ti-instagram"></i><?php } else{echo "";} ?></a>
          <?php $dribble=get_theme_mod( 'dribble' ); if(!empty($dribble)){ ?><a href="https://www.dribbble.com/<?php echo get_theme_mod( 'dribble' ); ?>"><i class="icon ti-dribbble"></i><?php } else{echo "";} ?></a>
          <?php $vimeo=get_theme_mod( 'vimeo' ); if(!empty($vimeo)){ ?><a href="https://www.vimeo.com/<?php echo get_theme_mod( 'vimeo' ); ?>"><i class="icon ti-vimeo"></i><?php } else{echo "";} ?></a>
          <?php $facebook=get_theme_mod( 'facebook' ); if(!empty($facebook)){ ?><a href="https://www.facebook.com/<?php echo get_theme_mod( 'facebook' );?>"><i class="icon ti-facebook"></i><?php }else{echo "";} ?></a>


        </div><!-- /.widget-details -->
      </div><!-- /.widget -->
      
    </div><!-- /.sidebar -->


      
