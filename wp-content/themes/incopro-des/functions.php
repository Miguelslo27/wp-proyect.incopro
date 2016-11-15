<?php

add_action('after_setup_theme', 'woocommerce_support' );
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar(false);
}

function woocommerce_support() {
    add_theme_support('woocommerce');
}

?>