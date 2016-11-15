<?php
/**
 * incopro Theme Customizer.
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function incopro_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
}
add_action('customize_register', 'incopro_customize_register');

/**
 * Options for WordPress Theme Customizer.
 */
function incopro_customizer($wp_customize)
{

    // logo
    $wp_customize->add_setting('header_logo', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'incopro_sanitize_number',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'header_logo', array(
        'label' => __('Logo', 'incopro'),
        'section' => 'title_tagline',
        'mime_type' => 'image',
        'priority' => 10,
    )));

      /* Main option Settings Panel */
    $wp_customize->add_panel('incopro_main_options', array(
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('incopro Options', 'incopro'),
        'description' => __('Panel to update incopro theme options', 'incopro'), // Include html tags such as <p>.
        'priority' => 10, // Mixed with top-level-section hierarchy.
    ));

    // add "Sidebar" section
        $wp_customize->add_section('incopro_layout_section', array(
            'title' => __('Layout options', 'incopro'),
            'description' => '',
            'priority' => 31,
            'panel' => 'incopro_main_options',
        ));
            // Layout options
            global $incopro_site_layout;
    $wp_customize->add_setting('incopro_sidebar_position', array(
                 'default' => 'side-right',
                 'sanitize_callback' => 'incopro_sanitize_layout',
            ));
    $wp_customize->add_control('incopro_sidebar_position', array(
                 'label' => __('Website Layout Options', 'incopro'),
                 'section' => 'incopro_layout_section',
                 'type' => 'select',
                 'description' => __('Choose between different layout options to be used as default', 'incopro'),
                 'choices' => $incopro_site_layout,
            ));

    $wp_customize->add_setting('link_color', array(
                    'default' => '',
                    'sanitize_callback' => 'incopro_sanitize_hexcolor',
                ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_color', array(
                'label' => __('Link Color', 'incopro'),
                'description' => __('Default used if no color is selected', 'incopro'),
                'section' => 'incopro_layout_section',
            )));
    $wp_customize->add_setting('link_hover_color', array(
                    'default' => '',
                    'sanitize_callback' => 'incopro_sanitize_hexcolor',
                ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'link_hover_color', array(
                'label' => __('Link Hover Color', 'incopro'),
                'description' => __('Default used if no color is selected', 'incopro'),
                'section' => 'incopro_layout_section',
            )));
    $wp_customize->add_setting('button_color', array(
                    'default' => '',
                    'sanitize_callback' => 'incopro_sanitize_hexcolor',
                ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_color', array(
                'label' => __('Button Color', 'incopro'),
                'description' => __('Default used if no color is selected', 'incopro'),
                'section' => 'incopro_layout_section',
            )));
    $wp_customize->add_setting('button_hover_color', array(
                    'default' => '',
                    'sanitize_callback' => 'incopro_sanitize_hexcolor',
                ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_hover_color', array(
                'label' => __('Button Hover Color', 'incopro'),
                'description' => __('Default used if no color is selected', 'incopro'),
                'section' => 'incopro_layout_section',
            )));

    $wp_customize->add_setting('social_color', array(
                    'default' => '',
                    'sanitize_callback' => 'incopro_sanitize_hexcolor',
                ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'social_color', array(
                'label' => __('Social Icon Color', 'incopro'),
                'description' => __('Default used if no color is selected', 'incopro'),
                'section' => 'incopro_layout_section',
            )));

        // add "Sidebar" section
    $wp_customize->add_section('incopro_main_section', array(
        'title' => __('Main options', 'incopro'),
        'priority' => 11,
        'panel' => 'incopro_main_options',
    ));

    $wp_customize->add_setting('top_callout', array(
        'default' => 1,
        'sanitize_callback' => 'incopro_sanitize_checkbox',
      ));

    $wp_customize->add_control('top_callout', array(
          'label' => esc_html__('check to show title in top call out box', 'incopro'),
          'section' => 'incopro_main_section',
          'priority' => 20,
          'type' => 'checkbox',
      ));

    $wp_customize->add_setting('blog_name', array(
          'default' => '',
          'sanitize_callback' => 'incopro_sanitize_strip_slashes',
      ));
    $wp_customize->add_control('blog_name', array(
          'label' => __('Blog Name in top callout', 'incopro'),
          'description' => __('Heading for the Blog page', 'incopro'),
          'section' => 'incopro_main_section',
      ));

    if (post_type_exists('jetpack-portfolio')) {
        $wp_customize->add_setting('portfolio_name', array(
          'default' => '',
          'sanitize_callback' => 'incopro_sanitize_strip_slashes',
        ));
        $wp_customize->add_control('portfolio_name', array(
            'label' => __('Portfolio Archive Title', 'incopro'),
            'section' => 'incopro_main_section',
        ));

        $wp_customize->add_setting('portfolio_description', array(
          'default' => '',
          'sanitize_callback' => 'incopro_sanitize_strip_slashes',
        ));
        $wp_customize->add_control('portfolio_description', array(
            'type' => 'textarea',
            'label' => __('Portfolio Archive Description', 'incopro'),
            'section' => 'incopro_main_section',
        ));
    }

    $wp_customize->add_setting('footer_callout_text', array(
        'default' => '',
        'sanitize_callback' => 'incopro_sanitize_strip_slashes',
      ));
    $wp_customize->add_control('footer_callout_text', array(
          'label' => __('Text for footer callout', 'incopro'),
          'description' => __('Footer Callout', 'incopro'),
          'section' => 'incopro_main_section',
      ));

    $wp_customize->add_setting('footer_callout_btntext', array(
        'default' => '',
        'sanitize_callback' => 'incopro_sanitize_strip_slashes',
      ));
    $wp_customize->add_control('footer_callout_btntext', array(
          'label' => __('Text for footer callout button', 'incopro'),
          'section' => 'incopro_main_section',
      ));
    $wp_customize->add_setting('footer_callout_link', array(
          'default' => '',
          'sanitize_callback' => 'esc_url_raw',
      ));
    $wp_customize->add_control('footer_callout_link', array(
          'label' => __('CFA button link', 'incopro'),
          'section' => 'incopro_main_section',
          'description' => __('Enter the link for Call For Action button in footer', 'incopro'),
          'type' => 'text',
      ));

    // add "Footer" section
    $wp_customize->add_section('incopro_footer_section', array(
        'title' => esc_html__('Footer', 'incopro'),
        'priority' => 90,
    ));

    $wp_customize->add_setting('incopro_footer_copyright', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'incopro_sanitize_strip_slashes',
    ));

    $wp_customize->add_control('incopro_footer_copyright', array(
        'type' => 'textarea',
        'label' => 'Copyright Text',
        'section' => 'incopro_footer_section',
    ));

        /* incopro Other Options */
        $wp_customize->add_section('incopro_other_options', array(
            'title' => __('Other', 'incopro'),
            'priority' => 70,
            'panel' => 'incopro_main_options',
        ));
    $wp_customize->add_setting('custom_css', array(
                'default' => '',
                'sanitize_callback' => 'incopro_sanitize_strip_slashes',
            ));
    $wp_customize->add_control('custom_css', array(
                'label' => __('Custom CSS', 'incopro'),
                'description' => sprintf(__('Additional CSS', 'incopro')),
                'section' => 'incopro_other_options',
                'type' => 'textarea',
            ));


}
add_action('customize_register', 'incopro_customizer');

