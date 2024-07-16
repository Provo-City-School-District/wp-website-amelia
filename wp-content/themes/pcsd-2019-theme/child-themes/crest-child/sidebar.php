<aside id="mainSidebar">
			<img src="https://canyoncrest.provo.edu/wp-content/uploads/2023/11/best-elementary-school-2024.png" class="center" alt="Best Elementary Schools by US News Badge" />
				

			<section class="calendar-agenda">
				<h1>Today’s Events</h1>
				<?php echo do_shortcode('[calendar id="172"]'); ?>
				<a href="<?php echo get_home_url(); ?>/school-information/calendar/">Canyon Crest Elementary School Calendar (Month View)</a>
			</section>
			<section>
				<h1>Parent Resources</h1>
				<ul class="imagelist">

					<li>
						<a href="https://grades.provo.edu/public/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/power-school.png" alt="" />
							<span>PowerSchool (Grades & Attendance)</span>
						</a>
					</li>
					<li>
						<a href="https://canvas.provo.edu">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pcsd-canvas-logo-white.png" alt="" />
							<span>Canvas Login</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-your-teacher.svg" alt="" />
							<span>Find Your Teacher</span>
						</a>
					</li>
					<li>
						<a href="https://canyoncrest.provo.edu/wp-content/uploads/2023/08/canyon-crest-a-b-calendar-fy24-08152023.pdf">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/all-events-calendar.svg" alt="" />
							<span>A/B Calendar</span>
						</a>
					</li>
					<?php 
					//call in Child Nutrition items
					echo do_shortcode( '[cn-sidebar]' ); 
					?>
					<li>
						<a href="https://www.schools.utah.gov/curr/parentguides">
							<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
							<span>USBE Parent Guides to Student Success</span>
						</a>
					</li>
					<li>
						<a href="https://reportcard.schools.utah.gov/School/OverAllPerformance?SchoolID=1234&DistrictID=1222&SchoolNbr=128&SchoolLevel=K8&IsSplitSchool=0&schoolyearendyear=2023">
							<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
							<span>School Report Card</span>
						</a>
					</li>
				</ul>
				<a href="https://www.peachjar.com/index.php?region=33061&a=28&b=138"><img src="https://canyoncrest.provo.edu/wp-content/uploads/2019/05/button-orange-eflyers_202x46.png" alt="Link to PeachJar Fliers"></a>
				<a href="https://safeut.med.utah.edu/"><img src="https://canyoncrest.provo.edu/wp-content/uploads/2023/12/safeut.png" alt="Link to SafeUT information"></a>
								<a href="https://www.saferoutesutahmap.com/organization/schools/map"><img src="https://provo.edu/wp-content/uploads/2020/03/saferoutesutah.jpg" alt="Link to Safe Routes UT information"></a>

			</section>
		</aside>
