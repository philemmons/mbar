<?php include_once 'header.inc' ?>

<nav class="navbar navbar-expand-lg">
	<div class="container">
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse.true navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php" aria-current="page">Home
						<span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
						<a class="dropdown-item" href="registration.php">Registration</a>
						<a class="dropdown-item" href="activities.php">Activities</a>
						<a class="dropdown-item" href="mbar_history.php">MBAR History</a>
						<a class="dropdown-item" href="memories.php">Memories</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="meetings.php">Meetings</a>
						<a class="dropdown-item" href="committees.php">Committees</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="nav-link" href="upcoming_event.php">Bingo Night</a>
						<a class="nav-link" href="logo_contest.php">Logo Contest</a>
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

<main>
	<!-- Hero Section -->
	<section class="container shadow-wrap">
		<div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-sitemap" title="Beautiful coastline of Monterey Bay overlooking Lover's Point.">
			<div class="col-xl-7 col-lg-7 col-md-12 py-5">
				<div class="p-3 text-center text-bg-light hero-text-border" title="Preregistration is open!">
					<h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">montereybayarearoundup.org<br>HTML Site Map</span>
					</h1>
				</div>
			</div>
		</div>
	</section>


	<style type="text/css">
		body {
			background-color: #fff;
			font-family: "Roboto", "Helvetica", "Arial", sans-serif;
			margin: 0;
		}

		#top {

			background-color: #b1d1e8;
			font-size: 16px;
			padding-bottom: 40px;
		}

		nav {
			font-size: 24px;
			margin: 0px 30px 0px;
			border-bottom-left-radius: 6px;
			border-bottom-right-radius: 6px;
			background-color: #f3f3f3;
			color: #666;
			box-shadow: 0 10px 20px -12px rgba(0, 0, 0, 0.42), 0 3px 20px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
			padding: 10px 0;
			text-align: center;
			z-index: 1;
		}

		h5 {
			margin: auto;
			padding: 10px;
			max-width: 600px;
			color: #666;
		}

		h5 span {
			float: right;
		}

		h5 a {
			font-weight: normal;
			display: block;
		}


		#cont {
			position: relative;
			border-radius: 6px;
			box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

			background: #f3f3f3;

			margin: -20px 30px 0px 30px;
			padding: 20px;
		}

		.lpage>a:link,
		.lpage>a:visited {
			color: #0180AF;
			text-decoration: underline;
		}

		.lpage>a:hover {
			color: #666;
		}


		#footer1 {
			padding: 1.5rem;
			text-align: center;
		}

		ul {
			margin: 0px;

			padding: 0px;
			list-style: none;
		}

		li {
			margin: 0px;
		}

		li ul {
			margin-left: 20px;
		}

		.lhead {
			background: #ddd;
			padding: 10px;
			margin: 10px 0px;
		}

		.lcount {
			padding: 0px 10px;
		}

		.lpage {
			border-bottom: #ddd 1px solid;
			padding: 5px;
		}

		.last-page {
			border: none;
		}
	</style>

	<section class="container shadow-wrap">
		<div class="row justify-content-center mb-5">
			<div class="col-xl-10 col-lg-10 col-md-12 py-4">
				<div id="top">
					<div class="row py-4">
						<div class="col-6">
							<h5><span><a href="http://mbar.philemmons.dev">mbar.philemmons.dev Homepage</a></span>
							</h5>
						</div>
						<div class="col-6">
							<h5>Last updated: 2023, December 28
								<br>
								Total pages: 18
							</h5>
						</div>
					</div>
				</div>
				<div id="cont">
					<ul class="level-0">
						<li class="lhead">https:/ </li>
						<li>
							<ul class="level-1">
								<li class="lhead">/ </li>
								<li>
									<ul class="level-2">
										<li class="lhead">mbar.philemmons.dev/ <span class="lcount">18 pages</span></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/" title="Monterey Bay Area Roundup 2024">Monterey Bay Area Roundup 2024</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/index.php" title="Monterey Bay Area Roundup 2024 | Home">Monterey Bay Area Roundup 2024 | Home</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/conference-2024.php" title="Monterey Bay Area Roundup 2024 | Conference 2024">Monterey Bay Area Roundup 2024 | Conference 2024</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/registration.php" title="Monterey Bay Area Roundup 2024 | Registration">Monterey Bay Area Roundup 2024 | registration</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/activities.php" title="Monterey Bay Area | Activities">Monterey Bay Area Roundup 2024 | activities</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/mbar_history.php" title="Monterey Bay Area | MBAR History">Monterey Bay Area Roundup 2024 | MBAR History</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/memories.php" title="Monterey Bay Area | Memories">Monterey Bay Area Roundup 2024 | Memories</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/meetings.php" title="Monterey Bay Area | Meetings">Monterey Bay Area Roundup 2024 | Meetings</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/committees.php" title="Monterey Bay Area | Committees">Monterey Bay Area Roundup 2024 | Committees</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/upcoming_event.php" title="Monterey Bay Area | Upcoming Events">Monterey Bay Area Roundup 2024 | Upcoming Events</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/logo_contest.php" title="Monterey Bay Area | Logo Contest">Monterey Bay Area Roundup 2024 | Logo Contest</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/contact.php" title="Monterey Bay Area | Contact Us">Monterey Bay Area Roundup 2024 | Contact Us</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/contributions.php" title="Monterey Bay Area | Contributions">Monterey Bay Area Roundup 2024 | Contributions</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/conference-2022.php" title="Monterey Bay Area | Archive Conference 2022">Monterey Bay Area Roundup 2024 | Archive Conference 2022</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/accessibility.php" title="Monterey Bay Area | Accessibility">Monterey Bay Area Roundup 2024 | Accessibility</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/privacy-policy.php" title="Monterey Bay Area | Privacy Policy">Monterey Bay Area Roundup 2024 | Privacy Policy</a></li>
										<li class="lpage"><a href="https://mbar.philemmons.dev/sitemap.php" title="Monterey Bay Area | Sitemap">Monterey Bay Area Roundup 2024 | Sitemap</a></li>
										<li class="lpage last-page"><a href="https://mbar.philemmons.dev/conference-2019.php" title="Monterey Bay Area | Archive Conference 2019">Monterey Bay Area Roundup 2024 | Archive Conference 2019</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<!-- Please note: You are not allowed to remove the copyright notice below. Thank you! www.xml-sitemaps.com -->
				</div>
				<div id="footer1">
					Page created with <a target="_blank" href="https://www.xml-sitemaps.com">Google XML sitemap and html sitemaps generator</a> | Copyright &copy; 2005-2023 XML-Sitemaps.com
				</div>
			</div>
		</div>
	</section>

</main>
<?php include_once 'footer.inc' ?>
</body>

</html>