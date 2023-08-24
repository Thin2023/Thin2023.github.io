<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_shop_storefront_logo_resizer',
		'label'       => esc_html__( 'Adjust Logo Size', 'fashion-shop-storefront' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'fashion-shop-storefront' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_shop_storefront_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'fashion-shop-storefront' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-shop-storefront' ),
			'off' => esc_html__( 'Disable', 'fashion-shop-storefront' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_shop_storefront_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'fashion-shop-storefront' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-shop-storefront' ),
			'off' => esc_html__( 'Disable', 'fashion-shop-storefront' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'fashion_shop_storefront_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'fashion_shop_storefront_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	// TYPOGRAPHY SETTINGS
	Kirki::add_panel( 'fashion_shop_storefront_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'fashion-shop-storefront' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'fashion_shop_storefront_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_h1_typography_heading',
		'section'     => 'fashion_shop_storefront_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fashion_shop_storefront_h1_typography_font',
		'section'   =>  'fashion_shop_storefront_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'fashion_shop_storefront_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_h2_typography_heading',
		'section'     => 'fashion_shop_storefront_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fashion_shop_storefront_h2_typography_font',
		'section'   =>  'fashion_shop_storefront_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'fashion_shop_storefront_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_h3_typography_heading',
		'section'     => 'fashion_shop_storefront_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fashion_shop_storefront_h3_typography_font',
		'section'   =>  'fashion_shop_storefront_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'fashion_shop_storefront_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_h4_typography_heading',
		'section'     => 'fashion_shop_storefront_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fashion_shop_storefront_h4_typography_font',
		'section'   =>  'fashion_shop_storefront_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'fashion_shop_storefront_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_h5_typography_heading',
		'section'     => 'fashion_shop_storefront_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fashion_shop_storefront_h5_typography_font',
		'section'   =>  'fashion_shop_storefront_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'fashion_shop_storefront_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_h6_typography_heading',
		'section'     => 'fashion_shop_storefront_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fashion_shop_storefront_h6_typography_font',
		'section'   =>  'fashion_shop_storefront_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'fashion_shop_storefront_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_body_typography_heading',
		'section'     => 'fashion_shop_storefront_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'fashion_shop_storefront_body_typography_font',
		'section'   =>  'fashion_shop_storefront_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  'Inter',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );


	// Theme Options Panel
	Kirki::add_panel( 'fashion_shop_storefront_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'fashion-shop-storefront' ),
	) );
	
	// HEADER SECTION

	Kirki::add_section( 'fashion_shop_storefront_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fashion-shop-storefront' ),
	    'panel'    => 'fashion_shop_storefront_theme_options_panel',
		'description'    => esc_html__( 'Here you can add header information.', 'fashion-shop-storefront' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'priority'       => 1,
		'settings'    => 'fashion_shop_storefront_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => 0,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-shop-storefront' ),
			'off' => esc_html__( 'Disable', 'fashion-shop-storefront' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_menu_size_heading',
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Font Size(px)', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'fashion_shop_storefront_menu_size',
		'label'       => __( 'Enter a value in pixels. Example:20px', 'fashion-shop-storefront' ),
		'type'        => 'text',
		'section'     => 'fashion_shop_storefront_section_header',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => 'font-size',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_menu_text_transform_heading',
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Text Transform', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'fashion_shop_storefront_menu_text_transform',
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => 'uppercase',
		'choices'     => [
			'none' => esc_html__( 'Normal', 'fashion-shop-storefront' ),
			'uppercase' => esc_html__( 'Uppercase', 'fashion-shop-storefront' ),
			'lowercase' => esc_html__( 'Lowercase', 'fashion-shop-storefront' ),
			'capitalize' => esc_html__( 'Capitalize', 'fashion-shop-storefront' ),
		],
		'output' => array(
			array(
				'element'  => array( '#main-menu a', '#main-menu ul li a', '#main-menu li a'),
				'property' => ' text-transform',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'label'    =>  esc_html__( 'Add Topbar Text', 'fashion-shop-storefront' ),
		'type'     => 'text',
		'settings' => 'fashion_shop_storefront_header_toptxt',
		'section'  => 'fashion_shop_storefront_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_shop_storefront_google_translator',
		'label'       => esc_html__( 'Language Translator', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => 0,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-shop-storefront' ),
			'off' => esc_html__( 'Disable', 'fashion-shop-storefront' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_shop_storefront_currency_switcher',
		'label'       => esc_html__( 'Currency Switcher', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => 0,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-shop-storefront' ),
			'off' => esc_html__( 'Disable', 'fashion-shop-storefront' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_shop_storefront_disable_search_icon',
		'label'       => esc_html__( 'Enable/Disable Search', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-shop-storefront' ),
			'off' => esc_html__( 'Disable', 'fashion-shop-storefront' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Wishlist Link', 'fashion-shop-storefront' ),
		'settings' => 'fashion_shop_storefront_header_wishlist_url',
		'section'  => 'fashion_shop_storefront_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_shop_storefront_cart_box_enable',
		'label'       => esc_html__( 'Enable/Disable Shopping Cart', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-shop-storefront' ),
			'off' => esc_html__( 'Disable', 'fashion-shop-storefront' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_header_phone_number_heading',
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'fashion-shop-storefront' ),
		'settings' => 'fashion_shop_storefront_header_phone_number_text',
		'section'  => 'fashion_shop_storefront_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Phone Number', 'fashion-shop-storefront' ),
		'settings' => 'fashion_shop_storefront_header_phone_number',
		'section'  => 'fashion_shop_storefront_section_header',
		'default'  => '',
		'sanitize_callback' => 'fashion_shop_storefront_sanitize_phone_number',
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_enable_socail_link',
		'section'     => 'fashion_shop_storefront_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'fashion_shop_storefront_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'fashion-shop-storefront' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'fashion-shop-storefront' ),
		'settings'     => 'fashion_shop_storefront_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'fashion-shop-storefront' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'fashion-shop-storefront' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'fashion-shop-storefront' ),
				'description' => esc_html__( 'Add the social icon url here.', 'fashion-shop-storefront' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'fashion_shop_storefront_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_theme_options_panel',
		'description'    => esc_html__( 'Additional Settings of themes', 'fashion-shop-storefront' ),
		'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_single_page_layout_heading',
		'section'     => 'fashion_shop_storefront_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'fashion_shop_storefront_single_page_layout',
		'section'     => 'fashion_shop_storefront_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fashion-shop-storefront' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fashion-shop-storefront' ),
			'One Column' => esc_html__( 'One Column', 'fashion-shop-storefront' ),
		],
	) );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_header_background_attachment_heading',
		'section'     => 'fashion_shop_storefront_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'fashion_shop_storefront_header_background_attachment',
		'section'     => 'fashion_shop_storefront_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'fashion-shop-storefront' ),
			'fixed' => esc_html__( 'Fixed', 'fashion-shop-storefront' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	) );

 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );
	

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'fashion_shop_storefront_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'fashion-shop-storefront' ),
		'panel'    => 'woocommerce',
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'fashion-shop-storefront' ),
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'fashion-shop-storefront' ),
		'settings'    => 'fashion_shop_storefront_shop_page_layout',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fashion-shop-storefront' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fashion-shop-storefront' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'fashion_shop_storefront_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'fashion-shop-storefront' ),
		'settings'    => 'fashion_shop_storefront_products_per_row',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'     => '3',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'fashion-shop-storefront' ),
		'settings'    => 'fashion_shop_storefront_products_per_page',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'fashion-shop-storefront' ),
		'settings'    => 'fashion_shop_storefront_single_product_sidebar_layout',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'fashion-shop-storefront' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'fashion-shop-storefront' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'fashion_shop_storefront_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_products_button_border_radius_heading',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'fashion-shop-storefront' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fashion_shop_storefront_products_button_border_radius',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_sale_badge_position_heading',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'fashion-shop-storefront' ) . '</h3>',
		'priority'    => 10,
	] );


	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'fashion_shop_storefront_sale_badge_position',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'fashion-shop-storefront' ),
			'left' => esc_html__( 'Left', 'fashion-shop-storefront' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_products_sale_font_size_heading',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'fashion-shop-storefront' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'fashion_shop_storefront_products_sale_font_size',
		'section'     => 'fashion_shop_storefront_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	

// POST SECTION

	Kirki::add_section( 'fashion_shop_storefront_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'fashion-shop-storefront' ),
		'panel'    => 'fashion_shop_storefront_theme_options_panel',
		'description'    => esc_html__( 'Here you can add post information.', 'fashion-shop-storefront' ),
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fashion_shop_storefront_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_length_setting_heading',
		'section'     => 'fashion_shop_storefront_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'fashion-shop-storefront' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fashion_shop_storefront_length_setting',
		'section'     => 'fashion_shop_storefront_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'fashion-shop-storefront' ),
		'settings'    => 'fashion_shop_storefront_single_post_tag',
		'section'     => 'fashion_shop_storefront_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'fashion-shop-storefront' ),
		'settings'    => 'fashion_shop_storefront_single_post_category',
		'section'     => 'fashion_shop_storefront_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	// FOOTER SECTION

	Kirki::add_section( 'fashion_shop_storefront_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'fashion-shop-storefront' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'fashion-shop-storefront' ),
        'panel'    => 'fashion_shop_storefront_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_footer_text_heading',
		'section'     => 'fashion_shop_storefront_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'fashion-shop-storefront' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fashion_shop_storefront_footer_text',
		'section'  => 'fashion_shop_storefront_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fashion_shop_storefront_footer_enable_heading',
		'section'     => 'fashion_shop_storefront_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'fashion-shop-storefront' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fashion_shop_storefront_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fashion-shop-storefront' ),
		'section'     => 'fashion_shop_storefront_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fashion-shop-storefront' ),
			'off' => esc_html__( 'Disable', 'fashion-shop-storefront' ),
		],
	] );
}
