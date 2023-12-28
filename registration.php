<?php include_once 'header.inc' ?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse.true navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" aria-current="page">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item active" aria-current="page" href="registration.php">Registration<span class="visually-hidden">(current)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-registration" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Preregistration is open!">
                    <h3 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Preregistration is Live</span>
                    </h3>
                    <a href="#register-now" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div id="register-now"></div>
            <div class="col-xl-8 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Preregistration is open!">
                    <div style="height: 50rem;">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf6ouc-DIkpARsMa5rmX7HmLy2dwejBr79fDQ9aqUbR--DDQQ/viewform?embedded=true" width="100%" height="100%" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3 class="card-title mb-3"><a href="#register-now">Download the Registration Form</a></h3>
                    <p>Below is the MBAR 2024 registration form and can be returned by mail or email.
                    </p>
                    <p>MONTEREY BAY AREA ROUNDUP<br>
                        Att: Naomi B.<br>
                        P.O. Box 1462<br>
                        Monterey, CA 93942
                    </p>
                    <p>OR email the completed form to our <a href="mailto:mbarregchair2024@gmail.com" class="bb-link">Registration Chair</a>
                    </p>
                    <p><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/mbar-register-form.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">MBAR 2024 Registration Form</a>
                    </p>
                    <p>If you have any question, please contact our <a href="mailto:mbarchair2024@gmail.com" class="bb-link">Steering Committee</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Three -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3 class="card-title mb-3"><a href="activities.php">Bethlehem Lutheran Church</a></h3>
                    <div class="col-md-12 db-5">
                        <p><img src="images/icons/warning-sign.png" width="50" height="50" alt="Triangular warning sign with an exclamation point."><strong>PLEASE NOTE:</strong> Breakfast and Dinner will be held at<br>
                            <strong>Bethlehem Lutheran Church, located at 800 Cass Street in Monterey.</strong><br>
                            (It is a little over one mile from the Conference Center.)
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.345532490949!2d-121.89797058430084!3d36.59398628697924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem+Lutheran+Church!5e0!3m2!1sen!2sus!4v1550676666728" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Four -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5" title="Preregistration is live.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Preregistration is open!">
                    <h3 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Preregistration is Live</span>
                    </h3>
                    <a href="#register-now" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Five -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h3 class="card-title text-center mb-3"><a href="#register-now">A.A. Conventions: Why do we have to pay?</a></h3>
                    <p>There are many A.A. conferences/conventions held around the world. One of the most common misconceptions of their gathering is that they are A.A. meetings and since there are no dues or fees for A.A. membership, there should be no fees to attend. Conventions and conferences are special events, not regular A.A. meetings. They require months of planning, preparation and costs.
                    </p>
                    <p>Since most events are held in hotels/conference centers, there is a charge for the use of some facilities. Other expenses include travel and lodging for the speakers, printing of fliers, schedules, programs, postage, supplies and entertainment. A large event requires a substantial amount of money.
                    </p>
                    <p>Each conference is self-supporting. No group monies are used to pay for the event. The cost of the event is paid through registration fees, and MBAR fund raising events. Attendance is voluntary and as responsible A.A. members, we now "pay our own way."
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include_once 'footer.inc' ?>
</body>

</html>