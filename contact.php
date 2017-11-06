<?php /* template Name: contact*/ ?>
<?php get_header(); ?>
<!-- /.End Of Header -->


<!-- PAGE TITLE Area
      =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title">Contáctanos</h2>
                        <span class="sub-title">Póngase en contacto con nosotros en cualquier momento</span>
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

    <div class="upper-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Podemos brindarte la información y el asesoramiento que necesites.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Area
      =========================== -->
    <section class="contact-area fix">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
    <!-- /.End Of Contact Area -->

<!-- Footer Area -->
<?php get_footer(); ?>
<!-- /. End Footer -->