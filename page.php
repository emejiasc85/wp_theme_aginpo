<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Page Title Area
    =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title">
                            <?php  the_title(); ?>
                        </h2>
                        <span class="sub-title"><?php echo $post->sub_titulo ?></span>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="<?php home_url(); ?>">Inicio</a></li>
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
                <?php get_sidebar(); ?>
                <!-- /.End Of Sidebar -->

                <!-- Content Section -->
                <div class="col-md-9 main-content">
                    <?php the_content(); ?>
                    <?php get_template_part( 'templates/what_we_do', 'what_we_do' ); ?>

                    <div class="row">
                        <?php get_template_part( 'templates/asked_question', 'asked_question' ); ?>

                        <div class="col-md-6">
                            <div class="faq-thumb">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    </div>
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
<?php get_footer(); ?>