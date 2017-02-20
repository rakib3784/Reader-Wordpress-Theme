<?php
/**
 * Reader Theme Customizer.
 *
 * @package Reader
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function reader_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Logo Section

	$wp_customize->add_section( 'logo_section' , array(
    	'title'      => __( 'Change Logo', 'reader' ),
    	'priority'   => 30,
	) );


	$wp_customize->add_setting( 'reader_logo',  array( 'default' => get_template_directory_uri() .'/images/logo.png'),array('sanitize_callback' => '__return_false') );
         
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'reader_logo', array(
        'label'    => __( 'Upload Logo', 'reader' ),
        'section'  => 'logo_section',
    ) ) );

    //Social Icons

    $wp_customize->add_section( 'social_section' , array(
    	'title'      => __( 'Social Settings', 'reader' ),
    	'priority'   => 30,
	) );


	$wp_customize->add_setting( 'twitter',array('sanitize_callback'	=> 'esc_attr'));
	$wp_customize->add_setting( 'skype',array('sanitize_callback'	=> 'esc_attr'));
	$wp_customize->add_setting( 'instagram',array('sanitize_callback'	=> 'esc_attr'));
	$wp_customize->add_setting( 'dribble',array('sanitize_callback'	=> 'esc_attr'));
	$wp_customize->add_setting( 'vimeo',array('sanitize_callback'	=> 'esc_attr'));
	$wp_customize->add_setting( 'facebook',array('sanitize_callback'	=> 'esc_attr'));

    
    $wp_customize->add_control(	'twitter', 
		array(
			'label'    => __( 'Twitter Username', 'reader' ),
			'section'  => 'social_section',
			'settings' => 'twitter',
			'type'     => 'text'
		)
	);

	$wp_customize->add_control(	'skype', 
		array(
			'label'    => __( 'Skype Username', 'reader' ),
			'section'  => 'social_section',
			'settings' => 'skype',
			'type'     => 'text'
		)
	);

	$wp_customize->add_control(	'instagram', 
		array(
			'label'    => __( 'Instagram Username', 'reader' ),
			'section'  => 'social_section',
			'settings' => 'instagram',
			'type'     => 'text'
		)
	);

	$wp_customize->add_control(	'dribble', 
		array(
			'label'    => __( 'Dribble Username', 'reader' ),
			'section'  => 'social_section',
			'settings' => 'dribble',
			'type'     => 'text'
		)
	);

	$wp_customize->add_control(	'vimeo', 
		array(
			'label'    => __( 'Vimeo Username', 'reader' ),
			'section'  => 'social_section',
			'settings' => 'vimeo',
			'type'     => 'text'
		)
	);


	$wp_customize->add_control(	'facebook', 
		array(
			'label'    => __( 'Facebook Username', 'reader' ),
			'section'  => 'social_section',
			'settings' => 'facebook',
			'type'     => 'text'
		)
	);


	//Footer Settings


	  $wp_customize->add_section( 'footer_section' , array(
	    	'title'      => __( 'Footer Settings', 'reader' ),
	    	'priority'   => 30,
		) );
	  $wp_customize->add_setting( 'footer_user',array('sanitize_callback'	=> 'esc_attr'));
	  $wp_customize->add_setting( 'footer_url',array('sanitize_callback'	=> 'esc_attr'));


	  $wp_customize->add_control(	'footer_user', 
			array(
				'label'    => __( 'Name of Company', 'reader' ),
				'section'  => 'footer_section',
				'settings' => 'footer_user',
				'type'     => 'text'
			)
		);

	  $wp_customize->add_control(	'footer_url', 
			array(
				'label'    => __( 'URL of Company', 'reader' ),
				'section'  => 'footer_section',
				'settings' => 'footer_url',
				'type'     => 'text'
			)
		);


}

add_action( 'customize_register', 'reader_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function reader_customize_preview_js() {
	wp_enqueue_script( 'reader_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'reader_customize_preview_js' );

