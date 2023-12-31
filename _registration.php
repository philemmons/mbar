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
                    <h3 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Pre-Registration is Live</span>
                    </h3>
                    <a href="#register-now" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3  text-bg-light hero-text-border" title="Memories are in the making.">
                    <h3 class="card-title text-center mb-3"><a href="#register-now">Welcome to MBAR 2024</a></h3>
                    <p>We are excited to announce that the Monterey Bay Area Roundup is coming in 2024, and we are glad you are planning to attend! The conference will take place at the Monterey Conference Center on Labor Day weekend: Aug 31 - Sept 1, 2024.</p>
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
                    !empty($_POST['reg-fn']) &&
                    !empty($_POST['reg-ln']) &&
                    !empty($_POST['reg-em']) &&
                    !empty($_POST['reg-subj']) &&
                    !empty($_POST['reg-ta'])
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
                            $firstName = !empty($_POST['reg-fn']) ? htmlspecialchars($_POST['reg-fn']) : '';
                            $lastName = !empty($_POST['reg-ln']) ? htmlspecialchars($_POST['reg-ln']) : '';
                            $email = !empty($_POST['reg-em']) ? htmlspecialchars($_POST['reg-em']) : '';
                            $phone = !empty($_POST['reg-phone']) ? htmlspecialchars($_POST['reg-phone']) : '';
                            $registerSubj = !empty($_POST['reg-subj']) ? htmlspecialchars($_POST['reg-subj']) : '';
                            $registerMess = !empty($_POST['reg-ta']) ? htmlspecialchars($_POST['reg-ta']) : '';

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
                            $statusMsg = 'We appreciate your commitment to attend! Your preregistration will assist with event planning and preparation. Thank you!';
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

                    <form action="_registration.php" method="POST" class="row g-3 needs-validation" id="regForm" novalidate>

                        <div class="col-md-6">
                            <label for="reg-fn" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="reg-fn" id="reg-fn" required>
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="reg-ln" class="form-label">Last Name or Initial</label>
                            <input type="text" class="form-control" name="reg-ln" id=" reg-ln" required>
                            <div class="invalid-feedback">
                                Please enter your last name or initial.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="reg-em" class="form-label">Email</label>
                            <input type="email" class="form-control" name="reg-em" id="reg-em" required>
                            <div class="invalid-feedback">
                                Please enter your email.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="reg-phone" class="form-label">Phone with Area Code (Optional)</label>
                            <input type="tel" class="form-control" name="reg-phone" id="reg-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                            <div class="invalid-feedback">
                                Please enter a valid phone number.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="reg-addr" class="form-label">Mailing Address(Optional)</label>
                            <input type="text" class="form-control" name="reg-addr" id="reg-hg">
                            <div class="invalid-feedback">
                                Please enter your address.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="reg-city" class="form-label">City (Optional)</label>
                            <input type="text" class="form-control" name="reg-city" id="reg-hg" placeholder="Monterey">
                            <div class="invalid-feedback">
                                Please enter a city.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="reg-state" class="form-label">State</label>
                            <select class="form-select" name="reg-fs" id="reg-state">
                                <option selected disabled value="">Choose...</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select your state.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="reg-zc" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" name="reg-zc" id="reg-zc">
                            <div class="invalid-feedback">
                                Please enter your zip code.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="reg-fs" class="form-label">Fellowship</label>
                            <select class="form-select" name="reg-fs" id="reg-fs" required>
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

                        <div class="col-md-8">
                            <label for="reg-hg" class="form-label">Homegroup(Optional)</label>
                            <input type="text" class="form-control" name="reg-hg" id="reg-hg">
                            <div class="invalid-feedback">
                                Please enter your Homegroup(s)
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <p class="h5">REGISTRATION</p>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="reg-early" name="radio-stacked" required>
                                <label class="form-check-label" for="reg-early">Early Registration (Before July 31, 2024) - $45</label>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="reg-late" name="radio-stacked" required>
                                <label class="form-check-label" for="reg-late">Registration (After July 31, 2024) - $50</label>
                                <div class="invalid-feedback">
                                    Please check one.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <p class="h5">PRE-REGISTRATION FOR MEALS IS CURRENTLY REQUIRED</p>
                            <ul>
                                <li>The MBAR Committee recommends the Early Bird Meal Bundle which includes a $5 savings from the à la carte option
                                </li>
                                <li>Continental Breakfast and Dinner at Bethlehem Lutheran Church, 800 Cass Street, Monterey
                                </li>
                                <li>Ice Cream Social will be held at the Conference Center on the Stevenson Terrace
                                </li>
                            </ul>

                            <label for="reg-ebmb" class="form-label">Early Bird Meal Bundle (Dinner, Breakfast, and Ice Cream Social) - $35</label>
                            <select class="form-select" name="reg-ebmb" id="reg-ebmb" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes, please!</option>
                                <option value="no">No thank you</option>
                                <option value="undecided" disabled>Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select one.
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <p class="h5"> À la carte Meal Options - If you prefer to purchase meals individually, please select from the following options.</p>
                        </div>

                        <div class="col-lg-4">
                            <label for="reg-mtsd" class="form-label">Meet The Speakers Dinner (Saturday Night @ 5:00pm) - $25</label>
                            <select class="form-select" name="reg-mtsd" id="reg-mtsd" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes, please!</option>
                                <option value="no">No thank you</option>
                                <option value="undecided">Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select one.
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <label for="reg-rucb" class="form-label">Round-Up Continental Breakfast (Sunday Morning @ 8:00am - 9:30am) - $10</label>
                            <select class="form-select" name="reg-rucb" id="reg-rucb" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes, please!</option>
                                <option value="no">No thank you</option>
                                <option value="undecided">Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select one.
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <label for="reg-ics" class="form-label">Ice Cream Social (Sunday Afternoon @ 3:00pm - 4:00pm) - $5</label>
                            <select class="form-select" name="reg-ics" id="reg-ics" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes, please!</option>
                                <option value="no">No thank you</option>
                                <option value="undecided">Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select one.
                            </div>
                        </div>
                        
                        <hr>
                        <div class="col-lg-6">
                            <label for="reg-snd" class="form-label">Saturday Night Dance @ Conference Center (FREE with paid registration or $5 at the door)</label>
                            <select class="form-select" name="reg-snd" id="reg-snd" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">I'll be wearing my dancing shoes!</option>
                                <option value="no">I don't dance...LOL</option>
                                <option value="undecided">Still deciding</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select one.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="reg-hhc" class="form-label">Helping Hand Contribution - Please consider making a contribution to ensure all who desire to attend are able.</label>
                            <select class="form-select" name="reg-hhc" id="reg-hhc">
                                <option selected disabled value="">Choose...</option>
                                <option value="50">$50</option>
                                <option value="45">$45</option>
                                <option value="35">$35</option>
                                <option value="10">$10</option>
                                <option value="5">$5</option>
                                <option value="0">Other</option>
                            </select>
                            <div class="invalid-feedback">
                                Please enter your Contribution.
                            </div>
                        </div>

                        <hr>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="cBox" id="invalidCheck" value="1" required>
                                <label class="form-check-label" for="invalidCheck">
                                    I agree to terms of service AND <strong>understand registration is incomplete until paid.</strong>
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="reg-pm" class="form-label">Payment Method - <strong>Registration incomplete until paid</strong> - Payment options below</label>
                            <select class="form-select" name="reg-pm" id="reg-pm" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="venmo">Venmo</option>
                                <option value="cash">Cash</option>
                                <option value="check">Check</option>
                                <option value="paypal">PayPal</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select one.
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