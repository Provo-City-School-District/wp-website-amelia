<aside id="mainSidebar">
			
			<section>
				<h1>Welcome to Independence</h1>
					<video controls> 
						<source src="https://independence.provo.edu/wp-content/uploads/videos/2018-welcomeToIHS-720.mp4" type="video/mp4">   
							Your browser doesn't support HTML5 video. Here is a <a href="http://independence.provo.edu/wp-content/uploads/videos/2018-welcomeToIHS-720.mp4">link to the Welcome video</a> instead.
					</video>				
			</section>
			<section class="calendar-agenda">	
				<h1>Today’s Events</h1>
				<?php echo do_shortcode('[calendar id="15986"]'); ?>
				<a href="<?php echo get_home_url(); ?>/school-information/calendar/">View All Events Calendar</a>
			</section>
			<section>
				<h1>Student Essentials</h1>
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
						<a href="<?php echo get_home_url(); ?>/our-teachers-staff/teachers-directory/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-your-teacher.svg" alt="" />
							<span>Find Your Teacher</span>
						</a>
					</li>
					<li>
						<a href="https://provo.erplinq.com/FeePay_PSD/Account/Login">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pay-meals.svg" alt="" />
							<span>Pay School Fees</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/school-information/bell-schedule/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/bell-schedule.svg" alt="" />
							<span>Bell Schedule</span>
						</a>
					</li>
					<?= do_shortcode( '[cn-sidebar]' )?>
					<li>
						<a href="http://www.infofinderi.com/ifi/?cid=PCSD1CX16HAYK">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/bus-lt.svg" alt="" />
							<span>Bus Routes</span>
						</a>
					</li>
					<li>
						<a href="https://www.schools.utah.gov/curr/parentguides">
							<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
							<span>USBE Parent Guides to Student Success</span>
						</a>
					</li>
					<li>
						<a href="https://reportcard.schools.utah.gov/School/OverAllPerformance?SchoolID=1250&DistrictID=1222&SchoolNbr=730&SchoolLevel=HS&IsSplitSchool=0&schoolyearendyear=2023">
							<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
							<span>School Report Card</span>
						</a>
					</li>
				</ul>
				<a href="https://www.peachjar.com/index.php?region=33081&a=28&b=138"><img src="https://timpview.provo.edu/wp-content/uploads/2019/05/button-orange-eflyers_202x46.png" alt="Link to PeachJar Fliers"></a>
				<a href="https://safeut.med.utah.edu/"><img src="https://timpview.provo.edu/wp-content/uploads/2019/03/safeUTcrisisline.jpg" alt="Link to SafeUT information"></a>
				<a href="https://www.saferoutesutahmap.com/organization/schools/map"><img src="https://provo.edu/wp-content/uploads/2020/03/saferoutesutah.jpg" alt="Link to Safe Routes UT information"></a>
			</section>
		</aside>