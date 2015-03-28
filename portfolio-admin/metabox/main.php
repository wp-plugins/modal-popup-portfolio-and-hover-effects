<?php



return array(
	array(
		'type'      => 'group',
		'repeating' => false,
		'sortable'  => true,
		'name'      => 'portfolios',
		'priority'  => 'high',
		'title'     => __('Portfolio Information', 'vp_textdomain'),
		'fields'    => array(
		
			
			array(
			'type' => 'notebox',
			'name' => 'noteboxforport',
			'label' => __('enter your all description', 'vp_textdomain'),
			'description' => __('Check all effects and documentation of this plugin <a href="http://www.demo.wpcops.com" target="_blank">click here</a>','vp_textdomain'),
			'status' => 'normal',
		),
		
		 array(
			'type' => 'textbox',
			'name' => 'title',
			'label' => __('Enter your portoflio title', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Title Here',
			),
			
			array(
			'type' => 'textarea',
			'name' => 'desc',
			'label' => __('Enter your portfolio small desciption', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'enter your small desciption max 100 word',
			'validation' => 'maxlength[100]', 
			),

			

			array(
			'type' => 'textbox',
			'name' => 'button_text',
			'label' => __('Enter your URL title', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Read more',
			),
			
			 array(
			'type' => 'upload',
			'name' => 'port_image',
			'label' => __('portfolio Image', 'vp_textdomain'),
			//'description' => __('Media uploader, using the powerful WP Media Upload', 'vp_textdomain'),
			'default' => '#',
			),
			
			

			
			
			array(
			'type' => 'notebox',
			'name' => 'notebox',
			'label' => __('This section just for modal', 'vp_textdomain'),
			'description' => __('place your all details for portfolio', 'vp_textdomain'),
			'status' => 'normal',
		),
			
			 			
			
			array(
			'type' => 'textbox',
			'name' => 'companyname',
			'label' => __('Company Name ', 'vp_textdomain'),
			'description' => __('Name of portfolio Company', 'vp_textdomain'),
			'default' => 'WpCops development limited',
			), 
			
			array(
			'type' => 'textbox',
			'name' => 'tusks',
			'label' => __('tusks name', 'vp_textdomain'),
			'description' => __('Name of portfolio author', 'vp_textdomain'),
			'default' => 'Neil Oria',
			
			),
			
			array(
			'type' => 'textarea',
			'name' => 'Executive',
			'label' => __('Executives name', 'vp_textdomain'),
			'description' => __('Names of executives', 'vp_textdomain'),
			
			), 
				

        array(
			'type' => 'textarea',
			'name' => 'portfoliodesciption',
			'label' => __('portfolio description', 'vp_textdomain'),
			'description' => __('write portfolio description in this feild', 'vp_textdomain'),
			
			 
			
			),			

            array(
			'type' => 'upload',
			'name' => 'portpic_1',
			'label' => __('Modal Image 1', 'vp_textdomain'),
			//'description' => __('Media uploader, using the powerful WP Media Upload', 'vp_textdomain'),
			'default' => '#',
			),
			
			 array(
			'type' => 'upload',
			'name' => 'portpic_2',
			'label' => __('Modal Image 2', 'vp_textdomain'),
			//'description' => __('Media uploader, using the powerful WP Media Upload', 'vp_textdomain'),
			'default' => '#',
			),
					

            array(
			'type' => 'upload',
			'name' => 'portpic_3',
			'label' => __('Modal Image 3', 'vp_textdomain'),
			//'description' => __('Media uploader, using the powerful WP Media Upload', 'vp_textdomain'),
			'default' => '#',
			),
			
			
			 array(
			'type' => 'upload',
			'name' => 'portpic_4',
			'label' => __('modal Image 4', 'vp_textdomain'),
			//'description' => __('Media uploader, using the powerful WP Media Upload', 'vp_textdomain'),
			'default' => '#',
			),
								
			array(
			'type' => 'notebox',
			'name' => 'commingsoon',
			'label' => __('Comming soon for premium version.....', 'vp_textdomain'),
			'description' => __('', 'vp_textdomain'),
			'status' => 'normal',
		),
			
			 
			
			
			array(
			'type' => 'textbox',
			'name' => 'email',
			'label' => __('your email', 'vp_textdomain'),
			'description' => __('enter your Email', 'vp_textdomain'),
			'validation' => 'email',
			), 
			
			array(
			'type' => 'textbox',
			'name' => 'view',
			'label' => __('portfolio website URL', 'vp_textdomain'),
			'description' => __('enter your portfolio URL', 'vp_textdomain'),
			'validation' => 'email',
			), 
			

			
			array(
			'type' => 'textbox',
			'name' => 'first-category',
			'label' => __('First category', 'vp_textdomain'),
			'description' => __('enter your first category', 'vp_textdomain'),
			'validation' => 'email',
			),
			
			array(
			'type' => 'textbox',
			'name' => 'sub-category',
			'label' => __('sub-Category', 'vp_textdomain'),
			'description' => __('enter your work sub-category', 'vp_textdomain'),
			'validation' => 'email',
			), 
			
             array(
			'type' => 'date',
			'name' => 'portdate_3',
			'label' => __('Completed Date ', 'vp_textdomain'),
			'description' => __('enter your portfolio finish date', 'vp_textdomain'),
			'format' => 'yy-mm-dd',
			'default' => '-1W',
			),

		),
	),
);

/**
 * EOF
 */