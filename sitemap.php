<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Sitemap </title>";
include_once 'header-bottom.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="main navigation">
	<div class="container">
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-conference" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
					<div class="dropdown-menu" aria-labelledby="dropdown-conference">
						<a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
						<a class="dropdown-item" href="register-now.php">Registration</a>
						<a class="dropdown-item" href="activities.php">Activities</a>
						<a class="dropdown-item" href="mbar_history.php">MBAR History</a>
						<a class="dropdown-item" href="memories.php">Memories</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-who-we-are" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Who We Are</button>
					<div class="dropdown-menu" aria-labelledby="dropdown-who-we-are">
						<a class="dropdown-item" href="our_partner.php">Our Partner</a>
						<a class="dropdown-item" href="meetings.php">Meetings</a>
						<a class="dropdown-item" href="committees.php">Committees</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-upcoming-events" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
					<div class="dropdown-menu" aria-labelledby="dropdown-upcoming-events">
						<a class="dropdown-item" href="upcoming_event.php">St. Patrick's Potluck</a>
						<a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
				<li class="nav-item" style="border-right: none;">
					<a class="nav-link" href="contributions.php">Contribution</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<main id="main-content">
	<!-- Hero Part -->
	<div class="container shadow-wrap">
		<div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-sitemap" title="Virtual network on a navy blue background.">
			<div class="col-xl-7 col-lg-7 col-md-12 py-5">
				<div class="p-3 text-center text-bg-light hero-text-border" title="HTML Site Map - assist with indexing">
					<h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">HTML Site Map</span>
					</h2>
				</div>
			</div>
		</div>
	</div>

	<article aria-label="Site Map">
		<div class="container shadow-wrap">
			<div class="row justify-content-center" id="top">
				<div class="col-xl-6 col-lg-6 col-md-12 pt-4">
					<section aria-label="sitemap-start">
						<h3 class="h5 float-end"><a href="http://monterey.bayarearoundup.org" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 Homepage">monterey.bayarearoundup.org Homepage</a>
						</h3>
					</section>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 pt-4">
					<h4>Last updated: 2023, December 28
						<br>
						Total pages: 18
					</h4>
				</div>
			</div>


			<div class="row justify-content-center mb-5">
				<div class="col-xl-10 col-lg-10 col-md-12 py-4 olt-5">
					<div class="p-3 text-bg-light hero-text-border" title="XML sitemap for monterey.bayarearoundup.org">
						<ul class="level-0 list-group ms-3">
							<li class="lhead no-bullet list-group-item list-group-item-action list-group-item-dark">/</li>
							<li class="no-bullet">
								<ul class="level-1 list-group">
									<li class="lhead no-bullet list-group-item list-group-item-action list-group-item-dark">monterey.bayarearoundup.org/ <span class="lcount">18 pages</span></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024">Monterey Bay Area Roundup 2024</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/index.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Home">Monterey Bay Area Roundup 2024 | Home</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/conference-2024.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Conference 2024">Monterey Bay Area Roundup 2024 | Conference 2024</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/register-now.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Registration">Monterey Bay Area Roundup 2024 | Registration</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/activities.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Activities">Monterey Bay Area Roundup 2024 | Activities</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/mbar_history.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | MBAR History">Monterey Bay Area Roundup 2024 | MBAR History</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/memories.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Memories">Monterey Bay Area Roundup 2024 | Memories</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/meetings.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Meetings">Monterey Bay Area Roundup 2024 | Meetings</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/committees.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Committees">Monterey Bay Area Roundup 2024 | Committees</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/upcoming_event.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Upcoming Events">Monterey Bay Area Roundup 2024 | Upcoming Events</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/logo_contest.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Logo Contest">Monterey Bay Area Roundup 2024 | Logo Contest</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/contact.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Contact Us">Monterey Bay Area Roundup 2024 | Contact Us</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/contributions.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Contributions">Monterey Bay Area Roundup 2024 | Contributions</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/conference-2022.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Archive Conference 2022">Monterey Bay Area Roundup 2024 | Archive Conference 2022</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/accessibility.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Accessibility">Monterey Bay Area Roundup 2024 | Accessibility</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/privacy-policy.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Privacy Policy">Monterey Bay Area Roundup 2024 | Privacy Policy</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/sitemap.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Sitemap">Monterey Bay Area Roundup 2024 | Sitemap</a></li>
									<li class="ms-5"><a href="https://monterey.bayarearoundup.org/conference-2019.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Archive Conference 2019">Monterey Bay Area Roundup 2024 | Archive Conference 2019</a></li>
								</ul>
							</li>
						</ul>
						</li>
						</ul>
						<!-- Please note: You are not allowed to remove the copyright notice below. Thank you! www.xml-sitemaps.com -->

						<div id="sitemap-footer">
							Page created with <a href="https://www.xml-sitemaps.com" class="bb-link" target="_blank">Google XML sitemap and html sitemaps generator<span class="sr-only">(Opens a new window)</span></a> | Copyright &copy; 2005-2023 XML-Sitemaps.com
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>

	<!-- Part Registration -->
	<article aria-label="registration info and link">
		<div class="container shadow-wrap">
			<div class="row justify-content-center mb-5">
				<div class="col-xl-8 col-lg-8 col-md-12 py-4">
					<div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
						<h3 class="fw-bold text-dark px-3 px-md-0">Join us at MBAR 2024
						</h3>
						<p class="mb-6 h4 text-dark">Labor Day Weekend, August 31st and September 1st </p>
						<a href="register-now.php" class="btn btn-primary me-2">Register Now</a>
					</div>
				</div>
			</div>
		</div>
	</article>

	<a href="#toTop" class="btn btn-primary back-to-top" id="back-to-top-link" title="Back to Top" aria-label="Back to Top"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>

