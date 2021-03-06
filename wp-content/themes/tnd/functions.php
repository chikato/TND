<?php
    define( 'THEME_URL', get_stylesheet_directory() );
    define( 'CORE', THEME_URL . '/core' );

    require_once( CORE . '/init.php' );

if ( ! function_exists( 'tnd_setup' ) ) :

    function tnd_setup() {
        load_theme_textdomain( 'tnd', THEME_URL . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( 'post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            )
        );
        add_theme_support( 'custom-background', apply_filters( 'lse_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'tnd' ),
            'home' => esc_html__( 'Home', 'tnd' )
        ) );
    }
    add_action ( 'init', 'tnd_setup' );

    add_editor_style( array( 'css/editor-style.css' ) );

endif;

function tnd_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Content SideBar', 'tnd' ),
        'id'            => 'main-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget instagram %2$s">',
        'after_widget'  => '</div>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Contact SideBar', 'tnd' ),
        'id'            => 'contact-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget contact-btn %2$s">',
        'after_widget'  => '</div>'
    ) );
}
add_action( 'widgets_init', 'tnd_widgets_init' );

function tnd_scripts() {
    // add wordpress jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');

    $path = get_template_directory_uri();

    // custom js
    $scripts = array(
        '/js/lib/scrolloverflow.min.js',
        '/js/lib/jquery.fullPage.min.js',
        '/js/app.js'
    );
    foreach ($scripts as $key => $url){
        wp_enqueue_script( 'lse-script-'.$key, $path .  $url, array());
    }

    $styles = array(
        '/css/jquery.fullPage.css'
    );
    foreach ($styles as $key => $url){
        wp_enqueue_style( 'tnd-style-'.$key, $path .  $url, array());
    }

    wp_enqueue_style( 'tnd-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'tnd_scripts' );