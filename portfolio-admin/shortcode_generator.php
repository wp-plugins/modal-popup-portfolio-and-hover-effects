<?php

return array(
// menus
'Hover' => array(
	// shortcodes collection in this menu
	'elements' => array(

			// shortcode with attribute
			'acb1' => array(
			'title' => __('Portfolio Shortcode Settings', 'qualia_td'),
			'code' => '[portfolios]',
			'attributes' => array(
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),


					),
					
					// Select Style from generator
					array(
					'type' => 'select',
					'name' => 'style',
					'label' => __('Select Hover Style', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(	
						array(
							'value' => 'style1',
							'label' => 'Style 1',
						),	
						array(
							'value' => 'style2',
							'label' => 'Style 2',
						),		
						array(
							'value' => 'style3',
							'label' => 'Style 3',
						),array(
							'value' => 'style4',
							'label' => 'Style 4',
						),array(
							'value' => 'style5',
							'label' => 'Style 5',
						),	
	
				),	),			

					array(
						'type' => 'select',
						'name' => 'google_font',
						'label' => __('Text Font', 'vp_textdomain'),
						'description' => __('Select Font', 'vp_textdomain'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),				
					array(
						'type'  => 'color',
						'name'  => 'text_color',
						'label' => __('Text Color', 'vp_textdomain'),
						//'default' => '#dddddd',
					),										
					array(
						'type' => 'checkbox',
						'name' => 'link_open',
						'label' => __('Open In New Tab?', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => '_blank',
							),
						),
					),
					


				
				),
			),
		// ... more elements
			
			
			
			
	// shortcodes collection in this menu//

			/* shortcode with attribute
			'acb2' => array(
			'title' => __('Button Settings', 'qualia_td'),
			'code' => '[hover style="style3"]',
			'attributes' => array(
					array(
						'type'  => 'textbox',
						'name'  => 'text',
						'label' => __('Button Name', 'vp_textdomain'),


					),
					
					


				
				),
			),	*/	
		),
	),	
	
	
// ... more menus
);

?>