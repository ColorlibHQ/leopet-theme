<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Leopet
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$leopet_instagram_userid      	= !empty( leopet_opt( 'leopet_instagram_userid' ) ) ? leopet_opt( 'leopet_instagram_userid' ) : 'colorlib';
	$leopet_instagram_gallery_item = !empty( leopet_opt( 'leopet_instagram_gallery_item' ) ) ? leopet_opt( 'leopet_instagram_gallery_item' ) : '5';
	?>
	
    <!-- instragram_area_start -->
    <div class="instragram_area" data-username="<?php echo esc_attr( $leopet_instagram_userid )?>" data-items="<?php echo esc_attr( $leopet_instagram_gallery_item )?>"></div>
    <!-- instragram_area_end -->