<?php include 'header.inc' ?>

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
                <li class="nav-item dropdown" style='width: 180px;'>
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item active" href="conference-2024.php">MBAR 2024<span class="visually-hidden">(current)</span></a>
                        <a class="dropdown-item" href="registration.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item" href="memories.php">Memories</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style='width: 161px;'>
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="meetings.php">Meetings</a>
                        <a class="dropdown-item" href="committees.php">Committees</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logo_contest.php">Logo Contest</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">A.A. Conference<br>
                            with<br>
                            Al-Anon Participation</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup 2024</span>
                    </h1>
                    <p class="mb-6 h2 text-dark">August 31st and September 1st</p>
                    <a href="registration.php" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-12 text-center p-3">
                <img class="img-fluid banner" src="../images/conference-room.png" alt="">
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3><a href="activities.php">WHY DO WE HAVE MBAR?</a></h3>
                    <p>Frequent contact with newcomers and with each other is the bright spot of our lives.
                        <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                        <a href="" onclick="window.open('pdf/bigbook/BIG-BOOK-CHAPTER_7_P-89.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;"> <strong>Big Book P. 89.</strong></a>
                        <br>
                        <br>
                        It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. <br>
                        Life will mean something at last! The most satisfactory years of your existence lie ahead. Thus, we find the fellowship, and so will you.
                        <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                        <a href="" onclick="window.open('pdf/bigbook/BIG-BOOK-CHAPTER_11_P-152.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;"> <strong>Big Book P. 152</strong></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Three -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                <h3><a href="activities.php">Bethlehem Lutheran Church</a></h3>
                <div class="col-md-12 text-left" id="bordermap">
                    <strong><img src="images/icons/warning-sign.png" width="50" height="50" alt="">PLEASE NOTE:</strong> The Breakfast and Dinner will be held at<br><strong> Bethlehem Lutheran Church, located at 800 Cass Street in Monterey</strong> (a little over one mile from the Conference Center).<br><br>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.345532490949!2d-121.89797058430084!3d36.59398628697924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem+Lutheran+Church!5e0!3m2!1sen!2sus!4v1550676666728" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <br>
                <hr>
                <br>
                <section id="mcc"></section>
                <h3><a href="activities.php">Monterey Conference Center</a></h3>
                <div class="col-md-12 text-left" id="bordermap1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.037184010839!2d-121.89686518419717!3d36.6014134799899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey+Conference+Center!5e0!3m2!1sen!2sus!4v1548347273704" width="100%" height="450" style="border:0" allowfullscreen=""></iframe>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                <h4>ADA ACCESSIBILITY</h4>
                <p>Our team is committed to ensure the success of your event. Please discuss any areas not covered in this
                    document with your Event Manager. These general policies, rules and regulations are subject to change.
                    <strong>The Monterey Conference Center</strong> ADA COMPLIANCE - The Monterey Conference Center (MCC) is ADA compliant. In accordance with the ADA, we are responsible for accommodations associated with permanent premise access, such as, but not limited to, wheelchair ramps, elevator standards, door width standards and restroom accessibility.
                    <br>
                    It is the client or renter's responsibility to accommodate non-permanent accessibility requirements and incorporate visually-assisted devices, interpreters, and temporary seating accessibility if needed.<br>
                    Assisted hearing devices are available through our preferred in house AV provider.
                </p>
                <br>
                <strong>ADA ACCESSIBILITY: MBAR 2022 will provide</strong>:
                <ul>
                    <li><strong>2 ASL Interpreters</strong> (see option in the conference daily schedule)</li>
                    <li>Friday 2.5h</li>
                    <li>Saturday 2.5h</li>
                    <li>Sunday 3.0h</li>
                </ul> (<a href="https://www.montereyconferencecenter.com/facility/ada-accessibility/"><span style="font-size: 12px; font-style: italic">From Monterey Conference Center website</span> </a> ) <br><br>
                <sup><strong>NOTE:</strong> ADA accessibility's are subject to change with the new schedule and reservation time and location. </sup>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'footer.inc' ?>
</body>

</html>