<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Contributions </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/helping_hands.php" >';
include_once 'header-bottom.inc';
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
                        <a class="dropdown-item" href="aa-spanish-marathon-2024.php">Spanish-Speaking A.A. Marathon Meetings</a>
                        <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Marathon Meetings</a>
                        <a class="dropdown-item" href="al-anon-marathon-2024.php">Al-Anon Marathon Meetings</a>
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
                    <a class="nav-link active" aria-current="page" href="helping_hands.php">Helping Hands<span class="visually-hidden">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-helpingHands" title="We are honoring the seventh tradition.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Contact Us">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Voluntary Contributions:<br>
                        Helping Hands</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Recovery">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="">
                        <section aria-label="Call-to-action">
                            <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">Give a 'Helping Hand' for someone who wants to go to the conference but can't afford it.</span></h3>
                            <p class="mb-6 h5 text-dark">The purpose is to ensure that anyone who wants to benefit from the recovery and support available at these events is able to participate, regardless of financial constraints. This embodies the spirit of mutual support and fellowship central to A.A.'s mission.</p>
                        </section>
                    </div>
                </div>

                <?php

                /**
                 * https://www.codexworld.com/new-google-recaptcha-with-php/
                 */

                // Google reCAPTCHA API keys settings 
                $secretKey  = getenv('g-secret-key');

                // Email settings 
                $recipientEmail = getenv('mbar-reg-email');

                // If the form is submitted 
                $postData = $statusMsg = '';
                $status = 'error';

                if (isset($_POST['submit'])) {
                    $postData = $_POST;

                    // Validate form input fields 
                    if (
                        !empty($_POST['helpHand-email']) &&
                        !empty($_POST['helpHand-phone']) &&
                        !empty($_POST['helpHand-amount']) &&
                        !empty($_POST['helpHand-textarea']) &&
                        empty($_POST['helpHand-beeName'])
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
                                $email = !empty($_POST['helpHand-email']) ? htmlspecialchars($_POST['helpHand-email']) : '';
                                $phone = !empty($_POST['helpHand-phone']) ? htmlspecialchars($_POST['helpHand-phone']) : '';
                                $amount = !empty($_POST['helpHand-amount']) ? htmlspecialchars($_POST['helpHand-amount']) : '';
                                $mainMessage = !empty($_POST['helpHand-textarea']) ? htmlspecialchars($_POST['helpHand-textarea']) : '';

                                // Send email notification to the site admin 
                                $to = $recipientEmail;
                                $subject = 'Helping Hand Submitted';
                                $htmlContent = " 
                    <h4>Helping Hand Form - EN</h4> 
                    <p><b>Name: </b> Anonymous Donor </p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Phone: </b>" . $phone . "</p> 
                    <p><b>Amount: </b>" . $amount . "</p> 
                    <p><b>Message: </b>" . $mainMessage . "</p> 
                ";

                                // Always set content-type when sending HTML email 
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                // More headers 
                                $headers .= 'From:Anonymous Donor<' . $email . '>' . "\r\n";

                                // Send email 
                                mail($to, $subject, $htmlContent, $headers);

                                $status = 'success';
                                $statusMsg = 'Thank you very much. We will be in touch with you soon about paying for your contribution. You can choose to pay via Venmo, PayPal, check, or cash. Please remember to include "Helping Hand" in the note section.';
                                $postData = '';
                            } else {
                                $statusMsg = 'reCaptcha verification failed, please try again.';
                            }
                        } else {
                            $statusMsg = 'Please check the reCAPTCHA checkbox.';
                        }
                    } else {
                        $statusMsg = 'Please fill all the mandatory fields.';
                        if (!empty($_POST['helpHand-beeName'])) {
                            $statusMsg = 'Are you a bot?';
                        }
                    }
                }

                ?>

                <div id="hand-us"></div>
                <?php if (!empty($statusMsg)) { ?>
                    <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="Reaching out to one another.">
                            <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-bg-light hero-text-border" title="We are willing to listen.">

                        <form action="helping_hands.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="helpHand-beeName" aria-hidden="true" class="visually-hidden">Sunflower Name</label>
                                <input type="text" name="helpHand-beeName" id="helpHand-beeName" style="display:none">


                                <label for="helpHand-email" class="form-label">Email (Required)</label>
                                <input type="email" class="form-control" name="helpHand-email" id="helpHand-email" required>
                                <div class="invalid-feedback">
                                    Required, please enter your email.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="helpHand-phone" class="form-label">Phone with Area Code (xxx.xxx.xxxx)</label>
                                <input type="tel" class="form-control" name="helpHand-phone" id="helpHand-phone" required pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                                <div class="invalid-feedback">
                                    Optional, please enter a valid phone number.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="helpHand-amount" class="form-label">Your Contribution (Required)</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">USD</span>
                                    <input type="text" class="form-control" name="helpHand-amount" id="helpHand-amount" aria-describedby="inputGroupPrepend" placeholder="0.00" required>
                                    <div class="invalid-feedback">
                                        Required, please enter a dollar amount
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="helpHand-textarea" class="form-label">Message or Note to be included. (Required)</label>
                                <textarea class="form-control" name="helpHand-textarea" id="helpHand-textarea" required></textarea>
                                <div class="invalid-feedback">
                                    Required, please enter your message.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey=<?php echo getenv('g-site-key'); ?>></div>
                                <div id="reCaptcha-warning">
                                    Note: The form will reset if unchecked.
                                </div>
                            </div>

                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary" name="submit">Submit Form</button>
                            </div>

                            <div class="col-md-6 text-center">
                                <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Reset Form</button>
                                <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                    <p>(A pop up will confirm your reset)</p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <p class="mb-6 h5 text-dark">In keeping with A.A.'s Seventh Tradition of self-supporting, we accept contributions only from A.A. and Al-Anon members.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Payment -->
    <article aria-label="Contribution methods">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div id="helping-now"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <h3 class="card-title mb-3">Contribution Methods
                        </h3>
                        <p><strong>A.A. and Al-Anon members are welcome to give a generous contribution directly.</strong> We accept Venmo, PayPal, check, or cash. Please remember to include "Helping Hand" in the note section.
                        </p>

                        <p>If you pay by <strong>check</strong>, please make your check payable to MBAR, and mail it to
                            <br><span class="text-uppercase">Monterey Bay Area Roundup</span>
                            <br>Attn: Naomi B.
                            <br>P.O. Box 1462
                            <br>Monterey, CA 93942
                        </p>

                        <p>Otherwise, please use one of the QR codes below.
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
        // Function to display confirmation message and update live region
        function resetFields() {
            // Display confirmation dialog
            var confirmMessage = "Are you sure you want to reset all fields?"
            var confirmed = window.confirm(confirmMessage);

            // Update live region based on user's choice
            var liveRegion = document.getElementById('reset');
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