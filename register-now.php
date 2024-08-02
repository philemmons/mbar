<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Registration </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/register-now.php" >';
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-registration" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div id="zoom-info" class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h2 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">Registration is Live</span>
                    </h2>
                    <p class="mb-6 h4 text-dark">Kick Off Meeting on August 30th at 8pm PST
                        <br><i class="bi bi-camera-video-fill" aria-hidden="true"> </i>A.A. Zoom Meeting with Oliver D. from Delaware
                        <br>Meeting ID: <strong>831 4306 2293</strong>
                        <br>Passcode: <strong>2024</strong>
                    </p>
                    <a href="#register-now" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <div id="register-now"></div>
    <article aria-label="Registration">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3  text-bg-light hero-text-border" title="Pre-Registration 2024">
                        <section aria-label="Registration-Intro">
                            <h3 class="card-title text-center mb-3">Registration 2024</h3>
                            <p>By signing up early, you'll help us prepare for a seamless event experience. Your registration shows us your enthusiasm and commitment to MBAR, and we appreciate it! If you are paying for <i>more</i> than one person, add their name(s) in the note section.
                            </p>
                            <p class="text-center">Please be sure to use the <a href="#payment-now" class="bb-link">qrCodes or links</a> below for payment that completes your registration.
                                <br><br>You're welcome to pay for your online registration by <strong>check</strong> instead of Venmo or PayPal.  Please make your check payable to MBAR, and mail it to
                                <br><span class="text-uppercase">Monterey Bay Area Roundup</span>
                                <br>Attn: Naomi B.
                                <br>P.O. Box 1462
                                <br>Monterey, CA 93942
                            </p>
                            <p class="text-center">After registering, you should get an email with your selections and the total amount due. Please do not refresh the webpage. If your email fails to arrive, check your spam folder, or contact the <a href="mailto:<?php echo getenv('mbar-to-email'); ?>" class="bb-link">SysAdmin</a>.</p>
                            </p>
                        </section>
                    </div>
                </div>

                <?php

                include_once 'source/php_source.php';


                /**
                 * https://www.codexworld.com/new-google-recaptcha-with-php/
                 * 
                 * https://www.namecheap.com/support/knowledgebase/article.aspx/10038/31/how-to-configure-a-contact-form-with-us/#mailfunction
                 *
                 */

                // Google reCAPTCHA API keys settings 
                $secretKey  = getenv('g-secret-key');

                // Email settings
                $recipientEmail = getenv('mbar-to-email');
                $bccEmail = getenv('mbar-bcc-email');

                // Change lang variable as needed based on lang reg form
                $lang = 'en';

                // If the form is submitted 
                $postData = $statusMsg = '';
                $status = 'error';

                if (isset($_POST['submit'])) {

                    $_POST['myRegistration'] = htmlspecialchars('after');
                    $_POST['earlyBirdMealBundle'] = htmlspecialchars('no');
                    $_POST['shirtQuantity'] = htmlspecialchars(0);
                    $_POST['shirtSize'] = htmlspecialchars('none');

                    $postData = $_POST;

                    if (!isset($_POST['shirtQuantity']) || !array_key_exists('shirtQuantity', $_POST)) {
                        $_POST['shirtQuantity'] = 0;
                    }

                    // Validate form required input fields
                    if (
                        !empty($_POST['firstName']) &&
                        !empty($_POST['lastName']) &&
                        !empty($_POST['myEmail']) &&
                        !empty($_POST['myFellowship']) &&
                        !empty($_POST['myRegistration']) &&
                        !empty($_POST['earlyBirdMealBundle']) &&
                        !empty($_POST['meetTheSpeakerDinner']) &&
                        !empty($_POST['roundupContinentalBreakfast']) &&
                        !empty($_POST['iceCreamSocial']) &&
                        !empty($_POST['shirtSize']) &&
                        !empty($_POST['paymentCheckBox']) &&
                        !empty($_POST['paymentMethod']) &&
                        empty($_POST['beeName'])
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
                                $firstName = !empty($_POST['firstName']) ? htmlspecialchars($_POST['firstName'], ENT_QUOTES) : '';
                                $lastName = !empty($_POST['lastName']) ? htmlspecialchars($_POST['lastName'], ENT_QUOTES) : '';
                                $badgeName = !empty($_POST['badgeName']) ? htmlspecialchars($_POST['badgeName'], ENT_QUOTES) : '';
                                $email = !empty($_POST['myEmail']) ? htmlspecialchars($_POST['myEmail'], ENT_QUOTES) : '';
                                $phone = !empty($_POST['myPhone']) ? htmlspecialchars($_POST['myPhone'], ENT_QUOTES) : '';
                                $address = !empty($_POST['myAddress']) ? htmlspecialchars($_POST['myAddress'], ENT_QUOTES) : '';
                                $city = !empty($_POST['myCity']) ? htmlspecialchars($_POST['myCity'], ENT_QUOTES) : '';
                                $state = !empty($_POST['myState']) ? htmlspecialchars($_POST['myState'], ENT_QUOTES) : '';
                                $zc = !empty($_POST['myZipcode']) ? htmlspecialchars($_POST['myZipcode'], ENT_QUOTES) : '';
                                $fs = !empty($_POST['myFellowship']) ? htmlspecialchars($_POST['myFellowship'], ENT_QUOTES) : '';
                                $hg = !empty($_POST['myHomegroup']) ? htmlspecialchars($_POST['myHomegroup'], ENT_QUOTES) : '';
                                $register = !empty($_POST['myRegistration']) ? htmlspecialchars($_POST['myRegistration'], ENT_QUOTES) : '';
                                $ebmb = !empty($_POST['earlyBirdMealBundle']) ? htmlspecialchars($_POST['earlyBirdMealBundle'], ENT_QUOTES) : '';
                                $mtsd = !empty($_POST['meetTheSpeakerDinner']) ? htmlspecialchars($_POST['meetTheSpeakerDinner'], ENT_QUOTES) : '';
                                $rucb = !empty($_POST['roundupContinentalBreakfast']) ? htmlspecialchars($_POST['roundupContinentalBreakfast'], ENT_QUOTES) : '';
                                $ics = !empty($_POST['iceCreamSocial']) ? htmlspecialchars($_POST['iceCreamSocial'], ENT_QUOTES) : '';
                                $snd = !empty($_POST['saturdayNightDance']) ? htmlspecialchars($_POST['saturdayNightDance'], ENT_QUOTES) : '';
                                $hhc = !empty($_POST['helpingHandContribution']) ? htmlspecialchars($_POST['helpingHandContribution'], ENT_QUOTES) : '';
                                $tsq = strlen($_POST['shirtQuantity']) > 0 ? htmlspecialchars($_POST['shirtQuantity'], ENT_QUOTES) : '';
                                $tss = !empty($_POST['shirtSize']) ? htmlspecialchars($_POST['shirtSize'], ENT_QUOTES) : '';
                                $cBox = !empty($_POST['paymentCheckBox']) ? htmlspecialchars($_POST['paymentCheckBox'], ENT_QUOTES) : '';
                                $pm = !empty($_POST['paymentMethod']) ? htmlspecialchars($_POST['paymentMethod'], ENT_QUOTES) : '';

                                $tsq = tShirtQuanCheck($tss, $tsq);
                                $tss = tShirtSizeCheck($tss, $tsq);

                                $total = getTotal($register, $ebmb, $mtsd, $rucb, $ics, $hhc, $tsq, $tss);

                                // Send email notification to the site admin 
                                $to = $email;
                                $subject = 'Registration Form Submitted';
                                $htmlContent = " 
                    <h4>Registration Form - EN</h4> 
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Badge Name: </b>" . $badgeName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Phone: </b>" . $phone . "</p> 
                    <p><b>Address: </b>" . $address . "</p> 
                    <p><b>City: </b>" . $city . "</p> 
                    <p><b>State: </b>" . $state . "</p> 
                    <p><b>Zip Code: </b>" . $zc . "</p> 
                    <p><b>Fellowship: </b>" . $fs . "</p> 
                    <p><b>Homegroup: </b>" . $hg . "</p> 
                    <p><b>Registration: </b>" . $register . "</p> 
                    <p><b>Early Bird Meal Bundle: </b>" . $ebmb . "</p> 
                    <p><b>Meet the Speaker Dinner: </b>" . $mtsd . "</p> 
                    <p><b>Round Up Cont. Breakfast: </b>" . $rucb . "</p> 
                    <p><b>Ice Cream Social: </b>" . $ics . "</p> 
                    <p><b>Sat. Night Dance: </b>" . $snd . "</p> 
                    <p><b>Helping Hand Contribution: </b>" . $hhc . "</p>
                    <p><b>Tee Shirt Size: </b>" . $tss . "</p> 
                    <p><b>Tee Shirt Quantity : </b>" . $tsq . "</p> 
                    <p><b>Current Total: </b>$" . $total . ".00</p> 
                    <p><b>I agreed with the ToS and understand registration is incomplete until paid: </b>" . $cBox . "</p> 
                    <p><b>Payment Method: </b>" . $pm . "</p> 
                ";

                                // Always set content-type when sending HTML email 
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                // More headers 
                                $headers .= 'From: MBAR SysAdmin<' . $recipientEmail . '>' . "\r\n";

                                $headers .= 'Bcc: ' . $recipientEmail . "," . $bccEmail . "\r\n";

                                // Send email 
                                mail($to, $subject, $htmlContent, $headers);

                                $status = 'success';
                                $statusMsg = 'Thank you! Your registration was started, and it will assist with event planning and preparation. A copy of your registration form has been emailed to you.<br><span class="fw-bold">Remember: Your registration is not complete until <a href="#payment-now">payment has been made</a>.</span>';
                                $postData = '';

                                regFormData($total, $lang);
                            } else {
                                $statusMsg = 'reCaptcha verification failed, please try again.';
                            }
                        } else {
                            $statusMsg = 'Please check the reCAPTCHA checkbox.';
                        }
                    } else {
                        $statusMsg = 'Please fill all the mandatory fields.';
                        if (!empty($_POST['beeName'])) {
                            $statusMsg = 'Are you a bot?';
                        }
                    }
                }

                ?>
                <?php if (!empty($statusMsg)) { ?>
                    <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="Online registration form message.">
                            <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-xl-10 col-lg-10 col-md-12 py-4">

                    <form action="register-now.php" method="POST" class="needs-validation" id="myForm" aria-label="Registration Form" novalidate>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Personal Information</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <label for="beeName" aria-hidden="true" class="visually-hidden">Sunflower Name</label>
                                    <input type="text" name="beeName" id="beeName" style="display:none">

                                    <label for="firstName" class="reg-form-label">First Name (Required)</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" required>
                                    <div class="invalid-feedback">
                                        Required, please enter your first name.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastName" class="reg-form-label">Last Name or Initial (Required)</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" required>
                                    <div class="invalid-feedback">
                                        Required, please enter your last name or initial.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="badgeName" class="reg-form-label">Name to Appear on Badge</label>
                                    <input type="text" class="form-control" name="badgeName" id="badgeName">
                                    <div class="invalid-feedback">
                                        Optional, please enter your name to appear on badge.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myEmail" class="reg-form-label">Email (Required)</label>
                                    <input type="email" class="form-control" name="myEmail" id="myEmail" required>
                                    <div class="invalid-feedback">
                                        Required, please enter your email.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myPhone" class="reg-form-label">Phone with Area Code (xxx.xxx.xxxx)</label>
                                    <input type="tel" class="form-control" name="myPhone" id="myPhone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$">
                                    <div class="invalid-feedback">
                                        Optional, please enter a valid phone number.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="myAddress" class="reg-form-label">Mailing Address</label>
                                    <input type="text" class="form-control" name="myAddress" id="myAddress">
                                    <div class="invalid-feedback">
                                        Optional, please enter your address.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myCity" class="reg-form-label">City</label>
                                    <input type="text" class="form-control" name="myCity" id="myCity" placeholder="Monterey">
                                    <div class="invalid-feedback">
                                        Optional, please enter a city.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="myState" class="reg-form-label">State</label>
                                    <select class="form-select" name="myState" id="myState">
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
                                        Optional, please select your state.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="myZipcode" class="reg-form-label">Zip Code</label>
                                    <input type="text" class="form-control" name="myZipcode" id="myZipcode">
                                    <div class="invalid-feedback">
                                        Optional, please enter your zip code.
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Fellowship Information</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <label for="myFellowship" class="reg-form-label">Program (Required)</label>
                                    <select class="form-select" name="myFellowship" id="myFellowship" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="A.A.">A.A.</option>
                                        <option value="Al-Anon">Al-Anon</option>
                                        <option value="Double Winner">Double Winner</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please enter your Fellowship
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <label for="myHomegroup" class="reg-form-label">Homegroup(s)</label>
                                    <input type="text" class="form-control" name="myHomegroup" id="myHomegroup">
                                    <div class="invalid-feedback">
                                        Optional, please enter your Homegroup(s)
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Registration and Activities</legend>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <p class="h5">Registration (Required)</p>
                                    <span class="sr-only">(Use the arrow keys to make your choice)</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="early-registration" name="myRegistration" value="ebr" disabled required>
                                        <label class="form-check-label" for="early-registration">Early Registration (Before July 31, 2024) - closed</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="radio" class="form-check-input" id="normal-registration" name="myRegistration" value="after" checked  required>
                                        <label class="form-check-label" for="normal-registration">Registration (After July 31, 2024) - $50</label>
                                        <div class="invalid-feedback">
                                            Required.
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Register now and $1.00 of your registration goes toward the 50/50 drawing held Saturday Night.</li>
                                        <li>Saturday Night Dance is free with your paid registration.</li>
                                    </ul>
                                </div>

                                <div class="col-lg-7 pb-4">
                                    <p class="h5">À la carte Meal Options are still open, and pre-registration for the Early Bird Meal Bundle is currently closed.</p>
                                    <ul>
                                        <li>Continental Breakfast and Dinner at Bethlehem Lutheran Church, 800 Cass Street, Monterey
                                        </li>
                                        <li>Ice Cream Social will be held at the Conference Center on the Stevenson Terrace
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-12">
                                    <p class="h5"> À la carte Meal Options - If you prefer to purchase meals individually, please select from the following options.</p>

                                </div>

                                <div class="col-lg-4">
                                    <label for="meetTheSpeakerDinner" class="reg-form-label"><strong>Meet The Speaker's Dinner</strong> (Saturday Night @ 5:00pm) - $25<br>Available for purchase up to the date of the event</label>
                                    <select class="form-select" name="meetTheSpeakerDinner" id="meetTheSpeakerDinner" required>
                                        <option disabled value="">Choose...</option>
                                        <option value="yes">Yes, please!</option>
                                        <option value="no">No thank you</option>
                                        <option selected value="undecided">Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <label for="roundupContinentalBreakfast" class="reg-form-label pb-xl-4"><strong>Round-Up Continental Breakfast</strong> (Sunday @ 8:00am to 9:30am) - $10<br>Available for purchase until August 17th</label>
                                    <select class="form-select" name="roundupContinentalBreakfast" id="roundupContinentalBreakfast"  required>
                                        <option disabled value="">Choose...</option>
                                        <option value="yes">Yes, please!</option>
                                        <option value="no">No thank you</option>
                                        <option selected value="undecided">Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
                                    </div>
                                </div>

                                <div class="col-lg-4 pb-4">
                                    <label for="iceCreamSocial" class="reg-form-label"><strong>Ice Cream Social</strong> (Sunday Afternoon @ 3:00pm to 4:00pm) - $5<br>Available for purchase until the ice cream runs out!</label>
                                    <select class="form-select" name="iceCreamSocial" id="iceCreamSocial" required>
                                        <option disabled value="">Choose...</option>
                                        <option value="yes">Yes, please!</option>
                                        <option value="no">No thank you</option>
                                        <option selected value="undecided">Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="saturdayNightDance" class="reg-form-label">Saturday Night Dance @ Conference Center (FREE with paid registration or $5 at the door)</label>
                                    <select class="form-select" name="saturdayNightDance" id="saturdayNightDance">
                                        <option disabled value="">Choose...</option>
                                        <option selected value="yes">I'll be wearing my dancing shoes!</option>
                                        <option value="no">I don't dance...LOL</option>
                                        <option value="undecided">Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Optional, please select one.
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="helpingHandContribution" class="reg-form-label">Helping Hand Contribution, please consider making a contribution to ensure all who desire to attend are able.</label>
                                    <select class="form-select" name="helpingHandContribution" id="helpingHandContribution">
                                        <option selected disabled value="">Choose...</option>
                                        <option value="5">$5</option>
                                        <option value="10">$10</option>
                                        <option value="20">$20</option>
                                        <option value="35">$35</option>
                                        <option value="45">$45</option>
                                        <option value="50">$50</option>
                                        <option value="100">$100</option>
                                        <option value="other">Other</option>
                                        <option value="no thank you">No thank you</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Optional, please enter your Contribution.
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Merchandise</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="h5">2024 Commemorative T-Shirts will be available at the conference.</p>
                                    <ul>
                                        <li>They cost $15 each, and we have limited quantities from Small to 3X-Large.
                                        </li>

                                        <li>MBAR! Wear this MBAR favorite apparel to the big event or just hanging out around the house.
                                        </li>

                                        <li>100% Cotton, Solid Navy Blue, White and Gold Logo, Lightweight, Classic Fit, Double-needle Short Sleeve and Bottom Hem
                                        </li>
                                    </ul>
                                    
                                </div>

                                <div class="col-md-4 pt-3">
                                    <img src="../images/2024_mbar_tee_shirt.png" class="img-fluid img-thumbnail" alt="Navy blue tee shirt with gold and white logo.">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Terms of Services</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="paymentCheckBox" id="paymentCheckBox" value="1" required>
                                        <label class="form-check-label" for="paymentCheckBox">
                                            I agree to terms of service AND <strong>understand registration is incomplete until paid.</strong>(Required)
                                            <span class="sr-only">(Press the space bar to accept)</span>
                                        </label>
                                        <div class="invalid-feedback">
                                            Required - You must agree before submitting.
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="paymentMethod" class="reg-form-label">Payment Method Options Below(Required)</label>
                                    <select class="form-select" name="paymentMethod" id="paymentMethod" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="venmo">Venmo</option>
                                        <option value="cash">Cash</option>
                                        <option value="check">Check</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row justify-content-center">
                            <div class="col-md-12 mb-3">
                                <div class="g-recaptcha" data-sitekey=<?php echo getenv('g-site-key'); ?>></div>
                                <div id="reCaptcha-warning">
                                    <strong>Note</strong>: The form will reset if unchecked.
                                </div>
                            </div>

                            <div class="col-md-6 text-center mb-3">
                                <button type="submit" class="btn btn-primary" name="submit">Submit Form</button>
                            </div>

                            <div class="col-md-6 text-center mb-3">
                                <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Reset Form</button>
                                <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                    <p>(A pop up will confirm your reset)</p>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </article>


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

                        <p>You're welcome to pay for your online registration by <strong>check</strong> instead of Venmo or PayPal. Please make your check payable to MBAR, and mail it to
                            <br><span class="text-uppercase">Monterey Bay Area Roundup</span>
                            <br>Attn: Naomi B.
                            <br>P.O. Box 1462
                            <br>Monterey, CA 93942
                        </p>

                        <p>The QR codes below require the mobile apps.
                        </p>

                        <p><strong>Helpful Tip</strong>: PayPal's qrCode brings you to the login screen. After logging in, click on the qrCode icon at the top right, next to the user icon, and then scan the qrCode again for the MBAR payment prompt. If you need some assistance with making a payment, please contact our <a href="mailto:<?php echo getenv('mbar-to-email') ?>" class="bb-link">SysAdmin</a>.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 py-5">
                                <img src="../images/venmo-qrCode.png" class="img-fluid shadow-wrap" alt="Venmo QR code" title="Venmo qrCode">
                                <p class="text-center pt-4"><?php echo getenv('mbar-venmo') ?></p>
                                <p class="text-center"><a href="https://venmo.com/code?user_id=2883666946555904351&created=1699031584.911354" class="bb-link" target="_blank" rel="noopener noreferrer" title="PayPal qrCode Link">Venmo's qrCode Link<span class="sr-only">(Opens a new window)</span></a></p>
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
                            <p>Below is the MBAR 2024 registration form and can be returned by mail or email.
                            </p>
                            <p><span class="text-uppercase">Monterey Bay Are Roundup</span><br>
                                Attn: Naomi B.<br>
                                P.O. Box 1462<br>
                                Monterey, CA 93942
                            </p>
                            <p>Or email your completed form to our <a href="mailto:<?php echo getenv('mbar-reg-email') ?>" class="bb-link">Registration Chair</a>
                            </p>
                            <p><a class="btn btn-primary btn-sm" href="pdf/mbar-register-form-en.pdf"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">MBAR 2024 Registration Form<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p>If you have any questions, please contact our <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">Steering Committee</a>
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
                            <p>Since most events are held in hotels/conference centers, there is a charge for the use of some facilities. Other expenses include travel and lodging for the speakers, printing of fliers, schedules, programs, postage, supplies and entertainment. A large event requires a substantial amount of money.
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