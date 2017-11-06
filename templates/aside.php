<!-- Widget -->
<div class="widget widget_search">
    <form action="search.php" method="post">
        <div class="search-form-input">
            <input type="text" placeholder="Type to search here">
            <div class="input-submit">
                <input type="submit" value="Go">
            </div>
        </div>
    </form>
</div>
<!-- /.End Of Widget -->
<!-- Widget -->
<div class="widget">
        <?php
       /**
        * Displays a navigation menu
        * @param array $args Arguments
        */
        $data = array(
            'theme_location' => 'menu-aside-pages',
            'menu' => '',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'widget_links',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        );

        wp_nav_menu( $data );
?>

</div>