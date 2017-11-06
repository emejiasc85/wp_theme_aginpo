<?php /* template Name: about*/ ?>
<?php  get_header() ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- PAGE TITLE Area
      =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title"><?php the_title(); ?></h2>
                        <span class="sub-title">Aprenda más acerca de nosotros</span>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Inicio</a></li>
                        </ul>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <!-- Galley Post Area
        =========================== -->
    <div class="about-gallery-posts">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-gallery">
                        <div class="gallery-wrap">

                            <!-- Single Gallery -->
                            <div class="sin-gallery">
                                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banners/bg_12.jpg" alt="">
                            </div>
                            <!-- /.End Of Single Gallery -->

                            <!-- Single Gallery -->
                            <div class="sin-gallery">
                                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banners/bg_13.jpg" alt="">
                            </div>
                            <!-- /.End Of Single Gallery -->

                            <!-- Single Gallery -->
                            <div class="sin-gallery">
                                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banners/bg_14.jpg" alt="">
                            </div>
                            <!-- /.End Of Single Gallery -->

                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-content">
                        <p>AGINPO es una sociedad anónima guatemalteca dedicada a la prestación de diversos servicios, la cual funciona a través de sus empresas mercantiles que la integran. Con el propósito de asegurar el manejo responsable de todas sus actividades y lograr la plena satisfacción de sus clientes, crea esta política integrada en salud y seguridad ocupacional, medio ambiente y calidad.</p>
                        <p>Somos una empresa denominada MULTISERVICIOS AGINPO la cual se dedicada a la prestación de diversos servicios con el propósito de asegurar el manejo responsable de todas nuestras  actividades y lograr la plena satisfacción de nuestros clientes, a través de relaciones de confianza,  personal calificado,   garantía en nuestros servicios.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End Of Galley Post Area -->

    <!-- What WeDo Area
        =========================== -->
    <div class="whatDo-area section-padding">
        <div class="container">
             <div class="row">

                <!-- Single Work -->
                <div class="col-sm-4">
                    <div class="sin-whatWork">
                        <h2>Nuestra Visión</h2>
                        <p>Ser la empresa  prestadora de servicios directos y tercerizados  líder en el mercado nacional e internacional que ofrezca a sus clientes   soluciones viables en cada  negocio, asesorándolos con  profesionales idóneos para el desempeño de cada labor; controlando cada servicio con altos estándares de calidad, protegiendo el ambiente, respetando de la integridad laboral y contribuyendo constantemente con el desarrollo social, empresarial y personal de todos los que la rodean.</p>
                    </div>
                </div>
                <!-- /.End Of Single Work -->

                <!-- Single Work -->
                <div class="col-sm-4">
                    <div class="sin-whatWork">
                        <h2>Nuestra Misión</h2>
                        <p>Contribuir en el desarrollo social,  personal y empresarial de todas las entidades y personas que rodean a AGINPO proveyéndoles servicios de calidad para el logro de sus objetivos y metas, materializando cada servicio con honradez, prontitud, eficiencia, compromiso, tecnología e innovación  para lograr la plena satisfacción de nuestros clientes. </p>
                    </div>
                </div>
                <!-- /.End Of Single Work -->
                 <!-- Single Work -->
                <div class="col-sm-4">
                    <div class="sin-whatWork">
                        <h2>Nuestros Valores</h2>
                        <ul>
                            <li><i class="fa fa-check"></i> Cooperación</li>
                            <li><i class="fa fa-check"></i> Respeto</li>
                            <li><i class="fa fa-check"></i> Innovación</li>
                            <li><i class="fa fa-check"></i> Seguridad</li>
                            <li><i class="fa fa-check"></i> Amabilidad</li>
                            <li><i class="fa fa-check"></i> Confianza</li>
                            <li><i class="fa fa-check"></i> Atención</li>
                            <li><i class="fa fa-check"></i> Motivación</li>
                            <li><i class="fa fa-check"></i> Compromiso </li>
                            <li><i class="fa fa-check"></i> Competitividad </li>
                            <li><i class="fa fa-check"></i> Ética profesional</li>
                            <li><i class="fa fa-check"></i> Disponibilidad al cambio </li>
                        </ul>
                    </div>
                </div>
                <!-- /.End Of Single Work -->

            </div>
        </div>
    </div>
    <!-- /.What WeDo Area -->
    <div class="container">
        <?php get_template_part( 'templates/what_we_do', 'what_we_do' ); ?>
    </div>

    <!-- CTA Area
        =========================== -->
    <?php get_template_part( 'templates/cta_area', 'cta_area' ); ?>
    <!-- End Of CTA Area -->

    <!-- Testimonial Area
        =========================== -->
    <?php get_template_part( 'templates/our_clients', 'our_clients' ); ?>

    <!-- /.End Of Testimonial Area -->

    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- no posts found -->
    <?php endif; ?>

    <!-- Footer Area -->
    <?php get_footer(); ?>
    <!-- /. End Footer -->

