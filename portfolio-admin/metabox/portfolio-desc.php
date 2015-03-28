<?php



return array(
	array(
		'type'      => 'group',
		'repeating' => false,
		'sortable'  => true,
		'name'      => 'effects',
		'priority'  => 'normal',
		'title'     => __('responsive Hover Effects Setting options', 'vp_textdomain'),
		
		'fields' => array(				

		array(
			'type' => 'notebox',
			'name' => 'notebox',
			'label' => __('plugin Author Comment', 'vp_textdomain'),
			'description' => __('cooming soon ', 'vp_textdomain'),
			'status' => 'high',
		),
		

			
				array(
					'type' => 'slider',
					'name' => 'width',
					'label' => __('Image Width', 'vp_textdomain'),
					'description' => __('You can change image width in pixel formate without (px)', 'vp_textdomain'),
					'min' => '100',
					'max' => '300',
					'step' => '1',
					'default' => '200',
				),	

				array(
					'type' => 'slider',
					'name' => 'height',
					'label' => __('Image Height', 'vp_textdomain'),
					'description' => __('You can change image height in pixel formate without (px)', 'vp_textdomain'),
					'min' => '100',
					'max' => '300',
					'step' => '1',
					'default' => '200',
				),	

				array(
					'type' => 'slider',
					'name' => 'letf_right',
					'label' => __('Move Image Left Right', 'vp_textdomain'),
					'description' => __('You can move image left and right in pixel formate without (px)', 'vp_textdomain'),
					'min' => '-20',
					'max' => '100',
					'step' => '1',
					'default' => '12',
				),
		
			/*	array(
					'type' => 'notebox',
					'name' => 'nb_11',
					'label' => __('Info Announcement', 'vp_textdomain'),
					'description' => __('<a href="#">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</a>', 'vp_textdomain'),
					'status' => 'info',
					),
			*/
		),
	),
);
		
		
?>