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
                    <?php get_template_part( 'templates/posts', 'posts' ); ?>

                    <!-- Pagination -->
                    <div class="pagination">
                        <div class="older-post">
                            <?php previous_posts_link( 'Regresar' ); ?>
                        </div>
                        <div class="newest-post">
                           <?php next_posts_link( 'Siguiente' ); ?>
                        </div>
                    </div>
                    <!-- /.End Of Pagination -->

                </div>
                <!-- /.End Of Content Section -->

                <!-- Sidebar -->
                <aside class="col-md-3 sidebar hidden-xs">
                   <?php include TEMPLATEPATH . "/templates/aside-categories.php"; ?>
                    <!-- /.End Of Widget -->
                </aside>
                <!-- /.End Of Sidebar -->

            </div>
        </div>
    </section>
    <!-- /.End Of Page Internal Content -->
<?php  get_footer() ?>