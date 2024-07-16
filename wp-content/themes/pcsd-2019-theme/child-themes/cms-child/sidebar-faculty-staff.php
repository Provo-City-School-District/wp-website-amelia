<aside id="mainSidebar">
	<?php
		//logic to remove the form on the ESP listing because Rob requested "-- Remove the search field because there are only 2 staff listed on that page" 09-11-2020
		if(!is_page(28)){
			?>
	<section>
		<label for="dsearch" class="hidden" id="directorySearch">Directory Search: </label>
		<input type="text" name="dsearch" class="text-input" aria-labelledby="directorySearch" id="sidebar-filter" value="" placeholder="<?php if(is_page($post = '42740')){echo 'Search Administration & Main Office';}elseif(is_page($post = '42744')){ echo 'Search Counseling Staff'; }elseif(is_page($post = '42742')){ echo 'Search Teachers'; }else{ echo 'Search our Staff...';} ?>" />
		<img class="directorySearchIcon" src="//globalassets.provo.edu/image/icons/search-lt.svg" alt="" />
	</section>
			<?php
		}
	?>
	<section>
		<h1>Teachers &amp; Staff</h1>
		<?php
		//echo do_shortcode( '[facultyMenu]' ); 
		$faculty_Menu = get_post(16707);
		echo $faculty_Menu->post_content;
		?>
	</section>
	<?php
		//ID 24 is Admin Directory. 16649 is the Counseling Directory. 28 is the ESP directory
		if(!is_page(array(24, 16649, 28))) {
			?>
	<section>
		<h1>Find Your Teacher by Category</h1>
			<ul>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/art">Arts</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/english">English</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/health">Health</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/language-arts">Language Arts</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/music">Music</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/science">Science</a></li>
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/social-studies">Social Studies</a></li>
				<!-- <li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/specialeducation">Special Education</a></li> -->
				<li class="int"><a href="<?php echo get_home_url(); ?>/faculty-staff/teacher-course-directory/technology">Technology</a></li>
			</ul>
	</section>
			<?php
		}
	?>
</aside>
