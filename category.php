<?php  get_header() ?>

    <!-- Page Title Area
      =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title"><?php single_cat_title(); ?></h2>
                        <!--
                        <span class="sub-title">read latest news from our blog</span>
                        -->
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="<?php echo site_url(); ?>">Inicio</li>
                            <li><?php single_cat_title() ?></li>
                        </ul>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Page Title Area -->

    <!-- Page Internal Content -->
    <section class="page-internal-content">
        <div class="container">
            <div class="row">

                <!-- Content Section -->
                <div class="col-md-9 main-content">
                    <div class="row">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <!-- Single Work -->
                        <div class="col-sm-4">
                            <div class="single-work sin-news">
                                <a class="work-thumb mb-35" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>
                                    <div class="work-hover"></div>
                                </a>
                                <div class="work-excerp">
                                    <a href="single-news-v2.html"><h2><?php the_title(); ?></h2></a>
                                    <span class="news-date"><?php echo get_the_date(); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- /. End Of Single Work -->
                        <?php endwhile; ?>
                        <!-- post navigation -->
                        <?php else: ?>
                        <h3 class="text-center">No existen entradas</h3>
                        <?php endif; ?>

                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <div class="older-post">
                            <?php next_posts_link( 'Atras' ); ?>
                        </div>
                        <div class="newest-post">
                           <?php previous_posts_link( 'Siguiente' ); ?>
                        </div>
                    </div>
                    <!-- /.End Of Pagination -->

                </div>
                <!-- /.End Of Content Section -->

                <!-- Sidebar -->
                <aside class="col-md-3 sidebar hidden-xs">
                    <!-- Widget -->
                    <?php include TEMPLATEPATH . "/templates/aside-categories.php"; ?>
                    <!-- /.End Of Widget -->
                </aside>
                <!-- /.End Of Sidebar -->

            </div>
        </div>
    </section>
    <!-- /.End Of Page Internal Content -->
<?php  get_footer() ?>