<div class="row">
    <!-- Single News -->
    <?php rewind_posts(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-sm-6">
        <div class="sin-news mb-35">
            <a class="news-thumb mb-10" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('370-195'); ?>
                <div class="news-hove r"></div>
            </a>
            <div class="news-excerpt">
                <span class="news-date"><?php echo get_the_date(); ?></span>
                <a href="<?php the_permalink();  ?>"><h2 style="height: 40px !important; "><?php the_title(); ?></h2></a>
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