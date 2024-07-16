<aside id="mainSidebar">

	<?php
		//logic to remove the form on the ESP listing because Rob requested "-- Remove the search field because there are only 2 staff listed on that page" 09-11-2020
		if(!is_page(184)){
			?>
	<section>
		<label for="dsearch" class="hidden" id="directorySearch">Directory Search: </label>
		<input type="text" name="dsearch" class="text-input" aria-labelledby="directorySearch" id="sidebar-filter" value="" placeholder="<?php if(is_page($post = '40')){echo 'Search Administration & Main Office';}elseif(is_page($post = '42744')){ echo 'Search Counseling Staff'; }elseif(is_page($post = '72')){ echo 'Search Teachers'; }else{ echo 'Search our Staff...';} ?>" />
		<img class="directorySearchIcon" src="//globalassets.provo.edu/image/icons/search-lt.svg" alt="" />
	</section>
			<?php
		}
	?>
	<section>
		<h1>Teachers &amp; Staff</h1>
		<?= get_post(16049)->post_content; ?>
	</section>
</aside>
