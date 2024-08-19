<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - 2024 Conference </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/conference-2024.php" >';
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
                        <a class="dropdown-item active" aria-current="page" href="conference-2024.php">MBAR 2024<span class="visually-hidden">(current)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live!">
                    <h2 class="display-6 fw-bold px-3 px-md-0">A.A. Conference
                        <br>with
                        <br>Al-Anon Participation
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Event registration, reason, location, and unity">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live">
                        <section aria-label="Registration Area">
                            <h3 class="fw-bold text-dark px-3 px-md-0">Monterey Bay Area Round Up 2024</h3>
                            <p class="mb-6 h4 text-dark">Join us online on August 30th with a Kick-Off Zoom Meeting, or live on August 31st and September 1st at the Monterey Conference Center.
                                <br>
                                More details to be announced as we get closer!
                            </p>
                            <a href="register-now.php" class="btn btn-primary me-2">Register Now</a>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center py-4 mb-5">
                <div class="col-sm-12 col-12 text-center px-3">
                    <img class="img-fluid" src="../images/conference-room.png" alt="Monterey Conference Center meeting room, chairs lined up facing a stage, and past A.A. conference banners.">
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two-->
    <article id="schedule" aria-label="MBAR 2024 Schedule">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <section aria-label="Friday's events">
                            <h3 class="white-on-black py-2 mt-2">Friday Night, August 30th - Free for All</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>8:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    <i class="bi bi-camera-video-fill" aria-hidden="true"> </i>A.A. Zoom Meeting
                                    <br>
                                    ID: <strong>831 4306 2293 </strong>
                                    <br>
                                    Password: <strong>2024</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Speaker: <strong>Oliver D., Delaware</strong>
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>9:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Online 50/50 Drawing
                                    <br>
                                    (Immediately Following Speaker Meeting)
                                </div>
                            </div>
                        </section>

                        <section aria-label="Saturday's events">
                            <h3 class="white-on-black py-2 mt-2">Saturday, August 31st</h3>
                            <div class="row g-0 mb-4">
                                <div class="col-sm-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    <strong>Registration Opens</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    A.A.(English/Spanish): Marathon Meetings Begin - <strong>Colton 1</strong>
                                    <br>
                                    <a href="aa-marathon-2024.php" class="bb-link">(See insert for scheduled times)</a>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    Al-Anon(English/Spanish): Marathon Meetings Begin - <strong>Steinbeck 1c</strong>
                                    <br>
                                    <a href="al-anon-marathon-2024.php" class="bb-link">(See insert for scheduled times)</a>
                                </div>


                                <div class="col-sm-2 top feature-speaker">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. Kick-Off Speaker
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Speaker: <strong>Mark S., Salinas, CA</strong>
                                </div>


                                <div class="col-sm-2 top feature-speaker">
                                    <strong>11:30am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. / Al-Anon Double Winner Panel
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Speaker: <strong>Annette C. and Micha C.</strong>
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Speed Fellowship - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 top feature-speaker">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. / Al-Anon Speaker Meeting
                                    <br>
                                    <strong>(ASL Interpretation Provided)</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Al-Anon Speaker: <strong>Shelly S., Newport Beach, CA</strong>
                                    <br>
                                    A.A. Speaker: <strong>Denis D., Santa Cruz, CA</strong>
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>3:30pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Goose Chase Scavenger Hunt - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    Meet the Speaker's Dinner - <strong>Bethlehem Lutheran Church ∆</strong>
                                </div>


                                <div class="col-sm-2 top feature-speaker">
                                    <strong>7:30pm</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. Speaker Meeting
                                    <br>
                                    <strong>(ASL Interpretation Provided)</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Speaker: <strong>Krystal M., Sacramento, CA</strong>
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>8:30pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Round Up Prize Raffle and 50/50 Drawing - Must be present to win
                                    <br>
                                    (Immediately Following Speaker Meeting)
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>9:30pm</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    Saturday Night Masquerade Dance - Masks Provided
                                    <br>
                                    (Immediately Following Raffle)
                                </div>


                            </div>
                        </section>

                        <section aria-label="Sunday's events">
                            <h3 class="white-on-black py-2 mt-2">Sunday, September 1st</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    <strong>Registration Opens</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    Round-Up Breakfast and Bingo Games - <strong>Bethlehem Lutheran Church ∆</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    A.A.(English): Marathon Meetings Begin - <strong>Colton 1</strong>
                                    <br>
                                    <a href="aa-marathon-2024.php" class="bb-link">(See insert for scheduled times)</a>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    A.A.(Spanish): Marathon Meetings Begin - <strong>Steinbeck 1a</strong>
                                    <br>
                                    <a href="#" class="bb-link">(See insert for scheduled times)</a>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    Al-Anon(English/Spanish): Marathon Meetings Begin - <strong>Steinbeck 1c</strong>
                                    <br>
                                    <a href="al-anon-marathon-2024.php" class="bb-link">(See insert for scheduled times)?</a>
                                </div>


                                <div class="col-sm-2 top feature-speaker">
                                    <strong>9:30am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. Panel - Experience Exchange: Foundation for the Future
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Speakers: <strong>Pasquale C., Lisa M., Mike V., and Naomi B.</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    A.A. Spanish Speaking Meetings Begin - <strong>Steinbeck 1a</strong>
                                    <br>
                                    (See insert for locations and times)
                                </div>


                                <div class="col-sm-2 top feature-speaker">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    Al-Anon Speaker Meeting
                                    <br>
                                    <strong>(ASL Interpretation Provided)</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Speakers: <strong>Chris W. and Eileen W., Redding, CA (Parents)</strong>
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Paint Party - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Werewolf Fellowship Game - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 top feature-speaker">
                                    <strong>1:30am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    Alateen Speaker Meeting
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Speaker: <strong>Amelia - 16 year old and Ask-it-Basket</strong>
                                    <br>
                                    <em>(MBAR abides by B-17 NCWSA requirement<br>for Alateen safety)</em>
                                    <br>
                                    Marge S. and Concetta C.
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Cornhole and Fellowship Hour - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    Ice Cream Social - <strong>2nd Floor Terrace</strong>
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    A.A. Trivia: General Service - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 top feature-speaker">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A.Speaker Meeting
                                    <br>
                                    <strong>(ASL Interpretation Provided)</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Speaker: <strong>Dean S., Salinas, CA</strong>
                                </div>


                                <div class="col-sm-2 top cell-color">
                                    <strong>6:30pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Al-Anon Prize Raffle Drawing - Must be present to win
                                    <br>
                                    (Immediately Following Speaker Meeting)
                                </div>


                                <div class="col-sm-2 top">
                                    <strong>9:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    <strong>Conference Ends - Until 2026</strong>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <strong>Δ Location of Event is different than conference site</strong>
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

    <!-- Part Three -->

    <div class="container shadow-wrap">
        <aside aria-label="Check-in info">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Registration Check In">
                            <h3 class="card-title mb-3">Registration Check In</h3>
                            <p>Check in at registration desk to obtain your registration packet containing your name badge, program, list of all marathon meeting times, and any tickets for meals or events, and pre-ordered t-shirt you may have purchased.
                                <br><br>
                                For more information while at the event, questions concerning the event, or lost and found items, please go to the registration desk.
                            </p>
                        </section>
                        <p><strong>Host of MBAR 2024:</strong> Cindy A.
                            <br>
                            <strong>MBAR Steering Committee</strong>
                            <br>
                            <strong>Chairperson:</strong> Chris T.
                            <strong>Co-Chair:</strong> Renee C.
                            <br>
                            <strong>Treasurer:</strong> Carolyn H. <strong>Co-Treasurer:</strong> Jean T.
                            <br>
                            <strong>Recording Secretary:</strong> Roger M.
                        </p>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <!-- Part Four -->
    <article aria-label="Conference Services">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Describe services">
                            <h3 class="card-title mb-3">Conference Services: Keep it Simple</h3>
                            <p><strong>Shuttle service will be available</strong> as to drive from the conference center to the Bethlehem Lutheran Church for the Sunday morning breakfast and the Saturday evening Meet the Speaker's Dinner. Go to the registration desk for more information about this complimentary service.
                            </p>
                            <p>This is the Monterey Conference Center floor plan for navigating MBAR.
                                <br>
                                <a class="bb-link" href="pdf/mcc-floor-plan-2024.pdf">Monterey Conference Center Map<img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon"><span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <hr>
                            <p>See our local A.A. Central Office website
                                <a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank" rel="noopener noreferrer" title="M.B.I.A.A meeting schedule.">www.aamonterey.org<span class="sr-only">(Opens a new window)</span></a> for a current listing of meetings in the area.
                            </p>
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

    <!-- Part Six -->
    <div id="map"></div>
    <article aria-label="MBAR 2024 Google Map">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Event locations">
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Bethlehem+Lutheran+Church+800+Cass+St+Monterey,+CA+93940/@36.5939841,-121.8958073,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de425e4f48de1:0xc2ec674814c2393f!2m2!1d-121.8958736!2d36.5940092?entry=ttu" class="bb-link" target="_blank" title="Direct link to Google Map">Bethlehem Lutheran Church<span class="sr-only">(Opens a new window)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <p><img src="images/icons/warning-sign.png" width="50" height="50" alt="Triangular warning sign with an exclamation point."><strong class="text-uppercase">Please note:</strong> Breakfast and Dinner will be held at<br>
                                    <strong>Bethlehem Lutheran Church, located at 800 Cass Street in Monterey.</strong><br>
                                    (It is a little over one mile from the Conference Center.)
                                </p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25626.756836816734!2d-121.91606218727391!3d36.59400863899273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1sen!2sus!4v1704873760536!5m2!1sen!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Bethlehem Lutheran Church" aria-hidden="true"></iframe>
                            </div>
                            <br>
                            <hr>
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Monterey+Conference+Center+1+Portola+Plaza+Monterey,+CA+93940/@36.6014612,-121.8949613,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de422461f891b:0x20f8f64ee124f091!2m2!1d-121.8949613!2d36.6014612?entry=ttu" class="bb-link" target="_blank" title="Direct link to Google Map">Monterey Conference Center<span class="sr-only">(Opens a new window)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0350279920303!2d-121.89983220605843!3d36.601465407473455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1sen!2sus!4v1704873971870!5m2!1sen!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Monterey Conference Center" aria-hidden="true"></iframe>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

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
                                <li>Friday - 1.5 hours</li>
                                <li>Saturday - 3.0 hours</li>
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