<section class="works-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Servicios</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $args = array(
                'sort_order' => 'asc',
                'sort_column' => 'ID',
                'hierarchical' => 1,
                'exclude' => '',
                'include' => '',
                'meta_key' => '',
                'meta_value' => '',
                'authors' => '',
                'child_of' => 74,
                'parent' => -1,
                'exclude_tree' => '',
                'number' => '',
                'offset' => 0,
                'post_type' => 'page',
                'post_status' => 'publish'
            );
            $pages = get_pages($args);

            //$pages = get_pages();
           foreach ($pages as $page) { ?>
            <div class="col-md-4 col-sm-6">
                <div class="single-work">
                    <a class="work-thumb mb-35" href="<?php echo get_page_link( $page->ID ) ?>">
                        <?php echo get_the_post_thumbnail( $post = $page->ID, $size = 'post-thumbnail', $attr = '' ) ?>
                        <div class="work-hover"></div>
                    </a>
                    <div class="work-excerp">
                        <a href="<?php echo get_page_link( $page->ID ) ?>"><h2><?php echo $page->post_title ?></h2></a>
                        <p><?php echo $page->description ?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>