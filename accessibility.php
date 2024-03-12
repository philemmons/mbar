<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Accessibility</title>";
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-access" title="Accessibility workflow diagram with a laptop backdrop.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Accessibility Statement</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Equal and love">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-bg-light hero-text-border" title="Our belief of inclusiveness nurtures our desire for recovery">
                        <section aria-label="accessibility statement">
                            <h3 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">MBAR's General Accessibility Declaration</span>
                            </h3>
                            <p class="mb-3 text-dark">montereybayarearoundup.org strives to ensure that its services are accessible to people with disabilities. montereybayarearoundup.org has invested a significant amount of resources to help ensure that its website is made easier to use and more accessible for people with disabilities, with the strong belief that every person has the right to live with dignity, equality, comfort and independence.</p>
                        </section>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border" title="">
                        <section aria-label="accessibility method">
                            <h3 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Accessibility on montereybayarearoundup.org</span>
                            </h3>

                            <p class="mb-3 text-dark">montereybayarearoundup.org continuously strives to exceed W3C WAI Web Content Accessibility Guidelines 2.1. Various site checkers allows montereybayarearoundup.org to improve its compliance with the Web Content Accessibility Guidelines (WCAG 2.2).</p>

                            <h4 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Disclaimer</span>
                            </h4>

                            <p class="mb-3 text-dark">montereybayarearoundup.org continues its efforts to constantly improve the accessibility of its site and services in the belief that it is our collective moral obligation to allow seamless, accessible and unhindered use also for those of us with disabilities.</p>

                            <p class="mb-3 text-dark">Despite our efforts to make all pages and content on montereybayarearoundup.org fully accessible, some content may not have yet been fully adapted to the strictest accessibility standards. This may be a result of not having found or identified the most appropriate technological solution.</p>

                            <h4 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Here For You</span>
                            </h4>

                            <p class="mb-3 text-dark">If you are experiencing any difficulty or frustration with any content on montereybayarearoundup.org or require assistance with any part of our site, please contact us, and we will be happy to assist.</p>

                            <h4 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Contact Us</span>
                            </h4>

                            <p class="mb-3 text-dark">If you wish to report any accessibility issue, have any questions or need assistance, please contact montereybayarearoundup.org technical support as follows - Email: <a href="mailto:<?php echo getenv('mbar-to-email'); ?>" class="bb-link">SysAdmin with ADA request</a></p>
                        </section>
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
                        <a class="nav-link nav-link-size active" href="accessibility.php" aria-current="page">Site Accessibility<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-size" href="privacy-policy.php">Privacy Policy</a>
                    </li>
                    <li class="nav-item" style="border-right: none;">
                        <a class="nav-link nav-link-size" href="sitemap.php">Site Map</a>
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