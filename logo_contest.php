<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Logo Contest </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/logo_contest.php" >';
include_once 'header-bottom.inc';
?>

<nav class="navbar navbar-expand-lg" aria-label="main navigation">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conference" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conference">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="aa-spanish-marathon-2024.php">Spanish-Speaking A.A. Marathon Meetings</a>
                        <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Marathon Meetings</a>
                        <a class="dropdown-item" href="al-anon-marathon-2024.php">Al-Anon Marathon Meetings</a>
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
                        <a class="dropdown-item" href="upcoming_event.php">Gratitude</a>
                        <a class="dropdown-item active" href="logo_contest.php" aria-current="page">Logo Contest<span class="visually-hidden">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link" href="helping_hands.php">Helping Hands</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-logoContest" title="Five past logo's as our banner.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Logo Contest 2024 winner and runner-ups.">
                    <h2 class="display-6 fw-bold px-3 px-md-0">MBAR 2026 Logo Contest</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Contest info">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Logo Contest">
                            <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">The MBAR Logo Content is here!
                                    <br>
                                    Below are the requirements for submission:</span>
                            </h3>
                            <p class="mb-6 h5 text-dark">
                                Submit your design and artwork for consideration to the MBAR Committee
                                <br><br>
                                Each entry should include the conference theme
                                <br>
                                <span class="fw-bold">"Keep It Simple"</span>
                                <br>
                                and the year
                                <br>
                                <span class="fw-bold">"2026"</span>
                                <br><br>
                                Be sure graphics are simple, maximum of 3 colors, and usable for a 2" by 2" logo
                                <br><br>
                                The winning artist's submission will receive
                                <br>
                                <span class="text-uppercase fw-bold">free registration</span> to the conference and a <span class="text-uppercase fw-bold">t-shirt</span> 
                                <br><br>
                                Don't miss out on the Fun and Fellowship!
                                <br><br>
                                <span class="text-uppercase fw-bold">Submit Entries by 05/04/25</span>
                                <br><br>
                                Winner will be announced at the June B-Day meeting
                                <br>
                                06/28/25
                            </p>
                            <p class="mb-6 h4 text-dark">Submit Logo and Questions: <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">MBAR 2026 Chair</a>.
                            </p>
                        </section>
                    </div>
                </div>

                <!--<div class="col-sm-12 col-12 text-center px-3 py-4">
                    <img class="img-fluid" src="../images/logo2024.png" alt="Twelve different logo's were submitted for 2024 with the theme of Keep It Simple.">
-->
            </div>
        </div>
        </div>
    </article>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>