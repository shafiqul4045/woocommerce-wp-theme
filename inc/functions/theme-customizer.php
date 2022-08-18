<?php
function ob_theme_customizer( $wp_customize){

    // Add New Section: Header Options
    $wp_customize->add_section( 'header_options_section', array(
        'title' => 'Header Options',
        'priority' => '40'
    ));

    // Add Top Bar Phone Number
    $wp_customize->add_setting( 'top_bar_phone_number_setting', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => 'SUPPORT: +0123456789',
        'sanitize_callback' => 'top_bar_phone_number_sanitize_text',
    ));
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'top_bar_phone_number',
            array(
                'label'          => __( 'Top Bar Phone Number', 'oilbiotic' ),
                'section'        => 'header_options_section',
                'settings'       => 'top_bar_phone_number_setting',
                'type'           => 'text',
            )
        )
    );


    // Add Top Bar Color
    $wp_customize->add_setting( 'top_bar_color', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => '#699432',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'top_bar_color',
            array(
                'label' => __( 'Top Bar Color', 'oilbiotic' ),
                'section' => 'header_options_section',
                'settings' => 'top_bar_color'
            )
        )
    );

    // Add Top Bar Show
    $wp_customize->add_setting( 'top_bar_show', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => 'yes',
        'sanitize_callback' => 'ob_sanitize_radio',
    ) );
    $wp_customize->add_control( 'top_bar_show', array(
        'type' => 'radio',
        'section' => 'header_options_section',
        'label' => __( 'Top Bar', 'oilbiotic' ),
        'choices' => array(
            'yes' => __( 'Yes', 'oilbiotic'),
            'no' => __( 'No', 'oilbiotic'),
        ),
    ) );

    // Preloader
    $wp_customize->add_setting( 'preloader_setting', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => 'all',
        'sanitize_callback' => 'ob_sanitize_radio',
    ));

  
    $wp_customize->add_control( 'preloader_setting', array(
        'type' => 'radio',
        'section' => 'header_options_section',
        'label' => __( 'Preloader', 'oilbiotic' ),
        'choices' => array(
            'all' => __( 'All Pages', 'oilbiotic' ),
            'front' => __( 'Only Front Page', 'oilbiotic'),
            'no' => __( 'No Preloader', 'oilbiotic'),
        ),
    ) );

    //**
    // Add New Section: Breadcrumbs Options
    // ** //
    $wp_customize->add_section( 'breadcrumbs_section', array(
        'title' => __( 'Breadcrumbs Options', 'oilbiotic' ),
        'priority' => '40'
    ));

    $wp_customize->add_setting( 'breadcrumbs_bg_img', array(
        'default' => get_theme_file_uri('assets/images/breadcrumb-bg.png'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'breadcrumbs_bg_control', array(
        'label' => __( 'Upload Background Image', 'oilbiotic'),
        'priority' => 20,
        'section' => 'breadcrumbs_section',
        'settings' => 'breadcrumbs_bg_img',
        'button_labels' => array(// All These labels are optional
                    'select' => 'Select Image',
                    'remove' => 'Remove Image',
                    'change' => 'Change Image',
                    )
    )));



    //**
    // Add New Section: Color Options
    // ** //
    $wp_customize->add_section( 'color_section', array(
        'title' => __( 'Color Options', 'oilbiotic' ),
        'priority' => '40'
    ));

    // Add Primary Color
    $wp_customize->add_setting( 'primary_color_setting', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => '#699432',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'primary_color',
            array(
                'label' => __( 'Primary Color', 'oilbiotic' ),
                'section' => 'color_section',
                'settings' => 'primary_color_setting'
            )
        )
    );
    // Add Secondary Color
    $wp_customize->add_setting( 'secondary_color_setting', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => '#353535',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'secondary_color',
            array(
                'label' => __( 'Secondary Color', 'oilbiotic' ),
                'section' => 'color_section',
                'settings' => 'secondary_color_setting'
            )
        )
    );


    //**
    // Add New Section: Footer Options
    // ** //
    $wp_customize->add_section( 'footer_options_section', array(
        'title' => 'Footer Options',
        'priority' => '40'
    ));

    // Add Footer Background Field 1
    $wp_customize->add_setting( 'footer_background_color_setting', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => '#dfeee1',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'footer_background_color',
            array(
                'label' => __( 'Footer Background Color', 'oilbiotic' ),
                'section' => 'footer_options_section',
                'settings' => 'footer_background_color_setting'
            )
        )
    );

    // Add Footer Text Field 1
    $wp_customize->add_setting( 'footer_text_color_setting', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => '#5a5a5a',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'footer_text_color',
            array(
                'label' => __('Footer Text Color', 'oilbiotic'),
                'section' => 'footer_options_section',
                'settings' => 'footer_text_color_setting'
            )
        )
    );

    // Add Copyright Text Field 2
    $wp_customize->add_setting( 'footer_copyright_text_setting', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => 'Copyright 2021 Oil Biotic | Design By Egens Lab',
        'sanitize_callback' => 'footer_copyright_sanitize_text',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'footer_copyright_text',
            array(
                'label'          => __( 'Copyright Text', 'oilbiotic' ),
                'section'        => 'footer_options_section',
                'settings'       => 'footer_copyright_text_setting',
                'type'           => 'textarea',
            )
        )
    );

    // Back to Top Scroll
    $wp_customize->add_setting( 'backtotopscroll_setting', array(
        'capability' => 'edit_theme_options',
        'transport' => 'refresh',
        'default' => 'yes',
        'sanitize_callback' => 'ob_sanitize_radio',
    ));

    $wp_customize->add_control( 'backtotopscroll_setting', array(
        'type' => 'radio',
        'section' => 'footer_options_section',
        'label' => __( 'Back to Top Scroll', 'oilbiotic' ),
        'choices' => array(
            'yes' => __( 'Yes', 'oilbiotic' ),
            'no' => __( 'No', 'oilbiotic'),
        ),
    ) );


}

add_action( 'customize_register', 'ob_theme_customizer' );
function top_bar_phone_number_sanitize_text( $input ) {
    return $input;
}
function footer_copyright_sanitize_text( $input ) {
    return $input;
}
function ob_sanitize_radio( $input, $setting ) {
    // Ensure input is a slug
    $input = sanitize_key( $input );

    // Get a list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control( $setting->id )->choices;

    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
