<?php 
	$siteUrl 		= home_url('/');		
	$footer_logo_id = get_theme_mod( 'footer_logo' );
	$footer_logo 	= wp_get_attachment_image_src( $footer_logo_id , 'leopet_footer_logo_118x30' )[0];
	
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'leopet' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( leopet_opt( 'leopet_footer_copyright_text' ) ) ? leopet_opt( 'leopet_footer_copyright_text' ) : $copyText;
?>

	<div class="row">
		<div class="col-lg-12">
			<div class="copyright_text">
				<?php
					if ( $footer_logo ) {
						echo '<a href="'.esc_url( $siteUrl ).'">';
						?>
						<img src="<?php echo $footer_logo?>" alt="footer logo">
						<?php
						echo '</a>';
					}
				?>
				<p class="footer-text"><?php echo wp_kses_post( $copyRight ); ?></p>
			</div>
		</div>
	</div>