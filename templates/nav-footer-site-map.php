
<?php
       /**
        * Displays a navigation menu
        * @param array $args Arguments
        */
        $data = array(
            'theme_location' => 'menu-footer-site-map',
            'menu' => '',
            'container' => '',
            'container_class' => '',
            'container_id' => '',
            'menu_class' => 'site_map_links',
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