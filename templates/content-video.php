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

// Post Item Start

?>

<div id="<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
	<div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
		<?php 
		/**
		 * Blog Post thumbnail
		 * @Hook  leopet_blog_posts_thumb
		 *
		 * @Hooked leopet_blog_posts_thumb_cb
		 * 
		 *
		 */
		do_action( 'leopet_blog_posts_thumb' );
		
		/**
		 * Blog Post Meta
		 * @Hook  leopet_blog_posts_meta
		 *
		 * @Hooked leopet_blog_posts_meta_cb
		 * 
		 *
		 */
		do_action( 'leopet_blog_posts_meta' );

		/**
		 * Blog Post title
		 * @Hook  leopet_blog_posts_title
		 *
		 * @Hooked leopet_blog_posts_title_cb
		 * 
		 *
		 */
		do_action( 'leopet_blog_posts_title' );		
		
		/**
		 * Blog Excerpt With read more button
		 * @Hook  leopet_blog_posts_excerpt
		 *
		 * @Hooked leopet_blog_posts_excerpt_cb
		 * 
		 *
		 */
		do_action( 'leopet_blog_posts_excerpt' );
		
		?>
	</div>
</div>