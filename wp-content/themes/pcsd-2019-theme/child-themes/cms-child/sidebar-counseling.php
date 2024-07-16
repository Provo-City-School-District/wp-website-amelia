<aside id="mainSidebar">
	<h1>Counseling &amp; Registration</h1>
	<?php
		//echo do_shortcode( '[facultyMenu]' ); 
		$counsel_menu = get_post(16640);
		echo $counsel_menu->post_content;
		?>
</aside>