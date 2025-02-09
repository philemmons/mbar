<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Registration </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/register-now.php" >';
include_once 'header-bottom.inc';
?>

<nav class="navbar navbar-expand-lg" aria-label="main navigation">
    <div class="container my-1">
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
                        <a class="dropdown-item" href="aa-spanish-marathon-2024.php">Spanish-Speaking A.A. Marathon Meetings</a>
                        <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Marathon Meetings</a>
                        <a class="dropdown-item" href="al-anon-marathon-2024.php">Al-Anon Marathon Meetings</a>
                        <a class="dropdown-item active" aria-current="page" href="register-now.php">Registration<span class="visually-hidden">(current)</span></a>
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
                        <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
                        <a class="dropdown-item" href="upcoming_event.php">St. Patrick's Day Potluck</a>
                        <a class="dropdown-item" href="al-anon-with-aa-event.php">Al-Anon with A.A. Participation</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-registration" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div id="zoom-info" class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in 2026!">
                    <h2 class="fw-bold px-3 px-md-0">We're excited about MBAR on<br>Labor Day weekend!</h2>
                    <p class="h3 text-dark">
                        <a class="d-link" href="https://us02web.zoom.us/j/83143062293?pwd=QXZMWUVoZEkzVnUyY0poanAyclBHdz09" rel="noopener noreferrer nofollow" target="_blank">Virtual Kick-Off Zoom Meeting<span class="sr-only">(Opens Zoom Application)</span></a>
                    </p>
                    <p class="text-dark">August 30th at 8:00pm PDT
                        <br>
                        Speaker: Oliver D. from Delaware
                        <br>
                        Meeting ID: <strong>831 4306 2293</strong>
                        <br>
                        Passcode: <strong>2024</strong>
                        <br>
                        This meeting is open to everyone, and we encourage you to join!
                    </p>
                    <p class="h3 text-dark">In-Person Meetings</p>
                    <p class="text-dark">August 31st and September 1st at the Monterey Conference Center
                        <br>
                        Please note that registration is required for the in-person event.
                    </p>
                    <p class="text-dark mb-6">We are excited to have you join us! Please come over to the registration table to sign up in person, as online registration is now closed. We can't wait to welcome you!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <div id="register-now"></div>
    <article aria-label="Registration">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">

                <div class="col-xl-10 col-lg-10 col-md-12 py-4 text-center">
                    <div class="p-3  text-bg-light hero-text-border" title="Registration 2024">

                        <section aria-label="Registration In Person">
                            <h3 class="card-title mb-3">Registration 2024 In Person</h3>
                            <p class="h5">We are excited to have you join us!
                                <br>
                                Please come over to the registration table to sign up in person, as online registration is now <strong>closed</strong>.
                                <br>
                                We can't wait to welcome you!
                            </p>
                            <p>If you are paying for <i>more</i> than one person, add their name(s) in the note section.
                                <br>
                                Please be sure to use the <a href="#payment-now" class="bb-link">qrCodes or links</a> below for payment that completes your registration.
                                <br>
                                You're welcome to pay for your registration by check or cash instead of Venmo or PayPal.
                            </p>
                            <h3 class="card-title text-center mb-3"><a href="#payment-now" class="d-link">Payment Methods</a></h3>
                        </section>

                    </div>
                </div>

            </div>
        </div>
    </article>


    <aside aria-label="Merchandise">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">

                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border" title="MBAR Merchandise">

                        <section aria-label="MBAR Merchandise">
                            <h3 class="card-title mb-3 text-center">Merchandise</h3>
                        </section>

                        <div class="row">
                            <div class="col-md-7">
                                <p class="h5">2024 Commemorative T-Shirts will be available at the conference, along with MBAR vacuum mugs and water bottles</p>
                                <ul>
                                    <li>The t-shirts cost $15 each, and we have limited quantities from Small to 3X-Large.
                                    </li>

                                    <li>MBAR! Wear this MBAR favorite apparel to the big event or just hanging out around the house.
                                    </li>

                                    <li>100% Cotton, Solid Navy Blue, White and Gold Logo, Lightweight, Classic Fit, Double-needle Short Sleeve and Bottom Hem
                                    </li>
                                </ul>

                            </div>

                            <div class="col-md-5 pt-4">
                                <img src="../images/2024_mbar_tee_shirt.png" class="img-fluid img-thumbnail" alt="Navy blue tee shirt with gold and white logo.">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </aside>


    <!-- Part Payment -->
    <article aria-label="Payment method">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div id="payment-now"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Payment Methods">
                        <h3 class="card-title mb-3">Payment Methods
                        </h3>
                        <p><strong>Please add your registration name in the payment. If you are paying for <i>more</i> than one person, add their name(s) in the note section.</strong>
                        </p>

                        <p class="bb-link">Remember: Your payment completes your registration!
                        </p>

                        <p>You're welcome to pay for your online registration by <strong>check or cash in person</strong> instead of Venmo or PayPal.
                        </p>

                        <p>The QR codes below require the mobile apps.
                        </p>

                        <p><strong>Helpful Tip</strong>: PayPal's qrCode brings you to the login screen. After logging in, click on the qrCode icon at the top right, next to the user icon, and then scan the qrCode again for the MBAR payment prompt. If you need some assistance with making a payment, please contact our <a href="mailto:<?php echo getenv('mbar-to-email') ?>" class="bb-link">SysAdmin</a>.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 py-5">

                                <p class="text-center pt-4"><?php echo getenv('mbar-venmo') ?></p>
                                <p class="text-center"><a href="https://venmo.com" class="bb-link" target="_blank" rel="noopener noreferrer" title="Venmo qrCode Link">Venmo's qrCode Link<span class="sr-only">(Opens a new window)</span></a></p>
                            </div>
                            <div class="col-sm-6 py-5">
                                <img src="../images/paypal-qrCode.png" class="img-fluid shadow-wrap" alt="PayPal QR code" title="PayPal qrCode">
                                <p class="text-center pt-4"><?php echo getenv('mbar-treas-email') ?></p>
                                <p class="text-center"><a href="https://www.paypal.com/qrcodes/managed/2337f158-b9f2-48ad-98b8-8fb7a693759f?utm_source=old_merchant_lp" class="bb-link" target="_blank" rel="noopener noreferrer" title="PayPal qrCode Link">PayPal's qrCode Link<span class="sr-only">(Opens a new window)</span></a></p>
                            </div>
                            <p>The links below provide general payment instructions.</p>
                            <p class="mb-3"><a href="https://help.venmo.com/hc/en-us/articles/210413477-Sending-Requesting-Money" class="bb-link" target="_blank" rel="noopener noreferrer" title="Direct link to Venmo">How can I send a payment or request money with Venmo?<span class="sr-only">(Opens a new window)</span></a></p>
                            <p class="mb-3"><a href="https://www.paypal.com/in/cshelp/article/how-do-i-send-payments-help293" class="bb-link" target="_blank" rel="noopener noreferrer" title="Direct link to PayPal">How do I send payments with PayPal?<span class="sr-only">(Opens a new window)</span></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </article>


    <!-- Part Two -->
    <article aria-label="PDF registration form">
        <div class=" container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Download pdf form">
                            <h3 class="card-title mb-3">Download the Registration Form</h3>
                            <p>Below is the MBAR 2024 registration form and can be returned at the Registration Table.
                            </p>
                            <p><a class="btn btn-primary btn-sm" href="pdf/mbar-register-form-en.pdf"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">MBAR 2024 Registration Form<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p>If you have any registration questions, please contact our <a href="mailto:<?php echo getenv('mbar-reg-email') ?>" class="bb-link">Registration Chair</a>
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>


    <!-- Part Three -->
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

    <!-- Part Four -->
    <aside aria-label="Self supporting">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Reason for paying">
                            <h4 class="card-title text-center mb-3"><a href="#register-now" class="bb-link">A.A. Conventions: Why do we have to pay?</a></h4>
                            <p>There are many A.A. conferences/conventions held around the world. One of the most common misconceptions of their gathering is that they are A.A. meetings and since there are no dues or fees for A.A. membership, there should be no fees to attend. Conventions and conferences are special events, not regular A.A. meetings. They require months of planning, preparation and costs.
                            </p>
                            <p>Since most events are held in hotels/conference centers, there is a charge for the use of some facilities. Other expenses include travel and lodging for the speakers, printing of flyers, schedules, programs, postage, supplies and entertainment. A large event requires a substantial amount of money.
                            </p>
                            <p>Each conference is self-supporting. No group monies are used to pay for the event. The cost of the event is paid through registration fees, and MBAR fund raising events. Attendance is voluntary and as responsible A.A. members, we now "pay our own way."
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <?php include_once 'footer.inc' ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script>
        // Function to display confirmation message and update live region
        function resetFields() {
            // Display confirmation dialog
            var confirmMessage = "Are you sure you want to reset all fields?"
            var confirmed = window.confirm(confirmMessage);

            // Update live region based on user's choice
            var liveRegion = document.getElementById('aria-live');
            if (confirmed) {
                liveRegion.textContent = "(The Form Has Been Reset)";
            } else {
                liveRegion.textContent = "(Reset Form Cancelled)";
            }

            return confirmed;

        }
    </script>

    </body>

    </html>