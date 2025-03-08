<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Meetings </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/meetings.php" >';
include_once 'header-bottom.inc';
?>

<nav class="navbar navbar-expand-xl" aria-label="main menu">
    <div class="container my-1">
        <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-xl-0">
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
                        <a class="dropdown-item active" aria-current="page" href="meetings.php">Meetings<span class="visually-hidden">(current)</span></a>
                        <a class="dropdown-item" href="committees.php">Committees</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-upcoming-events" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-upcoming-events">
                        <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
                        <a class="dropdown-item" href="upcoming_event.php">St. Patrick's Day Potluck</a>
                        <a class="dropdown-item" href="al-anon-with-aa-event.php">Al-Anon with A.A. Participation</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="helping_hands.php">Helping Hands</a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link" href="/es/">Spanish</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-meetings" title="Meeting diversity enhances our lives.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Committee Meeting<br>
                        Information</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Zoom info">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-sm-auto py-4">
                    <a class="btn btn-primary btn-sm" href="https://us02web.zoom.us/j/3301007207?pwd=olR3pXbrM9zKtXLjhdVqFPfOtbbbdh.1&omn=87244042787" rel="noopener noreferrer nofollow" target="_blank"><img class="img-fluid" src="../images/zoom-login.png" alt="Inverted Zoom login screen with blue background."><span class="sr-only">(Opens Zoom Application)</span></a>
                </div>
                <div class="col-md-8 py-4">
                    <div class="p-3 text-bg-light hero-text-border text-center">
                        <section aria-label="Monthly meeting schedule">
                            <h3 class="card-title mb-3 px-sm-3">Open Committee Positions</h3>
                        </section>
                        <p>Join our business meeting, March 8th at 10am, to hear about the responsibilities of the listed positions! Outreach, Co-Chair Outreach, Treasurer, Secretary, Hospitality, Co-Chair Social Media, GSR/IGR Liaison, H&I Liaison, Raffle Prize, Raffle 50/50, Registration, and more!
                        </p>
                        <h4>10:00am for 1.5 hours</h4>
                        <p><strong>Zoom ID</strong>: 330 100 7207
                            <br>
                            <strong>Password</strong>: 2026
                        </p>
                        <p><strong>Next Meetings:</strong> 2026 MBAR's Committee Elections 03/08/2025, and 04/12/2025</p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two -->
    <article aria-label="Current meeting notes">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <h4 class="fw-bold mb-3 text-center"><span class="text-dark px-3 px-md-0"><i class="bi bi-book me-2" style="font-size: 1.5rem; color: var(--color-8);" aria-hidden="true"></i>2025 Meeting Minutes</span>
                        </h4>
                        <hr>
                        <div class="accordion accordion-flush" id="accordion2025">

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#january2025" aria-expanded="false" aria-controls="january2025">January 11th</button>
                                </h4>

                                <?php include_once 'meeting-2025-01.inc'; ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article aria-label="Past meeting notes">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">

                <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <h4 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">Archived Meeting Minutes Over the Years</span>
                        </h4>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-bg-light hero-text-border">

                        <div class="accordion accordion-flush" id="accordionFlushExample">

                            <?php include_once 'meetings-2024.inc'; ?>

                            <?php include_once 'meetings-2023.inc'; ?>

                            <?php include_once 'meetings-2022.inc'; ?>

                            <?php include_once 'meetings-2021.inc'; ?>

                            <?php include_once 'meetings-2020.inc'; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>