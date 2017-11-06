<footer id="footer-area">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget_text">
                            <div class="footer-logo">
                                <?php
                                    if ( function_exists( 'the_custom_logo' ) ) {
                                        the_custom_logo();
                                    }
                                 ?>
                            </div>
                            <?php  dynamic_sidebar('copy_footer'); ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget_links fix">
                            <h3 class="widget-title">Links Importantes</h3>

                            <?php include TEMPLATEPATH . "/templates/nav-footer-site-map.php"; ?>
                            <?php include TEMPLATEPATH . "/templates/nav-footer.php"; ?>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <h3 class="widget-title">Contáctanos</h3>
                            <?php  dynamic_sidebar('contact_footer'); ?>
                            <a href="<?php echo get_page_link(76) ?>" class="button contact-btn">Contáctar</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <h3 class="widget-title">Buscar</h3>
                            <div class="widget">
                                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <div class="footer-newsletter">
                                        <div class="input-email">
                                            <input type="text" placeholder="" name="s" id="search">
                                        </div>
                                        <input type="submit" value="Buscar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--
                    -->
                </div>
            </div>
        </div>
        <div class="footer-bottom fix">
            <div class="container bb-top foo-padding">
                <div class="row">
                    <div class="col-sm-6 copyright">
                        <span>&copy; 2017 Copyright, AGINPO. desarrollado por <a href="http://emejias.com" style="color:white" target="_blank">emejias</a></span>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="social-links">
                            <ul>
                                <li><a href="">Facebook</a></li>
                                <li><a href="">twitter</a></li>
                                <li><a href="">google+</a></li>
                                <li><a href="">Pinterest</a></li>
                                <li><a href="">linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.End Of Footer Area -->


    <!-- JQUERY LIBRARY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


    <?php wp_footer(); ?>

    </body >

</html>