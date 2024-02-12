<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" role="navigation" aria-label="main navigation">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse.true navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conference" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conference">
                        <a class="dropdown-item active" aria-current="page" href="conference-2024.php">MBAR 2024<span class="visually-hidden">(current)</span></a>
                        <a class="dropdown-item" href="register-now.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item" href="memories.php">Memories</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-committees" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-committees">
                        <a class="dropdown-item" href="meetings.php">Meetings</a>
                        <a class="dropdown-item" href="committees.php">Committees</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-upcoming-events" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-upcoming-events">
                        <a class="dropdown-item" href="upcoming_event.php">Bingo Night</a>
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

<main role="main" id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">A.A. Conference<br>
                            with<br>
                            Al-Anon Participation</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h3 class="fw-bold"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup 2024</span>
                    </h3>
                    <p class="mb-6 h4 text-dark">Labor Day Weekend, August 31st and September 1st </p>
                    <a href="register-now.php" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-4 mb-5">
            <div class="col-sm-12 col-12 text-center px-3">
                <img class="img-fluid" src="../images/conference-room.png" alt="Monterey Conference Center meeting room, chairs lined up facing a stage, and past A.A. conference banners.">
            </div>
        </div>
    </div>

    <!-- Part Two -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h4 class="card-title mb-3"><a href="activities.php">WHY DO WE HAVE MBAR?</a></h4>
                    <p>Frequent contact with newcomers and with each other is the bright spot of our lives.
                        <br>
                        <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_7_P-89.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Big Book p89</a>
                    </p>
                    <p>It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus, we find the fellowship, and so will you.
                        <br>
                        <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_11_P-152.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Big Book p152</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part Three -->
    <div id="map"></div>
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h4 class="card-title mb-3"><a href="activities.php">Bethlehem Lutheran Church</a></h4>
                    <div class="col-md-12 db-5">
                        <p><img src="images/icons/warning-sign.png" width="50" height="50" alt="Triangular warning sign with an exclamation point."><strong>PLEASE NOTE:</strong> Breakfast and Dinner will be held at<br>
                            <strong>Bethlehem Lutheran Church, located at 800 Cass Street in Monterey.</strong><br>
                            (It is a little over one mile from the Conference Center.)
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25626.756836816734!2d-121.91606218727391!3d36.59400863899273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1sen!2sus!4v1704873760536!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title mb-3"><a href="activities.php">Monterey Conference Center</a></h4>
                    <div class="col-md-12 db-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0350279920303!2d-121.89983220605843!3d36.601465407473455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1sen!2sus!4v1704873971870!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Part Four -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h4 class="card-title mb-3 text-center">ADA ACCESSIBILITY</h4>
                    <p>Our team is committed to ensure the success of your event. Please discuss any areas not covered in this document with your Event Manager or our Staff. These general policies, rules and regulations are subject to change.
                    </p>
                    <p><a href="https://www.montereyconferencecenter.com/facility/ada-accessibility/" class="bb-link" target="_blank"><strong>The Monterey Conference Center ADA compliance policy</strong><span class="sr-only">(Opens a new window)</span></a> - The Monterey Conference Center (MCC) is ADA compliant. In accordance with the ADA, we are responsible for accommodations associated with permanent premise access, such as, but not limited to, wheelchair ramps, elevator standards, door width standards and restroom accessibility.
                    </p>
                    <p>It is the client or renter's responsibility to accommodate non-permanent accessibility requirements and incorporate visually-assisted devices, interpreters, and temporary seating accessibility if needed.
                    </p>
                    <p>Assisted hearing devices are available through our preferred in-house Audio-Visual provider.
                    </p>
                    <p><strong>ADA ACCESSIBILITY - MBAR 2024 will provide two ASL Interpreters on these days:</strong>
                    </p>
                    <ul>
                        <li>Friday - 2.5 hours</li>
                        <li>Saturday - 2.5 hours</li>
                        <li>Sunday - 3.0 hours</li>
                    </ul>
                    <p style="font-style: italic;"><strong>PLEASE NOTE:</strong> ADA accessibility's are subject to change with the new schedule, reservation times, and location.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>