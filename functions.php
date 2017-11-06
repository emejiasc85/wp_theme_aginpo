<?php

    /**
     * Enqueue css styles and js libraries
     *
     * @param string $handle Script name
     * @param string $src Script url
     * @param array $deps (optional) Array of script names on which this script depends
     * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
     * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
     */
    function resources() {
        wp_enqueue_style( 'style', get_stylesheet_uri());
        wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js',  array( 'jquery' ), false, true);
        //mobile menu js
        wp_enqueue_script( 'meanmenu', get_template_directory_uri().'/js/jquery.meanmenu.js',  array( 'jquery' ), false, true);
        //Sticky menu js
        wp_enqueue_script( 'sticky', get_template_directory_uri().'/js/jquery.sticky.js',  array( 'jquery' ), false, true);
        //WayPoints JS
        wp_enqueue_script( 'waypoints', get_template_directory_uri().'/js/waypoints.min.js',  array( 'jquery' ), false, true);
        //Bootstrap js
        wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js',  array( 'jquery' ), false, true);
        //owl carousel js
        wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.carousel.min.js',  array( 'jquery' ), false, true);
        //pretty Photo js
        wp_enqueue_script( 'pretty', get_template_directory_uri().'/js/jquery.prettyPhoto.js',  array( 'jquery' ), false, true);
        //Slick js
        wp_enqueue_script( 'slick', get_template_directory_uri().'/js/slick.min.js',  array( 'jquery' ), false, true);
        //Main js
        wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js',  array( 'jquery' ), false, true);
    }

    add_action( 'wp_enqueue_scripts', 'resources' );

    //funciones que nos activa las imagenes destacadas
    add_theme_support('post-thumbnails');
    //funcion que nos añade un tamaño extra de imagen
    add_image_size( 'mi-size', 220, 180, true);
    add_image_size( '370-195', 370, 195, true);
    add_image_size( '1004-403', 1004, 403, true);

    //esta es la funcion que llama al menù
    function register_my_menu()
    {
        register_nav_menus([
            'menu-header'           =>  __('Menú del encabezado'),
            'menu-header-black'     =>  __('Menú del encabezado negro'),
            'menu-footer'           =>  __('Menú del pie de página'),
            'menu-footer-site-map'  =>  __('Menú del mapa del sitio'),
            'menu-aside-pages'      =>  __('Menú lateral de páginas'),
            'menu-aside-categories' =>  __('Menú lateral de categorias'),
        ]);
    }
    add_action('init', 'register_my_menu' );
    //estas funciones generan widgest

    function slogan_sidebar()
    {
        register_sidebar([
            'id'            => 'slogan',
            'name'          => 'Sidebar de eslogan',
            'description'   => 'Sidebar donde colocar el eslogan',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<strong>',
            'after_title'   => '</strong>',
        ]);
    }
    add_action('widgets_init', 'slogan_sidebar' );

    function copy_sidebar()
    {
        register_sidebar([
            'id'            => 'copy_footer',
            'name'          => 'Sidebar de copy',
            'description'   => 'Sidebar donde colocar copi de pie de página',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<strong>',
            'after_title'   => '</strong>',
        ]);
    }
    add_action('widgets_init', 'copy_sidebar' );

    function black_menu_sidebar()
    {
         register_sidebar([
            'id'            => 'black_menu',
            'name'          => 'Menu negro',
            'description'   => 'Link donde colocar el menu principal',
            'before_widget' => '',
            'after_widget'  => '',
        ]);
    }
    add_action('widgets_init', 'black_menu_sidebar' );

    function widget_sidebar()
    {
         register_sidebar([
            'id'            => 'sidebar',
            'name'          => 'Barra lateral',
            'description'   => 'links barra lateral',
            'before_widget' => '',
            'after_widget'  => '',
        ]);
    }
    add_action('widgets_init', 'widget_sidebar' );

    function contact_sidebar()
    {
        register_sidebar([
            'id'            => 'contact_footer',
            'name'          => 'Sidebar de copy de contacto',
            'description'   => 'Sidebar donde colocar copi de contacto pie de página',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<strong>',
            'after_title'   => '</strong>',
        ]);
    }
    add_action('widgets_init', 'contact_sidebar' );

    function landing_image()
    {
        register_sidebar([
            'id'            => 'landing_image',
            'name'          => 'imagen descriptiva landing',
            'description'   => 'imagen descriptiva tiempo de trabajar',
            'before_widget' => '<figure class="about-thumb">',
            'after_widget'  => '</figure>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ]);
    }
    add_action('widgets_init', 'landing_image' );

    //set logo
    add_theme_support( 'custom-logo' );

    function themename_custom_logo_setup() {
        $defaults = array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display', 19 );
    remove_filter( 'the_excerpt', 'sharing_display', 19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}

add_action( 'loop_start', 'jptweak_remove_share' );

