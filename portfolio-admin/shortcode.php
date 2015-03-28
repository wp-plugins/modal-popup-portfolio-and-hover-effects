<?php


// Register Shortcode
function portfolios_custom_post_type_shortcode($atts){
	extract( shortcode_atts( array(
	
		'category' => '',	
		'style' => '',	
		'google_font' => '',	
		'text_color' => '',	
		'link_open' => '',	
		'text' => '',	
		
		
		
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'portfolios', 'portfolios_cat' => $category)
        );
		
			$output = '<div class="portfolios-sections" style="margin-left:22px">';
		

			
	
	
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();	
		
	
		
		$output .= '<script type="text/javascript">
		
		jQuery("#'.$id.'").reveal({
		
     animation: "fadeAndPop",
     animationspeed: 300,                       
     closeonbackgroundclick: true,             
     dismissmodalclass: "close-reveal-modal"    
});

</script>';

		
			
	
		$title = vp_metabox('infos.portfolios.0.title', false);
		$desc = vp_metabox('infos.portfolios.0.desc', false);
		$port_image = vp_metabox('infos.portfolios.0.port_image', false);
		$companyname = vp_metabox('infos.portfolios.0.companyname', false);
		$tusks = vp_metabox('infos.portfolios.0.tusks', false);
		$Executive = vp_metabox('infos.portfolios.0.Executive', false);
		$portfoliodesciption = vp_metabox('infos.portfolios.0.portfoliodesciption', false);
		$portpic_1 = vp_metabox('infos.portfolios.0.portpic_1', false);
		$portpic_2 = vp_metabox('infos.portfolios.0.portpic_2', false);
		$portpic_3 = vp_metabox('infos.portfolios.0.portpic_3', false);
		$portpic_4 = vp_metabox('infos.portfolios.0.portpic_4', false);
		$button_text = vp_metabox('infos.portfolios.0.button_text', false);


		

		
		
		if ($style==style1) {
		
				$output .='<div id="'.$id.'" class="reveal-modal">
		
	<div id="profolio-wrapps">	
	
	<div class="fullscontent">
		     <h1>'.$title.'</h1>
 
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_1.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_2.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_3.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_4.'" alt="" ></a>

</div>
	 
	 
	 </div>
	
	<div class="sidebar-portfolios">
<h3>Client:</h3>
<p>'.$companyname.'</p>

<h3>Task:</h3>
<p>'.$tusks.'<p>
<h3>Executives:</h3>
<p>'.$Executive.'<p>
<h3>Description:</h3>
<p>'.$portfoliodesciption.'<p>
 
 </div>


     <a class="close-reveal-modal">&#215;</a>
</div>
</div>
';
	
		
		
		$output .= '<div class="grid1">
		
					<figure class="effect-roxy">
				
						<img src="'.$port_image.'" alt="img12"/ >
						
						<figcaption>
							
                     <h2 style="color:white;">'.$title.'</h2>
					 <p>'.$desc.'</p>
<h3><a href="#" class="infos" data-reveal-id="'.$id.'" style="color:white;">'.$button_text.'</a></h3>
							  
							 
							
						</figcaption>			
					</figure>

				</div>';
		}
		
     		if ($style==style2) {
			
			
		
				$output .='<div id="'.$id.'" class="reveal-modal">
		
	<div id="profolio-wrapps">	
	
	<div class="fullscontent">
		     <h1>'.$title.'</h1>
 
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_1.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_2.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_3.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_4.'" alt="" ></a>

</div>
	 
	 
	 </div>
	
	<div class="sidebar-portfolios">
<h3>Client:</h3>
<p>'.$companyname.'</p>

<h3>Task:</h3>
<p>'.$tusks.'<p>
<h3>Executives:</h3>
<p>'.$Executive.'<p>
<h3>Description:</h3>
<p>'.$portfoliodesciption.'<p>
 
 </div>


     <a class="close-reveal-modal">&#215;</a>
</div>
</div>
';


		$output .= '<div class="grid1">
					<figure class="effect-ruby">
						<img src="'.$port_image.'" alt="img12"/ >
						<figcaption>
						
 <h2 style="color:white;">'.$title.'</h2>
					 <p>'.$desc.'</p>
<h3><a href="#" class="infos" data-reveal-id="'.$id.'" style="color:white;">'.$button_text.'</a></h3>
							
						</figcaption>			
					</figure>

				</div>';
		}	

		if ($style==style3) {
		
				$output .='<div id="'.$id.'" class="reveal-modal">
		
	<div id="profolio-wrapps">	
	
	<div class="fullscontent">
		     <h1>'.$title.'</h1>
 
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_1.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_2.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_3.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_4.'" alt="" ></a>

</div>
	 
	 
	 </div>
	
	<div class="sidebar-portfolios">
<h3>Client:</h3>
<p>'.$companyname.'</p>

<h3>Task:</h3>
<p>'.$tusks.'<p>
<h3>Executives:</h3>
<p>'.$Executive.'<p>
<h3>Description:</h3>
<p>'.$portfoliodesciption.'<p>
 
 </div>


     <a class="close-reveal-modal">&#215;</a>
</div>
</div>
';
		
		$output .= '<div class="portfolios portfolios-third">
                    <a href="#" class="infos" data-reveal-id="'.$id.'"><img src="'.$port_image.'" alt="" >
                    <div class="masks">
      <h2><a href="#" class="infos" data-reveal-id="'.$id.'" style="color:white;">'.$title.'</a></h2></a>
                  
                    </div>
                </div> ';
		}		
		
		if ($style==style4) {
		
				$output .='<div id="'.$id.'" class="reveal-modal">
		
	<div id="profolio-wrapps">	
	
	<div class="fullscontent">
		     <h1>'.$title.'</h1>
 
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_1.'" alt="" ></a>



</div>
	 
	 
	 </div>
	
	<div class="sidebar-portfolios">
<h3>Client:</h3>
<p>'.$companyname.'</p>

<h3>Task:</h3>
<p>'.$tusks.'<p>
<h3>Executives:</h3>
<p>'.$Executive.'<p>
<h3>Description:</h3>
<p>'.$portfoliodesciption.'<p>
 
 </div>


     <a class="close-reveal-modal">&#215;</a>
</div>
</div>
';
		$output .= '	<div class="img-box">
	<div class="plus"><a href="#" class="infos" data-reveal-id="'.$id.'">
	<p>+</p></a></div>
		
		<img src="'.$port_image.'" alt="" />
		<div class="blr">
			<h2><a href="#" class="infos" data-reveal-id="'.$id.'" style="color:white;">'.$title.'</a></h2>
			<p style="color:white;">'.$desc.'</p>
<h3><a href="#" class="infos" data-reveal-id="'.$id.'" style="color:white;">'.$button_text.'</a></h3>
						
		</div>
	</div> ';
		}		
		
		if ($style==style5) {
		
				$output .='<div id="'.$id.'" class="reveal-modal">
		
	<div id="profolio-wrapps">	
	
	<div class="fullscontent">
		     <h1>'.$title.'</h1>
 
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_1.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_2.'" alt="" ></a>

</div>
<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_3.'" alt="" ></a>

</div>

<div class="ports-img">
 <a target="_blank" href="#"><img src="'.$portpic_4.'" alt="" ></a>

</div>
	 
	 
	 </div>
	
	<div class="sidebar-portfolios">
<h3>Client:</h3>
<p>'.$companyname.'</p>

<h3>Task:</h3>
<p>'.$tusks.'<p>
<h3>Executives:</h3>
<p>'.$Executive.'<p>
<h3>Description:</h3>
<p>'.$portfoliodesciption.'<p>
 
 </div>


     <a class="close-reveal-modal">&#215;</a>
</div>
</div>
';
		
		$output .= '<div class="griders">
  <div class="hoveritem">
   <a href="#" class="infos" data-reveal-id="'.$id.'">
      <div class="hovercontent">
        <h1>'.$title.'</h1>
        <h3>'.$companyname.'</h3>
      </div>
   <a href="#" class="infos" data-reveal-id="'.$id.'" style="color:white;">   <img src="'.$port_image.'"/></a>
    </a>
  </div>
</div>';
		}		
		
		

			
			
	
	
	
	endwhile;
	$output .='</div>';
	wp_reset_query();
	return $output;
}

add_shortcode('portfolios', 'portfolios_custom_post_type_shortcode');

?>