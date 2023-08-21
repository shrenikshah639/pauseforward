<?php

/*Customize Tab Structure on Woocommerce My Account Page*/
function pf_mp_endpoint() {
    add_rewrite_endpoint( 'my-programs', EP_ROOT | EP_PAGES );
    add_rewrite_endpoint( 'appointment-list', EP_ROOT | EP_PAGES );
    add_rewrite_endpoint( 'my-payment-methods', EP_ROOT | EP_PAGES );
 }
 function pf_mp_query_vars( $vars ) {
    $vars[] = 'my-programs';
    $vars[] = 'appointment-list';
    $vars[] = 'my-payment-methods';
    return $vars;
 }
 
 function pf_mp_link_my_account( $items ) {
    $items['my-programs'] = 'My Programs';
    $items['appointment-list'] = 'Appointment List';
    $items['my-payment-methods'] = 'My Payment Methods';
    return $items;
 }
 
 function pf_mp_content() {
    echo '<h3>My Programs</h3>';
  }
     
 function pf_al_content(){
    echo '<h3>My Appointment List</h3>';
 }
  
 function pf_mpm_content() {
    echo '<h3>My Payment Method</h3>';
 }

/*Default cart redirect to checkout page */
function pf_redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}

  