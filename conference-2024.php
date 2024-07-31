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
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">A.A. Conference
                            <br>with
                            <br>Al-Anon Participation</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Event registration, reason, location, and unity">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live">
                        <section aria-label="Registration Area">
                            <h3 class="fw-bold text-dark px-3 px-md-0">Monterey Bay Area Roundup 2024
                                <br>
                                More details to be announced as we get closer!
                            </h3>
                            <p class="mb-6 h4 text-dark">Join us online, Labor Day Weekend, with a Kick Off Zoom Meeting August 30th with Oliver D. from Delaware, and Live on August 31st and September 1st at the Monterey Conference Center.
                                <br>Meeting ID: <strong>831 4306 2293</strong>
                                <br>Passcode: <strong>2024</strong>
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
    <article aria-label="MBAR 2022 Schedule">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <section aria-label="Friday's events">
                            <h3 class="white-on-black py-2 mt-2">Friday Night, August 30th</h3>
                            <div class="row g-0 mb-4">
                                <div class="col-sm-2">
                                    8:00pm
                                </div>
                                <div class="col-sm-5">
                                    <i class="bi bi-camera-video-fill" aria-hidden="true"> </i>A.A. Zoom Meeting
                                </div>
                                <div class="col-sm-5">
                                    Speaker: <strong>Oliver D., Delaware</strong>
                                </div>

                                <div class="col-sm-2 cell-color">
                                    50/50 Raffle
                                </div>
                                <div class="col-sm-5 cell-color">
                                    Zoom Meeting ID: <strong>831 4306 2293 </strong>
                                </div>
                                <div class="col-sm-5 cell-color">
                                    Zoom Meeting Password: <strong>2024</strong>
                                </div>
                            </div>
                        </section>

                        <section aria-label="Saturday's events">
                            <h3 class="white-on-black py-2 mt-2">Saturday, August 31th</h3>
                            <div class="row g-0 mb-4">
                                <div class="col-sm-2">
                                    8:00am
                                </div>
                                <div class="col-sm-10">
                                    <strong>Registration Opens</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    9:00am
                                </div>
                                <div class="col-sm-10 cell-color">
                                    A.A and Al-Anon(English/Spanish) - Marathon Meetings Begin
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    10:00am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Kick-Off A.A. Meeting
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Speaker: <strong>Mark S., Salinas, CA</strong>
                                </div>


                                <div class="col-sm-2">
                                    11:30am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    A.A. / Al-Anon Double Winner Panel
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Speaker: <strong>Annette C.</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    1:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Speed Fellowship
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    2:00pm
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    A.A. / Al-Anon Speaker Meeting(ASL Interpretation Provided)
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Al-Anon Speaker: <strong>Shelly S.</strong>
                                    <br>
                                    A.A. Speaker: <strong>Denis D., Santa Cruz, CA</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    3:30pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Scavenger Hunt
                                </div>


                                <div class="col-sm-2">
                                    5:00pm
                                </div>
                                <div class="col-sm-5">
                                    Meet the Speakers Dinner
                                </div>
                                <div class="col-sm-5">
                                    <strong>Bethlehem Lutheran Church ∆</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    7:30pm
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    A.A. Speaker Meeting(ASL Interpretation Provided)
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Speaker: <strong>Krystal M., Sacramento, AZ</strong>
                                </div>


                                <div class="col-sm-2">
                                    8:30pm
                                </div>
                                <div class="col-sm-5">
                                    Prize Raffle and 50/50 Drawing(Must be present to win)
                                </div>
                                <div class="col-sm-5">
                                    (Immediately Following Speaker Meeting)
                                </div>


                                <div class="col-sm-2 cell-color">
                                    9:30pm
                                </div>
                                <div class="col-sm-5 cell-color">
                                    Fun and Fellowship Dance
                                </div>
                                <div class="col-sm-5 cell-color">
                                    (Immediately Following Raffle)
                                </div>
                            </div>
                        </section>

                        <section aria-label="Sunday's events">
                            <h3 class="white-on-black py-2 mt-2">Sunday, September 1st</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2">
                                    8:00am
                                </div>
                                <div class="col-sm-10">
                                    <strong>Registration Opens</strong>
                                </div>

                                <div class="col-sm-2">
                                    8:00am
                                </div>
                                <div class="col-sm-5">
                                    Fellowship Breakfast and Bingo
                                </div>
                                <div class="col-sm-5">
                                    <strong>Bethlehem Lutheran Church ∆</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    9:00am
                                </div>
                                <div class="col-sm-10 cell-color">
                                    A.A and Al-Anon(English/Spanish) - Marathon Meetings Begin
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    9:30am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    A.A. Four Speaker Panel
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Topic: <strong>Experience Exchange: Foundation for the Future</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    10:00am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    A.A. Spanish Speaking Meetings Begin
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Speakers: <strong>TBA</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    11:00am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Al-Anon Speaker Meeting(ASL Interpretation Provided)
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Speaker: <strong>Chris W., Redding, CA</strong>
                                    <br>
                                    Speaker: <strong>Eileen W., Redding, CA</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    12:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Paint Fellowship Hour
                                </div>


                                <div class="col-sm-2 cell-color">
                                    1:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Werewolf Fellowship Hour
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    1:30am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Alateen Speaker Meeting
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Speaker: <strong>Amelia - 16 year old and Ask-it-Basket</strong>
                                    <br>
                                    <em>(MBAR abides by B-17 NCWSA requirement for Alateen safety)<em>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    2:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Cornhole Fellowship Hour
                                </div>


                                <div class="col-sm-2">
                                    3:00pm
                                </div>
                                <div class="col-sm-5">
                                    Ice Cream Social
                                </div>
                                <div class="col-sm-5">
                                    (2nd Floor Terrace)
                                </div>


                                <div class="col-sm-2 cell-color">
                                    4:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    General Service Trivia
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    5:00pm
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    A.A.Speaker Meeting(ASL Interpretation Provided)
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Speaker: <strong>Dean S., Salinas, CA</strong>
                                </div>


                                <div class="col-sm-2">
                                    6:30pm
                                </div>
                                <div class="col-sm-5">
                                    Raffle Drawing
                                </div>
                                <div class="col-sm-5">
                                    (Immediately Following Speaker Meeting)
                                </div>


                                <div class="col-sm-2">
                                    9:00pm
                                </div>
                                <div class="col-sm-10">
                                    Conference Ends
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
        <aside aria-label="Pre-registration">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Registration for 2024 is now live!">
                        <a href="register-now.php" class="btn btn-light btn-lg active" role="button" aria-pressed="true">
                            <img class="img-fluid" src="../images/button-reg.png" alt="2022 sea otter logo with register here text.">
                        </a>
                    </div>
                </div>
            </div>
        </aside>

        <aside aria-label="Check-in info">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration for 2024 is now open!">
                        <p class="text-uppercase">Check in at registration desk to obtain your registration packet containing your name badge, program, list of all marathon meeting times, and any tickets for meals or events you may have purchased.
                            <br><br>
                            For more information while at the event, questions concerning the event, or lost and found items, please go to the registration desk.
                        </p>
                        <p>
                            Δ Location of Event is different than conference site
                            <br><br>
                            <strong>Host of MBAR 2022:</strong> May H. - MBAR Steering Committee
                            <br>
                            <strong>Chairperson:</strong> Cindy A. <strong>Co-Chair:</strong> Phil C.
                            <br>
                            <strong>Treasurer:</strong> Daylene A. <strong>Co-Treasurer:</strong> Mona S.
                        </p>
                        <hr>
                        <p>See our local A.A. Central Office website
                            <a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank" rel="noopener noreferrer" title="M.B.I.A.A meeting schedule.">www.aamonterey.org<span class="sr-only">(Opens a new window)</span></a> for a current listing of meetings in the area.
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
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Describe services">
                            <h3 class="card-title mb-3 text-center">Conference Services: <span class="text-uppercase">Keep it Simple</span></h3>
                            <p><strong>Check-in at the registration table</strong> to obtain your registration packets containing your name badges, programs and any tickets for meals or the dance which you may have purchased.
                            </p>
                            <p><strong>Shuttle service will be available</strong> to drive from the conference center to the Bethlehem Lutheran Church for the Saturday morning breakfast and the Saturday evening meet the speakers dinner. Go to registration desk for more information about this complimentary service.
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
                            <h3 class="card-title mb-3 text-uppercase">Why Do We Have MBAR?</h3>
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
    <article aria-label="MBAR 2022 Google Map">
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
                            <p><strong><span class="text-uppercase">ADA Accessibility</span> - MBAR 2022 will provide two ASL Interpreters on these days:</strong>
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