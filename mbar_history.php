<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - History </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/mbar_history.php" >';
include_once 'header-bottom.inc';
?>

<nav class="navbar navbar-expand-xl" aria-label="main navigation">
    <div class="container my-1">
        <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="dropdown-item active" aria-current="page" href="mbar_history.php">MBAR History<span class="visually-hidden">(current)</span></a>
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
                        <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
                        <a class="dropdown-item" href="upcoming_event.php">St. Patrick's Day Potluck</a>
                        <a class="dropdown-item" href="al-anon-with-aa-event.php">Al-Anon with A.A. Participation</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-history" title="Amazing Monterey State Beach">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Monterey Bay Area Roundup<br>History</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Past Logos">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Monterey Bay Area Roundup.">
                        <section aria-label="MBAR's history and purpose">
                            <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">MBAR was established with our guiding principle:<br>"Keep It Simple."</span>
                            </h3>

                            <p class="mb-6 h5 text-dark mb-3">The Monterey Bay Area Roundup is an annual event that brings together members of Alcoholics Anonymous (A.A.) and Al-Anon to support each other in the ongoing journey of recovery from alcoholism. With a rich history that reflects the spirit of community, service, and spirituality, the event has grown to become a cornerstone for the recovery community in the Monterey Bay region.</p>

                            <h3 class="h4 fw-bold mb-2"><span class="text-dark px-3 px-md-0">Origins and Early Development</span>
                            </h3>

                            <p class="mb-6 h5 text-dark mb-3">The Monterey Bay Area Roundup follows the tradition of A.A. roundups, which started in the 1940s in various parts of the United States. Roundups became increasingly common as regional and local A.A. communities sought to create spaces for large-scale gatherings that fostered personal and spiritual growth through the principles of the A.A. 12 Steps. These gatherings were created to celebrate sobriety milestones, strengthen the bonds of fellowship, and provide a platform for sharing experiences, strength, and hope among A.A. and Al-Anon members.
                            </p>

                            <p class="mb-6 h5 text-dark">This event has dedicated itself to helping people facing the toughest challenges and move toward a stronger, and more resilient future.
                            </p>
                        </section>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center py-4 mb-5">
                <div class="col-xl-4 col-lg-5 col-sm-8 text-center">
                    <section aria-label="Display past logos with carousel">
                        <h3 class="mb-6 text-dark">Below are MBAR's banners used over the years.
                        </h3>
                        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../images/2022.png" class="d-block w-100" alt="MBAR 2022">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2019.png" class="d-block w-100" alt="MBAR 2019">
                                </div>
                            </div>

                            <button class="btn btn-primary btn-lg mt-3 me-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <i class="bi bi-chevron-double-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </button>

                            <button class="btn btn-primary btn-lg mt-3 ms-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <i class="bi bi-chevron-double-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </button>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two -->
    <article aria-label="Past schedules, speaker, and flyers">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <section aria-label="2019 and 2022 Schedules">
                                <h3 class="card-title h6">
                                    <i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Past Schedule of Events
                                </h3>
                                <p class="card-text"> <a href="https://montereybayarearoundup.org/conference-2024.php" class="bb-link" target="_blank" rel="noopener noreferrer">2024 Conference<span class="sr-only">(Opens a new window)</span></a></p>
                                <p class="card-text"> <a href="https://montereybayarearoundup.org/conference-2022.php" class="bb-link" target="_blank" rel="noopener noreferrer">2022 Conference<span class="sr-only">(Opens a new window)</span></a></p>
                                <p class="card-text"> <a href="https://montereybayarearoundup.org/conference-2019.php" class="bb-link" target="_blank" rel="noopener noreferrer">2019 Conference<span class="sr-only">(Opens a new window)</span></a></p>
                            </section>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary">Check out MBAR's line up from our previous events</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <section aria-label="2019 Speaker">
                                <h3 class="card-title h6">
                                    <i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Audio Recording of Speakers
                                </h3>
                                <p class="card-text">Paul O. from 2019</p>
                                <audio controls="">
                                    <source src="../audio/2019/Paul-O.ogg" type="audio/ogg">
                                    <source src="../audio/2019/Paul-O.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <div class="d-grid gap-2 pt-3">
                                    <a href="con-2019-paul-o.php" class="btn btn-outline-primary btn-sm">Read Transcript<span class="sr-only">(Opens a new window, click to go back)</span></a>
                                </div>
                            </section>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary">Sharing their experience, strength, and hope</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <section aria-label="Past Flyers">
                                <h3 class="card-title h6">
                                    <i class="bi bi-award me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Prior Conference Programs
                                </h3>
                                <p class="d-grid gap-2">
                                    <a class="btn btn-outline-primary btn-sm" href="pdf/MBAR-2024-program.pdf"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon"> 2024 Program<span class="sr-only">(Open pdf in browser)</span></a>
                                </p>
                            </section>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary">Speakers and guests come from all over the U.S.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>