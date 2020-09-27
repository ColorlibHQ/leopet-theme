<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : LEOPET
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function leopet_common_custom_css(){
    
    wp_enqueue_style( 'leopet-common', get_template_directory_uri().'/assets/css/common.css' );

		$themeColor     		  	= leopet_opt( 'leopet_theme_color' );
		$themeSecColor     		  	= leopet_opt( 'leopet_secondary_theme_color' );
		$bookBtnBgColor       		= leopet_opt( 'leopet_book_btn_bg_color' ) != '#ff5b5b' ? leopet_opt('leopet_book_btn_bg_color') : $themeSecColor;
		$bookBtnHoverBgColor     	= leopet_opt( 'leopet_book_btn_hvr_color' ) != '#53c9bb' ? leopet_opt('leopet_book_btn_hvr_color') : $themeColor;
		$hoverColor     	  	  = leopet_opt( 'leopet_quote_btn_hvr_text_color');

		$headerTop_bg     		  = '';
		$navbarBgColor     		  = leopet_opt( 'leopet_navbar_bg_color' ) != '#082b49' ? leopet_opt( 'leopet_navbar_bg_color') : '';
		$headerTop_col     		  = leopet_opt( 'leopet_top_header_color' );

		$headerTopBg      		  = leopet_opt( 'leopet_top_header_bg_color');
		$headerBg          		  = leopet_opt( 'leopet_header_bg_color') != '#53c9bb' ? leopet_opt( 'leopet_header_bg_color') : $themeColor;
		$menuColor          	  = leopet_opt( 'leopet_header_menu_color' ) != '#ffffff' ? leopet_opt('leopet_header_menu_color') : '';
		$menuHoverColor           = leopet_opt( 'leopet_header_menu_hover_color' ) != '#53c9bb' ? leopet_opt('leopet_header_menu_hover_color') : $themeColor;
		$menuFixedHoverColor      = leopet_opt( 'leopet_header_menu_fixed_hover_color' );
		$dropMenuBgColor          = leopet_opt( 'leopet_header_drop_menu_bg_color' ) != '#ffffff' ? leopet_opt('leopet_header_drop_menu_bg_color') : $themeColor;
		$dropMenuColor            = leopet_opt( 'leopet_dropdown_menu_color' ) != '#53c9bb' ? leopet_opt('leopet_dropdown_menu_color') : $themeColor;
		$dropMenuHovColor         = leopet_opt( 'leopet_dropdown_menu_hover_bg_color' ) != '#ff5b5b' ? leopet_opt('leopet_dropdown_menu_hover_bg_color') : $themeSecColor;

		$footerwbgColor     	  = '';
		$footerwHeadColor   	  = leopet_opt('leopet_footer_widget_heading_color');
		$footerwTextColor   	  = leopet_opt('leopet_footer_widget_text_color');
		$footerwanchorcolor 	  = leopet_opt('leopet_footer_widget_anchor_color') != '#e5e5e5' ? leopet_opt('leopet_footer_widget_anchor_color') : '';
		$footerwanchorhovcolor    = leopet_opt('leopet_footer_widget_anchor_hover_color') != '#53c9bb' ? leopet_opt('leopet_footer_widget_anchor_hover_color') : $themeColor;
		
		$fofbg					  = leopet_opt('leopet_fof_bg_color');
		$foftonecolor			  = leopet_opt('leopet_fof_textone_color');
		$fofttwocolor			  = leopet_opt('leopet_fof_texttwo_color');

		$bannerBtnHeaderSpanColor = $themeColor != '#ff5e13' ? $themeColor : '';
		$footerAncDefColor 		  = leopet_opt('leopet_footer_widget_anchor_color') != '#e5e5e5' ? leopet_opt('leopet_footer_widget_anchor_color') : $themeSecColor;
		$footerAncDefHovColor 	  = $footerwanchorhovcolor != '#bababa' ? $footerwanchorhovcolor : $themeColor;

		$customcss ="			
			.sub_header .sub_header_social_icon .btn_1
			{
				background: {$bookBtnBgColor};
			}
			.sub_header .sub_header_social_icon .btn_1:hover
			{
				background: {$bookBtnHoverBgColor};
			}
			.sub_menu
			{
				background-color: {$headerTopBg};
			}
			.hero-banner, .banner_part .banner_text .btn_1, .abopt_number_counter .btn_1
			{
				background-color: {$themeColor};
			}
			.main_menu
			{
				background-color: {$navbarBgColor};
			}
			
			.sub_menu .sub_menu_right_content span, .sub_menu .sub_menu_social_icon a:hover, .sub_menu .sub_menu_social_icon span i, .top_place .single_place .hover_Text .place_review a, .event_part .event_slider_content h5, .event_part .owl-nav button i, .about_us .about_text h5, .main_menu .social_icon i:hover, .about_part .about_text h4, .about_part h4, .portfolio_part .btn_2, .service_part .single_service_part .single_service_text .learn_btn, .review_part .section_tittle p, .footer_Part .footer_text span, .philosophy_part .philophy_text h5, .banner_part .banner_text h5
			{
				color: {$themeSecColor};
			}
			
			.dropdown .dropdown-menu, .dropdown .dropdown-menu .dropdown-item
			{
				background-color: {$dropMenuBgColor};
			}

			.banner_part .banner_text h1 span
			{
				color: {$bannerBtnHeaderSpanColor} !important;
			}

			.cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .review_part .slick_right:hover, .review_part .slick_left:hover, .blog_part .single-home-blog .time, .blog_part .single-home-blog li span, .single_single_service span.fa, section.cta_area a.cta_btn:hover, .sub_menu .sub_menu_right_content i, .banner-breadcrumb .breadcrumb-item a, .banner_part .banner_text h5 span, .service_part .single_service_part i, .our_industries .single_industries h3 a:hover, .portfolio_part .card-columns .portfolio_btn, .see_more_project .btn_1:hover, .post_2 .post_text_1 h3:hover, .post_2 .category_post_img .category_btn, .footer-area .copyright_part_text a, .subscribe_area .subscribe_iner .btn_2:hover, .sl-button span:hover, .blog_right_sidebar .widget_leopet_recent_widget .post_item .media-body h3:hover, .project_details .project_details_widget .single_project_details_widget span, .blog_right_sidebar .widget_leopet_newsletter .btn_1, .gallery_part .single_gallery_item .single_gallery_item_iner .gallery_item_text p, .banner_part .banner_text h1 span, .catagory_post .single_catagory_post:hover h3, nav.navigation.pagination .next span:hover, .single-post-area .navigation-area h4:hover, .about_part .about_part_text ul li span, .our_service .single_service span, .our_service .btn_3:hover, .experiance_part .about_text_iner .about_text_counter h2, .our_project .project_menu_item ul li:hover, .our_project .project_menu_item .active, .our_project .single_our_project .single_offer .hover_text p, .member_counter .single_member_counter span, .review_part .owl-nav button span:hover, .about_part .about_part_text h5, .our_project .section_tittle p, .our_project .more_btn_iner, .footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover, .sub_menu .sub_menu_right_content a, .sub_menu .sub_menu_social_icon a, .sub_menu .sub_menu_social_icon span, .event_part .event_slider_content h2, .event_part .event_slider_content p span, .hotel_list .single_ihotel_list .hotel_text_iner h3 a, .best_services .single_ihotel_list h3 a, .about_us .about_text h2, .breadcrumb-item, .breadcrumb-item.active, li.breadcrumb-item a, .service_part .single_service_part .single_service_text span, .service_part .single_service_part .single_service_text h2, .blog_right_sidebar .widget_leopet_blog_widget .post_item .media-body h3:hover, .philosophy_part .philophy_text h2, .project_details ul li a, .slider-area .single-slider .slider-content p, .section-title span, .service-area .single-service a:hover, .project-active.owl-carousel:hover .owl-nav div:hover, .project-area .project-active .single-project .project-info span, .underline-hover, .underline-hover:hover, .about-area .about-thumb a.video-icon i, .team-area .single-team .team-thumb .team-hover .team-link ul li a:hover, .main-project-area .single-project .project-info span, li.breadcrumb-item.active a, li.breadcrumb-item a, .details-banner-area .details-banner-text a, .hero-banner p.leopet_project_date, .service-details .details-nav ul li a.active.show, .section_title span, .line-button:hover, .offers_area .single_offers a, .video_area .video_area_inner a, .features_room .rooms_here .single_rooms .room_thumb .room_heading a:hover, .forQuery .Query_border .phone_num a:hover, .voulantier_part .social_icon a:hover
				color: {$themeColor}
			}			
			.portfolio_part .card-columns .portfolio_btn path{
				fill: {$themeColor}
			}
			.blog_area a:hover h3, .blog_area a:hover p, .blog_area a:hover, .blog_area a:hover h2, .blog_details a:hover, .nav-links .page-numbers:not(.current):hover {
				-webkit-text-fill-color: {$themeColor};
				-moz-text-fill-color: {$themeColor};
				-o-text-fill-color: {$themeColor};
				text-fill-color: {$themeColor};
			}
			.blog_item_img .blog_item_date:hover h3, .blog_item_img .blog_item_date:hover p {
				-webkit-text-fill-color: {$themeSecColor};
				-moz-text-fill-color: {$themeSecColor};
				-o-text-fill-color: {$themeSecColor};
				text-fill-color: {$themeSecColor};
			}
			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .post_2 .category_post_img .category_btn:hover, .gallery_part .portfolio-filter .active, .our_service .single_offer_text .btn_1:hover, li.breadcrumb-item a:hover, .form-contact .form-group .btn_1, .voulantier_part .social_icon a:hover {
				color: {$themeColor}!important;
			}

			.review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .single_sidebar_widget .tagcloud a:hover, .pre_icon :after, .next_icon :after, section.cta_area, .service_part .single_service_part .line:after, .about_part .about_text .btn_2:hover, .section_tittle h2:after, .our_industries .single_industries h3:after, .faq_part .faq_content .active .accordion-header h2:before, .portfolio_part .card-columns .blockquote h2:after, .see_more_project .btn_1, .contact-section .btn_2:hover, .banner_part .banner_text .btn_1:hover:before, .banner_part .banner_text .btn_1:hover:after, .about_us .about_us_text .btn_2:hover, .our_service .single_offer_text .btn_1:hover:before, .our_service .single_offer_text .btn_1:hover:after, .main_menu nav .btn_1, .our_service .btn_3:hover:after, .blog_part .single-home-blog .card .card-body a:hover:after, .about_part .about_part_text .btn_1, .our_project .more_btn_iner:hover, .cta_part .btn_1, .booking_part .form-row .btn_1:hover, .top_place .single_place:after, .top_place .btn_1:hover, .event_part .btn_1:hover, .intro_video_bg .video-play-button:before, .intro_video_bg .video-play-button:after, .slider-area .slider-content .boxed-btn2, .about-area .section-title .boxed-btn, .about-area .about-review .project-review, .cta-area .cta-content, .blog_right_sidebar .single_sidebar_widget.widget_leopet_newsletter .btn, .f0f-content .btn_1:hover, .search-page .backtohome .btn_1:hover, .service-details .details-nav ul li a.active.show::before, .line-button:hover::before, .owl-carousel .owl-nav div.owl-next:hover, .owl-carousel .owl-nav div.owl-prev:hover, .offers_area .single_offers a:hover, .forQuery .Query_border .phone_num a, .form-contact .form-group .btn_1:hover, .contact-section .button-contactForm:hover, .sub_header .sub_header_social_icon a i, .about_part .about_text .btn_1, .blog_right_sidebar .single_sidebar_widget .btn_1, .blog_right_sidebar .single_sidebar_widget .btn_1:hover, .contact-section .button-contactForm, .search-page .backtohome .btn_1, .f0f-content .btn_1
			{
				background: {$themeColor}
			}

			.about_part .about_part_text .btn_1:hover, .our_service .single_service:hover, .creative .creative_part_text a i, .cta_part:after, .cta_part .btn_1:hover, .top_place .single_place .hover_Text .place_btn, .top_place .btn_1, .event_part .btn_1, .about_part .about_text .btn_3:hover, .footer_Part .footer_btn .btn_1, .blog_right_sidebar .single_sidebar_widget.widget_leopet_newsletter .btn, .form-contact .form-group .btn_1, .about_part .about_text .btn_1:hover, .abopt_number_counter .btn_1:hover, .client_review .owl-dots .owl-dot.active, .footer_area .subscribe_part_text .subscribe_form .btn_1
			{
				background: {$themeSecColor};
			}

			.banner_part .banner_text .btn_1:hover
			{
				background: {$themeSecColor}!important;
			}

			.portfolio_part .btn_2, .blog_area a h2:hover
			{
				border-color: {$themeSecColor};
			}

			.blog_area a h2:hover
			{
				color: {$themeSecColor} !important;
			}

			.btn_4, .our_Professional .single_industries_text:hover, .pricing_part .single_pricing_part .pricing_content .btn_2:hover, .comment-form .comment-respond .btn_2:hover, .button:not(.wpcf7-submit){
				border-color: {$themeColor};
				background-color: {$themeColor};
			}
			.btn_4:hover, .about-area .section-title .boxed-btn:hover, .f0f-content .btn_1:hover, .search-page .backtohome .btn_1:hover {
				color: {$themeColor}!important;
			}
			.about_us .about_us_text .btn_2:hover, .blog_right_sidebar .widget_search .btn_2, .about-area .section-title .boxed-btn:hover, .form-contact .form-group .btn_1:hover, .f0f-content .btn_1:hover, .search-page .backtohome .btn_1:hover, .contact-section .button-contactForm:hover {
				border-color: {$themeColor}!important;
			}
			.about-area .section-title .boxed-btn:hover, .blog_item_img .blog_item_date:hover {
				background: transparent;
			}

			.service_part .single_service_part:hover .single_service_part_iner span, .footer_Part .footer_btn .btn_1:hover, .button:not(.wpcf7-submit):hover, .blog_item_img .blog_item_date
			{
				background: {$themeColor}!important;
			}

			.btn_2:hover,
			.copyright_part .footer-social a:hover
			{
				background: {$hoverColor}!important;
			}

			.blog_part .single-home-blog .card h5:hover
			{
				color: {$hoverColor};
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a, .contact-section .btn_2:hover, .our_project .more_btn_iner, .food_menu .single_food_item, .review_part .center .client_review_text p, .offers_area .single_offers a, .forQuery .Query_border .phone_num a:hover, .form-contact .form-group .btn_1, .search-page .backtohome .btn_1, .f0f-content .btn_1, .contact-section .button-contactForm
			{
				border-color: {$themeColor}
			}

			.review_part .center .client_review_text p:after
			{
				border-top-color: {$themeColor}
			}
			
			.sub_header{
				background: {$headerTop_bg}
			}
			.sub_header .sub_header_social_icon a,
			.sub_header .sub_header_social_icon .register_icon
			{
				color: {$headerTop_col}
			}

			.main_menu.menu_fixed, .header-area .main-header-area.sticky
			{
				background: {$headerBg};
			}
			.main_menu .main-menu-item ul li .nav-link, .main_menu .main-menu-item ul li.active .nav-link, .main_menu:not(.menu_fixed) ul.navbar-nav > li > a
			{
			   color: {$menuColor} !important;
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):hover, .header-area .main-header-area .main-menu ul li  a.dropdown-item:hover, .main_menu:not(.menu_fixed) ul.navbar-nav > li > a:hover
			{
			   color: {$menuHoverColor} !important;
			}
			.main_menu ul li a:hover:before, .main_menu ul.navbar-nav li a::before {
				background: {$menuHoverColor}	
			}
			.main_menu.menu_fixed .main-menu-item ul li .nav-link:not(.dropdown-item):hover
			{
			   color: {$menuFixedHoverColor} !important;
			}
			
			.main_menu .main-menu-item ul.dropdown-menu li .nav-link, .dropdown .dropdown-menu .dropdown-item, li.menu-item-has-children .sub-menu li a
			{
			   color: {$dropMenuColor}!important;
			}
			.main_menu .main-menu-item ul.dropdown-menu li .nav-link:hover, .dropdown .dropdown-menu .dropdown-item:hover, li.menu-item-has-children .sub-menu li a:hover
			{
			   background: {$dropMenuHovColor};
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):before
			{
				background: {$headerBg};
			}

			.footer-area, .footer_Part, .footer_Part:before, .footer_Part:after, .footer {
				background: {$footerwbgColor};
			}

			.footer-area .single-footer-widget h4, .footer-area .single-footer-widget .office-location ul li strong, .footer .footer_top .footer_widget .footer_title, .footer_area .subscribe_part_text h2, .footer_area .single-footer-widget h4
			{
				color: {$footerwHeadColor}
			}
			.footer-area .single-footer-widget p, .footer-area .widget_leopet_newsletter .input-group input, .footer-area .copyright_part_text p, .footer_Part .copyright_part p, .footer-area .footer_2 .social_icon a, .footer_Part .footer_text h2, .footer-area .single-footer-widget .office-location ul li p, .footer .footer_top .footer_widget p, .footer .footer_top .footer_widget .newsletter_text, .footer .copy-right_text .copy_right, .footer_area .copyright_text p
			{
				color: {$footerwTextColor}
			}
			.footer-area .copyright_part_text {
				border-color: {$footerwTextColor}
			}

			.footer-area .copyright_part_text a, .footer-area .social_icon a, .footer-area .single-footer-widget ul li a, .footer_Part .footer_menu a, .footer_Part .social_icon a, .footer .footer_top .footer_widget ul li a, .footer .footer_top .footer_widget:not(.widget_nav_menu) a
			{
			   color: {$footerwanchorcolor};
			}
			.footer_Part .footer_menu a:hover, .footer_Part .social_icon a:hover, .footer .footer_top .footer_widget ul li a:hover, .footer .footer_top .footer_widget:not(.widget_nav_menu) a:hover, .footer_area .single-footer-widget ul li a:hover
			{
			   color: {$footerwanchorhovcolor};
			}
			.footer-area .copyright_part_text .footer-text > a, .footer_Part .copyright_part p > a, .footer .copy-right_text .copy_right a, .footer_area .copyright_text p a
			{
			   color: {$footerAncDefColor};
			}

			.footer .copy-right_text .copy_right a:hover, .footer_area .single-footer-widget ul li a
			{
			   color: {$footerwanchorcolor};
			}
			.footer-area .btn {
				background: {$footerwanchorcolor};
			}
			.footer-area .single-footer-widget .btn, .footer .footer_top .footer_widget .leopet_mailchimp_newsletter_widget button, .footer .footer_top .footer_widget .leopet_mailchimp_newsletter_widget button
			{
			   background: {$footerAncDefColor};
			}
			.footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover
			{
			   color: {$footerAncDefHovColor}!important;
			}
			.footer-area .copyright_part_text a:hover, .footer-area .footer_2 .social_icon a:hover, .footer-area .single-footer-widget p span
			{
			   color: {$footerAncDefHovColor}!important;
			}

			#f0f {
				background-color: {$fofbg};
			}
			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

			.comment_form .btn_1.button:hover, .search-page .button.button-contactForm:hover, .f0f-content .button.button-contactForm:hover{
				background: #fff;
			}

			.offers_area .single_offers a:hover, .blog_item_img .blog_item_date:hover {
				color: #fff;
			}

			.single_sidebar_widget.widget_search .boxed-btn:hover, .form-contact .form-group .btn_1:hover, .search-page .backtohome .btn_1:hover, .f0f-content .btn_1:hover, .contact-section .button-contactForm:hover {
				color: #ffffff !important;
			}

        ";
       
    wp_add_inline_style( 'leopet-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'leopet_common_custom_css', 50 );