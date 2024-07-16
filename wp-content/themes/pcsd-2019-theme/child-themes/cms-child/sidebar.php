<aside id="mainSidebar">	
	<section>
		<h1>About Centennial</h1>
		<ul class="imagelist">
			<li>
				<a href="<?php bloginfo('url') ?>/contact-our-school/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/telephone.png" alt="" />
					<span>Contact Our School</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/hours-of-operation/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/clock.png" alt="" />
					<span>Hours of Operation</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/community-council/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/council.png" alt="" />
					<span>Community Council</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/pta/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pta.png" alt="" />
					<span>Parent Teacher Association</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/faculty-staff/teacher-license-information/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/license.png" alt="" />
					<span>Teacher License Information</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/mission-vision/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/file-white.png" alt="" />
					<span>Mission & Vision</span>
				</a>
			</li>
			<li>
				<a href="https://reportcard.schools.utah.gov/School/OverAllPerformance?SchoolID=1237&DistrictID=1222&SchoolNbr=404&SchoolLevel=K8&IsSplitSchool=0&schoolyearendyear=2023">
					<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
					<span>School Report Card</span>
				</a>
			</li>
		</ul>
	</section>

	<section class="calendar-agenda">
		<h1>Today’s Events</h1>
		<?php echo do_shortcode('[calendar id="17255"]'); ?>
		<a href="<?php echo get_home_url(); ?>/student-essentials/calendar/">View School Calendar</a>
	</section>
	<section class="buttonAddons">
		<a href="https://www.peachjar.com/index.php?region=33081&a=28&b=138"><img src="https://timpview.provo.edu/wp-content/uploads/2019/05/button-orange-eflyers_202x46.png" alt="Link to PeachJar Fliers"></a>
		<a href="https://safeut.med.utah.edu/"><img src="https://timpview.provo.edu/wp-content/uploads/2019/03/safeUTcrisisline.jpg" alt="Link to SafeUT information"></a>
		<a href="https://www.saferoutesutahmap.com/organization/schools/map"><img src="https://provo.edu/wp-content/uploads/2020/03/saferoutesutah.jpg" alt="Link to Safe Routes UT information"></a>
	</section>
</aside>
