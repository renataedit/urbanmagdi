<?php

// Set paths

define('DS', DIRECTORY_SEPARATOR);
define('THEME_PATH', get_template_directory() . DS);
define('THEME_URI', get_template_directory_uri() . '/');
define('THEME_IMG', THEME_URI . 'images' . DS);
define('THEME_CSS', THEME_URI . 'public/css/');
define('THEME_JS', THEME_URI . 'public/js/');

add_action('init', function () {
    if (!function_exists('register_sidebars')) {
        return;
    }
    register_sidebar(array('name' => 'Sidebar 1', 'id' => 'sidebar-1', 'before_widget' => '<div id="%1$s" class="block widget %2$s sidebar_block sidebar2_widget">', 'after_widget' => '</div>', 'before_title' => '<h2 class="sidebar_title">', 'after_title' => '</h2>'));
});

//Load scripts and styles to front end
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('all-css', THEME_CSS . 'all.min.css');
    wp_enqueue_script('all-js', THEME_JS . 'all.min.js', array(), '1.0.0', true);
});

add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');


/* Register WP Menus */
register_nav_menus(array(
    'primary' => __('Main Menu', 'corozon'),
));

/* Load textdomain for translation */
//add_action('after_setup_theme', function(){
//    load_theme_textdomain('corozon', get_template_directory() . '/languages');
//});

function jajdeszep($array, $echo = true)
{
    $out = '<pre>';
    $out .= print_r($array, true);
    $out .= '</pre>';

    if ($echo) {
        echo $out;
    } else {
        return $out;
    }
}

/* Custom excerpt length */
function b_excerpt($text,$numb) {
    if (strlen($text) > $numb) {
        $text = substr($text, 0, $numb);
        $text = substr($text,0,strrpos($text," "));
        $etc = " ...";
        $text = $text.$etc;
    }
    return $text;
}


/**
 * Register our custom post type for Parallax Photos
 */
add_action( 'init', 'register_parallaxphotos' );
function register_parallaxphotos() {

    $args = array(
        'labels'             => array(
            'name'               => _x( 'Parallax képek', 'post type general name', 'photochill' ),
            'singular_name'      => _x( 'Kép', 'post type singular name', 'photochill' ),
            'menu_name'          => _x( 'Parallax képek', 'admin menu', 'photochill' ),
            'name_admin_bar'     => _x( 'Parallax képek', 'add new on admin bar', 'photochill' ),
            'add_new'            => _x( 'Új', 'About', 'photochill' ),
            'add_new_item'       => __( 'Új', 'photochill' ),
            'new_item'           => __( 'Új kép', 'photochill' ),
            'edit_item'          => __( 'Kép szerkesztése', 'photochill' ),
            'view_item'          => __( 'Kép megtekintése', 'photochill' ),
            'all_items'          => __( 'Összes elem', 'photochill' ),
            'search_items'       => __( 'Keresés', 'photochill' ),
            'parent_item_colon'  => __( 'Szülő:', 'photochill' ),
            'not_found'          => __( 'Nem található.', 'photochill' ),
            'not_found_in_trash' => __( 'Nem található a kukában.', 'photochill' )
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'parallaxphotos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'parallaxphotos', $args );
}