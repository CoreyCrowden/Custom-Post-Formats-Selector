if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5a12a079e27b9',
	'title' => 'Post Format Audio',
	'fields' => array (
		array (
			'key' => 'field_5a12a079ea538',
			'label' => 'Feature Audio',
			'name' => 'feature-audio',
			'type' => 'oembed',
			'instructions' => 'Add an audio clip to be displayed as the feature content.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_format',
				'operator' => '==',
				'value' => 'audio',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5a12685b00a02',
	'title' => 'Post Format Gallery',
	'fields' => array (
		array (
			'key' => 'field_5a12685b0a012',
			'label' => 'Feature Gallery',
			'name' => 'feature-gallery',
			'type' => 'gallery',
			'instructions' => 'Select images to be shown as a feature gallery.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'prepend',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_format',
				'operator' => '==',
				'value' => 'gallery',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5a12a9082b22e',
	'title' => 'Post Format Link',
	'fields' => array (
		array (
			'key' => 'field_5a12a90833195',
			'label' => 'Feature Link',
			'name' => 'feature-link',
			'type' => 'url',
			'instructions' => 'Enter the URL (Website link) you want to feature. This post will not display as a page but as a direct link for users.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_format',
				'operator' => '==',
				'value' => 'link',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5a12812cc899f',
	'title' => 'Post Format Video',
	'fields' => array (
		array (
			'key' => 'field_5a12812ccf740',
			'label' => 'Feature Video',
			'name' => 'feature-video',
			'type' => 'oembed',
			'instructions' => 'Add a video to be displayed as the feature content.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_format',
				'operator' => '==',
				'value' => 'video',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
