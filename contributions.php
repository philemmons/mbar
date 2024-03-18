<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Contributions </title>";
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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conference" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conference">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
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
                        <a class="dropdown-item" href="upcoming_event.php">St. Patrick's Potluck</a>
                        <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link active" aria-current="page" href="contributions.php">Contribution<span class="visually-hidden">(current)</span></a>
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
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Voluntary Contributions:<br>
                            Helping Hands</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Recovery">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="">
                        <section>
                            <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">Give a 'Helping Hand' for someone who wants to go to the conference but can't afford it.</span></h3>
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
                        !empty($_POST['hand-em']) &&
                        !empty($_POST['hand-ph']) &&
                        !empty($_POST['hand-am']) &&
                        !empty($_POST['hand-ta'])
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
                                $email = !empty($_POST['hand-em']) ? htmlspecialchars($_POST['hand-em']) : '';
                                $phone = !empty($_POST['hand-ph']) ? htmlspecialchars($_POST['hand-ph']) : '';
                                $amount = !empty($_POST['hand-am']) ? htmlspecialchars($_POST['hand-am']) : '';
                                $mainMessage = !empty($_POST['hand-ta']) ? htmlspecialchars($_POST['hand-ta']) : '';

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
                                $statusMsg = 'Thank you very much. We will contact you to see how to do your Contribution';
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

                        <form action="contributions.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="hand-em" class="form-label">Email</label>
                                <input type="email" class="form-control" name="hand-em" id="hand-em" required>
                                <div class="invalid-feedback">
                                    Please enter your email.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="hand-ph" class="form-label">Phone</label>
                                <input type="tel" class="form-control" name="hand-ph" id="hand-ph" required pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                                <div class="invalid-feedback">
                                    Please enter a valid phone number.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="hand-am" class="form-label">Your Contribution</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">USD</span>
                                    <input type="text" class="form-control" name="hand-am" id="hand-am" aria-describedby="inputGroupPrepend" placeholder="0.00" required>
                                    <div class="invalid-feedback">
                                        Please enter a dollar amount
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="hand-ta" class="form-label">Message or Note to be included.</label>
                                <textarea class="form-control" name="hand-ta" id="hand-ta" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter your message.
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
                                <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="aria-live">Reset Form</button>
                                <div class="sr-only" id="aria-live" role="alert" aria-live="assertive" aria-atomic="true">
                                    <p>(A pop up will confirm your choices)</p>
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