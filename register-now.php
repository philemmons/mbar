<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="main navigation">
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
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item active" aria-current="page" href="register-now.php">Registration<span class="visually-hidden">(current)</span></a>
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
                        <a class="dropdown-item" href="upcoming_event.php">St. Patrick's Potluck</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-registration" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h2 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">Pre-Registration is Live</span>
                    </h2>
                    <a href="#register-now" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div id="register-now"></div>
            <div class="col-xl-8 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <div style="height: 50rem;">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf6ouc-DIkpARsMa5rmX7HmLy2dwejBr79fDQ9aqUbR--DDQQ/viewform?embedded=true" id="reg-form" title="2024 MBAR registration form through Google forms.">Loading…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Part Two -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3 class="card-title mb-3"><a href="#register-now" class="bb-link">Download the Registration Form</a></h3>
                    <p>Below is the MBAR 2024 registration form and can be returned by mail or email.
                    </p>
                    <p>MONTEREY BAY AREA ROUNDUP<br>
                        Att: Naomi B.<br>
                        P.O. Box 1462<br>
                        Monterey, CA 93942
                    </p>
                    <p>OR email the completed form to our <a href="mailto:<?php echo getenv('mbar-reg-email') ?>" class="bb-link">Registration Chair</a>
                    </p>
                    <p><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, followed by link">
                        <a href="" class="bb-link" onclick="window.open('pdf/mbar-register-form.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">MBAR 2024 Registration Form</a>
                    </p>
                    <p>If you have any question, please contact our <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">Steering Committee</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part Three -->
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

    <!-- Part Four -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h4 class="card-title text-center mb-3"><a href="#register-now" class="bb-link">A.A. Conventions: Why do we have to pay?</a></h4>
                    <p>There are many A.A. conferences/conventions held around the world. One of the most common misconceptions of their gathering is that they are A.A. meetings and since there are no dues or fees for A.A. membership, there should be no fees to attend. Conventions and conferences are special events, not regular A.A. meetings. They require months of planning, preparation and costs.
                    </p>
                    <p>Since most events are held in hotels/conference centers, there is a charge for the use of some facilities. Other expenses include travel and lodging for the speakers, printing of fliers, schedules, programs, postage, supplies and entertainment. A large event requires a substantial amount of money.
                    </p>
                    <p>Each conference is self-supporting. No group monies are used to pay for the event. The cost of the event is paid through registration fees, and MBAR fund raising events. Attendance is voluntary and as responsible A.A. members, we now "pay our own way."
                    </p>
                </div>
            </div>
        </div>
    </div>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>