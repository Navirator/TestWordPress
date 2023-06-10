<?php
function aromatic_exclusive_product_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Exclusive Product  Section
	=========================================*/
	$wp_customize->add_section(
		'exclusive_product_setting', array(
			'title' => esc_html__( 'Exclusive Product Section', 'aromatic-pro' ),
			'priority' => 4,
			'panel' => 'aromatic_frontpage2_sections',
		)
	);
	
	// Setting
	$wp_customize->add_setting(
		'exclusive_product_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'exclusive_product_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','ecommerce-companion'),
			'section' => 'exclusive_product_setting',
		)
	);
	
	// Hide/Show
	$wp_customize->add_setting(
		'exclusive_product_setting_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'exclusive_product_setting_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show','ecommerce-companion'),
			'section' => 'exclusive_product_setting',
		)
	);
	
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		'exclusive_product_header'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'exclusive_product_header',
		array(
			'type' => 'hidden',
			'label' => __('Header','aromatic-pro'),
			'section' => 'exclusive_product_setting',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'exclusive_product_ttl',
    	array(
	        'default'			=> __('Exclusive Product','aromatic-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'exclusive_product_ttl',
		array(
		    'label'   => __('Title','aromatic-pro'),
		    'section' => 'exclusive_product_setting',
			'type'           => 'text',
		)  
	);
	
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'exclusive_product_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'exclusive_product_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','aromatic-pro'),
			'section' => 'exclusive_product_setting',
		)
	);
	
	// Product Category
	if ( class_exists( 'woocommerce' ) ) {
	$wp_customize->add_setting(
    'exclusive_product_cat',
		array(
		'capability' => 'edit_theme_options',
		'priority' => 5,
		)
	);	
	$wp_customize->add_control( new Ecommerce_Comp_Product_Category_Control( $wp_customize, 
	'exclusive_product_cat', 
		array(
		'label'   => __('Select category','aromatic-pro'),
		'section' => 'exclusive_product_setting',
		) 
	) );
	}

}

add_action( 'customize_register', 'aromatic_exclusive_product_setting' );

// selective refresh
function aromatic_exclusive_product_section_partials( $wp_customize ){
	
	// exclusive_product_ttl
	$wp_customize->selective_refresh->add_partial( 'exclusive_product_ttl', array(
		'selector'            => '.exclusive-products-home .section-title',
		'settings'            => 'exclusive_product_ttl',
		'render_callback'  => 'aromatic_exclusive_product_ttl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'aromatic_exclusive_product_section_partials' );

// exclusive_product_ttl
function aromatic_exclusive_product_ttl_render_callback() {
	return get_theme_mod( 'exclusive_product_ttl' );
}