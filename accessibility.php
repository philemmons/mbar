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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conference" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conference">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item" href="memories.php">Memories</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-committees" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-committees">
                        <a class="dropdown-item" href="meetings.php">Meetings</span></a>
                        <a class="dropdown-item" href="committees.php">Committees</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-upcoming-events" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-upcoming-events">
                        <a class="dropdown-item" href="upcoming_event.php">Bingo Night</a>
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
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-access" title="Accessibility workflow diagram with a laptop backdrop.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Accessibility Statement</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-bg-light hero-text-border" title="Our belief of inclusiveness nurtures our desire for recovery">
                    <h3 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">MBAR's General Accessibility Statement</span>
                    </h3>
                    <p class="mb-3 text-dark">montereybayarearoundup.org strives to ensure that its services are accessible to people with disabilities. montereybayarearoundup.org has invested a significant amount of resources to help ensure that its website is made easier to use and more accessible for people with disabilities, with the strong belief that every person has the right to live with dignity, equality, comfort and independence.</p>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="">

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Accessibility on montereybayarearoundup.org</span>
                    </h4>

                    <p class="mb-3 text-dark">montereybayarearoundup.org continuously strives to exceed W3C WAI Web Content Accessibility Guidelines 2.0. Various site checkers allows montereybayarearoundup.org to improve its compliance with the Web Content Accessibility Guidelines (WCAG 2.1).</p>

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Disclaimer</span>
                    </h4>

                    <p class="mb-3 text-dark">montereybayarearoundup.org continues its efforts to constantly improve the accessibility of its site and services in the belief that it is our collective moral obligation to allow seamless, accessible and unhindered use also for those of us with disabilities.</p>

                    <p class="mb-3 text-dark">Despite our efforts to make all pages and content on montereybayarearoundup.org fully accessible, some content may not have yet been fully adapted to the strictest accessibility standards. This may be a result of not having found or identified the most appropriate technological solution.</p>

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Here For You</span>
                    </h4>

                    <p class="mb-3 text-dark">If you are experiencing difficulty with any content on montereybayarearoundup.org or require assistance with any part of our site, please contact us, and we will be happy to assist.</p>

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Contact Us</span>
                    </h4>

                    <p class="mb-3 text-dark">If you wish to report an accessibility issue, have any questions or need assistance, please contact montereybayarearoundup.org customer support as follows - Email: <a href="mailto:<?php echo getenv('mbar-to-email'); ?>" class="bb-link">SysAdmin with ADA request</a></p>

                </div>
            </div>
        </div>
    </div>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>