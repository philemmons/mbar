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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live!">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Get Set for MBAR on<br>Labor Day Weekend!</h2>
                    <p class="h3 text-dark">Virtual Kick-Off Zoom Meeting</p>
                    <p class="dark-text">August 30th at 8:00pm PDT
                        <br>
                        This meeting is open to everyone, and we encourage you to join!
                    </p>

                    <p class="h3 text-dark">In-Person Meetings</p>
                    <p class="dark-text">August 31st and September 1st at the Monterey Conference Center
                        <br>
                        Please note that registration is required for the in-person event. Make sure to sign up in advance!
                    </p>
                    <a href="register-now.php" class="btn btn-primary mb-2">Register Now</a>
                    <p class="dark-text mb-6">We look forward to your participation in both sessions. Let's make this MBAR a great success!</p>
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
                            <p class="card-title h6"><i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><strong>New</strong> - 2024 Event Schedule
                            </p>
                            <p class="card-text">Announcing our Kick-Off Zoom Meeting on August 30th at 8pm PDT. Join us with our first Speaker of the 2024 Event - Oliver D. from Delaware. This meeting is open to everyone, and join us in unity with his experience, strength, and hope.
                                <br>
                                <a class="bb-link" href="register-now.php#zoom-info">View the Zoom info here</a>
                            </p>
                            <p class="card-text">Get ready to dive in! Our event schedule is now live! More details will be unveiled shortly as the plot thickens.
                            </p>
                            <p class="card-text"><strong>New</strong> - <a class="bb-link" href="pdf/spanish-aa-marathon-2024.pdf">Spanish-Speaker A.A. Marathon Meetings Schedule is live!<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p class="card-text"><strong>New</strong> - <a class="bb-link" href="pdf/final-aa-marathon-meeting-2024.pdf">Even more A.A. Marathon Meetings have been scheduled!<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p class="card-text"><a class="bb-link" href="pdf/mbar-al-anon-speakers.pdf">Featured Al-Anon and Alateen Speakers have been Announced<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="conference-2024.php" class="btn btn-primary">2024 Conference Schedule</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-cart me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Registration is <strong>Live</strong>
                            </p>
                            <p class="card-text">Help us plan a seamless event in advance, ensuring everything runs smoothly for you and everyone else. It shows your commitment and enthusiasm by signing up early.
                                <br><br>
                                The Marathon Meetings are open and do not require registration.
                                <br><br>
                                Kick-Off Zoom meeting is available for everyone, and we're eager to see you there!
                            </p>
                            <p class="card-text">As a gentle reminder, your registration is completed when <a href="register-now.php#payment-now" class="bb-link">payment has been made</a>.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="register-now.php" class="btn btn-primary">Register Now</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-cup-hot-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><strong>New</strong> - Marathon Meetings
                            </p>
                            <p class="card-text">Marathon meetings are a crucial part of A.A. and Al-Anon conventions because they provide continuous support and fellowship for all. These meetings offer a space for members to share their experiences, strength, and hope around the clock, ensuring that help is always available when needed.
                                <br><br>
                                If you would like to be of service, or be a speaker at a meeting or submit your marathon meeting schedule, please contact our A.A Marathon Chair: Mark S. or our Spanish-Speaking Chair: Robert or our Al-Anon Marathon Chair: Olya O.
                            </p>
                        </div>

                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-sm-7 text-center mb-2 mb-sm-0">
                                    <small class="text-body-secondary"><a href="aa-spanish-marathon-2024.php" class="btn btn-primary">Spanish A.A. Meetings</a></small>
                                </div>
                                <div class="col-sm-5 text-center mb-2 mb-sm-0">
                                    <small class="text-body-secondary"><a href="aa-marathon-2024.php" class="btn btn-primary">A.A. Meetings</a></small>
                                </div>
                                <div class="col-sm-12 text-center mt-sm-2">
                                    <small class="text-body-secondary"><a href="al-anon-marathon-2024.php" class="btn btn-primary">Al-Anon Meetings</a></small>
                                </div>
                            </div>
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
                            <p class="card-title h6"><i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><strong>New</strong> - More Fellowship
                            </p>
                            <p class="card-text">What better way to care for another, than to get to know them better. This year we have more fellowship activities for us than in previous years and invite you to them. The links below open PDF's with more information. "Though they knew they must help other alcoholics if they would remain sober, that motive became secondary. It was transcended by the happiness they found in giving themselves for others." BB p132
                            </p>
                            <p class="card-text">
                            <ul>
                                <li><strong>New</strong> - Photo Booths: Capture fun selfies!
                                </li>
                                <li>Speed Fellowship-ing
                                </li>
                                <li><a class="bb-link" href="pdf/scavenger_hunt.pdf">Goose Chase Scavenger Hunt<span class="sr-only">(Open pdf in browser)</span></a>
                                </li>
                                <li><a class="bb-link" href="pdf/paint-party.pdf">Paint Party<span class="sr-only">(Open pdf in browser)</span></a>
                                </li>
                                <li><a class="bb-link" href="pdf/werewolf.pdf">Werewolf Fellowship Game<span class="sr-only">(Open pdf in browser)</span></a>
                                </li>
                                <li><a class="bb-link" href="pdf/cornhole.pdf">Cornhole and Fellowship<span class="sr-only">(Open pdf in browser)</span></a>
                                </li>
                                <li><a class="bb-link" href="pdf/aa_trivia.pdf">A.A Trivia: General Service<span class="sr-only">(Open pdf in browser)</span></a>
                                </li>
                            </ul>
                            Circle your calendars for a weekend of recovery, fellowship, and fun. More details to follow soon!
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">Preview All MBAR Activities</a></small>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-translate me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Spanish Translation
                            </p>
                            <p class="card-text">We're committed to our Spanish-Speaking A.A. and Al-Anon Fellowships!
                                <br><br>
                                Translating a website into Spanish is important because it ensures that essential recovery resources are accessible to Spanish-speaking individuals. In Alcoholics Anonymous(A.A.) and Al-Anon, inclusivity is key to reaching as many people as possible who need support. By offering a Spanish-language version of the site, we can better serve the diverse needs of our community, making sure that everyone, regardless of language, has the opportunity to find help and connect with others on their recovery journey.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="https://montereybayarearoundup.org/es/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Spanish Website<span class="sr-only">(Opens a new window)</span></a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-people-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>MBAR's Committee Meeting
                            </p>
                            <p class="card-text">As we gear up for our upcoming event, we will be holding several additional planning meetings to ensure everything runs smoothly. Your input and participation are crucial to our success. Together, we can make this event truly exceptional!
                                <br><br>
                                Looking forward to collaborating with all of you.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="meetings.php" class="btn btn-primary">Meeting Info</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Volunteering in Recovery
                            </p>
                            <p class="card-text">We have found that volunteering to do service significantly improves the quality of our recovery. By giving back, we not only help others but also strengthen our own journey.
                                <br><br>
                                Remember, you get what you give. Join us in making a positive impact and enhancing our recovery community.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Ready to be of Service</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Our Past
                            </p>
                            <p class="card-text">Since 1993, the Monterey Bay Area Round Up(MBAR) has united speakers and guests nationwide. Volunteering enhances our recovery journey by giving back and fostering personal growth. Explore past MBAR fliers to see the impact and join us in continuing this legacy.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="mbar_history.php" class="btn btn-primary">MBAR's History</a></small>
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
                        <h3 class="text-uppercase">About Monterey Bay Area Round Up</h3>
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