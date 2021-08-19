<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Ikiraka</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Favicon-->
<link rel="shortcut icon" href="images/fav.png">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors.css">



</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
<header class="transparent sticky-header">
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="index.html"><img src="images/logo2.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a id="current" href="index.html">Home</a>
				</li>

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-jobs.html">Browse Jobs</a></li>
						<li><a href="browse-resumes.html">Browse Resumes</a></li>
						<li><a href="browse-categories.html">Browse Categories</a></li>
					</ul>
				</li>

				<li><a href="#">Dashboard</a>
					<ul>
						<li><a href="dashboard.html">Dashboard</a></li>
						<li><a href="dashboard-messages.html">Messages</a></li>
						<li><a href="dashboard-manage-resumes.html">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.html">Add Resume</a></li>
						<li><a href="dashboard-job-alerts.html">Job Alerts</a></li>
						<li><a href="dashboard-manage-jobs.html">Manage Jobs</a></li>
						<li><a href="dashboard-manage-applications.html">Manage Applications</a></li>
						<li><a href="dashboard-add-job.html">Add Job</a></li>
						<li><a href="dashboard-my-profile.html">My Profile</a></li>
					</ul>
				</li>

				<li><a href="contact.html">Contact</a></li>
			</ul>


			<ul class="float-right">
				<li><a href="signup.html"><i class="fa fa-user"></i> Sign Up</a></li>
				<li><a href="login.html"><i class="fa fa-lock"></i> Log In</a></li>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i></a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Banner
================================================== -->
<div id="banner" class="with-transparent-header parallax background" style="background-image: url(images/banner-home-02.jpg)" data-img-width="2000" data-img-height="1330" data-diff="300">
	<div class="container">
		<div class="sixteen columns">

			<div class="search-container">

				<!-- Form -->
				<h2>Send Posts</h2>
				<form class="" action="register.php" method="post">
					<input  type="text" name="title" placeholder="Title" value=""/>
					<input type="date" name="fromdate" readonly  placeholder="Posted On" value=""/>	<h3>Sign Up.</h3>
					<input type="date" name="todate" readonly  placeholder="Expiry Date" value=""/>
					<input type="text" name="uname"  placeholder="Username" value=""/><h4>S</h4><h4>S</h4>
					<input type="password" name="pword" placeholder="Password" value=""/>
					<input type="password" name="rppword"  placeholder="Repeat Password" value=""/><h4>S.</h4><h4>S.</h4>
					<input type="email" name="email"  placeholder="Email" value=""/><h4>S.</h4>
					<!-- <button><i class="fa fa-search"></i></button> -->

				<!-- Browse Jobs -->

					<br>
				 <button style="background-color:green"> SignUp</button> or <button style="background-color:red">Cancel...</button>

				</form>

			</div>

		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Categories -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-20 margin-top-10">Popular Categories</h3>

			<!-- Popular Categories -->
			<div class="categories-boxes-container">

				<!-- Box -->
				<a href="browse-jobs.html" class="category-small-box">
					<i class="ln ln-icon-Bar-Chart"></i>
					<h4>Accouting / Finance</h4>
					<span>0</span>
				</a>

				<!-- Box -->
				<a href="browse-jobs.html" class="category-small-box">
					<i class="ln ln-icon-Car"></i>
					<h4>Automotive Jobs</h4>
					<span>0</span>
				</a>

				<!-- Box -->
				<a href="browse-jobs.html" class="category-small-box">
					<i class="ln  ln-icon-Worker"></i>
					<h4>Construction / Facilities</h4>
					<span>0</span>
				</a>

				<!-- Box -->
				<a href="browse-jobs.html" class="category-small-box">
					<i class="ln  ln-icon-Student-Female"></i>
					<h4>Education / Training</h4>
					<span>0</span>
				</a>

				<!-- Box -->
				<a href="browse-jobs.html" class="category-small-box">
					<i class="ln ln-icon-Laptop-3"></i>
					<h4>Programming & Tech</h4>
					<span>0</span>
				</a>

				<!-- Box -->
				<a href="browse-jobs.html" class="category-small-box">
					<i class="ln ln-icon-Smartphone"></i>
					<h4>Digital Marketing</h4>
					<span>0</span>
				</a>

				<!-- Box -->
				<a href="browse-jobs.html" class="category-small-box">
					<i class="ln ln-icon-Globe"></i>
					<h4>Transportation / Logistics</h4>
					<span>0</span>
				</a>

				<!-- Box -->
				<a href="browse-jobs.html" class="category-small-box">
					<i class="ln ln-icon-People-onCloud"></i>
					<h4>Lifestyle</h4>
					<span>0</span>
				</a>

			</div>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>

		<a href="browse-categories.html" class="button centered">Browse All Categories</a>
		<div class="margin-bottom-55"></div>
	</div>
