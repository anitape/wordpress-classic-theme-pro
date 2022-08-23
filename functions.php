<?php

add_filter('show_admin_bar', '__return_false');

// define('AP_THEME_ROOT', get_template_directory_uri());
// define('AP_CSS_DIR', AP_THEME_ROOT . '/css');
// define('AP_JS_DIR', AP_THEME_ROOT . '/js');
// define('AP_IMG_DIR', AP_THEME_ROOT . '/images');

// add_action( 'wp_enqueue_scripts', function () {	
//     wp_enqueue_style( 'main', AP_CSS_DIR . '/templatemo-style.css');
//     wp_enqueue_style( 'theme', AP_CSS_DIR . '/magnific-popup.css');
//     wp_enqueue_style( 'fonts', AP_CSS_DIR . '/font-awesome.min.css');
//     wp_enqueue_style( 'bootstrap', AP_CSS_DIR . '/bootstrap.min.css');
//     wp_enqueue_style( 'theme', get_stylesheet_uri());
//     wp_enqueue_script( 'jquery', AP_JS_DIR . '/jquery.js');
//     wp_enqueue_script( 'smoothscroll', AP_JS_DIR . '/smoothscroll.js');
//     wp_enqueue_script( 'stellar', AP_JS_DIR . '/jquery.stellar.min.js');
//     wp_enqueue_script( 'magnific-popup', AP_JS_DIR . '/jquery.magnific-popup.min.js');
//     wp_enqueue_script( 'custom', AP_JS_DIR . '/custom.js');
//     wp_enqueue_script( 'bootstrap', AP_JS_DIR . '/bootstrap.min.js');
// 	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/
//     //     example.js', array(), '1.0.0', true );
// });

add_theme_support('post-thumbnails');

function pietergoosen_theme_setup() {
    register_nav_menus( array( 
      'header' => 'Header menu', 
      'footer' => 'Footer menu' 
    ) );
   }
  
add_action( 'after_setup_theme', 'pietergoosen_theme_setup' );

function my_wp_nav_menu_args( $args = '' )
{
    $args['menu_class'] = 'nav navbar-nav navbar-nav-first';
    $args['container'] = false;
    return $args;
} 

// function

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

function create_porfolio_function(){
    $labels = array(
        'name' => _x('Portfolios', 'post type general name', 'your_text_domain'),
        'singular_name' => _x('Portfolio', 'post type Singular name', 'your_text_domain'),
        'add_new' => _x('Add Portfolio', '', 'your_text_domain'),
        'add_new_item' => __('Add New Portfolio', 'your_text_domain'),
        'edit_item' => __('Edit Portfolio', 'your_text_domain'),
        'new_item' => __('New Portfolio', 'your_text_domain'),
        'all_items' => __('All Portfolios', 'your_text_domain'),
        'view_item' => __('View Portfolios', 'your_text_domain'),
        'search_items' => __('Search Portfolio', 'your_text_domain'),
        'not_found' => __('No Portfolio found', 'your_text_domain'),
        'not_found_in_trash' => __('No Portfolio on trash', 'your_text_domain'),
        'parent_item_colon' => '',
        'menu_name' => __('Portfolios', 'your_text_domain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'music'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'thumbnail')
    );
    $labels = array(
        'name' => __('Category'),
        'singular_name' => __('Category'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new Category'),
        'new_item_name' => __('New')
    );
    register_taxonomy('porfiolio_category', array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'singular_label' => 'porfiolio_category',
    'all_items' => 'Category',
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'cat'))
    );
    register_post_type('portfolio', $args);
    flush_rewrite_rules();
  }
  add_action('init', 'create_porfolio_function');
  
  /**
   * Add featured image column to WP admin panel - posts AND pages
   * See: https://bloggerpilot.com/featured-image-admin/
   * https://bloggerpilot.com/en/featured-image-admin-en/
   */
  
  // Set thumbnail size
  add_image_size( 'j0e_admin-featured-image', 60, 60, false );
  
  // Add the posts and pages columns filter. Same function for both.
  add_filter('manage_portfolio_posts_columns', 'j0e_add_thumbnail_column', 2);
  
  function j0e_add_thumbnail_column($j0e_columns){
    $j0e_columns['j0e_thumb'] = __('Image');
    return $j0e_columns;
  }
   
  // Add featured image thumbnail to the WP Admin table.
  add_action('manage_portfolio_posts_custom_column', 'j0e_show_thumbnail_column', 5, 2);
  
  function j0e_show_thumbnail_column($j0e_columns, $j0e_id){
    switch($j0e_columns){
      case 'j0e_thumb':
      if( function_exists('the_post_thumbnail') )
        echo the_post_thumbnail( 'j0e_admin-featured-image' );
      break;
    }
  }
  
  // Move the new column at the first place.
  add_filter('manage_portfolio_posts_columns', 'j0e_column_order');
  function j0e_column_order($columns) {
    $n_columns = array();
    $move = 'j0e_thumb'; // which column to move
    $before = 'title'; // move before this column
  
    foreach($columns as $key => $value) {
      if ($key==$before){
        $n_columns[$move] = $move;
      }
      $n_columns[$key] = $value;
    }
    return $n_columns;
  }
  
  // Format the column width with CSS
  add_action('admin_head', 'j0e_add_admin_styles');
  function j0e_add_admin_styles() {
    echo '<style>.column-j0e_thumb {width: 60px;}</style>';
  }