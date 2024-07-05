<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Home </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/" >';
include_once 'header-bottom.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="main menu">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home<span class="visually-hidden">(current)</span></a>
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
                        <a class="dropdown-item" href="upcoming_event.php">Softball Fellowship Event</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Pre-Registration is Live</span>
                    </h2>
                    <p class="mb-6 h3 text-dark">Labor Day Weekend, Kick Off Zoom Meeting<br>August 30th, and Live on August 31st and <br>September 1st at the Monterey Conference Center</p>
                    <a href="register-now.php" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="information cards">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-trophy me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Upcoming Events
                            </p>
                            <p class="card-text"><span aria-hidden='true'>⚾</span><strong>Softball Fellowship Event</strong> - Are you ready for a fun afternoon? If so, we will see you there. Hot Dogs <span aria-hidden='true'>🌭</span> provided. Bring a mit and a side to share!
                                <br><br>
                                <strong>When:</strong> Saturday — July 6th, 2024
                                <br>
                                <strong>Time:</strong> 12 to 4pm
                                <br>
                                <strong>Where:</strong> Dampierre Little League Park, Carmel Valley, CA
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="upcoming_event.php" class="btn btn-primary">View Upcoming Event</a></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Volunteers
                            </p>
                            <p class="card-text">Do you want to be of service? We are currently looking for Facilities Chair. If your answer is yes, or know someone who is willing to step into a service commitment, please contact us, or email our <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">A.A. Chairperson</a>.
                                <br><br>
                                We have found that volunteering to do service improves the quality of our recovery.
                                <br><br>
                                Remember, you get what you give.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Contact Us If You Are Interested</a></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-translate me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Spanish Translation
                            </p>
                            <p class="card-text"> MBAR pledges to make our website accessible, usable and culturally suitable for our Spanish Community.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="https://montereybayarearoundup.org/es/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Spanish Website<span class="sr-only">(Opens a new window)</span></a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Part Two -->
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>2024 Conference Update
                            </p>
                            <p class="card-text">Announcing our Kick Off Zoom Meeting on August 30th at 8pm PST. Join us with our first Speaker of the 2024 Event - Oliver D. from Delaware.<br><a class="bb-link" href="register-now.php#zoom-info">View the Zoom info here</a></p>

                            <p class="card-text">Check back with us for more updates and details as we get closer to the date. In the meantime, check out the 2022 Conference action.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="conference-2022.php" class="btn btn-primary">2022 Conference Schedule</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-cart me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Pre-Registration
                            </p>
                            <p class="card-text">Registration fees pay for the Conference Center, speaker's travel expenses, etc. The Marathon meetings are open and do not require registration.</p>
                            <p class="card-text">As a gentle reminder, your registration is completed when <a href="register-now.php#payment-now" class="bb-link">payment has been made</a>.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="register-now.php" class="btn btn-primary">Register Now</a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Activities
                            </p>
                            <p class="card-text">Marathon Meetings, Roundup Breakfast, Guest Speakers, Ice Cream Social, and what to do around Monterey for this <strong>two day event</strong>.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">Preview Our Activities</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-people-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Committees
                            </p>
                            <p class="card-text">Additional information or any questions, please contact us. Feel free to drop in our monthly meetings too.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Contact Us</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Our Past
                            </p>
                            <p class="card-text">MBAR was established in 1993. Speakers and guests come from all over the United States. Take a look at some fliers from past MBAR's.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="mbar_history.php" class="btn btn-primary">MBAR's History</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-hand-thumbs-up me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Helping Hands
                            </p>
                            <p class="card-text">In keeping with Our Tradition of self-supporting, we accept contributions only from A.A. and Al-Anon members.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contributions.php" class="btn btn-primary">Contribution</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Three -->
    <article aria-label="group definition">
        <div class="container mb-5 py-2 px-4">
            <div class="row">
                <div class="col-lg-8">
                    <section aria-label="About MBAR">
                        <h3 class="text-uppercase">About Monterey Bay Area Roundup</h3>
                        <p><strong class="text-uppercase">Alcoholics Anonymous</strong> is a fellowship of people who share their experience, strength and hope with each other that they may solve their common problem and help others to recover from alcoholism. The only requirement for membership is a desire to stop drinking. There are no dues or fees for A.A. membership; we are self-supporting through our own contributions. A.A. is not allied with any sect denomination, politics, organization or institution; does not wish to engage in any controversy; neither endorses nor opposes any causes. Our primary purpose is to stay sober and help other alcoholics to achieve sobriety.
                            <br><br>
                            <strong class="text-uppercase">What is Al-Anon?</strong>
                            Al-Anon Family Groups are a fellowship of relatives and friends of alcoholics who share their experience, strength, and hope in order to solve their common problems. We believe alcoholism is a family illness and that changed attitudes can aid recovery.
                            <br><br>
                            Al-Anon is not allied with any sect, denomination, political entity, organization, or institution; does not engage in any controversy; neither endorses nor opposes any cause. There are no dues for membership. Al-Anon is self-supporting through its own voluntary contributions.
                            <br><br>
                            Al-Anon has but one purpose: to help families of alcoholics. We do this by practicing the Twelve Steps, by welcoming and giving comfort to families of alcoholics, and by giving understanding and encouragement to the alcoholic.
                        </p>
                    </section>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/coastal_wave.png" class="img-fluid shadow-wrap" alt="Gorgeous, satin blue Pacific Ocean sunset with waves washing on the rocky shore." title="Gorgeous, satin blue Pacific Ocean sunset with waves washing on the rocky shore.">
                </div>
            </div>
        </div>
    </article>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>