/**
 * Adds sanitization callback function: Strip Slashes.
 */
function incopro_sanitize_strip_slashes($input)
{
    return wp_kses_stripslashes($input);
}

/**
 * Sanitzie checkbox for WordPress customizer.
 */
function incopro_sanitize_checkbox($input)
{
    if ($input == 1) {
        return 1;
    } else {
        return '';
    }
}
/**
 * Adds sanitization callback function: Sidebar Layout.
 */
function incopro_sanitize_layout($input)
{
    global $incopro_site_layout;
    if (array_key_exists($input, $incopro_site_layout)) {
        return $input;
    } else {
        return '';
    }
}

/**
 * Adds sanitization callback function: colors.
 */
function incopro_sanitize_hexcolor($color)
{
    if ($unhashed = sanitize_hex_color_no_hash($color)) {
        return '#'.$unhashed;
    }

    return $color;
}

/**
 * Adds sanitization callback function: Slider Category.
 */
function incopro_sanitize_slidecat($input)
{
    if (array_key_exists($input, incopro_cats())) {
        return $input;
    } else {
        return '';
    }
}

/**
 * Adds sanitization callback function: Radio Header.
 */
function incopro_sanitize_radio_header($input)
{
    global $header_show;
    if (array_key_exists($input, $header_show)) {
        return $input;
    } else {
        return '';
    }
}

/**
 * Adds sanitization callback function: Number.
 */
function incopro_sanitize_number($input)
{
    if (isset($input) && is_numeric($input)) {
        return $input;
    }
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function incopro_customize_preview_js()
{
    wp_enqueue_script('incopro_customizer', get_template_directory_uri().'/js/customizer.js', array('customize-preview'), '20130508', true);
}
add_action('customize_preview_init', 'incopro_customize_preview_js');

/**
 * Add CSS for custom controls.
 */
function incopro_customizer_custom_control_css()
{
    ?>
    <style>
        #customize-control-incopro-main_body_typography-size select, #customize-control-incopro-main_body_typography-face select,#customize-control-incopro-main_body_typography-style select { width: 60%; }
    </style><?php

}
add_action('customize_controls_print_styles', 'incopro_customizer_custom_control_css');

if (!class_exists('WP_Customize_Control')) {
    return;
}
