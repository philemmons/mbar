<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Contact Us </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/contact.php" >';
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
                                                <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
                        <a class="dropdown-item" href="upcoming_event.php">St. Patrick's Day Potluck</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contact.php">Contact<span class="visually-hidden">(current)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-contactUs" title="Please contact us with any questions, feedback, or improvements.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Contact Us">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Contact Us">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Memories are in the making.">
                        <section aria-label="Talk-to-us">
                            <h3 class="h4 mb-6"><span class="text-dark px-3 px-md-0">Please contact us with any questions, feedback, or improvements because we care.<br>We really do.</span>
                            </h3>
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
                $recipientEmail = getenv('mbar-chair-email');
                //echo "---> email should appear here-->". getenv('mbar-chair-email'); die();
                // If the form is submitted
                $postData = $statusMsg = '';
                $status = 'error';

                if (isset($_POST['submit'])) {
                    $postData = $_POST;

                    // Validate form input fields
                    if (
                        !empty($_POST['contact-firstName']) &&
                        !empty($_POST['contact-lastName']) &&
                        !empty($_POST['contact-email']) &&
                        !empty($_POST['contact-subject']) &&
                        !empty($_POST['contact-textArea']) &&
                        empty($_POST['contact-beeName'])
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
                                $firstName = !empty($_POST['contact-firstName']) ? htmlspecialchars($_POST['contact-firstName']) : '';
                                $lastName = !empty($_POST['contact-lastName']) ? htmlspecialchars($_POST['contact-lastName']) : '';
                                $email = !empty($_POST['contact-email']) ? htmlspecialchars($_POST['contact-email']) : '';
                                $phone = !empty($_POST['contact-phone']) ? htmlspecialchars($_POST['contact-phone']) : '';
                                $contactSubj = !empty($_POST['contact-subject']) ? htmlspecialchars($_POST['contact-subject']) : '';
                                $contactMess = !empty($_POST['contact-textArea']) ? htmlspecialchars($_POST['contact-textArea']) : '';

                                // Send email notification to the site admin 
                                $to = $recipientEmail;
                                $subject = 'Contact Us Submitted';
                                $htmlContent = " 
                    <h4>Contact Us Form - EN</h4> 
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Phone: </b>" . $phone . "</p> 
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
                        if (!empty($_POST['contact-beeName'])) {
                            $statusMsg = 'Are you a bot?';
                        }
                    }
                }

                ?>

                <div id="contact-us"></div>
                <?php if (!empty($statusMsg)) { ?>
                    <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="Reaching out to one another.">
                            <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-bg-light hero-text-border" title="We are willing to listen.">

                        <form action="contact.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="contact-beeName" aria-hidden="true" class="visually-hidden">Sunflower Name</label>
                                <input type="text" name="contact-beeName" id="contact-beeName" style="display:none">

                                <label for="contact-firstName" class="form-label">First Name (Required)</label>
                                <input type="text" class="form-control" name="contact-firstName" id="contact-firstName" required>
                                <div class="invalid-feedback">
                                    Please enter your first name.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact-lastName" class="form-label">Last Name (Required)</label>
                                <input type="text" class="form-control" name="contact-lastName" id="contact-lastName" required>
                                <div class="invalid-feedback">
                                    Required, please enter your last name.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact-email" class="form-label">Email (Required)</label>
                                <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                                <div class="invalid-feedback">
                                    Required, please enter your email.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact-phone" class="form-label">Phone with Area Code (xxx.xxx.xxxx)</label>
                                <input type="tel" class="form-control" name="contact-phone" id="contact-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                                <div class="invalid-feedback">
                                    Optional, please enter a valid phone number.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="contact-subject" class="form-label">Subject (Required)</label>
                                <input type="text" class="form-control" name="contact-subject" id="contact-subject" required>
                                <div class="invalid-feedback">
                                    Required, please enter a subject.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="contact-textArea" class="form-label">Question, Feedback or Improvement (Required)</label>
                                <textarea class="form-control" name="contact-textArea" id="contact-textArea" required></textarea>
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
                        <p class="mb-6 h5 text-dark">Please allow us up to 48 hours to respond, and if you need assistance sooner, please email <?php echo getenv('mbar-chair-email'); ?> </p>
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