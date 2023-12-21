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
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item active" href="memories.php">Memories<span class="visually-hidden">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-memories" title="Colorful tress during the fall.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup<br>
                            Memories</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Memories are in the making.">
                    <h4 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">'Every memory we create together is a footprint on the path of a life we make together.'</span>
                    </h4>
                    <p class="mb-6 h5 text-dark">Care to share your experience with us? All posts will be anonymous.</p>
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
                    !empty($_POST['fname']) &&
                    !empty($_POST['lname']) &&
                    !empty($_POST['mem-email']) &&
                    !empty($_POST['mem-title']) &&
                    !empty($_POST['mem-ta'])
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
                            $firstName = !empty($_POST['fname']) ? $_POST['fname'] : '';
                            $lastName = !empty($_POST['lname']) ? $_POST['lname'] : '';
                            $email = !empty($_POST['mem-email']) ? $_POST['mem-email'] : '';
                            $messageTitle = !empty($_POST['mem-title']) ? $_POST['mem-title'] : '';
                            $mainMessage = !empty($_POST['mem-ta']) ? $_POST['mem-ta'] : '';

                            // Send email notification to the site admin 
                            $to = $recipientEmail;
                            $subject = 'New Memory Request Submitted';
                            $htmlContent = " 
                    <h4>Memory form request details</h4> 
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Message: </b>" . $messageTitle . "</p> 
                    <p><b>Name: </b>" . $mainMessage . "</p> 
                ";

                            // Always set content-type when sending HTML email 
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            // More headers 
                            $headers .= 'From:' . $firstName . ' ' . $lastName . '<' . $email . '>' . "\r\n";

                            // Send email 
                            mail($to, $subject, $htmlContent, $headers);

                            $status = 'success';
                            $statusMsg = 'Thank you! Your memory has been submitted successfully.';
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
        
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="Express your thoughts and feelings about MBAR.">

                    <?php if (!empty($statusMsg)) { ?>
                        <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                            <div class="p-3 text-center text-bg-light hero-text-border" title="Memories are in the making.">
                                <p class="mb-6 h5 text-dark " status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <form action="memories.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>

                        <div class="col-md-6">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" required>
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lname" id=" lname" required>
                            <div class="invalid-feedback">
                                Please enter your last name.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="mem-email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="mem-email" id="mem-email" required>
                            <div class="invalid-feedback">
                                Please enter your email.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="mem-title" class="form-label">Message Title</label>
                            <input type="text" class="form-control" name="mem-title" id="mem-title" required>
                            <div class="invalid-feedback">
                                Please enter a title.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="mem-ta" class="form-label">Message</label>
                            <textarea class="form-control" name="mem-ta" id="mem-ta" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="cBox" id="invalidCheck" value="" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
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

    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-5 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2021.php">
                                <i class="bi bi-person me-2" style="font-size: 2rem; color: var(--color-8);"></i>Meeting Wonderful People</a></h5>
                            <p class="card-text">I met the most wonderful people at MBAR 2019; truly happy, joyous, and free! Thank you all for coming and sharing fellowship with us.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="registration.php">
                                <i class="bi bi-person me-2" style="font-size: 2rem; color: var(--color-8);"></i>The Cost of Admission: Priceless!</a></h5>
                            <p class="card-text">Why do I have to pay? Isn't it enough that I am volunteering?! Those were my thoughts at my first MBAR. But the cost of admission is "Priceless"; the cheery faces, strangers who instantly become friends, giving my time, receiving so much more love than I could ever give. "Priceless"</p>
                    </div>
                </div>
            </div>
    </section>

</main>

<?php include 'footer.inc' ?>

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