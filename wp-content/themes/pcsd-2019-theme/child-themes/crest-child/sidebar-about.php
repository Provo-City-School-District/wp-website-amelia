<aside id="mainSidebar">
	<h1>School Information</h1>
	<?php 
	// echo do_shortcode( '[schoolinfo]' );
	$schoolinfo_menu = get_post(117);
	echo do_shortcode($schoolinfo_menu->post_content);
	?>
</aside>