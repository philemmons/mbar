<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - 2024 Marathon Meetings</title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/marathon-2024.php" >';
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
                        <a class="dropdown-item active" aria-current="page" href="marathon-2024.php">Marathon Meetings<span class="visually-hidden">(current)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">2024 Marathon Meetings</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Marathon meetings and unity">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live">
                        <section aria-label="Marathon Schedule">
                            <h3 class="fw-bold text-dark px-3 px-md-0">MBAR Marathon Schedule 2024</h3>
                            <p class="mb-6 h4 text-dark">Throughout Labor Day weekend, we will have A.A and Al-Anon meetings in Spanish and English. These meetings are open to all and everyone is welcome. No registration is required for any of the marathon meetings.
                                <br>
                                As of today, this is our lineup. If you would like to be of service or be a speaker at a meeting, please contact our Marathon Chair, Mark S.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two-->
    <article id="schedule" aria-label="Marathon 2024">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <section aria-label="Saturday's Meetings">
                            <h3 class="white-on-black py-2 mt-2">Saturday, August 31th</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2">
                                    Time
                                </div>
                                <div class="col-sm-3">
                                    Name
                                </div>
                                <div class="col-sm-3">
                                    From
                                </div>
                                <div class="col-sm-4">
                                    Topic
                                </div>


                                <div class="col-sm-2">
                                    8:00am
                                </div>
                                <div class="col-sm-3">
                                    Benny S.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Trust The Process
                                </div>


                                <div class="col-sm-2">
                                    9:00am
                                </div>
                                <div class="col-sm-3">
                                    Ron M.
                                </div>
                                <div class="col-sm-3">
                                    Prundale
                                </div>
                                <div class="col-sm-4">
                                    Spirituality
                                </div>


                                <div class="col-sm-12">
                                    10:00am Kick-Off Spaeker
                                </div>
                                <div class="col-sm-2">
                                    10:00am
                                </div>
                                <div class="col-sm-3">
                                    Jack F.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Quality vs Quantity
                                </div>


                                <div class="col-sm-2">
                                    11:00am
                                </div>
                                <div class="col-sm-3">
                                    Steve C.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Freedom
                                </div>


                                <div class="col-sm-12">
                                    11:30 A.A and Al-Anon Double Winner Panel
                                </div>
                                <div class="col-sm-2">
                                    12:00pm
                                </div>
                                <div class="col-sm-3">
                                    Greg P.
                                </div>
                                <div class="col-sm-3">
                                    Oak Hills
                                </div>
                                <div class="col-sm-4">
                                    Powerlessness
                                </div>


                                <div class="col-sm-2">
                                    1:00pm
                                </div>
                                <div class="col-sm-3">
                                    Tony G.
                                </div>
                                <div class="col-sm-3">
                                    Hollister
                                </div>
                                <div class="col-sm-4">
                                    Gratitude
                                </div>


                                <div class="col-sm-12">
                                    2:00pm A.A and Al-Anon Speaker Meeting
                                </div>
                                <div class="col-sm-2">
                                    2:00pm
                                </div>
                                <div class="col-sm-3">
                                    David G.
                                </div>
                                <div class="col-sm-3">
                                    Monterey
                                </div>
                                <div class="col-sm-4">
                                    Willingness
                                </div>


                                <div class="col-sm-2">
                                    3:00pm
                                </div>
                                <div class="col-sm-3">
                                    Mari W.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    One Day At A Time
                                </div>


                                <div class="col-sm-2">
                                    4:00pm
                                </div>
                                <div class="col-sm-3">
                                    Carol H.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Three Legacies of A.A.
                                </div>


                                <div class="col-sm-2">
                                    5:00pm
                                </div>
                                <div class="col-sm-3">
                                    Eric L.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Acceptance
                                </div>


                                <div class="col-sm-2">
                                    6:00pm
                                </div>
                                <div class="col-sm-3">
                                    Mark F.
                                </div>
                                <div class="col-sm-3">
                                    Monterey
                                </div>
                                <div class="col-sm-4">
                                    Love and Tolerance
                                </div>


                                <div class="col-sm-2">
                                    7:00pm
                                </div>
                                <div class="col-sm-3">
                                    Chael R.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Three Pertinent Ideas
                                </div>


                                <div class="col-sm-12">
                                    8:00pm Prize Raffle and 50 / 50
                                </div>
                                <div class="col-sm-12">
                                    9:30pm Fun and Fellowship Dance
                                </div>
                                <div class="col-sm-12">
                                    Good Night and Be Safe
                                </div>
                            </div>
                        </section>

                        <section aria-label="Sunday's events">
                            <h3 class="white-on-black py-2 mt-2">Sunday, September 1st</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2">
                                    Time
                                </div>
                                <div class="col-sm-3">
                                    Name
                                </div>
                                <div class="col-sm-3">
                                    From
                                </div>
                                <div class="col-sm-4">
                                    Topic
                                </div>


                                <div class="col-sm-2">
                                    9:00am
                                </div>
                                <div class="col-sm-3">
                                    Maxine S.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Newcomers
                                </div>


                                <div class="col-sm-2">
                                    10:00am
                                </div>
                                <div class="col-sm-3">
                                    Robert A.
                                </div>
                                <div class="col-sm-3">
                                    Monterey
                                </div>
                                <div class="col-sm-4">
                                    Humility
                                </div>

                                <div class="col-sm-12">
                                    11:00am Al-Anon Speaker Meeting
                                </div>
                                <div class="col-sm-2">
                                    11:00am
                                </div>
                                <div class="col-sm-3">
                                    Patricia
                                </div>
                                <div class="col-sm-3">
                                    Greenfield
                                </div>
                                <div class="col-sm-4">
                                    Unity
                                </div>


                                <div class="col-sm-2">
                                    12:00pm
                                </div>
                                <div class="col-sm-3">
                                    Cliff A.
                                </div>
                                <div class="col-sm-3">
                                    Monterey
                                </div>
                                <div class="col-sm-4">
                                    Stability
                                </div>


                                <div class="col-sm-2">
                                    1:00pm
                                </div>
                                <div class="col-sm-3">
                                    Ryan Y.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Surrender
                                </div>


                                <div class="col-sm-12">
                                    1:30pm Alateen Speaker
                                </div>
                                <div class="col-sm-2">
                                    2:00pm
                                </div>
                                <div class="col-sm-3">
                                    Bob C.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Sponsorship
                                </div>

                                <div class="col-sm-2">
                                    3:00pm
                                </div>
                                <div class="col-sm-3">
                                    Michele T.
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Serenity
                                </div>

                                <div class="col-sm-2">
                                    4:00pm
                                </div>
                                <div class="col-sm-3">
                                    Irma
                                </div>
                                <div class="col-sm-3">
                                    Salinas
                                </div>
                                <div class="col-sm-4">
                                    Coming Back
                                </div>

                                <div class="col-sm-12">
                                    A.A. and Al-Anon meetings Ends - Hope you had a fun time!
                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </article>


    <!-- Part Five -->
    <aside aria-label="Why we have MBAR explanation.">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Why MBAR?">
                            <h3 class="card-title mb-3">Why do we have MBAR?</h3>
                            <p>Frequent contact with newcomers and with each other is the bright spot of our lives.
                                <br>
                                <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">
                                <a class="btn btn-link bb-link" href="pdf/BIG-BOOK-CHAPTER_7_P-89.pdf">Big Book p89<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p class="sr-only">(This is the paragraph from page 89 above.)"Life will take on new meaning. To watch people recover, to see them help others, to watch loneliness vanish, to see a fellowship grow up about you, to have a host of friends—this is an experience you must not miss. We know you will not want to miss it."
                            </p>
                            <p>It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus, we find the fellowship, and so will you.
                                <br>
                                <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">
                                <a class="btn btn-link bb-link" href="pdf/BIG-BOOK-CHAPTER_11_P-152.pdf">Big Book p152<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p class="sr-only">(This is the paragraph from page 152 above.)"Yes, there is a substitute and it is vastly more than that. It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus we find the fellowship, and so will you."
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>


    <!-- Part Seven -->
    <aside aria-label="ADA accessibility and inclusion.">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Event unity">
                            <h4 class="card-title mb-3 text-center text-uppercase">ADA Accessibility</h4>
                            <p>Our team is committed to ensure the success of your event. Please discuss any areas not covered in this document with your Event Manager or our Staff. These general policies, rules and regulations are subject to change.
                            </p>
                            <p><a href="https://www.montereyconferencecenter.com/facility/ada-accessibility/" class="bb-link" target="_blank" rel="noopener noreferrer nofollow"><strong>The Monterey Conference Center ADA compliance policy</strong><span class="sr-only">(Opens a new window)</span></a> - The Monterey Conference Center (MCC) is ADA compliant. In accordance with the ADA, we are responsible for accommodations associated with permanent premise access, such as, but not limited to, wheelchair ramps, elevator standards, door width standards and restroom accessibility.
                            </p>
                            <p>It is the client or renter's responsibility to accommodate non-permanent accessibility requirements and incorporate visually-assisted devices, interpreters, and temporary seating accessibility if needed.
                            </p>
                            <p>Assisted hearing devices are available through our preferred in-house Audio-Visual provider.
                            </p>
                            <p><strong><span class="text-uppercase">ADA Accessibility</span> - MBAR 2024 will provide two ASL Interpreters on these days:</strong>
                            </p>
                            <ul>
                                <li>Saturday - 2.5 hours</li>
                                <li>Sunday - 3.0 hours</li>
                            </ul>
                            <p style="font-style: italic;"><strong class="text-uppercase">Please note:</strong> ADA accessibility's are subject to change with the new schedule, reservation times, and location.
                            </p>
                            <p class='sr-only'>(This is the above text without italics)><strong class="text-uppercase">Please note:</strong> ADA accessibility's are subject to change with the new schedule, reservation times, and location.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>