<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/reader/
 */

add_filter( 'rwmb_meta_boxes', 'reader_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * @return void
 */
function reader_register_meta_boxes( $meta_boxes )
{
	global $animation;
	global $linecons;
	/**
	 * Prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = '_reader_';


	
		// 1st meta box
	$meta_boxes[] = array(
		'id' => 'post-meta-quote',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Post Quote Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'post'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				// Field name - Will be used as label
				'name'  => __( 'Qoute Text', 'reader' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}qoute",
				'desc'  => __( 'Write Your Qoute Here', 'reader' ),
				'type'  => 'textarea',
				// Default value (optional)
				'std'   => ''
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Qoute Author', 'reader' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}qoute_author",
				'desc'  => __( 'Write Qoute Author or Source', 'reader' ),
				'type'  => 'text',
				// Default value (optional)
				'std'   => ''
			)
			
		)
	);


	$meta_boxes[] = array(
		'id' => 'post-meta-chat',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Post Chat Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'post'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				// Field name - Will be used as label
				'name'  => __( 'Chat Message', 'reader' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}chat_text",
				'type' => 'wysiwyg',
				'raw'  => false,
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => false,
					'media_buttons' => false,
				)
			)
			
		)
	);


	$meta_boxes[] = array(
		'id' => 'post-meta-link',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Post Link Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'post'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				// Field name - Will be used as label
				'name'  => __( 'Link Text', 'reader' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}link_text",
				'desc'  => __( 'Link Text', 'reader' ),
				'type'  => 'text',
				// Default value (optional)
				'std'   => ''
			),
			array(
				// Field name - Will be used as label
				'name'  => __( 'Link URL', 'reader' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}link",
				'desc'  => __( 'Write Your Link', 'reader' ),
				'type'  => 'text',
				// Default value (optional)
				'std'   => ''
			)
			
		)
	);


	$meta_boxes[] = array(
		'id' => 'post-meta-audio',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Post Audio Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'post'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				// Field name - Will be used as label
				'name'  => __( 'Audio Embed Code', 'reader' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}audio_code",
				'desc'  => __( 'Write Your Audio Embed Code Here', 'reader' ),
				'type'  => 'textarea',
				// Default value (optional)
				'std'   => ''
			)
			
		)
	);

	$meta_boxes[] = array(
		'id' => 'post-meta-status',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Post Status Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'post'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				// Field name - Will be used as label
				'name'  => __( 'Status URL', 'reader' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}status_url",
				'desc'  => __( 'Write Facebook, Twitter etc status link', 'reader' ),
				'type'  => 'textarea',
				// Default value (optional)
				'std'   => ''
			)
			
		)
	);

	$meta_boxes[] = array(
		'id' => 'post-meta-video',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Post Video Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'post'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				// Field name - Will be used as label
				'name'  => __( 'Video ID', 'reader' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}video",
				'desc'  => __( 'Write Your Vedio ID Only', 'reader' ),
				'type'  => 'textarea',
				// Default value (optional)
				'std'   => ''
			),
			array(
				'name'     => __( 'Select Vedio Type/Source', 'reader' ),
				'id'       => "{$prefix}video_source",
				'type'     => 'select',
				// Array of 'value' => 'Label' pairs for select box
				'options'  => array(
					'1' => __( 'Embed Code', 'reader' ),
					'2' => __( 'YouTube', 'reader' ),
					'3' => __( 'Vimeo', 'reader' ),
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				'std'         => '1'
			),
			
		)
	);

	$meta_boxes[] = array(
		'id' => 'post-meta-gallery',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Post Gallery Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'post'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				'name'             => __( 'Gallery Image Upload', 'reader' ),
				'id'               => "{$prefix}gallery_images",
				'type'             => 'image_advanced',
				'max_file_uploads' => 8,
			)			
		)
	);

	return $meta_boxes;
}

	

/*
	$meta_boxes[] = array(
		'id' => 'slider-post-meta',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Slider Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'slider'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				'name'             => __( 'Heading 1', 'reader' ),
				'id'               => "{$prefix}heading1",
				'type'             => 'text',
				'desc'  		   => __( 'Use <span> tag for Text Color.', 'reader' ),
			),
			array(
				'name'             => __( 'Heading 1 Animation', 'reader' ),
				'id'               => "{$prefix}heading1_anim",
				'type'             => 'select',
				'desc'  		   => __( 'Select Animation Type.', 'reader' ),
				'options'  		   => 	$animation,
				'multiple'    	   => false,
				'std'              => ''
			),


			array(
				'name'             => __( 'Heading 2', 'reader' ),
				'id'               => "{$prefix}heading2",
				'type'             => 'text',
			),
			array(
				'name'             => __( 'Heading 2 Animation', 'reader' ),
				'id'               => "{$prefix}heading2_anim",
				'type'             => 'select',
				'desc'  		   => __( 'Select Animation Type.', 'reader' ),
				'options'  		   => 	$animation,
				'multiple'         => false,
				'std'              => ''
			),


			array(
				'name'             => __( 'Heading 3', 'reader' ),
				'id'               => "{$prefix}heading3",
				'type'             => 'text',
			),
			array(
				'name'             => __( 'Heading 3 Animation', 'reader' ),
				'id'               => "{$prefix}heading3_anim",
				'type'             => 'select',
				'desc'  		   => __( 'Select Animation Type.', 'reader' ),
				'options'  		   => 	$animation,
				'multiple'         => false,
				'std'              => ''
			),

			array(
				'name'             => __( 'Slider Text', 'reader' ),
				'id'               => "{$prefix}slider_more_text",
				'type'             => 'text',
				'desc'  		   => __( 'Slider Button More Text.', 'reader' ),
				'std'              => 'Get Started'
			),
			array(
				'name'             => __( 'Slider More URL', 'reader' ),
				'id'               => "{$prefix}slider_text_url",
				'type'             => 'text',
				'desc'  		   => __( 'URl of Slider More Button.', 'reader' ),
				'std'   => '#'
			),
		)
	);


	$meta_boxes[] = array(
		'id' => 'team-post-meta',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Team Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'team'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				'name' 		=> __( 'Name', 'reader' ),
				'id' 		=> "{$prefix}team_member_name",
				'type' 		=> 'text',
				), 
			array(
				'name' 		=> __( 'Designation', 'reader' ),
				'id' 		=> "{$prefix}team_member_designation",
				'type' 		=> 'text'
				),  
			array(
				'name' 		=> __( 'Short Description', 'reader' ),
				'id' 		=> "{$prefix}team_desc",
				'type' 		=> 'textarea',
				),            
			array(
				'name' 		=> __('Twitter URL',"reader"),
				'id' 		=> "{$prefix}social_twitter",
				'type'      => 'text',
				'std'       =>''
				),
			array(
				'name'      => __('Facebook URL',"reader"),
				'id'        => "{$prefix}social_facebook",
				'type'      => 'text',
				'std'       =>''
				),
			array(
				'name'      => __('Dribbble URL',"reader"),
				'id'        => "{$prefix}social_dribbble",
				'type'      => 'text',
				'std'       =>''
				),
			array(
				'name'      => __('Google Plus URL',"reader"),
				'id'        => "{$prefix}social_google_plus",
				'type'      => 'text',
				'std'       =>''
				),
			array(
				'name'      => __('Linkedin URL',"reader"),
				'id'        => "{$prefix}social_linkedin",
				'type'      => 'text',
				'std'       =>''
				),			
			array(
				'name'      => __('Animation Type',"reader"),
				'id'        => "{$prefix}team_animation",
				'type'      => 'select',
				'options'  	=> 	$animation,
				'std'		=>'bounceInUp',
				'multiple'  => false,
				),
		)
	);


	$meta_boxes[] = array(
		'id' => 'service-post-meta',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Team Settings', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'service'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
 
			array(
				'name' 		=> __( 'Service Title', 'reader' ),
				'id' 		=> "{$prefix}service_title",
				'type' 		=> 'text'
				),  
			array(
				'name' 		=> __('Service Description',"reader"),
				'id' 		=> "{$prefix}service_desc",
				'type'      => 'textarea',
				'std'       =>''
				),          
			array(
				'name' 		=> __( 'Service Icon', 'reader' ),
				'id' 		=> "{$prefix}service_icon",
				'type' 		=> 'select',
				'desc'  	=> __( "Select Icons. <a href='http://designmodo.com/linecons-free/'' target='_blank'>More Details</a>", "reader" ),
				'options'  	=> 	$linecons,
				), 


		)
	);

	$meta_boxes[] = array(
		'id' => 'post-type-portfolio',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title' => __( 'Portfolio Sceenshots', 'reader' ),

		// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
		'pages' => array( 'portfolio'),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context' => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority' => 'high',

		// Auto save: true, false (default). Optional.
		'autosave' => true,

		// List of meta fields
		'fields' => array(
			array(
				'name'             => __( 'Portfolio Image Upload', 'reader' ),
				'id'               => "{$prefix}portfolio_images",
				'type'             => 'image_advanced',
				'max_file_uploads' => 5,
			),			
			array(
				'name'             => __( 'Client Name', 'reader' ),
				'id'               => "{$prefix}portfolio_client_name",
				'type'             => 'text',
			),
			array(
				'name'             => __( 'Project End Date', 'reader' ),
				'id'               => "{$prefix}portfolio_date",
				'type'             => 'date',
			),
			array(
				'name'             => __( 'Project URL', 'reader' ),
				'id'               => "{$prefix}portfolio_url",
				'type'             => 'text',
			),




		)
	);
	*/

