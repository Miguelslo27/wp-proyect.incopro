<?php

add_action( 'after_setup_theme', 'woocommerce_support' );

if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

?>