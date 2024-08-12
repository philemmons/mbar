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
                        <a class="dropdown-item active" aria-current="page" href="marathon-2024.php">Marathon Meetings<span class="visually-hidden">(current)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Monterey Conference Center - Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="2024 Marathon Meetings">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">2024 Marathon Meetings</span></h2>
                    <p class="mb-6 h5 text-dark">Throughout Labor Day weekend, we will have A.A and Al-Anon meetings in Spanish and English.
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
                            <h3 class="fw-bold text-dark px-3 px-md-0">A.A. Marathon Schedule</h3>
                            <p class="mb-6 h5 text-dark">As of today, this is our lineup. If you would like to be of service or be a speaker at a meeting or submit your marathon meeting schedule, please contact our Marathon Chair: Mark S.
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
                            <h3 class="white-on-black p-2 mt-2 text-center">Saturday, August 31st</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Benny S., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Trust The Process
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Ron M., Prunedale
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Spirituality
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>10:00am A.A. Kick-Off Speaker</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Jack F., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Quality vs Quantity
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Steve C., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Freedom
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>11:30 A.A / Al-Anon Double Winner Panel</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Greg P., Oak Hills
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Powerlessness
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Tony G., Hollister
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Gratitude
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>2:00pm A.A / Al-Anon Speaker Meetings</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    David G., Monterey
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Willingness
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Mari W., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: One Day At A Time
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Carol H., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Three Legacies of A.A.
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>5:00pm Meet the Speaker's Dinner</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Eric L., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Acceptance
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>6:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Mark F., Monterey
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Love and Tolerance
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>7:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Chael R., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Three Pertinent Ideas
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>7:30pm A.A. Speaker Meeting</strong>
                                </div>


                                <div class="col-sm-12 text-center cell-color">
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
                            <h3 class="white-on-black p-2 mt-2 text-center">Sunday, September 1st</h3>

                            <div class="row g-0 mb-4">

                                <div class="col-sm-12 text-center">
                                    <strong>8:00am Round-Up Continental Breakfast and Bingo Games</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Maxine S., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Newcomers
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>9:30am A.A. Panel - Experience Exchange: Foundation for the Future</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Robert A., Monterey
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Humility
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>11:00am Al-Anon Speaker Meeting</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Patricia, Greenfield
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Unity
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Cliff A., Monterey
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Stability
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Ryan Y., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Surrender
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>1:30pm Alateen Speaker Meeting</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Bob C., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Sponsorship
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>3:00pm Ice Cream Social</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Michele T., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Serenity
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Irma, Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Topic: Coming Back
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>5:00pm A.A.Speaker Meeting</strong>
                                </div>


                                <div class="col-sm-12 text-center cell-color">
                                    <strong>6:30pm Al-Anon Prize Raffle Drawing</strong>
                                </div>


                                <div class="col-sm-12 white-on-black p-2 mt-2 text-center">
                                    <strong>A.A. Marathon Meetings Ends - Hope you had a fun time!</strong>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12 p-2 mt-2">
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
    <aside aria-label="Why we have marathon meetings">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Why marathon meetings?">
                            <h4 class="card-title mb-3">Why A.A. Has Marathon Meetings During Conventions?</h4>
                            <p>Marathon meetings are a crucial part of AA conventions because they provide continuous support and fellowship for attendees. These meetings offer a space for members to share their experiences, strength, and hope around the clock, ensuring that help is always available when needed.
                            </p>
                            <p>For many, conventions can be emotionally intense, triggering memories or feelings that require immediate attention and support. Marathon meetings address this by providing a safe, welcoming environment where members can connect with others at any time, day or night. This continuous availability is vital in helping members stay grounded, especially those who may be struggling with cravings, emotions, or difficult experiences during the convention.
                            </p>
                            <p>Additionally, marathon meetings foster a sense of community and inclusivity, ensuring that everyone, regardless of their schedule, has the opportunity to participate in meetings. They symbolize the commitment of AA to be there for its members whenever they need it, reinforcing the principles of unity and mutual aid that are at the heart of the AA program.
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