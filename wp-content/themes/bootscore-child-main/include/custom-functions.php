<?php

/*Enqueue Style & Script */
function pf_child_enqueue_styles() {

    // style.css
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  
    // Compiled main.css
    $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);
 
    // custom.js
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

/*Responsive Style */
function pf_child_responsive_styles() {

    //Responsive CSS
    wp_enqueue_style( 'pf-responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css', array(), time() );

}

/*Custom Post-type Registration */
function pf_doctor_custom_post_type() 
{
	$labels = array(
		'name'                => __( 'Doctors' ),
		'singular_name'       => __( 'Doctor'),
		'menu_name'           => __( 'Doctors'),
		'parent_item_colon'   => __( 'Parent Doctor'),
		'all_items'           => __( 'All Doctors'),
		'view_item'           => __( 'View Doctor'),
		'add_new_item'        => __( 'Add New Doctor'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Doctor'),
		'update_item'         => __( 'Update Doctor'),
		'search_items'        => __( 'Search Doctor'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Doctors'),
		'description'         => __( 'Best Doctors'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'menu_icon'           => 'dashicons-businessman',
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);
   $labels_wn = array(
		'name'                => __( 'Webinars' ),
		'singular_name'       => __( 'Webinar'),
		'menu_name'           => __( 'Webinars'),
		'parent_item_colon'   => __( 'Parent Webinar'),
		'all_items'           => __( 'All Webinars'),
		'view_item'           => __( 'View Webinar'),
		'add_new_item'        => __( 'Add New Webinar'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Webinar'),
		'update_item'         => __( 'Update Webinar'),
		'search_items'        => __( 'Search Webinar'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args_wn = array(
		'label'               => __( 'Webinars'),
		'description'         => __( 'Best Webinars'),
		'labels'              => $labels_wn,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'menu_icon'           => 'dashicons-media-video',
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);
	$labels_prg = array(
		'name'                => __( 'Programs' ),
		'singular_name'       => __( 'Program'),
		'menu_name'           => __( 'Programs'),
		'parent_item_colon'   => __( 'Parent Program'),
		'all_items'           => __( 'All Programs'),
		'view_item'           => __( 'View Program'),
		'add_new_item'        => __( 'Add New Program'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Program'),
		'update_item'         => __( 'Update Program'),
		'search_items'        => __( 'Search Program'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args_prg = array(
		'label'               => __( 'Programs'),
		'description'         => __( 'Best Programs'),
		'labels'              => $labels_prg,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'menu_icon'           => 'dashicons-products',
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
		'yarpp_support'       => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
	);
   register_post_type( 'doctors', $args );
   register_post_type( 'webinars', $args_wn );
   register_post_type( 'mp-experiences', $args_me );
   register_post_type( 'programs', $args_prg );
}

/* Theme Setting option */
function pf_acf_option_init() {

    // Check function exists.

    if( function_exists('acf_add_options_page') ) {

        // Register options page.

        $option_page = acf_add_options_page(array(

            'page_title'    => __('Theme General Settings'),

            'menu_title'    => __('Theme Settings'),

            'menu_slug'     => 'theme-general-settings',

            'capability'    => 'edit_posts',

            'redirect'      => false

        ));

    }

}