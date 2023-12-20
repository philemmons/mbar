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
             * https://teamtreehouse.com/community/displaying-a-bootstrap-modal-after-php-for-submission
             * 
             * https://www.youtube.com/watch?v=tyxchSojW48
             * 
             * https://stackoverflow.com/questions/64113404/bootstrap-5-referenceerror-bootstrap-is-not-defined
             * 
             * https://www.youtube.com/watch?v=zeEtA0sFkDA
             * 
             */
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
                $recaptcha_secret = getenv('g-secret-key');
                $recaptcha_response = $_POST['g-recaptcha-response'];

                $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
                $recaptcha = json_decode($recaptcha, true);

                if ($recaptcha['success'] == 1 and $recaptcha['score'] >= 0.5 and $recaptcha['action'] == "submit") {
                    /* reCaptcha verified, redirect to thank you page, etc */
                    $recaptcha_message = "reCaptcha verified";

                    $_SESSION['submitSuccess'] = true; // Sets session once form is submitted and input fields are not empty

                    if (isset($_SESSION['submitSuccess']) && $_SESSION['submitSuccess'] === true) {
                        echo "<script type='module'>";
                        echo "const myModal = bootstrap.Modal.getOrCreateInstance('#awaitModal');";
                        echo "window.addEventListener('DOMContentLoaded', () => { ";
                        echo "myModal.show();";
                        echo "});";
                        echo "</script>"; // Show modal

                        unset($_SESSION['submitSuccess']); // IMPORTANT - this will unset the value and make the value equal to null
                    }
                } else {
                    /* reCaptcha not verified, redirect to error, etc */
                    $recaptcha_message = "reCaptcha not verified";
                }
            }
            ?>

            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="Express your thoughts and feelings about MBAR.">

                    <form action="/memories.php" method="POST" class="row g-3 needs-validation" id="contact-form" novalidate>
                        <div class="col-md-6">
                            <label for="fn" class="form-label">First name</label>
                            <input type="text" class="form-control" name="memory-fn" id="fn" required>
                            <div class="invalid-feedback">
                                Required
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="ln" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="memory-ln" id="ln" required>
                            <div class="invalid-feedback">
                                Required
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="em" class="form-label">Email</label>
                            <input type="email" class="form-control" name="memory-em" id="em" required>
                            <div class="invalid-feedback">
                                Required
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="ti" class="form-label">Memory Title</label>
                            <input type="text" class="form-control" name="memory-t" id="ti" required>
                            <div class="invalid-feedback">
                                Please enter a message title.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="ta" class="form-label">Text Area</label>
                            <textarea class="form-control" name="memory-ta" id="ta" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message in the text area.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="invalidCheck" id="invalidCheck" value="" required>
                                <label class="form-check-label" for="invalidCheck">
                                    I agree to have my message published on MBAR's website.
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 text-center">
                            <button id="submit-button" class="btn btn-primary g-recaptcha" data-sitekey=<? echo getenv('g-site-key'); ?> data-callback="onSubmit" data-action="submit">Submit Form</button>
                        </div>

                        <div class="col-md-6 text-center">
                            <button type="submit" id="submit-button" class="btn btn-primary g-recaptcha" data-sitekey=<? echo getenv('g-site-key'); ?> data-callback="onSubmit" data-action="submit">Submit Form</button>
                        </div>


                        <div class="col-md-6 text-center">
                            <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();">Reset Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="awaitModal" tabindex="-1" aria-labelledby="memoryFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="memoryFormLabel">Memory Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Thank you, your message was sent.</p>
                    <p><? echo $recaptcha_message; ?>
                </div>
            </div>
        </div>
    </div>

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

<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById('contact-form').submit();
    }
</script>
</body>

</html>