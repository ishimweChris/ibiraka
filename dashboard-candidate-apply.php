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
<!-- Favicon-->
<link rel="shortcut icon" href="images/fav.png">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="css/colors.css">


<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>

<body>
<?php include "vacancy/session.php"?>
<div id="wrapper">



<!-- Header
================================================== -->
<header class="dashboard-header">
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
				</li>

				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="browse-jobs.html">Browse Skills</a></li>
						<li><a href="browse-resumes.html">Browse Resumes</a></li>
						<li><a href="browse-categories.html">Browse Categories</a></li>
					</ul>
				</li>

				<li><a href="#" id="current">Dashboard</a>
					<ul>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="dashboard-messages.php">Messages</a></li>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
						<li><a href="dashboard-job-alerts.php">Skill Alerts</a></li>
						<li><a href="dashboard-manage-jobs.php">Manage Skill</a></li>
						<li><a href="dashboard-manage-applications.php">Manage Applications</a></li>
						<li><a href="dashboard-add-job.php">Add Skill</a></li>
						<li><a href="dashboard-my-profile.php">My Profile</a></li>
					</ul>
				</li>
			</ul>


			<ul class="responsive float-right">
			<li><a style="color:green" href="dashboard.php"> <?php echo $fname;?></a></li>
				<li><a href="dashboard.php"><i class="fa fa-cog"></i> Dashboard</a></li>
				<li><a href="index.html"><i class="fa fa-lock"></i> Log Out</a></li>
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


<!-- Titlebar
================================================== -->

<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Start">
				<li class="active"><a href="dashboard.php">Dashboard</a></li>
				<li><a href="dashboard-messages.php">Messages <span class="nav-tag">1</span></a></li>
			</ul>

			<ul data-submenu-title="Management">
				<li><a>For Employers</a>
					<ul>
						<li><a href="dashboard-manage-jobs.php">Manage Skills <span class="nav-tag"><?php echo $skillscount; ?></span></a></li>
						<li><a href="dashboard-candidate-apply.php">Candidate Apply <span class="nav-tag"><?php echo $applicationscount; ?></span></a></li>
						<li><a href="dashboard-add-job.php">Add Skill</a></li>
					</ul>
				</li>

				<li><a>For Candidates</a>
					<ul>
						<li><a href="dashboard-manage-resumes.php">Manage Resumes <span class="nav-tag">0</span></a></li>
						<li><a href="dashboard-candidate-apply.php">Candidate Apply <span class="nav-tag"><?php echo $applicationscount; ?></span></a></li>
						<li><a href="dashboard-job-alerts.php">Skill Alerts</a></li>
						<li><a href="dashboard-add-resume.php">Add Resume</a></li>
					</ul>
				</li>	
			</ul>	

			<ul data-submenu-title="Account">
			<li><a style="color:green" href="dashboard.php"> <?php echo $fname;?></a></li>
				<li><a href="dashboard-my-profile.php">My Profile</a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->



	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Candidate Apply Now</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Apply Now</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>


		<div class="row">
			
			<!-- Table-->
			<div class="col-lg-12 col-md-12">

				<div class="notification notice">
					Your listings are shown in the table below. Expired listings will be automatically removed after 30 days.
				</div>

				<div class="dashboard-list-box margin-top-30">
					<div class="dashboard-list-box-content">

						<!-- Table -->

						<table class="manage-table responsive-table">

							<tr>
								<th><i class="fa fa-file-text"></i> Title</th>
								<th><i class="fa fa-check-square-o"></i> Filled?</th>
								<th><i class="fa fa-calendar"></i> Date Posted</th>
								<th><i class="fa fa-calendar"></i> Date Expires</th>
								<th><i class="fa fa-user"></i> Applications</th>
								<th>Action</th>
							</tr>
									
							<!-- Item #2 -->
							<?php
								$sql = $conn->prepare("select * from tblskills")or die(mysql_error());
								$sql->execute();
								while ($row = $sql->fetch()) {
							
								echo "<tr><td>".$row['OCCUPATIONTITLE']."</td><td>".$row['JOBSTATUS']."</td>
								<td>".$row['DATEPOSTED']."</td><td>".$row['DATEPOSTED']."</td><td>".$row['APPLICATIONS']."</td>
								<td>
		
								<form class='form-sample' method='POST' action='delete-operations.php'>
									<input type='hidden'  class='form-control' name='JOBID' id='JOBID' value=' ".$row['JOBID']."'  />
									<button style='background-color:green' type='submit' class=' margin-top-15' name='applySkill' id='savechanges'>Apply</button>
								</form>
									</td>";
													
								}
							?>

						</table>

					</div>
				</div>
				<a href="dashboard-add-job.php" class="button margin-top-30">Add New Listing</a>
			</div>


			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">Copyright &copy;<script>document.write(new Date().getFullYear());</script> by <a href=" https://www.linkedin.com/in/ishimwe-christian-025ba8121/" target="_blank">Christian ISHIMWE</a>. All Rights Reserved.</div>
			</div>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


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



</body>
</html>