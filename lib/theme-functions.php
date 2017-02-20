<?php
/*
* Theme Option Functions
*/

// Favicon Image
if (!function_exists("reader_favicon")) {
    function reader_favicon(){
        global $reader_topclass;        
        if( $reader_topclass['show_favicon'] ){
            echo '<link rel="shortcut icon" href="' . $reader_topclass['favicon_icon']['url'] .'" >';            
        } else {
            echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/favicon.png" >';
        }
    }
}



// Custom Admin Logo Login
if(!function_exists('reader_admin_logo_login')){
    function reader_admin_logo_login(){
        global $reader_topclass;
        if( $reader_topclass['admin_logo']['url'] ){
            ?>
            <style type="text/css">
                body.login div#login h1 a {
                    background-image: url("<?php echo $reader_topclass['admin_logo']['url'];?>");
                    padding-bottom: 30px;
                }
            </style>

            <?php } else { ?>

            <style type="text/css">
                body.login div#login h1 a {
                    background-image: url('<?php echo admin_url('/images/wordpress-logo.png');?>');
                    padding-bottom: 30px;
                }
            </style>

            <?php }
        }
        add_action( 'login_enqueue_scripts', 'reader_admin_logo_login' );
    }


// Logo Login URL changed from wordpress.org to Site URL
if(!function_exists('reader_logo_login_url')){
    function reader_logo_login_url(){
        return site_url();
    }
    add_filter( 'login_headerurl', 'reader_logo_login_url' );
}