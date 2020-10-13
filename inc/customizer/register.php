<?php
/**
 * Wyvern Theme Customizer
 *
 * @package Wyvern Child
 */

/**
 * Registers customizer controls for the theme
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wyvern_child_customizer_theme_settings_panel( $wp_customize ) {
    // Add our panel
    $wp_customize->add_panel( 
        'wyvern_child_theme_settings',
        array(
            'title' => __( 'Theme Settings', 'wyvern' ),
			'description' => __( 'Settings specific to the Wyvern theme.', 'wyvern' ),
            'priority' => 40,
        )
    );

    // Add our sections
	$wp_customize->add_section(
		'wyvern_child_theme_settings_general',
		array(
			'title'       => __( 'General', 'wyvern' ),
			'description' => __( 'General Information', 'wyvern' ),
            'capability'  => 'edit_theme_options',
            'panel'       => 'wyvern_child_theme_settings',
			'priority'    => 40,
		)
    );

	$wp_customize->add_section(
		'wyvern_child_theme_settings_social_media',
		array(
			'title'       => __( 'Social Media', 'wyvern' ),
			'description' => __( 'All of your social media profiles', 'wyvern' ),
            'capability'  => 'edit_theme_options',
            'panel'       => 'wyvern_child_theme_settings',
			'priority'    => 40,
		)
    );

<<<<<<< HEAD
	$wp_customize->add_section(
		'wyvern_child_theme_settings_footer',
		array(
			'title'       => __( 'Footer', 'wyvern' ),
			'description' => __( 'Footer Information', 'wyvern' ),
            'capability'  => 'edit_theme_options',
            'panel'       => 'wyvern_child_theme_settings',
			'priority'    => 40,
		)
    );

    // Setting: Cookie Bar Display Flag
    $wp_customize->add_setting( 
        'cookie_notice_enabled', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
        )
    );

    // Control: Cookie Bar Display Flag
    $wp_customize->add_control( 
        'cookie_notice_enabled', 
        array(
            'label' => __( 'Enable Cookie Notification Bar', 'wyvern' ),
            'description' => __( 'Should a cookie notification bar be displayed?', 'wyvern' ),
            'type' => 'checkbox',
            'section' => 'wyvern_child_theme_settings_general',
        ) 
=======
    /* DISABLING UNTIL FULLY DEVELOPED
        $wp_customize->add_section(
            'wyvern_child_theme_settings_newsletter',
            array(
                'title'       => __( 'Newsletter', 'wyvern' ),
                'description' => __( 'Controls the display of the Newsletter Signup Block', 'wyvern' ),
                'capability'  => 'edit_theme_options',
                'panel'       => 'wyvern_child_theme_settings',
                'priority'    => 40,
            )
        );

        $wp_customize->add_section(
            'wyvern_child_theme_settings_single_posts',
            array(
                'title'       => __( 'Single Posts', 'wyvern' ),
                'description' => __( 'Features for single posts.', 'wyvern' ),
                'capability'  => 'edit_theme_options',
                'panel'       => 'wyvern_child_theme_settings',
                'priority'    => 40,
            )
        );
    */

	$wp_customize->add_section(
		'wyvern_child_theme_settings_footer',
		array(
			'title'       => __( 'Footer', 'wyvern' ),
			'description' => __( 'Footer Information', 'wyvern' ),
            'capability'  => 'edit_theme_options',
            'panel'       => 'wyvern_child_theme_settings',
			'priority'    => 40,
		)
>>>>>>> parent of f3111e9... Catching up
    );

    // Setting: Cookie Notice Text
    $wp_customize->add_setting( 
        'cookie_notice_text', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Cookie Notice Text
    $wp_customize->add_control( 
        'cookie_notice_text', 
        array(
            'label' => __( 'Cookie Notice - Text', 'wyvern' ),
            'description' => __( 'Text for your cookie notification.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_general',
        ) 
    );

    // Setting: Cookie Notice Page
    $wp_customize->add_setting( 
        'cookie_notice_page', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wyvern_child_sanitize_page_dropdown',
        )
    );

    // Control: Cookie Notice Page
    $wp_customize->add_control( 
        'cookie_notice_page',  
        array(
            'label' => __( 'Cookie Notification -  Page', 'wyvern' ),
            'description' => __( 'What page should we link to?', 'wyvern' ),
			'type'     => 'dropdown-pages',
            'section' => 'wyvern_child_theme_settings_general',
        ) 
    );

    // Setting: Cookie Notice Page Button Text
    $wp_customize->add_setting( 
        'cookie_notice_button_text', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Cookie Notice Page Button Text
    $wp_customize->add_control( 
        'cookie_notice_button_text', 
        array(
            'label' => __( 'Cookie Notice - Button Text', 'wyvern' ),
            'description' => __( 'Text for your cookie notification button.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_general',
        ) 
    );

    // Setting: Facebook Link
    $wp_customize->add_setting( 
        'facebook_link', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        )
    );

    // Control: Facebook Link
    $wp_customize->add_control( 
        'facebook_link', 
        array(
            'label' => __( 'Facebook Link', 'wyvern' ),
            'description' => __( 'Link your Facebook page here. Used throughout the site.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
        ) 
    );

    // Setting: Twitter Link
    $wp_customize->add_setting( 
        'twitter_link', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        )
    );

    // Control: Twitter Link
    $wp_customize->add_control( 
        'twitter_link', 
        array(
            'label' => __( 'Twitter Link', 'wyvern' ),
            'description' => __( 'Link your Twitter page here. Used throughout the site.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
        ) 
    );

<<<<<<< HEAD
    // Setting: Twitter Default Text
    $wp_customize->add_setting( 
        'twitter_default_text', 
=======
    // Setting: Instagram Link
    $wp_customize->add_setting( 
        'instagram_link', 
>>>>>>> parent of f3111e9... Catching up
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_html',
        )
    );

<<<<<<< HEAD
    // Control: Twitter Default Text
    $wp_customize->add_control( 
        'twitter_default_text', 
        array(
            'label' => __( 'Twitter - Default Text', 'wyvern' ),
            'description' => __( 'What text should be there by default?', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
        ) 
    );

    // Setting: Twitter Default Hashtags
    $wp_customize->add_setting( 
        'twitter_default_hashtags', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_html',
        )
    );

    // Control: Twitter Default Hashtags
    $wp_customize->add_control( 
        'twitter_default_hashtags', 
        array(
            'label' => __( 'Twitter - Default Hashtags', 'wyvern' ),
            'description' => __( 'Separate with commas (no spaces). These hashtags will appear appended to tweets by default.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
=======
    // Control: Instagram Link
    $wp_customize->add_control( 
        'instagram_link', 
        array(
            'label' => __( 'Instagram Link', 'wyvern' ),
            'description' => __( 'Link your Instagram page here. Used throughout the site.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
>>>>>>> parent of f3111e9... Catching up
        ) 
    );

    // Setting: GitHub Link
    $wp_customize->add_setting( 
        'github_link', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        )
    );

    // Control: GitHub Link
    $wp_customize->add_control( 
        'github_link', 
        array(
<<<<<<< HEAD
            'label' => __( 'Instagram Link', 'wyvern' ),
            'description' => __( 'Link your Instagram page here. Used throughout the site.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
        ) 
    );

    // Setting: GitHub Link
    $wp_customize->add_setting( 
        'github_link', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        )
    );

    // Control: GitHub Link
    $wp_customize->add_control( 
        'github_link', 
        array(
=======
>>>>>>> parent of f3111e9... Catching up
            'label' => __( 'GitHub Link', 'wyvern' ),
            'description' => __( 'Link your GitHub page here. Used throughout the site.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
        ) 
    );

    // Setting: YouTube Link
    $wp_customize->add_setting( 
        'youtube_link', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        )
    );

    // Control: YouTube Link
    $wp_customize->add_control( 
        'youtube_link', 
        array(
            'label' => __( 'YouTube Link', 'wyvern' ),
            'description' => __( 'Link your YouTube page here. Used throughout the site.', 'wyvern' ),
<<<<<<< HEAD
=======
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
        ) 
    );

    // Setting: Twitch Link
    $wp_customize->add_setting( 
        'twitch_link', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        )
    );

    // Control: Twitch Link
    $wp_customize->add_control( 
        'twitch_link', 
        array(
            'label' => __( 'Twitch Link', 'wyvern' ),
            'description' => __( 'Link your Twitch page here. Used throughout the site.', 'wyvern' ),
>>>>>>> parent of f3111e9... Catching up
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
        ) 
    );

<<<<<<< HEAD
    // Setting: Twitch Link
    $wp_customize->add_setting( 
        'twitch_link', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        )
    );

    // Control: Twitch Link
    $wp_customize->add_control( 
        'twitch_link', 
        array(
            'label' => __( 'Twitch Link', 'wyvern' ),
            'description' => __( 'Link your Twitch page here. Used throughout the site.', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_social_media',
        ) 
    );

=======
>>>>>>> parent of f3111e9... Catching up
    /* DISABLING UNTIL FULLY DEVELOPED
        // Setting: Newsletter Signup Form Name
        $wp_customize->add_setting( 
            'newsletter_signup_form_name', 
            array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
                'sanitize_callback' => 'wp_filter_nohtml_kses',
            )
        );

        // Control: Newsletter Signup Form Name
        $wp_customize->add_control( 
            'newsletter_signup_form_name', 
            array(
                'label' => __( 'Newsletter Signup Form Name', 'wyvern' ),
                'description' => __( 'What is the name of your newletter signup form?', 'wyvern' ),
                'type' => 'text',
                'section' => 'wyvern_child_theme_settings_newsletter',
            ) 
        );

        // Setting: Newsletter Signup Form Prompt
        $wp_customize->add_setting( 
            'newsletter_signup_form_prompt', 
            array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
                'sanitize_callback' => 'wp_filter_nohtml_kses',
            )
        );

        // Control: Newsletter Signup Form Prompt
        $wp_customize->add_control( 
            'newsletter_signup_form_prompt', 
            array(
                'label' => __( 'Newsletter Signup Form Prompt', 'wyvern' ),
                'description' => __( 'What text should go above your newsletter signup form?', 'wyvern' ),
                'type' => 'text',
                'section' => 'wyvern_child_theme_settings_newsletter',
            ) 
        );

        // Setting: Affiliate Link Notification - Text
        $wp_customize->add_setting( 
            'affiliate_link_notification_text', 
            array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
                'sanitize_callback' => 'wp_filter_nohtml_kses',
            )
        );

        // Control: Affiliate Link Notification - Text
        $wp_customize->add_control( 
            'affiliate_link_notification_text', 
            array(
                'label' => __( 'Affiliate Link Notification - Text', 'wyvern' ),
                'description' => __( 'What text should be shown as your affiliate link notification?', 'wyvern' ),
                'type' => 'text',
                'section' => 'wyvern_child_theme_settings_single_posts',
            ) 
        );

        // Setting: Affiliate Link Notification - Page
        $wp_customize->add_setting( 
            'affiliate_link_notification_page', 
            array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
                'sanitize_callback' => 'wyvern_child_sanitize_page_dropdown',
            )
        );

        // Control: Affiliate Link Notification - Page
        $wp_customize->add_control( 
            'affiliate_link_notification_page', 
            array(
                'label' => __( 'Affiliate Link Notification - Page', 'wyvern' ),
                'description' => __( 'What page should we link to?', 'wyvern' ),
                'type'     => 'dropdown-pages',
                'section' => 'wyvern_child_theme_settings_single_posts',
            ) 
        );
    */

    // Setting: Footer Statement
    $wp_customize->add_setting( 
        'footer_statement', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Footer Statement
    $wp_customize->add_control( 
        'footer_statement', 
        array(
            'label' => __( 'Footer Statement', 'wyvern' ),
            'description' => __( 'This text will display on a line after the logo', 'wyvern' ),
            'type' => 'textarea',
            'section' => 'wyvern_child_theme_settings_footer',
        ) 
    );

    // Setting: Footer Logo
    $wp_customize->add_setting( 
        'footer_logo', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wyvern_child_sanitize_file',
        )
    );

    // Control: Footer Logo
    $wp_customize->add_control( 
        new WP_Customize_Image_Control(
            $wp_customize,
            'footer_logo',
            array(
                'label'      => __( 'Footer logo', 'wyvern' ),
                'description' => __( 'If a logo is not uploaded, the header logo will be used.', 'wyvern' ),
                'section'    => 'wyvern_child_theme_settings_footer',
            )
        )
    );

    // Setting: Footer Copyright Info
    $wp_customize->add_setting( 
        'footer_copyright_statement', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Footer Copyright Info
    $wp_customize->add_control( 
        'footer_copyright_statement', 
        array(
            'label' => __( 'Footer Copyright Statement', 'wyvern' ),
            'description' => __( 'This text will display after the Copyright', 'wyvern' ),
            'type' => 'text',
            'section' => 'wyvern_child_theme_settings_footer',
        ) 
    );
}
add_action( 'customize_register', 'wyvern_child_customizer_theme_settings_panel' );

/**
 * Registers customizer controls for colors
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wyvern_child_child_customizer_color_settings_panel( $wp_customize ) {
    // Add our panel
    $wp_customize->add_panel( 
        'wyvern_child_child_color_settings',
        array(
            'title' => __( 'Theme Settings - Colors', 'wyvern' ),
			'description' => __( 'Customize your theme\'s colors', 'wyvern' ),
            'priority' => 40,
        )
    );

    // Add our sections
	$wp_customize->add_section(
		'wyvern_child_child_color_settings_header',
		array(
			'title'       => __( 'Header & Menu', 'wyvern' ),
			'description' => __( 'Header and Top Menu Colors', 'wyvern' ),
            'capability'  => 'edit_theme_options',
            'panel'       => 'wyvern_child_child_color_settings',
			'priority'    => 40,
		)
    );

	$wp_customize->add_section(
		'wyvern_child_child_color_settings_footer',
		array(
			'title'       => __( 'Footer', 'wyvern' ),
			'description' => __( 'Footer and Bottom Menu Colors', 'wyvern' ),
            'capability'  => 'edit_theme_options',
            'panel'       => 'wyvern_child_child_color_settings',
			'priority'    => 40,
		)
    );

	$wp_customize->add_section(
		'wyvern_child_child_color_settings_copyright',
		array(
			'title'       => __( 'Copyright Area', 'wyvern-child' ),
			'description' => __( 'Copyright Colors', 'wyvern-child' ),
            'capability'  => 'edit_theme_options',
            'panel'       => 'wyvern_child_child_color_settings',
			'priority'    => 40,
		)
    );

    // Setting: Colors - Header Background
    $wp_customize->add_setting( 
        'colors_header_background', 
        array(
            'type' => 'theme_mod',
            'default' => '#000000',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Colors - Header Background
    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 
            'colors_header_background',
            array(
                'label' => __( 'Background Color', 'wyvern' ),
                'description' => __( 'Sets the primary header background color' ),
                'section' => 'wyvern_child_child_color_settings_header',
            ) 
        ) 
    );

    // Setting: Colors - Nav Item
    $wp_customize->add_setting( 
        'colors_nav_item', 
        array(
            'type' => 'theme_mod',
            'default' => '#FFFFFF',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Colors - Nav Item
    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 
            'colors_nav_item',
            array(
                'label' => __( 'Menu Item', 'wyvern' ),
                'description' => __( 'Sets the nav menu text color' ),
                'section' => 'wyvern_child_child_color_settings_header',
            ) 
        ) 
    );

    // Setting: Colors - Nav Item, Hover
    $wp_customize->add_setting( 
        'colors_nav_item_hover', 
        array(
            'type' => 'theme_mod',
            'default' => '#C0C0C0',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Colors - Nav Item, Hover
    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 
            'colors_nav_item_hover',
            array(
                'label' => __( 'Menu Item - Hover/Focus/Active', 'wyvern' ),
                'description' => __( 'Sets the hover, focus, and active state color' ),
                'section' => 'wyvern_child_child_color_settings_header',
            ) 
        ) 
    );

    // Setting: Colors - Footer Background
    $wp_customize->add_setting( 
        'colors_footer_background', 
        array(
            'type' => 'theme_mod',
            'default' => '#000000',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Colors - Footer Background
    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 
            'colors_footer_background',
            array(
                'label' => __( 'Background Color', 'wyvern' ),
                'description' => __( 'Sets the primary footer background color' ),
                'section' => 'wyvern_child_child_color_settings_footer',
            ) 
        ) 
    );

    // Setting: Colors - Footer Nav Item
    $wp_customize->add_setting( 
        'colors_footer_nav_item', 
        array(
            'type' => 'theme_mod',
            'default' => '#FFFFFF',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Colors - Footer Nav Item
    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 
            'colors_footer_nav_item',
            array(
                'label' => __( 'Menu Item', 'wyvern' ),
                'description' => __( 'Sets the nav menu text color' ),
                'section' => 'wyvern_child_child_color_settings_footer',
            ) 
        ) 
    );

    // Setting: Colors - Footer Nav Item, Hover
    $wp_customize->add_setting( 
        'colors_footer_nav_item_hover', 
        array(
            'type' => 'theme_mod',
            'default' => '#C0C0C0',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Colors - Footer Nav Item, Hover
    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 
            'colors_footer_nav_item_hover',
            array(
                'label' => __( 'Menu Item - Hover/Focus/Active', 'wyvern-child' ),
                'description' => __( 'Sets the hover, focus, and active state color' ),
                'section' => 'wyvern_child_child_color_settings_footer',
            ) 
        ) 
    );

    // Setting: Colors - Copyright Background
    $wp_customize->add_setting( 
        'colors_copyright_background', 
        array(
            'type' => 'theme_mod',
            'default' => '#000000',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Colors - Copyright Background
    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 
            'colors_copyright_background',
            array(
                'label' => __( 'Copyright - Background Color', 'wyvern-child' ),
                'description' => __( 'Sets the copyright area background color' ),
                'section' => 'wyvern_child_child_color_settings_copyright',
            ) 
        ) 
    );

    // Setting: Colors - Copyright Text
    $wp_customize->add_setting( 
        'colors_copyright_text', 
        array(
            'type' => 'theme_mod',
            'default' => '#FFFFFF',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Colors - Copyright Text
    $wp_customize->add_control(
        new WP_Customize_Color_Control( $wp_customize, 
            'colors_copyright_text',
            array(
                'label' => __( 'Copyright - Text Color', 'wyvern-child' ),
                'description' => __( 'Sets the copyright area text color' ),
                'section' => 'wyvern_child_child_color_settings_copyright',
            ) 
        ) 
    );

}
add_action( 'customize_register', 'wyvern_child_child_customizer_color_settings_panel' );


/**
 * Registers customizer controls for colors
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wyvern_child_child_customizer_typography_settings_panel( $wp_customize ) {
    // Add our panel
    $wp_customize->add_panel( 
        'wyvern_child_child_typography_settings',
        array(
            'title' => __( 'Theme Settings - Fonts', 'wyvern' ),
			'description' => __( 'Customize your theme\'s fonts & text sizes', 'wyvern' ),
            'priority' => 40,
        )
    );

    // Add our sections
	$wp_customize->add_section(
		'wyvern_child_child_typography_settings_fonts',
		array(
			'title'       => __( 'Fonts', 'wyvern' ),
			'description' => __( 'Font Settings', 'wyvern' ),
            'capability'  => 'edit_theme_options',
            'panel'       => 'wyvern_child_child_typography_settings',
			'priority'    => 40,
		)
    );

    // Setting: Typography - Primary Font, used for most text
    $wp_customize->add_setting( 
        'typography_font_primary', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Typography - Primary Font
    $wp_customize->add_control( 
        'typography_font_primary', 
        array(
            'label' => __( 'Primary Font', 'wyvern' ),
            'description' => __( 'Used for most text.', 'wyvern' ),
            'type' => 'select',
            'choices' => array(
                'Default'           => __( 'Select a font', 'wyvern' ),
                'Lato'              => __( 'Lato', 'wyvern' ),
                'Lora'              => __( 'Lora', 'wyvern' ),
                'Merriweather'      => __( 'Merriweather', 'wyvern' ),
                'Montserrat'        => __( 'Montserrat', 'wyvern' ),
                'Open+Sans'         => __( 'Open Sans', 'wyvern' ),
                'Oswald'            => __( 'Oswald', 'wyvern' ),
                'Playfair+Display'  => __( 'Playfair Display', 'wyvern' ),
                'Poppins'           => __( 'Poppins', 'wyvern' ),
                'PT+Serif'          => __( 'PT Serif', 'wyvern' ),
                'Raleway'           => __( 'Raleway', 'wyvern' ),
                'Roboto'            => __( 'Roboto', 'wyvern' ),
                'Roboto+Slab'       => __( 'Roboto Slab', 'wyvern' ),
                'Custom'            => __( 'Custom Font', 'wyvern' ),
            ),
            'section' => 'wyvern_child_child_typography_settings_fonts',
        ) 
    );

    // Setting: Typography - Secondary Font, used for headers
    $wp_customize->add_setting( 
        'typography_font_secondary', 
        array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
        )
    );

    // Control: Typography - Secondary Font
    $wp_customize->add_control( 
        'typography_font_secondary', 
        array(
            'label' => __( 'Secondary Font', 'wyvern' ),
            'description' => __( 'Used for headers and other special situations.', 'wyvern' ),
            'type' => 'select',
            'choices' => array(
                'Default'           => __( 'Select a font', 'wyvern' ),
                'Lato'              => __( 'Lato', 'wyvern' ),
                'Lora'              => __( 'Lora', 'wyvern' ),
                'Merriweather'      => __( 'Merriweather', 'wyvern' ),
                'Montserrat'        => __( 'Montserrat', 'wyvern' ),
                'Open+Sans'         => __( 'Open Sans', 'wyvern' ),
                'Oswald'            => __( 'Oswald', 'wyvern' ),
                'Playfair+Display'  => __( 'Playfair Display', 'wyvern' ),
                'Poppins'           => __( 'Poppins', 'wyvern' ),
                'PT+Serif'          => __( 'PT Serif', 'wyvern' ),
                'Raleway'           => __( 'Raleway', 'wyvern' ),
                'Roboto'            => __( 'Roboto', 'wyvern' ),
                'Roboto+Slab'       => __( 'Roboto Slab', 'wyvern' ),
                'Custom'            => __( 'Custom Font', 'wyvern' ),
            ),
            'section' => 'wyvern_child_child_typography_settings_fonts',
        ) 
    );
}
add_action( 'customize_register', 'wyvern_child_child_customizer_typography_settings_panel' );