<?php

$errors = [];
$errorMessage = '';

$secret = getenv('g-secret-key');

if (!empty($_POST)) {

    if (isset($_POST['memory-fn']))
        $firstName = htmlspecialchars($_POST['memory-fn']); // User input deviceName

    if (isset($_POST['memory-ln']))
        $lastName = htmlspecialchars($_POST['memory-ln']);

    if (isset($_POST['memory-em']))
        $email = htmlspecialchars($_POST['memory-em']);

    if (isset($_POST['memory-t']))
        $title = htmlspecialchars($_POST['memory-t']);

    if (isset($_POST['memory-ta']))
        $textArea = htmlspecialchars($_POST['memory-ta']);


    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaResponse}";
    $verify = json_decode(file_get_contents($recaptchaUrl));

    if (!$verify->success) {
        $errors[] = 'Recaptcha failed';
    }

    if (empty($firstName)) {
        $errors[] = 'First name is empty';
    }

    if (empty($lastName)) {
        $errors[] = 'Last name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($title)) {
        $errors[] = 'Title is empty';
    }

    if (empty($textArea)) {
        $errors[] = 'Text area is empty';
    }

    if (!empty($errors)) {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    } else {
        $toEmail = getenv('mbar-to-email');
        $emailSubject = 'New email from MBAR memories form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];

        $bodyParagraphs = ["First Name: {$firstName}", "Last Name: {$lastName}", "Email: {$email}", "Title: {$title}", "Text Area:", $textArea];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: memory_thank_you.php');
        } else {
            $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
        }
    }
}
?>

<?php
/*

            use PHPMailer\PHPMailer\PHPMailer;

            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = gethostname();
            $mail->SMTPAuth = true;
            $mail->Username = 'sender@example.com';
            $mail->Password = 'password';
            $mail->setFrom('sender@example.com');
            $mail->addAddress('recipient@example.com');
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the body.';
            $mail->send();
            */
?>

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
                <li class="nav-item dropdown" style='width: 180px;'>
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item active" href="memories.php">Memories<span class="visually-hidden">(current)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown" style='width: 161px;'>
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
                    <h4 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">"Every memory we create together is a footprint on the path of a life we make together."</span>
                    </h4>
                    <p class="mb-6 h5 text-dark">Care to share your experience with us? All posts will be anonymous.</p>
                </div>
            </div>


            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="Express your thoughts and feelings about MBAR.">

                    <script src="https://www.google.com/recaptcha/api.js"></script>
                    <form action="/memories.php" method="post" id="contact-form" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="memory-fn" class="form-label">First name</label>
                            <input type="text" class="form-control" id="memory-fn" required>
                            <div class="valid-feedback">
                                Accepted.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="memory-ln" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="memory-ln" required>
                            <div class="valid-feedback">
                                Accepted.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="memory-em" class="form-label">Email</label>
                            <input type="email" class="form-control" id="memory-em" required>
                            <div class="valid-feedback">
                                Email verified.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="memory-t" class="form-label">Memory Title</label>
                            <input type="text" class="form-control" id="memory-t" required>
                            <div class="valid-feedback">
                                Title looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="memory-ta" class="form-label">Text Area</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                            <div class="valid-feedback">
                                Message ready.
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    I agree to have my message published on MBAR's website.
                                </label>
                                <div class="valid-feedback">
                                    You have agreed!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary g-recaptcha" type="submit" data-sitekey=<? echo getenv('g-site-key'); ?> data-callback='onRecaptchaSuccess'>Submit form
                            </button>
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

    function onRecaptchaSuccess() {
        document.getElementById('contact-form').submit()
    }
</script>
</body>

</html>