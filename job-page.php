<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Ibiraka</title>
<?php include "vacancy/header.php"?>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors.css">



</head>

<body>
<?php include "vacancy/session.php"?>
<div id="wrapper">


<!-- Header
================================================== -->
<header class="sticky-header">
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="index.html"><img src="images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="index.html">Home</a>
					<ul>
						<li><a href="index.html">Home #1</a></li>
					</ul>
				</li>

				<li><a id="current" href="#">Pages</a>
					<ul>
						<li><a href="job-page.php">Job Page</a></li>
						<li><a href="job-page-alt.php">Job Page Alternative</a></li>
						<li><a href="resume-page.php">Resume Page</a></li>
						<li><a href="shortcodes.php">Shortcodes</a></li>
						<li><a href="icons.php">Icons</a></li>
						<li><a href="pricing-tables.php">Pricing Tables</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-jobs.php">Browse Jobs</a></li>
						<li><a href="browse-resumes.php">Browse Resumes</a></li>
						<li><a href="browse-categories.php">Browse Categories</a></li>
					</ul>
				</li>

				<li><a href="#">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-messages.php">Messages</a></li>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
						<li><a href="dashboard-job-alerts.php">Job Alerts</a></li>
						<li><a href="dashboard-manage-jobs.php">Manage Jobs</a></li>
						<li><a href="dashboard-manage-applications.php">Manage Applications</a></li>
						<li><a href="dashboard-add-job.php">Add Job</a></li>
						<li><a href="dashboard-my-profile.php">My Profile</a></li>
					</ul>
				</li>
			</ul>


			<ul class="responsive float-right">
				<li><a style="color:green" href="dashboard.php"> <?php echo $fname;?></a></li>
				<li><a href="my-account.html#tab2"><i class="fa fa-user"></i> Sign Up</a></li>
				<li><a href="my-account.html"><i class="fa fa-lock"></i> Log In</a></li>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">Restaurant / Food Service</a></span>
			<h2>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h2>
		</div>

		<div class="six columns">
			<a href="#" class="button dark"><i class="fa fa-star"></i> Bookmark This Job</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<!-- Company Info -->
		<div class="company-info">
			<img src="images/company-logo.png" alt="">
			<div class="content">
				<h4>King LLC</h4>
				<span><a href="#"><i class="fa fa-link"></i> Website</a></span>
				<span><a href="#"><i class="fa fa-twitter"></i> @kingrestaurants</a></span>
			</div>
			<div class="clearfix"></div>
		</div>

		<p class="margin-reset">
			The Food Service Specialist ensures outstanding customer service is provided to food customers and that all food offerings meet the required stock levels and presentation standards. Beginning your career as a Food Steward will give you a strong foundation in Speedway’s food segment that can make you a vital member of the front line team!
		</p>

		<br>
		<p>The <strong>Food Service Specialist</strong> will have responsibilities that include:</p>

		<ul class="list-1">
			<li>Executing the Food Service program, including preparing and presenting our wonderful food offerings
			to hungry customers on the go!
			</li>
			<li>Greeting customers in a friendly manner and suggestive selling and sampling items to help increase sales.</li>
			<li>Keeping our Store food area looking terrific and ready for our valued customers by managing product 
			inventory, stocking, cleaning, etc.</li>
			<li>We’re looking for associates who enjoy interacting with people and working in a fast-paced environment!</li>
		</ul>
		
		<br>

		<h4 class="margin-bottom-10">Job Requirment</h4>

		<ul class="list-1">
			<li>Excellent customer service skills, communication skills, and a happy, smiling attitude are essential.</li>
			<li>Must be available to work required shifts including weekends, evenings and holidays.</li>
			<li>Must be able to perform repeated bending, standing and reaching.</li>
			<li> Must be able to occasionally lift up to 50 pounds</li>
		</ul>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">


				
				<ul>

				<?php
				if(isset($_POST['send'])) {
						$id 	   		 = $_POST['id'];  
						$sql = $conn->prepare("select * from tblskills where JOBID ='$id'")or die(mysql_error());
						$sql->execute();
						while ($row = $sql->fetch()) {
					
						echo "<li>
								<i class='fa fa-map-marker'></i>
								<div>
									<strong>Location:</strong>
									<span>".$row['LOCATIONNAME']." </span>
								</div>
							</li>
							<li>
								<i class='fa fa-user'></i>
								<div>
									<strong>Job Title:</strong>
									<span>".$row['OCCUPATIONTITLE']."</span>
								</div>
							</li>
							<li>
								<i class='fa fa-clock-o'></i>
								<div>
									<strong>Hours:</strong>
									<span>40h / week</span>
								</div>
							</li>
							<li>
								<i class='fa fa-money'></i>
								<div>
									<strong>Rate:</strong>
									<span>$9.50 - $12.50 / hour</span>
								</div>
							</li>	";
											
						}
					}
					?>
					
				</ul>


				<a href="#small-dialog" class="popup-with-zoom-anim button">Apply For This Job</a>

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Apply For This Job</h2>
					</div>

					<div class="small-dialog-content">
						<form action="" method="POST" >
							<input type="text" name="fullname" placeholder="Full Name" value=""/>
							<input type="email" name="email" placeholder="Email Address" value=""/>
							<textarea name="notes" placeholder="Your message / cover letter sent to the employer"></textarea>

							<!-- Upload CV -->
							<div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span></div>
							<div class="clearfix"></div>

							<label class="upload-btn">
							    <input type="file" multiple />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>

							<div class="divider"></div>
							<button type="submit" class="button margin-top-15" name="savechangess" id="savechangess">Send Application</button><br>
						
						</form>
					</div>
					
				</div>

			</div>

		</div>

	</div>
	<!-- Widgets / End -->
	<?php
				$conn2 = new PDO('mysql:host=localhost;dbname=zep', 'root', '');

				if(isset($_POST['savechangess'])) {

				$id    = $_POST['id'];  
				$fname = $_POST['fullname'];
				$email = $_POST['email'];
				$notes = $_POST['notes'];
				$dateapplied = date('YY-MM-DD');

				$query = "INSERT into 
				candidatesapplyed(zen_id,fname,notes,dateapplied,skiil_id)
							VALUES('$user_zanid','$fname','$notes','$dateapplied','$id')"or 
							die(mysql_error());


				$conn->exec($query);

        if($conn->query($query))
            {
            echo"alert('Your are Successfully entered')";
            echo"window.open('Home.html','_self')";
            }
            else{
            echo"Error:". $query ."
            ". $conn->error;
            }
				
				echo "<script>alert('Application Submited')</script>";
				echo "<script>window.open('index.php','_self')</script>";
				}
			?>


</div>


<!-- Footer
================================================== -->
<div class="margin-top-50"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
			<a href="#" class="button">Get Started</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Our Blog</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Hiring Hub</a></li>
			</ul>
		</div>
		
		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Timeline</a></li>
			</ul>
		</div>		

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				<li><a href="#">Freelancers in USA</a></li>
				<li><a href="#">Freelancers in UK</a></li>
				<li><a href="#">Freelancers in Canada</a></li>
				<li><a href="#">Freelancers in Australia</a></li>
				<li><a href="#">Find Jobs</a></li>

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2018 by <a href="#">Work Scout</a>. All Rights Reserved.</div>
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