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
                    <p class="mb-6 h5 text-dark">Throughout Labor Day weekend, we will have A.A and Al-Anon meetings in Spanish and English. These meetings are open to all and everyone is welcome.
                        <br>
                        <strong>Marathon Meetings are open to <em>all</em>, no registration is required.</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="A.A. Marathon Meetings Title">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live">
                        <section aria-label="A.A. Marathon Schedule">
                            <h3 class="fw-bold text-dark px-3 px-md-0">A.A. Marathon Schedule - English</h3>
                            <p class="mb-6 h5 text-dark">As of today, this is our lineup. If you would like to be of service or be a speaker at a meeting, please contact our Marathon Chair.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two-->
    <article id="schedule" aria-label="A.A. Meetings - English">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <section aria-label="Saturday's A.A. Meetings">
                            <h3 class="white-on-black py-2 mt-2 text-center">Saturday, August 31th</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Benny S., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Trust The Process
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Ron M., Prunedale
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Spirituality
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>10:00am A.A. Kick-Off Speaker</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Jack F., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Quality vs Quantity
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Steve C., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Freedom
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>11:30 A.A / Al-Anon Double Winner Panel</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Greg P., Oak Hills
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Powerlessness
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Tony G., Hollister
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Gratitude
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>2:00pm A.A / Al-Anon Speaker Meetings</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    David G., Monterey
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Willingness
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Mari W., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: One Day At A Time
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Carol H., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Three Legacies of A.A.
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>5:00pm Meet the Speaker's Dinner</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Eric L., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Acceptance
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>6:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Mark F., Monterey
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Love and Tolerance
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>7:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Chael R., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Three Pertinent Ideas
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>7:30pm A.A. Speaker Meeting</strong>
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>8:30pm Round Up Prize Raffle and 50/50 Drawing</strong>
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>9:30pm Saturday Night Masquerade Dance - Masks Provided</strong>
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>Good Night and Be Safe</strong>
                                </div>

                            </div>
                        </section>

                        <section aria-label="Sunday's A.A. Meetings">
                            <h3 class="white-on-black py-2 mt-2 text-center">Sunday, September 1st</h3>

                            <div class="row g-0 mb-4">

                                <div class="col-sm-12 text-center">
                                    <strong>8:00am Round-Up Continental Breakfast and Bingo Games</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Maxine S., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Newcomers
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>9:30am A.A. Panel - Experience Exchange: Foundation for the Future</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Robert A., Monterey
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Humility
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>11:00am Al-Anon Speaker Meeting</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Patricia, Greenfield
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Unity
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Cliff A., Monterey
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Stability
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Ryan Y., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Surrender
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>1:30pm Alateen Speaker Meeting</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Bob C., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Sponsorship
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>3:00pm Ice Cream Social</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Michele T., Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Serenity
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle">
                                    Irma, Salinas
                                </div>
                                <div class="col-sm-5 bottom">
                                    Topic: Coming Back
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>5:00pm A.A.Speaker Meeting</strong>
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>6:30pm Al-Anon Prize Raffle Drawing</strong>
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>A.A. Marathon Meetings Ends - Hope you had a fun time!</strong>
                                </div>

                            </div>

                            
                            <div class="row">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6">
                                    <strong>Disclaimer: This schedule is subject to change.</strong>
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