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
            <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Memories are in the making.">
                    <p class="mb-6 h5"><span class="text-dark px-3 px-md-0">Please contact us with any questions, feedback, or improvements because we care.<br>We really do.</span>
                        </h4>
                </div>
            </div>

            <?php

            /**
             * https://www.codexworld.com/new-google-recaptcha-with-php/
             */

            // Google reCAPTCHA API keys settings 
            $secretKey  = getenv('g-secret-key');

            // Email settings 
            $recipientEmail = getenv('mbar-to-email');

            // If the form is submitted 
            $postData = $statusMsg = '';
            $status = 'error';

            if (isset($_POST['submit'])) {
                $postData = $_POST;

                // Validate form input fields
                if (
                    !empty($_POST['register-fn']) &&
                    !empty($_POST['register-ln']) &&
                    !empty($_POST['register-em']) &&
                    !empty($_POST['register-subj']) &&
                    !empty($_POST['register-ta'])
                ) {

                    // Validate reCAPTCHA checkbox 
                    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                        // Verify the reCAPTCHA API response 
                        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

                        // Decode JSON data of API response 
                        $responseData = json_decode($verifyResponse);

                        // If the reCAPTCHA API response is valid 
                        if ($responseData->success) {
                            // Retrieve value from the form input fields 
                            $firstName = !empty($_POST['register-fn']) ? htmlspecialchars($_POST['register-fn']) : '';
                            $lastName = !empty($_POST['register-ln']) ? htmlspecialchars($_POST['register-ln']) : '';
                            $email = !empty($_POST['register-em']) ? htmlspecialchars($_POST['register-em']) : '';
                            $phone = !empty($_POST['register-phone']) ? htmlspecialchars($_POST['register-phone']) : '';
                            $registerSubj = !empty($_POST['register-subj']) ? htmlspecialchars($_POST['register-subj']) : '';
                            $registerMess = !empty($_POST['register-ta']) ? htmlspecialchars($_POST['register-ta']) : '';

                            // Send email notification to the site admin 
                            $to = $recipientEmail;
                            $subject = 'Contact Us Submitted';
                            $htmlContent = " 
                    <h4>Contact Us Form</h4> 
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Email: </b>" . $phone . "</p> 
                    <p><b>Subject: </b>" . $contactSubj . "</p> 
                    <p><b>Message: </b>" . $contactMess . "</p> 
                ";

                            // Always set content-type when sending HTML email 
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            // More headers 
                            $headers .= 'From:' . $firstName . ' ' . $lastName . '<' . $email . '>' . "\r\n";

                            // Send email 
                            mail($to, $subject, $htmlContent, $headers);

                            $status = 'success';
                            $statusMsg = 'Thank you, your message was sent, and please allow up to 48 hours to reply.';
                            $postData = '';
                        } else {
                            $statusMsg = 'reCaptcha verification failed, please try again.';
                        }
                    } else {
                        $statusMsg = 'Please check the reCAPTCHA checkbox.';
                    }
                } else {
                    $statusMsg = 'Please fill all the mandatory fields.';
                }
            }

            ?>

            <div id="register-us"></div>
            <?php if (!empty($statusMsg)) { ?>
                <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Reaching out to one another.">
                        <p class="mb-6 h5 text-dark status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                    </div>
                </div>
            <?php } ?>

            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="We ar willing to listen.">

                    <form action="-registration.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>

                        <div class="col-md-6">
                            <label for="register-fn" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="register-fn" id="register-fn" required>
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="register-ln" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="register-ln" id=" register-ln" required>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="register-em" class="form-label">Email</label>
                            <input type="email" class="form-control" name="register-em" id="register-em" required>
                            <div class="invalid-feedback">
                                Please enter your email.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="register-fs" class="form-label">Fellowship</label>
                            <select class="form-select" id="register-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option>A.A.</option>
                                <option>Al-Anon</option>
                                <option>Double Winner</option>
                                <option>Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your Fellowship
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-hg" class="form-label">Homegroup</label>
                            <input type="text" class="form-control" name="register-hg" id="register-hg" required>
                            <div class="invalid-feedback">
                                Please enter a Homegroup(s)
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-phone" class="form-label">Phone(Optional)</label>
                            <input type="tel" class="form-control" name="register-phone" id="register-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                            <div class="invalid-feedback">
                                Please enter a valid phone number.
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-hg" class="form-label">Address</label>
                            <input type="text" class="form-control" name="register-hg" id="register-hg" required>
                            <div class="invalid-feedback">
                                Please enter a Homegroup
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-hg" class="form-label">City</label>
                            <input type="text" class="form-control" name="register-hg" id="register-hg" required>
                            <div class="invalid-feedback">
                                Please enter a Homegroup
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-fs" class="form-label">State</label>
                            <select class="form-select" id="register-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option>A.A.</option>
                                <option>Al-Anon</option>
                                <option>Double Winner</option>
                                <option>Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-hg" class="form-label">Zipcode</label>
                            <input type="text" class="form-control" name="register-hg" id="register-hg" required>
                            <div class="invalid-feedback">
                                Please enter a Homegroup
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-hg" class="form-label">City</label>
                            <input type="text" class="form-control" name="register-hg" id="register-hg" required>
                            <div class="invalid-feedback">
                                Please enter a Homegroup
                            </div>
                        </div>

