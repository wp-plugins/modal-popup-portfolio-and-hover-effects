<?php
 
function add_portfolios_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-portfolios div.wp-menu-image:before {
content: "\f128";
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_portfolios_icons_styles' );
?>