</main>

<div class='container top-footer'>
	<aside aria-label="responsibility statement">
		<div class="row justify-content-md-center">
			<div class='col-sm-4 banner'>
				<img src="../images/mbar_logo.png" class="img-fluid rounded-top" alt="Monterey Bay Area Roundup 2024 logo with a breeched whale tail and the slogan: Keep it simple">
			</div>
			<div class='col-sm-8 col-md-6 p-4'>
				<h4>Our Statement of Responsibility:</h4>
				<p class="h4">I am responsible.<br>
					When anyone, anywhere, reaches out for help, I want the hand of A.A. always to be there.<br>
					And for that I am responsible.
				</p>
			</div>
		</div>
	</aside>

	<aside aria-label="private facebook group">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-10 shadow text-center">
				<hr>
				<h4 class="text-center"><strong>Join <a href="https://www.facebook.com/groups/MBAR2021/" target="_blank">
							<img src="../images/facebook_logo.png" width="40" alt="Facebook logo for private group of AA members."><span class="sr-only">(Opens a new window)</span></a> Private Group</strong></h4>
				<hr>
			</div>
		</div>
	</aside>
</div>

<footer>
	<div class='container'>
		<div class="row justify-content-md-center">
			<div class="col-sm-12" id="footer-image" role=img aria-label="A road through rolling hills, covered with flowers, with a sunset backdrop.">
				<p>Copyright © <?php echo date('Y'); ?> Monterey Bay Area Roundup. All Rights Reserved.
				</p>
			</div>
			<nav class="navbar navbar-expand-sm bg-dark border-bottom border-body" data-bs-theme="dark" aria-label="footer menu">
				<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link nav-link-size" href="accessibility.php">Site Accessibility</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-size" href="privacy-policy.php">Privacy Policy</a>
					</li>
					<li class="nav-item" style="border-right: none;">
						<a class="nav-link nav-link-size active" href="sitemap.php" aria-current="page">Site Map<span class="visually-hidden">(current)</span></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</footer>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="../js/backToTop.js"></script>

</body>

</html>