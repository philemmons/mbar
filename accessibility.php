<?php include_once 'header.inc' ?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse.true navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" aria-current="page">Home</a>
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
                        <a class="dropdown-item" href="meetings.php">Meetings</span></a>
                        <a class="dropdown-item" href="committees.php">Committees</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logo_contest.php">Logo Contest</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-accessibility" title="">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Accessibility Statement</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-bg-light hero-text-border" title="Our belief of inclusiveness nurtures our desire for recovery">
                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">MBAR's General Accessibility Statement</span>
                    </h4>
                    <p class="mb-3 text-dark">montereybayarearoundup.org strives to ensure that its services are accessible to people with disabilities. montereybayarearoundup.org has invested a significant amount of resources to help ensure that its website is made easier to use and more accessible for people with disabilities, with the strong belief that every person has the right to live with dignity, equality, comfort and independence.</p>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="">

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Accessibility on montereybayarearoundup.org</span>
                    </h4>

                    <p class="mb-3 text-dark">montereybayarearoundup.org continuously strives to exceed W3C WAI Web Content Accessibility Guidelines 2.0. The site checker allows montereybayarearoundup.org to improve its compliance with the Web Content Accessibility Guidelines (WCAG 2.1).</p>

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Disclaimer</span>
                    </h4>

                    <p class="mb-3 text-dark">montereybayarearoundup.org continues its efforts to constantly improve the accessibility of its site and services in the belief that it is our collective moral obligation to allow seamless, accessible and unhindered use also for those of us with disabilities.</p>

                    <p class="mb-3 text-dark">Despite our efforts to make all pages and content on montereybayarearoundup.org fully accessible, some content may not have yet been fully adapted to the strictest accessibility standards. This may be a result of not having found or identified the most appropriate technological solution.</p>

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Here For You</span>
                    </h4>

                    <p class="mb-3 text-dark">If you are experiencing difficulty with any content on montereybayarearoundup.org or require assistance with any part of our site, please contact us during normal business hours as detailed below and we will be happy to assist.</p>

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Contact Us</span>
                    </h4>

                    <p class="mb-3 text-dark">If you wish to report an accessibility issue, have any questions or need assistance, please contact montereybayarearoundup.org customer support as follows - Email: <a href="mailto:systemadmin@mbar.philemmons.dev">SysAdmin with ADA request</a></p>

                    <hr>
                    <a href="https://www.w3.org/WAI/WCAG2A-Conformance" title="Explanation of WCAG 2.0 Level A Conformance"><img height="30" src="https://www.w3.org/WAI/wcag2A" alt="Level A conformance, W3C WAI Web Content Accessibility Guidelines 2.0"></a>
                    <hr>

                </div>
            </div>
        </div>
    </section>
</main>
<?php include_once 'footer.inc' ?>
</body>

</html>
