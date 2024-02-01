<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" role="navigation" aria-label="main navigation">
	<div class="container">
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse.true navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link active" href="index.php">Home
						<span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-conference" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
						<a class="dropdown-item" href="registration.php">Registration</a>
						<a class="dropdown-item" href="activities.php">Activities</a>
						<a class="dropdown-item" href="mbar_history.php">MBAR History</a>
						<a class="dropdown-item" href="memories.php">Memories</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-committees" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="meetings.php">Meetings</a>
						<a class="dropdown-item" href="committees.php">Committees</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-upcoming-events" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="nav-link" href="upcoming_event.php">Bingo Night</a>
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

<main role="main">
	<!-- Hero Section -->
	<section class="container shadow-wrap">
		<div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-sitemap" title="Virtual network on a navy blue background.">
			<div class="col-xl-7 col-lg-7 col-md-12 py-5">
				<div class="p-3 text-center text-bg-light hero-text-border" title="HTML Site Map - assist with indexing">
					<h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">HTML Site Map</span>
					</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="container shadow-wrap">
		<div class="row justify-content-center" id="top">
			<div class="col-xl-6 col-lg-6 col-md-12 pt-4">
				<h3 class="h5 float-end"><a href="http://montereybayarearoundup.org" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 Homepage">montereybayarearoundup.org Homepage</a>
				</h3>
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
				<div class="p-3 text-bg-light hero-text-border" title="">
					<ul class="level-0 list-group ms-3">
						<li class="lhead no-bullet list-group-item list-group-item-action list-group-item-dark">/</li>
						<li class="no-bullet">
							<ul class="level-1 list-group">
								<li class="lhead no-bullet list-group-item list-group-item-action list-group-item-dark">montereybayarearoundup.org/ <span class="lcount">18 pages</span></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024">Monterey Bay Area Roundup 2024</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/index.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Home">Monterey Bay Area Roundup 2024 | Home</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/conference-2024.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Conference 2024">Monterey Bay Area Roundup 2024 | Conference 2024</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/registration.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Registration">Monterey Bay Area Roundup 2024 | Registration</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/activities.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Activities">Monterey Bay Area Roundup 2024 | Activities</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/mbar_history.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | MBAR History">Monterey Bay Area Roundup 2024 | MBAR History</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/memories.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Memories">Monterey Bay Area Roundup 2024 | Memories</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/meetings.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Meetings">Monterey Bay Area Roundup 2024 | Meetings</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/committees.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Committees">Monterey Bay Area Roundup 2024 | Committees</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/upcoming_event.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Upcoming Events">Monterey Bay Area Roundup 2024 | Upcoming Events</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/logo_contest.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Logo Contest">Monterey Bay Area Roundup 2024 | Logo Contest</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/contact.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Contact Us">Monterey Bay Area Roundup 2024 | Contact Us</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/contributions.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Contributions">Monterey Bay Area Roundup 2024 | Contributions</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/conference-2022.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Archive Conference 2022">Monterey Bay Area Roundup 2024 | Archive Conference 2022</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/accessibility.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Accessibility">Monterey Bay Area Roundup 2024 | Accessibility</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/privacy-policy.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Privacy Policy">Monterey Bay Area Roundup 2024 | Privacy Policy</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/sitemap.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Sitemap">Monterey Bay Area Roundup 2024 | Sitemap</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/conference-2019.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Archive Conference 2019">Monterey Bay Area Roundup 2024 | Archive Conference 2019</a></li>
							</ul>
						</li>
					</ul>
					</li>
					</ul>
					<!-- Please note: You are not allowed to remove the copyright notice below. Thank you! www.xml-sitemaps.com -->

					<div id="sitemap-footer">
						Page created with <a href="https://www.xml-sitemaps.com" class="bb-link" target="_blank">Google XML sitemap and html sitemaps generator<span class="sr-only">(Opens a new window)<span></a> | Copyright &copy; 2005-2023 XML-Sitemaps.com
					</div>
				</div>
			</div>
	</section>


	<?php include_once 'footer.inc' ?>
	</body>

	</html>