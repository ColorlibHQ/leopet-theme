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

// Header background image oparation

$header_meta_img_id = leopet_meta( 'breadcrumb_img' );
$header_meta_img    = wp_get_attachment_url( $header_meta_img_id );
$headerimg          = $header_meta_img ? $header_meta_img : get_header_image();
$class              = $header_meta_img ? ' header-image' : '';
?>

<section class="hero-banner<?php echo esc_attr( $class ); ?>" <?php echo leopet_inline_bg_img( esc_url( $headerimg ) ); ?>>
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="breadcrumb_tittle">
                <h2>
                    <?php
                    if ( is_category() ) {
                        single_cat_title( __('Category: ', 'leopet') );

                    } elseif ( is_tag() ) {
                        single_tag_title( __('Tag Archive for - ', 'leopet') );

                    } elseif ( is_archive() ) {
                        echo get_the_archive_title();

                    } elseif ( is_page() ) {
                        echo get_the_title();

                    } elseif ( is_search() ) {
                        echo esc_html__( 'Search for: ', 'leopet' ) . get_search_query();

                    } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                        echo  get_the_title();

                    } elseif ( is_home() ) {
                        echo esc_html__( 'Blog', 'leopet' );

                    } elseif ( is_404() ) {
                        echo esc_html__( '404 error', 'leopet' );

                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</section>