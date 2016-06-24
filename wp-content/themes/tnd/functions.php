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
            'primary' => esc_html__( 'Primary', 'tnd' )
        ) );
    }
    add_action ( 'init', 'tnd_Setup' );

endif;

function tnd_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'tnd' ),
        'id'            => 'sidebarMain',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'tnd_widgets_init' );

function tnd_scripts() {
    // add wordpress jquery
    wp_enqueue_script('jquery');

    $path = get_template_directory_uri();

    // custom js
    $scripts = array();
    foreach ($scripts as $key => $url){
        wp_enqueue_script( 'lse-script-'.$key, $path .  $url, array());
    }

    $styles = array();
    foreach ($styles as $key => $url){
        wp_enqueue_style( 'bs-style-'.$key, $path .  $url, array());
    }

    wp_enqueue_style( 'bs-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'tnd_scripts' );


?>


