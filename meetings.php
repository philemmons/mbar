<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Meetings </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/meetings.php" >';
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
                    <a class="nav-link" href="/">Home</a>
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
                        <a class="dropdown-item active" aria-current="page" href="meetings.php">Meetings<span class="visually-hidden">(current)</span></a>
                        <a class="dropdown-item" href="committees.php">Committees</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-upcoming-events" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-upcoming-events">
                        <a class="dropdown-item" href="upcoming_event.php">Gratitude</a>
                        <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-meetings" title="Meeting diversity enhances our lives.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Committee Meeting<br>
                            Information</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Zoom info">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-sm-auto py-4">
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('https://us02web.zoom.us/j/83143062293?pwd=QXZMWUVoZEkzVnUyY0poanAyclBHdz09', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;"><img class="img-fluid" src="../images/zoom-login.png" alt="Inverted Zoom login screen with blue background."></button>
                </div>
                <div class="col-md-8 col-sm-6 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Monthly meeting schedule">
                            <h3 class="card-title text-center mb-3 px-5"><em>The second Saturday of each month
                                    at 10:00am PST</em></h3>
                        </section>
                        <p class="text-center"><strong>Zoom ID</strong>: 831 4306 2293 <br>
                            <strong>Password</strong>: 2024
                        </p>
                        <p class="text-center"><strong>Next Meetings:</strong> 07/13/2024, 08/10/2024</p>
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
                        <h4 class="fw-bold mb-3 text-center"><span class="text-dark px-3 px-md-0"><i class="bi bi-book me-2" style="font-size: 1.5rem; color: var(--color-8);" aria-hidden="true"></i>2024 Meeting Minutes</span>
                        </h4>
                        <hr>
                        <div class="accordion accordion-flush" id="accordion2024">
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#june2024" aria-expanded="false" aria-controls="june2024">June 8th</button>
                                </h4>

                                <?php include 'meeting-2024-06.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#may2024" aria-expanded="false" aria-controls="may2024">May 13th</button>
                                </h4>

                                <?php include 'meeting-2024-05.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#april2024" aria-expanded="false" aria-controls="april2024">April 13th</button>
                                </h4>

                                <?php include 'meeting-2024-04.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#march2024" aria-expanded="false" aria-controls="march2024">March 9th</button>
                                </h4>

                                <?php include 'meeting-2024-03.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#february2024" aria-expanded="false" aria-controls="february2024">February 10th</button>
                                </h4>

                                <?php include 'meeting-2024-02.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#january2024" aria-expanded="false" aria-controls="january2024">January 13th</button>
                                </h4>

                                <?php include 'meeting-2024-01.inc'; ?>

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
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <div class="accordion accordion-flush" id="accordionFlushExample">

                            <?php include 'meetings-2023.inc'; ?>

                            <?php include 'meetings-2022.inc'; ?>

                            <?php include 'meetings-2021.inc'; ?>

                            <?php include 'meetings-2020.inc'; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>