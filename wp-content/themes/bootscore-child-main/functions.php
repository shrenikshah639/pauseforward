<?php

require_once('include/custom-functions.php');

// Enable WooCommerce customize file if plugin is installed & activate
if (class_exists('WooCommerce')) { 
	require_once('include/wc-customize-functions.php');
}

/*!--------------- Enqueue General style and scripts ------------->*/
add_action('wp_enqueue_scripts', 'pf_child_enqueue_styles');

/*!--------------- Enqueue Responsive Style ------------->*/
add_action('wp_enqueue_scripts', 'pf_child_responsive_styles',99);

/*!--------------- Custom Post Type Registration ------------->*/
add_action( 'init', 'pf_doctor_custom_post_type' );

/*!--------------- Enabled Theme Setting Options-------------->*/
add_action( 'acf/init', 'pf_acf_option_init' );

/*!--------------- Customize Tab Structure on Woocommerce My Account Page -------------->*/
add_action( 'init', 'pf_mp_endpoint' );
add_filter( 'query_vars', 'pf_mp_query_vars', 0 );
add_filter( 'woocommerce_account_menu_items', 'pf_mp_link_my_account' );
add_action( 'woocommerce_account_my-programs_endpoint', 'pf_mp_content' );
add_action( 'woocommerce_account_appointment-list_endpoint', 'pf_al_content' );
add_action( 'woocommerce_account_my-payment-methods_endpoint', 'pf_mpm_content' );

add_filter ('woocommerce_add_to_cart_redirect', 'pf_redirect_to_checkout');

/*!---------------Disabled Gutenberg Editor-------------->*/
add_filter('use_block_editor_for_post', '__return_false');

