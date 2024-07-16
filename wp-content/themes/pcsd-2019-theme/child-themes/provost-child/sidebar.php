<aside id="mainSidebar">
			<section class="calendar-agenda">
				<h1>Today’s Events</h1>
				<?php echo do_shortcode('[calendar id="172"]'); ?>
				<a href="<?php echo get_home_url(); ?>/calendar/">Provost Elementary School Calendar (View Month)</a>
			</section>
			<section>
				<h1>Parent Resources</h1>
				<ul class="imagelist">
					<li>
						<a href="https://canvas.provo.edu">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pcsd-canvas-logo-white.png" alt="" />
							<span>Canvas Login</span>
						</a>
					</li>
					<li>
						<a href="https://provost.provo.edu/school-information/community-resources/">
							<img src="https://globalassets.provo.edu/image/icons/find-your-teacher.svg" alt="" />
							<span>Community Resources</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_home_url(); ?>/faculty-staff/teachers-directory/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/find-your-teacher.svg" alt="" />
							<span>Find Your Teacher</span>
						</a>
					</li>
					<li>
						<a href="https://grades.provo.edu/public/">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/power-school.png" alt="" />
							<span>PowerSchool (Grades & Attendance)</span>
						</a>
					</li>
					<?php 
					//call in Child Nutrition items
					echo do_shortcode( '[cn-sidebar]' ); 
					?>
					<li>
						<a href="https://provo.edu/student-services/kindergarten-registration-during-closure/">
							<img src="https://globalassets.provo.edu/image/icons/apply-for-free-meals.svg" alt="" />
							<span>Spring Kindergarten Registration</span>
						</a>
					</li>
					<li>
						<a href="https://www.schools.utah.gov/curr/parentguides">
							<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
							<span>USBE Parent Guides to Student Success</span>
						</a>
					</li>
					<li>
						<a href="https://www.schools.utah.gov/curr/parentguides">
							<img src="https://globalassets.provo.edu/image/icons/policies-lt.svg" alt="" />
							<span>School Report Card</span>
						</a>
					</li>
					<li>
						<a href="https://provost.provo.edu/school-information/great-brain-projects/">
							<img src="https://globalassets.provo.edu/image/icons/classroom.svg" alt="" />
							<span>Great Brain Projects</span>
						</a>
					</li>
				</ul>
				<a href="https://www.peachjar.com/index.php?region=33075&a=28&b=138"><img src="https://provost.provo.edu/wp-content/uploads/2019/05/button-orange-eflyers_202x46.png" alt="Link to PeachJar Fliers"></a>
				<a href="https://safeut.med.utah.edu/"><img src="https://provost.provo.edu/wp-content/uploads/2019/02/safeUTcrisisline.jpg" alt="Link to SafeUT information"></a>
				<a href="https://www.saferoutesutahmap.com/organization/schools/map"><img src="https://provo.edu/wp-content/uploads/2020/03/saferoutesutah.jpg" alt="Link to Safe Routes UT information"></a>
			</section>
		</aside>
