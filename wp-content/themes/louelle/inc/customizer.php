<?php
/**
 * louelle Theme Customizer
 *
 * @package louelle
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function louelle_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
    /* more link */
    $wp_customize->add_section(
    'more_options',
    array(
        'title' => __('More Link Options', 'louelle'),
        'description' => __('Customize your read more link', 'louelle' ),
        'priority' => 1,
    )
    );

    $wp_customize->add_setting(
        'ss_excerpt_type',
        array(
            'default' => 'option2',
            'sanitize_callback' => 'louelle_sanitize_choices',
        )
    );

    $wp_customize->add_control(
        'ss_excerpt_type',
        array(
            'type' => 'select',
            'label' => __('Excerpt type', 'louelle' ),
            'section' => 'more_options',
            'choices' => array(
                'option1' => __('More Tag', 'louelle' ),
                'option2' => __('Excerpt', 'louelle' ),
            ),
        )
    );

    //more type
    $wp_customize->add_setting(
        'ss_more_type',
        array(
            'default' => 'option1',
            'sanitize_callback' => 'louelle_sanitize_choices',
        )
    );

    $wp_customize->add_control(
        'ss_more_type',
        array(
            'type' => 'select',
            'label' => __('Read More Type', 'louelle' ),
            'section' => 'more_options',
            'choices' => array(
                'option1' => 'None',
                'option2' => __('Text', 'louelle' ),
                'option3' => __('Text + Button', 'louelle' ),
            ),
        )
    );

    //more type - text
    $wp_customize->add_setting(
        'ss_more_text',
        array(
            'sanitize_callback' => 'sanitize_text_field',
            'default' => __('Read More', 'louelle' ),
        )
    );

    $wp_customize->add_control(
        'ss_more_text',
        array(
            'label' => __('Read More Text', 'louelle' ),
            'section' => 'more_options',
        )
    );


    //more position
    $wp_customize->add_setting(
        'ss_more_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'louelle_sanitize_choices',
        )
    );

    $wp_customize->add_control(
        'ss_more_position',
        array(
            'type' => 'select',
            'label' => __('Read More Position', 'louelle' ),
            'description' => __('Only works if read more type is button', 'louelle' ),
            'section' => 'more_options',
            'choices' => array(
                'left' => __('Left', 'louelle' ),
                'right' => __('Right', 'louelle' ),
            ),
        )
    );


    //more type - text + button
    $wp_customize->add_setting(
        'ss_more_button',
        array(
            'default' => 'option1',
            'sanitize_callback' => 'louelle_sanitize_choices',
        )
    );

    $wp_customize->add_control(
        'ss_more_button',
        array(
            'type' => 'select',
            'label' => __('Read More Button Style', 'louelle' ),
            'section' => 'more_options',
            'choices' => array(
                'option1' => __('Sharp Edges', 'louelle' ),
                'option2' => __('Rounded Corners', 'louelle' ),
            ),
        )
    );

    //background color
    $wp_customize->add_setting(
        'ss_button_bg',
        array(
            'default' => '#c7c7c7',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'ss_button_bg', 
        array(
            'label' => __( 'Button Background Color', 'louelle' ),
            'section' => 'more_options',
    ) ) );


    //text color
    $wp_customize->add_setting(
        'ss_text_color',
        array(
            'default' => '#000000',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 
        'ss_text_color', 
        array(
            'label' => __( 'Button Text Color', 'louelle' ),
            'section' => 'more_options',
    ) ) );
}
add_action( 'customize_register', 'louelle_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function louelle_customize_preview_js() {
	wp_enqueue_script( 'louelle_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'louelle_customize_preview_js' );


function louelle_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}