</div>


<div class="container">

	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<div class="listings-container">

			<!-- Listing -->
			<a href="job-page-alt.html" class="listing full-time">
				<div class="listing-logo">
					<img src="images/job-list-logo-01.png" alt="">
				</div>
				<div class="listing-title">
					<h4>GRAPHICS & DESIGN  - LOGO DESIGN <span class="listing-type">Part-Time</span></h4>
					<ul class="listing-icons">
						<li><i class="ln ln-icon-Management"></i> King</li>
						<li><i class="ln ln-icon-Map2"></i>  KG 17 Kimironko, Kigali, Rwanda</li>
						<li><i class="ln ln-icon-Money-2"></i> Rwf 20,000 - Rwf 50,000</li>
						<li><div class="listing-date new">new</div></li>
					</ul>
				</div>
			</a>
		</div>

		<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Job Spotlight</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>

		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>GRAPHICS & DESIGN  - LOGO DESIGN <span class="part-time">Freelance</span></h4></a>
								<span><i class="fa fa-map-marker"></i>Kigali</span>
								<span><i class="fa fa-money"></i>Rwf 20,000</span>
								<p>Looking for graphic designer to design a simple logo for my new agricultural company</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Education / Training<span class="freelance">Part-Time</span></h4></a>
								<span><i class="fa fa-map-marker"></i> Kigali</span>
								<span><i class="fa fa-money"></i> $25 / hour</span>
								<p>Hi, I am looking for somebody to give me private french lessons (intermediate level) on a daily basis after work. If you have a recommendation, that would be great!</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>


<section class="fullwidth-testimonial margin-top-15">

	<!-- Info Section -->
	<div class="container">
		<div class="sixteen columns">
			<h3 class="headline centered">
				What Our Users Say
				<span class="margin-top-25">We collect reviews from our users so you can get an honest opinion of what an experience with our platform are really like!</span>
			</h3>
		</div>
	</div>
	<!-- Info Section / End -->

	<!-- Testimonials Carousel -->
	<div class="fullwidth-carousel-container margin-top-20">
		<div class="testimonial-carousel testimonials">

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">"Ikiraka has tapped the trend towards freelance labor and gig-based opportunities by creating a marketplace to connect freelancers with employers who have projects to offer."</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-03.png" alt="">
					<h4>Daniel Kayijuka<span>HR Specialist</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">"Freelance workers like myself can search for projects based on categories like web and software development, data science and analytics, writing, marketing, design/creative, customer service , and accounting/consulting."</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-02.png" alt="">
					<h4>Nathan Kuchena<span>Jobseeker</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">"Ikiraka uses innovative technology to learn about my job preferences as you apply for jobs from their extensive inventory of openings. I then receive notices of jobs that meet my preferences."</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-01.png" alt="">
					<h4>Paul Leroi Hie<span>Jobseeker</span></h4>
				</div>
			</div>

		</div>
	</div>
	<!-- Testimonials Carousel / End -->

</section>


<!-- Flip banner -->
<a href="browse-jobs.html" class="flip-banner margin-bottom-55" data-background="images/all-categories-photo.jpg" data-color="#26ae61" data-color-opacity="0.93">
	<div class="flip-banner-content">
		<h2 class="flip-visible">Step inside and see for yourself!</h2>
		<h2 class="flip-hidden">Get Started <i class="fa fa-angle-right"></i></h2>
	</div>
</a>
<!-- Flip banner / End -->


<!-- Recent Posts -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Ad Center</h3>
	</div>

	<div class="one-third column">



	</div>


	<div class="one-third column">

		<!-- Post #2 -->


	</div>

	<div class="one-third column">

		<!-- Post #3 -->

	</div>

</div>


<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>An online platform that connects clients with service providers of a broad range of needs for such brief but necessary tasks mostly in the informal sector.</p>
			<a href="browse-jobs.html" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="./help.html">Help & Support</a></li>
				<li><a href="./terms.html">Terms of Service</a></li>
				<li><a href="./policy.html">Privacy Policy</a></li>
			</ul>
		</div>

		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
			</ul>
		</div>

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="browse-jobs.html">Freelancers by Category</a></li>
				<li><a href="browse-jobs.html">Freelancers in Kigali</a></li>
			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="https://business.facebook.com/home/accounts?business_id=582241712422135"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="https://twitter.com/ikiraka250"><i class="icon-twitter"></i></a></li>
					<li><a class="linkedin" href="https://www.linkedin.com/company/53447458/admin/"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href=" https://www.linkedin.com/in/ishimwe-christian-025ba8121/" target="_blank">Christian ISHIMWE</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="scripts/jquery-3.4.1.min.js"></script>
<script src="scripts/jquery-migrate-3.1.0.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/slick.min.js"></script>
<script src="scripts/headroom.min.js"></script>






</body>
</html>
