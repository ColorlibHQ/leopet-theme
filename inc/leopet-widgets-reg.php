<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Leopet
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function leopet_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'leopet' ),
        'id'            => 'leopet-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer subscription register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Subscription', 'leopet' ),
        'id'            => 'footer-subscription',
        'before_widget' => '<div class="row justify-content-center"><div class="col-lg-8 col-xl-6"><div id="%1$s" class="footer_subscription subscribe_part_text text-center %2$s">',
        'after_widget'  => '</div></div></div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'leopet' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0"><div id="%1$s" class="single-footer-widget footer_widget widget footer_1 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'leopet' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0"><div id="%1$s" class="single-footer-widget footer_widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'leopet' ),
        'id'            => 'footer-3',
        'before_widget' => '<div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0"><div id="%1$s" class="single-footer-widget footer_widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'leopet' ),
        'id'            => 'footer-4',
        'before_widget' => '<div class="col-xl-2 col-sm-6 col-md-3 mb-4 mb-xl-0"><div id="%1$s" class="single-footer-widget footer_widget widget %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    
    
}
add_action( 'widgets_init', 'leopet_widgets_init' );
