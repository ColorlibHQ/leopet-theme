<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'leopet_preloader', 'leopet_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'leopet_header', 'leopet_header_cb', 10 );

	/**
	 * Hook for before footer
	 *
	 */
	add_action( 'leopet_footer', 'leopet_before_footer_area', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'leopet_footer', 'leopet_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'leopet_wrp_start', 'leopet_wrp_start_cb', 10 );
	add_action( 'leopet_wrp_end', 'leopet_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'leopet_blog_col_start', 'leopet_blog_col_start_cb', 10 );
	add_action( 'leopet_blog_col_end', 'leopet_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'leopet_blog_posts_thumb', 'leopet_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'leopet_blog_details_wrap_start', 'leopet_blog_details_wrap_start_cb', 10 );
	add_action( 'leopet_blog_details_wrap_end', 'leopet_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'leopet_blog_posts_title', 'leopet_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'leopet_blog_posts_meta', 'leopet_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'leopet_blog_posts_excerpt', 'leopet_blog_posts_excerpt_cb', 10 );
	// add_action( 'leopet_blog_posts_excerpt', 'leopet_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'leopet_blog_posts_info_link', 'leopet_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'leopet_blog_posts_content', 'leopet_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'leopet_blog_posts_share', 'leopet_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'leopet_blog_sidebar', 'leopet_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'leopet_blog_single_meta', 'leopet_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'leopet_page_content', 'leopet_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'leopet_fof', 'leopet_fof_cb', 10 );

	

?>