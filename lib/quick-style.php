<?php
function reader_style_options(){

    global $reader_topclass;
    switch($reader_topclass['reader_color']){
                    case 1: //Default
                    $reader_topclass_color = "#1fb5ac";
                    break;
                    case 2: //Light Green
                    $reader_topclass_color = "#1fb538";
                    break;
                    case 3: //Purple
                    $reader_topclass_color = "#8e44ad";
                    break;
                    case 4: //Light Red
                    $reader_topclass_color = "#e12444";
                    break;
                    case 5: //Orange
                    $reader_topclass_color = "#f39c12";
                    break;
                    case 6: //turquoise
                    $reader_topclass_color = $reader_topclass['reader_custom_color'];
                    break;
                    default:
                    $reader_topclass_color = "#1fb5ac";
                    break;
                }

                

?>

<style type="text/css">
a, .top-headings span, .section-title span, .over-view-circle .value, .navbar-default .navbar-brand span, .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus, .service-container li .service-icon, .more-works a, 
.navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus, .navbar-nav>li.menu-item-has-children:hover:before, .tweet-description a, .portfolioFilter a:focus, 
.portfolioFilter a:hover, .portfolioFilter .current, .copyrights a:hover, .next-section .btn:hover, .post-content .post-title a:hover, .post-content .comments-link a:hover, .widget_categories li a:hover, 
.widget_archive li a:hover, .post .entry-meta a:hover, .widget_recent_entries a:hover, .type-page blockquote, .type-post blockquote,.comments-area .reply a, .nav-tabs>li.active>a, 
.nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus, .content_slider_text_block_wrap a:hover, .tweet-slider .slide-nav:hover, .panel-title a.collapsed:hover, .post-navigation .nav-links a:hover
{
    color: <?php echo $reader_topclass_color;?> ;
}
a:hover {
    color: <?php echo $reader_topclass_color;?> ;
}
p a:hover {
    border-bottom: 1px dotted <?php echo $reader_topclass_color;?> ;
}

.top-carousel-container .slide-nav,
.widget_img a:hover .overlay {
    background-color: <?php
                            $hex = $reader_topclass_color;
                            list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                            echo "rgba($r, $g, $b, 0.6) ";
                            ?> ;

}

.navbar-nav>li .sub-menu>li>a,
.works-item figure:after {
    background-color: <?php
                            $hex = $reader_topclass_color;
                            list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                            echo "rgba($r, $g, $b, 0.9) ";
                            ?> ;
}

.contact-form-container .form-control:focus {
    box-shadow: <?php
                            $hex = $reader_topclass_color;
                            list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                            echo "rgba($r, $g, $b, 0.64) ";
                            ?> ;
}

.carousel-indicators .active, .top-carousel-container .slide-nav:hover, #scroll-to-top, .navbar-nav>li>a:hover:after, .navbar-nav>li .sub-menu>li>a:hover, .sec-head-container .sec-head-style:after, .owl-page.active,
.member-container:after, .member-container .member-details, .more-works a:before, .subscribe-form .btn, .page-location a:before, .page-location a:after, .page-location a:before, .page-location a:before,
.widget_search>form .btn:hover:before, .widget_categories li:after, .widget_archive li:after, .panel-title a, .widget_tagcloud a:hover, .widget_calendar th, .progress-bar.default-bar,
.widget_calendar td a:hover:after, .paging-navigation a:hover:after, .paging-navigation a.active, .comments-area .parent:before,
.error-icon, .nav-tabs>li.active>a:before,.dropcap.box,
.btn-default.btn-effect:hover:after, .btn-default.btn-bg.btn-effect:after,.comments-area .reply a:hover:after,.service-container li:hover,.contact-form-elements .wpcf7-form-control:hover,.map-marker,
.mc4wp-form .btn, .subscribe-form .btn
{
    background-color: <?php echo $reader_topclass_color;?> ;
}


.subscribe-form .btn:hover {
    border-color: <?php echo $reader_topclass_color;?> ;
    background-color: <?php echo $reader_topclass_color;?> ;
}
.panel-title a:hover {
    color: #ffffff;
}

.post-content .continue-reading a:hover,
.service-container li:before {
    border-color: #ffffff #ffffff <?php echo $reader_topclass_color;?> <?php echo $reader_topclass_color;?> ;
}
.portfolioFilter .current,
.owl-page,
.owl-page.active,
.subscribe-form .btn,
.panel-title a,
.widget_tagcloud a:hover,
.widget_calendar th,
.type-page blockquote, .type-post blockquote,
.comments-area .reply a:hover,
.form-control:focus,
.contact-form-elements .wpcf7-form-control,
.btn-default,
.btn-default:hover,
.mc4wp-form .btn, .subscribe-form .btn,
.wpcf7-form-control:focus{
    border-color: <?php echo $reader_topclass_color;?> ;
}
.contact-info-box:hover .map-marker:after {
    box-shadow: 3px 3px <?php echo $reader_topclass_color;?> ;
}


.video-section .play-btn:after {
    background:-webkit-radial-gradient(<?php echo $reader_topclass_color;?>, transparent);
    background:-moz-radial-gradient(<?php echo $reader_topclass_color;?>, transparent); 
    background:-o-radial-gradient(<?php echo $reader_topclass_color;?>, transparent);
    background:radial-gradient(<?php echo $reader_topclass_color;?>,  transparent);
}

@media screen and (min-width: 1250px) { 
    .post-navigation .nav-links a:hover {
        color: #ffffff;
    }
    .post-navigation .nav-links a {
        border-color: <?php echo $reader_topclass_color;?> ;
        background-color: <?php echo $reader_topclass_color;?> ;
    }
}

@media (max-width: 992px) {
    .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus,
    .navbar-nav>li .sub-menu>li>a:hover {
        color: <?php echo $reader_topclass_color;?> ;
    }
    .toggle_nav_button {
        background-color: <?php echo $reader_topclass_color;?> ;
    }
}
</style>
<?php 

}
add_action( 'wp_head', 'reader_style_options');
