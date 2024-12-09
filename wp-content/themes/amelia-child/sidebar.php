<aside id="mainSidebar">
	<?php
	$page_id = 23085;
	$page_data = get_page($page_id);
	$content = apply_filters('the_content', $page_data->post_content);
	echo do_shortcode($content);
	?>
</aside>