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


?>

	<div id="f0f">
		<div class="container">
			<div class="row">
				<div class="f0f-content text-center col-md-12">
					<div class="fof-content-before">
						<?php 
							$errorText = esc_html__( 'Ooops 404 Error !', 'leopet' );
							if( leopet_opt( 'leopet_fof_titleone' ) ){
								$errorText = leopet_opt( 'leopet_fof_titleone' );
							}
							
							echo '<h1 class="h1">'.esc_html( $errorText ).'</h1>';

							// Wrong text block
							$wrongText = wp_kses_post( __( 'Either something went wrong or the page dosen&rsquo;t exist anymore.', 'leopet' ) );

							if( leopet_opt('leopet_fof_titletwo') ){
								$wrongText = leopet_opt('leopet_fof_titletwo');
							}

							$anchor = leopet_anchor_tag(
								array(
									'url' 	 => esc_url( site_url( '/' ) ),
									'text' 	 => esc_html__( 'Go To Home page', 'leopet' ),
									'class'	 => 'button-contactForm btn_1 boxed-btn'
								)
							);

							echo leopet_paragraph_tag(
								array(
									'text' 	 => esc_html( $wrongText )
								)
							);

							echo wp_kses_post( $anchor );
						?>
					</div>
				</div>
			</div>
		</div>
	</div>