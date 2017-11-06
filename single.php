<!-- Header area -->
<?php get_header(); ?>
<!-- /.End Of Header -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Page Title Area
      =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title"><?php the_title(); ?></h2>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="<?php home_url(); ?>">Inicio</a></li>
                            <li><?php the_category(); ?></li>
                        </ul>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Page Title Area -->

    <!-- Page Internal Content -->
    <div class="page-internal-content">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <aside class="col-md-3 sidebar">
                    <!-- Widget -->
                        <?php include TEMPLATEPATH . "/templates/aside-categories.php"; ?>
                    <!-- /.End Of Widget -->
                </aside>
                <!-- /.End Of Sidebar -->

                <!-- Content Section -->
                <div class="col-md-9 main-content">

                    <!-- Single News Post -->
                    <div class="sin-news-content">
                        <div class="sin-news-thumb">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <div class="news-content">
                            <div class="news-bio">
                                <h2><?php the_title(); ?></h2>
                                <span class="news-meta"><?php the_date(); ?></span>
                            </div>

                            <?php the_content(); ?>
                        </div>

                    </div>
                    <!-- /.End Of Single News Post -->
                    <?php
                        if ( function_exists( 'sharing_display' ) ) {
                            sharing_display( '', true );
                        }
                    ?>
                    <!-- Comment Section -->
                    <?php comments_template( $file, $separate_comments ); ?>

                </div>
                <!-- /.End Of Content Section -->

            </div>
        </div>
    </div>
    <!-- /.End Of Page Internal Content -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<!-- Footer Area -->
<?php get_footer(); ?>
<!-- /. End Footer -->