<aside id="mainSidebar">
	<h1>School Information</h1>
	<?php
		//echo do_shortcode( '[facultyMenu]' ); 
		$schoolinfo_menu = get_post(16631);
		echo $schoolinfo_menu->post_content;
		?>
</aside>