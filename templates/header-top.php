<!--::header part start::-->
<header class="header_area">
    <div class="sub_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4 col-md-4 col-xl-6">
                    <div id="logo">
                        <?php
                            echo leopet_theme_logo( 'navbar-brand' );
                        ?>
                    </div>
                </div>
                <div class="col-8 col-md-8 col-xl-6 ">
                    <div class="sub_header_social_icon float-right">
                        <?php 
                        if ( !empty( leopet_opt('leopet_phone_number') )) { 
                            $phn_number  = leopet_opt('leopet_phone_number');
                            ?>
                            <a href="#"><i class="flaticon-phone"></i><?php echo esc_html( $phn_number )?></a>
                            <?php
                        }
                        if ( !empty( leopet_opt('leopet_book_btn_label') )) { 
                            $btn_label  = leopet_opt('leopet_book_btn_label');
                            $btn_url   = leopet_opt('leopet_book_btn_url');
                            ?>
                            <a href="<?php echo esc_url( $btn_url )?>" class="btn_1 d-none d-md-inline-block"><?php echo esc_html( $btn_label )?></a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ti-menu"></i>
                        </button>

                        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                            <?php
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'menu'           => 'primary-menu',
                                        'theme_location' => 'primary-menu',
                                        'menu_id'        => false,
                                        'container'      => false,
                                        'menu_class'     => 'navbar-nav',
                                        'depth'          => 3
                                    ));
                                }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->