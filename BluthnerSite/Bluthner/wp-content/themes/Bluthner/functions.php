<?php
    function adds_styles_scripts_to_head() {
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js?&nocache=1', '', null, 'true');
    wp_register_style( 'style', get_template_directory_uri() . '/style.css?&nocache=1','','', 'all' );
    wp_enqueue_script( 'main' );
    wp_enqueue_style( 'style' );
    }
    add_action( 'wp_enqueue_scripts', 'adds_styles_scripts_to_head' );
?>
<?php
    function register_my_menus() {
      register_nav_menus(
        array(
          'site-menu' => __( 'Site Menu' )
        )
      );
    }
    add_action( 'init', 'register_my_menus' );
?>
<?php
    add_action('get_header', 'remove_admin_login_header');
        function remove_admin_login_header() {
            remove_action('wp_head', '_admin_bar_bump_cb');
    }
?>
