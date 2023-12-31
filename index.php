<?php
session_start();  //start or resume an existing session
include_once 'header.inc' 
?>

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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home" title="Beautiful coastline of Monterey Bay overlooking Lover's Point.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup 2024</span>
                    </h1>
                    <p class="mb-6 h2 text-dark">August 31st and<br>September 1st</p>
                    <a href="registration.php" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="upcoming_event.php">
                                <i class="bi bi-trophy me-2" style="font-size: 2rem; color: var(--color-8);"></i>Bingo Night: "Fun-ds & Fellowship"</a></h5>
                            <p class="card-text">Join The Herd at The Moose for a night of Fellowship, Recovery, and Bingo!
                                <br>
                                <strong>When:</strong> January 26, 2024, 6-9pm
                            </p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="conference-2022.php" class="btn btn-primary">View more info here</a></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2024.php">
                                <i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);"></i>Volunteers</a></h5>
                            <p class="card-text">Most of us have found that volunteering to do service improves the quality of our recovery. In other words, you get what you give.
                            </p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Let us know if you are interested</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2024.php">
                                <i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);"></i>2024 Conference</a></h5>
                            <p class="card-text">Schedule of Events during our two day Roundup. Check back with us for updates and more detail as we get closer to the date.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="conference-2022.php" class="btn btn-primary">See Archives of 2022</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="registration.php">
                                <i class="bi bi-cart me-2" style="font-size: 2rem; color: var(--color-8);"></i>Registration</a></h5>
                            <p class="card-text">Registration fees pay for the Conference Center, speaker's travel expenses, etc. The Marathon meetings are open and do not require registration.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="registration.php" class="btn btn-primary">Pre-Registration is Live</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="activities.php">
                                <i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);"></i>Activities</a></h5>
                            <p class="card-text">Marathon Meetings, Roundup Breakfast, Guest Speakers, Ice Cream Social, and what to do around Monterey for this <strong>two day event.</strong>.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">Preview</a></small>
                    </div>
                </div>
            </div>
        </div>

        <div class=" row justify-content-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="contact.php">
                                <i class="bi bi-people-fill me-2" style="font-size: 2rem; color: var(--color-8);"></i>Committee</a></h5>
                            <p class="card-text">Additional information or any questions, please contact us. Feel free to drop in our monthly meetings.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="committees.php" class="btn btn-primary">Contact Us</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="mbar_history.php">
                                <i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);"></i>History</a></h5>
                            <p class="card-text">MBAR was established in 1993. Speakers and guests come from all over the United States. Take a look at some fliers from past MBAR's.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="mbar_history.php" class="btn btn-primary">Our Past</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="contribution.php">
                                <i class="bi bi-hand-thumbs-up me-2" style="font-size: 2rem; color: var(--color-8);"></i>Contributions</a></h5>
                            <p class="card-text">In keeping with Our Tradition of self-supporting, we accept contributions only from A.A. and Al-Anon members.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="contributions.php" class="btn btn-primary">Helping Hands</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Three -->
    <section class="container mb-5 py-2 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h3>ABOUT MONTEREY BAY AREA ROUNDUP</h3>
                <p><strong>ALCOHOLICS ANONYMOUS</strong> is a fellowship of people who share their experience, strength and hope with each other that they may solve their common problem and help others to recover from alcoholism. The only requirement for membership is a desire to stop drinking. There are no dues or fees for A.A. membership; we are self-supporting through our own contributions. A.A. is not allied with any sect denomination, politics, organization or institution; does not wish to engage in any controversy; neither endorses nor opposes any causes. Our primary purpose is to stay sober and help other alcoholics to achieve sobriety.
                    <br><br>
                    <strong>WHAT IS AL-ANON?</strong>
                    Al-Anon Family Groups are a fellowship of relatives and friends of alcoholics who share their experience, strength, and hope in order to solve their common problems. We believe alcoholism is a family illness and that changed attitudes can aid recovery. <br><br>
                    Al-Anon is not allied with any sect, denomination, political entity, organization, or institution; does not engage in any controversy; neither endorses nor opposes any cause. There are no dues for membership. Al-Anon is self-supporting through its own voluntary contributions.
                    <br><br>
                    Al-Anon has but one purpose: to help families of alcoholics. We do this by practicing the Twelve Steps, by welcoming and giving comfort to families of alcoholics, and by giving understanding and encouragement to the alcoholic.
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="../images/coastal_wave.png" class="img-fluid shadow-wrap" alt="Huge wave crashing on the rocky shore.">
            </div>
        </div>
    </section>

</main>
<?php include_once 'footer.inc' ?>
</body>

</html>