<p>registration</p>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck2">Pre-registration</label>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck3">Registration</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-fs" class="form-label">Early Bird Meal Bundle (Dinner, Breakfast, and Ice Cream Social) - $35</label>
                            <select class="form-select" id="register-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Yes, please!</option>
                                <option>No thank you</option>
                                <option>Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>


                       <p> À la carte Meal Options</p>
                  
                        <div class="col-md-6">
                            <label for="register-fs" class="form-label">Meet The Speakers Dinner - Saturday Night @ 5:00 p.m. - $25</label>
                            <select class="form-select" id="register-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Yes, please!</option>
                                <option>No thank you</option>
                                <option>Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>
                 

                        <div class="col-md-6">
                            <label for="register-fs" class="form-label">Round-Up Continental Breakfast (Sunday Morning from 8:00 - 9:30 a.m.) - $10</label>
                            <select class="form-select" id="register-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Yes, please!</option>
                                <option>No thank you</option>
                                <option>Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>

        
                        <div class="col-md-6">
                            <label for="register-fs" class="form-label">Ice Cream Social (Sunday Afternoon from 3:00 - 4:00 p.m.) - $5</label>
                            <select class="form-select" id="register-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Yes, please!</option>
                                <option>No thank you</option>
                                <option>Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>
                            


                        <div class="col-md-6">
                            <p>Saturday Night Dance @ Conference Center (FREE with paid registration or $5 at the door)</p>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck2">Pre-registration</label>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck3">Registration</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-fs" class="form-label">Helping Hand Contribution</label>
                            <select class="form-select" id="register-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option>$50</option>
                                <option>$45</option>
                                <option>$35</option>
                                <option>$45</option>
                                <option>$35</option>
                                <option>Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your Contribution.
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="register-fs" class="form-label">Payment Method</label>
                            <select class="form-select" id="register-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Venmo</option>
                                <option>Cash</option>
                                <option>Check</option>
                                <option>PayPal</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>


                        <div class="col-md-12 text-center">
                            <div class="g-recaptcha" data-sitekey=<? echo getenv('g-site-key'); ?>></div>
                            <div class="invalid-feedback">
                                <? echo $recaptcha_message ?>
                            </div>
                        </div>

                        <div class="col-md-6 text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Submit Form</button>
                        </div>

                        <div class="col-md-6 text-center">
                            <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();">Reset Form</button>
                        </div>
                    </form>
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
    function resetFields() {
        return confirm("Are you sure you want to reset all fields?");
    }
</script>
</body>

</html>