<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- META KEYS -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE -->
    <title><?php bloginfo('description') ?></title>
    <?php wp_head(); ?>
</head>

<body class="allred secondary-two">
    <!--
    <div id="preloader"></div>
    -->
    <header class="header-area">
        <div class="head-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <?php
                                if ( function_exists( 'the_custom_logo' ) ) {
                                    the_custom_logo();
                                }
                             ?>
                        </div>
                        <!-- /.End Of Logo -->
                    </div>
                    <div class="col-sm-9 hidden-xs">
                        <div class="head-top-right fix">

                            <div class="sin-info fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-social-google-map"></i>
                                </div>
                                <div class="info-content">
                                    <span>
                                        Calle límite <br>
                                        0 Av. 11-30<br>
                                        San benito, Péten.
                                    </span>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                            <div class="sin-info fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-clock-time"></i>
                                </div>
                                <div class="info-content">
                                    <span>8am - 5pm <br> Lun - Sab</span>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                            <div class="sin-info border-none fix">
                                <div class="info-icon">
                                    <i class="icofont icofont-contacts"></i>
                                </div>
                                <div class="info-content">
                                    <a href="mailto:info@aginpo.com">info@aginpo.com</a>
                                    <a href="tel:+50279248627">+502-7924-8627</a>
                                </div>
                            </div>
                            <!-- /.End Of Seven -->

                            <div class="sin-info border-none fix">
                                <div class="search-form fix">
                                    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <input type="text" name="s" placeholder="escriba para buscar" id="search">
                                        <div class="input-submit">
                                            <input type="submit" value="Go">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- /.End Of Seven -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Top Head -->
        <div class="head-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="mainmenu-area">
                        <?php include TEMPLATEPATH ."/templates/nav.php"; ?>
                        <a href="<?php echo get_category_link(4) ?>" class="button button-hover quote-btn">Proyectos</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Bottom Head -->
    </header>
    <!-- /.End Of Header -->