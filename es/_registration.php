<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Registro </title>";
echo '<link rel="canonical" href= "https://monterey.bayarearoundup.org/es/_registration.php" />';
include_once 'header-bottom.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="navegación principal">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item active" aria-current="page" href="register-now.php">Registro<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-quienes-somos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quienes Somos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-quienes-somos">
                        <a class="dropdown-item" href="our_partner.php">Nuestro Compañero</a>
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item" href="upcoming_event.php">Comida Compartida de San Patricio</a>
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link" href="contributions.php">Contribución</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-registration" title="Monterey Conference Center de Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h2 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">La Preinscripción está Activa</span>
                    </h2>
                    <a href="#register-now" class="btn btn-primary me-2">Regístrese Ahora</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Part One -->
    <div id="register-now"></div>
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3  text-bg-light hero-text-border" title="Memories are in the making.">
                    <h3 class="card-title text-center mb-3">Registration 2024</h3>
                    <p>We are excited to announce that the Monterey Bay Area Roundup is coming in 2024, and we are glad you are planning to attend! The conference will take place at the Monterey Conference Center on Labor Day weekend: Aug 31 to Sept 1, 2024.</p>
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

            // If the form is submitted 
            $postData = $statusMsg = '';
            $status = 'error';

            if (isset($_POST['submit'])) {
                $postData = $_POST;

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
                    !empty($_POST['paymentCheckBox']) &&
                    !empty($_POST['paymentMethod'])
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
                            $cBox = !empty($_POST['paymentCheckBox']) ? htmlspecialchars($_POST['paymentCheckBox'], ENT_QUOTES) : '';
                            $pm = !empty($_POST['paymentMethod']) ? htmlspecialchars($_POST['paymentMethod'], ENT_QUOTES) : '';
                            $total = getTotal($register, $ebmb, $mtsd, $rucb, $ics, $hhc);


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
                    <p><b>Current Total: </b>$" . $total . ".00</p> 
                    <p><b>I agreed with the ToS and understand registration is incomplete until paid: </b>" . $cBox . "</p> 
                    <p><b>Payment Method: </b>" . $pm . "</p> 
                ";

                            // Always set content-type when sending HTML email 
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            // More headers 
                            $headers .= 'From: MBAR Registration Chair<' . $recipientEmail . '>' . "\r\n";

                            $headers .= 'Bcc: ' . $recipientEmail . "," . $bccEmail . "\r\n";

                            // Send email 
                            mail($to, $subject, $htmlContent, $headers);

                            $status = 'success';
                            $statusMsg = 'Your pre-registration was sent, and it will assist with event planning and preparation. Thank you! A copy of your registration form has been emailed to you.';
                            $postData = '';

                            regFormData($total);
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


            <?php if (!empty($statusMsg)) { ?>
                <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Online registration form message.">
                        <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                    </div>
                </div>
            <?php } ?>

            <div class="col-xl-10 col-lg-10 col-md-12 py-4">

                <form action="_registration.php" method="POST" class="needs-validation" id="myForm" aria-label="Registration Form" novalidate>

                    <fieldset class="text-bg-light pb-3 mb-3">
                        <legend>Personal Information</legend>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
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
                                <label for="myPhone" class="reg-form-label">Phone with Area Code</label>
                                <input type="tel" class="form-control" name="myPhone" id="myPhone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
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
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="early-registration" name="myRegistration" value="before" onChange="optionSND(this)" required>
                                    <label class="form-check-label" for="early-registration">Early Registration (Before July 31, 2024) - $45</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" id="normal-registration" name="myRegistration" value="after" onChange="optionSND(this)" required>
                                    <label class="form-check-label" for="normal-registration">Registration (After July 31, 2024) - $50</label>
                                    <div class="invalid-feedback">
                                        Required, please check one.
                                    </div>
                                </div>
                                <ul>
                                    <li>Register before July 31 and $1.00 of your registration goes toward the 50/50 drawing held Saturday Night.</li>
                                    <li>Saturday Night Dance is free with your paid registration.</li>
                                </ul>
                            </div>

                            <div class="col-lg-7 pb-4">
                                <p class="h5">Pre-Registration for meals is currently required.</p>
                                <ul>
                                    <li>The MBAR Committee recommends the Early Bird Meal Bundle which includes a $5 savings from the à la carte option
                                    </li>
                                    <li>Continental Breakfast and Dinner at Bethlehem Lutheran Church, 800 Cass Street, Monterey
                                    </li>
                                    <li>Ice Cream Social will be held at the Conference Center on the Stevenson Terrace
                                    </li>
                                </ul>

                                <label for="earlyBirdMealBundle" class="reg-form-label">Early Bird Meal Bundle (Dinner, Breakfast, and Ice Cream Social) - $35 </label>
                                <select class="form-select" name="earlyBirdMealBundle" id="earlyBirdMealBundle" onChange="optionEBMB(this)" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="yes">Yes, please!</option>
                                    <option value="no">No thank you</option>
                                    <option value="undecided" disabled>Still deciding</option>
                                </select>
                                <div class="invalid-feedback">
                                    Required, please select one.
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <p class="h5"> À la carte Meal Options - If you prefer to purchase meals individually, please select from the following options.</p>
                            </div>

                            <div class="col-lg-4">
                                <label for="meetTheSpeakerDinner" class="reg-form-label">Meet The Speaker's Dinner (Saturday Night @ 5:00pm) - $25 </label>
                                <select class="form-select" name="meetTheSpeakerDinner" id="meetTheSpeakerDinner" onChange="optionCHANGE()" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="yes">Yes, please!</option>
                                    <option value="no">No thank you</option>
                                    <option value="undecided">Still deciding</option>
                                </select>
                                <div class="invalid-feedback">
                                    Required, please select one.
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label for="roundupContinentalBreakfast" class="reg-form-label">Round-Up Continental Breakfast (Sunday @ 8:00am to 9:30am) - $10</label>
                                <select class="form-select" name="roundupContinentalBreakfast" id="roundupContinentalBreakfast" onChange="optionCHANGE()" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="yes">Yes, please!</option>
                                    <option value="no">No thank you</option>
                                    <option value="undecided">Still deciding</option>
                                </select>
                                <div class="invalid-feedback">
                                    Required, please select one.
                                </div>
                            </div>

                            <div class="col-lg-4 pb-4">
                                <label for="iceCreamSocial" class="reg-form-label">Ice Cream Social (Sunday Afternoon @ 3:00pm to 4:00pm) - $5</label>
                                <select class="form-select" name="iceCreamSocial" id="iceCreamSocial" onChange="optionCHANGE()" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="yes">Yes, please!</option>
                                    <option value="no">No thank you</option>
                                    <option value="undecided">Still deciding</option>
                                </select>
                                <div class="invalid-feedback">
                                    Required, please select one.
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label for="saturdayNightDance" class="reg-form-label">Saturday Night Dance @ Conference Center (FREE with paid registration or $5 at the door)</label>
                                <select class="form-select" name="saturdayNightDance" id="saturdayNightDance">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="yes">I'll be wearing my dancing shoes!</option>
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
                        <legend>Terms of Services</legend>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="paymentCheckBox" id="paymentCheckBox" value="1" required>
                                    <label class="form-check-label" for="paymentCheckBox">
                                        I agree to terms of service AND <strong>understand registration is incomplete until paid.</strong>(Required)
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
                                <p>(A pop up will confirm your choices)</p>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Part Payment -->
    <article aria-label="Método de pago">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div id="payment-now"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Payment Methods">
                        <h3 class="fw-bold text-dark px-3 px-md-0">Métodos de Pago
                        </h3>
                        <p>Por favor agregue su nombre de registro en el pago. Si paga por más de una persona, agregue sus nombres en la sección de notas.</p>
                        <div class="row">
                            <div class="col-sm-6 py-3">
                                <img src="../images/venmo-qrCode.png" class="img-fluid shadow-wrap" alt="Código QR de Venmo" title="Código QR de Venmo">
                                <p class="text-center pt-4"><?php echo getenv('mbar-venmo') ?></p>
                            </div>
                            <div class="col-sm-6 py-3">
                                <img src="../images/paypal-qrCode.png" class="img-fluid shadow-wrap" alt="Código QR de PayPal" title="Código QR de PayPal">
                                <p class="text-center pt-4"><?php echo getenv('mbar-treas-email') ?></p>
                            </div>
                            <p>Los enlaces siguientes proporcionan instrucciones de pago.</p>
                            <p class="mb-3"><a href="https://help.venmo.com/hc/en-us/articles/210413477-Sending-Requesting-Money" class="bb-link" target="_blank" title="Enlace directo a Venmo">¿Cómo puedo enviar un pago o solicitar dinero con Venmo?<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            <p class="mb-3"><a href="https://www.paypal.com/in/cshelp/article/how-do-i-send-payments-help293" class="bb-link" target="_blank" title="Enlace directo a PayPal">¿Cómo envío pagos con PayPal?<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </article>


    <!-- Part Two -->
    <article aria-label="Formulario de registro en PDF">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Descargar formulario pdf">
                            <h3 class="card-title mb-3"><a href="#register-now" class="bb-link">Descarga el Formulario de Inscripción</a></h3>
                            <p>A continuación se muestra el formulario de registro de MBAR 2024 y se puede devolver por correo postal o electrónico.
                            </p>
                            <p><span class="text-uppercase">Monterey Bay Are Roundup</span><br>
                                Attn: Naomi B.<br>
                                P.O. Box 1462<br>
                                Monterey, CA 93942
                            </p>
                            <p>O envíe el formulario completo por correo electrónico a nuestro <a href="mailto:<?php echo getenv('mbar-reg-email') ?>" class="bb-link">Presidente de Registro</a>
                            </p>
                            <p><button type="button" class="btn btn-primary btn-sm" onclick="window.open('../pdf/mbar-register-form-en.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF"> Formulario de Registro MBAR 2024</button>
                            </p>
                            <p>Si tiene alguna pregunta, comuníquese con nuestro <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">Comité Directivo</a>
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Three -->
    <div id="map"></div>
    <article aria-label="Mapa de Google del MBAR 2024">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Ubicaciones de eventos">
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Bethlehem+Lutheran+Church+800+Cass+St+Monterey,+CA+93940/@36.5939841,-121.8958073,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de425e4f48de1:0xc2ec674814c2393f!2m2!1d-121.8958736!2d36.5940092?hl=es&entry=ttu" class="bb-link" target="_blank" title="Enlace directo a Google Map">Bethlehem Lutheran Church<span class="sr-only">(Se abre en una ventana nueva)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <p><img src="../images/icons/warning-sign.png" width="50" height="50" alt="Señal de advertencia triangular con un signo de exclamación."><strong class="text-uppercase">Tenga en cuenta:</strong> El Desayuno y la Cena se realizarán en<br>
                                    <strong>Bethlehem Lutheran Church, ubicada en 800 Cass Street en Monterey.</strong><br>
                                    (Está a poco más de una milla del Centro de Conferencias).
                                </p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.345445633647!2d-121.89838222286743!3d36.59398837929454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1ses!2sus!4v1705601422150!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Bethlehem Lutheran Church" aria-hidden="true"></iframe>
                            </div>
                            <br>
                            <hr>
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Monterey+Conference+Center+1+Portola+Plaza+Monterey,+CA+93940/@36.6014612,-121.8949613,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de422461f891b:0x20f8f64ee124f091!2m2!1d-121.8949613!2d36.6014612?hl=es&entry=ttu" class="bb-link" target="_blank" title="Enlace directo a Google Map">Monterey Conference Center<span class="sr-only">(Se abre en una ventana nueva)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0352026855912!2d-121.89496129999999!3d36.601461199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1ses!2sus!4v1705601249904!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Monterey Conference Center" aria-hidden="true"></iframe>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Four -->
    <aside aria-label="Autosuficiente">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Razón para pagar">
                            <h4 class="card-title text-center mb-3"><a href="#register-now" class="bb-link">A.A. Convenciones: ¿Por qué tenemos que pagar?</a></h4>
                            <p>Hay muchos miembros de A.A. conferencias/convenciones celebradas en todo el mundo. Uno de los conceptos erróneos más comunes acerca de su reunión es que son miembros de A.A. reuniones y dado que no hay cuotas ni honorarios para A.A. membresía, no debería haber ningún costo por asistir. Las convenciones y conferencias son eventos especiales, no reuniones regulares de A.A. reuniones. Requieren meses de planificación, preparación y costes.
                            </p>
                            <p>Dado que la mayoría de los eventos se llevan a cabo en hoteles/centros de conferencias, hay un cargo por el uso de algunas instalaciones. Otros gastos incluyen viajes y alojamiento de los oradores, impresión de volantes, horarios, programas, correos, suministros y entretenimiento. Un gran evento requiere una cantidad sustancial de dinero.
                            </p>
                            <p>Cada conferencia es autosuficiente. No se utilizan fondos del grupo para pagar el evento. El costo del evento se paga mediante tarifas de inscripción y eventos de recaudación de fondos de MBAR. La asistencia es voluntaria y como responsable A.A. miembros, ahora "pagamos nuestro propio camino".
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
        function resetFields() {
            return confirm("Are you sure you want to reset all fields?");
        }
    </script>
    <script>
        /**
         * https://stackoverflow.com/questions/39034981/disable-different-inputs-based-on-option-selected-from-a-select-element
         */
        function optionEBMB($obj) {

            let myArr = ['meetTheSpeakerDinner', 'roundupContinentalBreakfast', 'iceCreamSocial'];

            myArr.forEach(function($key) {
                if ($obj.value == "yes" || $obj.value == "undecided")
                    document.getElementById($key).value = "no";
                //else
                //document.getElementById($key).value = "";
            });

        }

        function optionSND($obj) {
            let snd = document.getElementById("saturdayNightDance");
            if ($obj.checked)
                snd.value = "yes";
            else
                snd.value = "";
        }

        function optionCHANGE() {
            let ebmb = document.getElementById('earlyBirdMealBundle');
            let mtsd = document.getElementById('meetTheSpeakerDinner');
            let rucb = document.getElementById('roundupContinentalBreakfast');
            let ics = document.getElementById('iceCreamSocial');

            if (mtsd.value == "yes" || rucb.value == "yes" || ics.value == "yes" || mtsd.value == "undecided" || rucb.value == "undecided" || ics.value == "undecided")
                ebmb.value = "no";
            //else
            //ebmb.value = "";
        }
    </script>
    </body>

    </html>