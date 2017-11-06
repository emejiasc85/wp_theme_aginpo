<?php get_header(); ?>
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banners/bg_01.jpg" alt="">
                <div class="slider-text overlay">
                    <div class="tb">
                        <div class="tbc">
                            <div class="container text-left rs-padding ">
                                <div class="col-md-12">
                                    <h1>Multiservicios <span>AGINPO </span></h1>
                                    <p>"Es mejor bien hecho, que bien dicho"
                                    <br>Benjamin franklin</p>
                                    <p><a href="<?php echo get_page_link(76) ?>" class="btn btn-danger btn-lg">Contáctanos</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->

        <!-- Item -->
        <div class="item">
            <div class="img-fill">
                <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banners/bg_02.jpg" alt="">
                <div class="slider-text overlay">
                    <div class="tb">
                        <div class="tbc">
                            <div class="container text-left rs-padding ">
                                <div class="col-md-offset-5 col-md-7">
                                    <h1>Multiservicios <span>AGINPO </span></h1>
                                    <p>"Es mejor bien hecho, que bien dicho"
                                    <br>Benjamin franklin</p>
                                    <p><a href="<?php echo get_page_link(76) ?>" class="btn btn-danger btn-lg">Contáctanos</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Item -->

    </div>
    <!-- About Us Area
        =========================== -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="col-md-4">
                <div class="about-left">
                    <?php  dynamic_sidebar('landing_image'); ?>
                </div>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="about-quote">
                    <blockquote>
                        <?php bloginfo('description'); ?>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of About Us Area -->

    <!-- What We Area
        =========================== -->
    <?php get_template_part( 'templates/services', 'services' ); ?>
    <!-- /.End Of What We Do Area -->


    <!-- CTA Area
        =========================== -->
        <?php get_template_part( 'templates/cta_area', 'cta_area' ); ?>

    <!-- End Of CTA Area -->

    <!-- Testimonial Area
        =========================== -->
        <?php get_template_part( 'templates/our_clients', 'our_clients' ); ?>

    <!-- /.End Of Testimonial Area -->

    <!-- LatestNews Area
        =========================== -->
    <section class="latestNews-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center mb-70">
                    <h2>Ultimos Proyectos</h2>
                </div>
            </div>
            <div class="row">
                <!-- Single News -->
                <?php rewind_posts(); ?>
                <?php
                    query_posts([
                        'cat'       => 4,
                        'order'     =>'DESC',
                        'showposts' => 3
                    ]);
                ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-sm-4">
                    <div class="sin-news">
                        <a class="news-thumb mb-35" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('370-195'); ?>
                            <div class="news-hove r"></div>
                        </a>
                        <div class="news-excerpt">
                            <a href="<?php the_permalink();  ?>"><h2><?php the_title(); ?></h2></a>
                            <span class="news-date"><?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- post navigation -->
                <?php else: ?>
                <!-- no posts found -->
                <h3 class="text-center">No se encontraron entradas</h3>
                <?php endif; ?>
                <!-- /.End Of Single News -->
            </div>
        </div>
    </section>
    <!-- /.End Of LatestNews Area -->

    <!-- Footer Area
    =========================== -->
    <?php get_footer(); ?>

