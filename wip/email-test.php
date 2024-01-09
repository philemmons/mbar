<?php

$errors = [];
$errorMessage = '';

$secret = getenv('g-secret-key');

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaResponse}";
    $verify = json_decode(file_get_contents($recaptchaUrl));

    if (!$verify->success) {
        $errors[] = 'Recaptcha failed';
    }

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (!empty($errors)) {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    } else {
        $toEmail = 'systemadmin@montereybayarearoundup.org';
        $emailSubject = 'New email from your contact form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: thank-you.html');
        } else {
            $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
        }
    }
}

?>

<html>

<body>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <form action="/email-test.php" method="post" id="contact-form">
        <h2>Contact us</h2>

        <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
        <p>
            <label>First Name:</label>
            <input name="name" type="text" />
        </p>
        <p>
            <label>Email Address:</label>
            <input style="cursor: pointer;" name="email" type="text" />
        </p>
        <p>
            <label>Message:</label>
            <textarea name="message"></textarea>
        </p>

        <p>
            <button class="g-recaptcha" type="submit" data-sitekey=<? echo getenv('g-site-key'); ?> data-callback='onRecaptchaSuccess'>
                Submit
            </button>
        </p>
    </form>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script>
        const constraints = {
            name: {
                presence: {
                    allowEmpty: false
                }
            },
            email: {
                presence: {
                    allowEmpty: false
                },
                email: true
            },
            message: {
                presence: {
                    allowEmpty: false
                }
            }
        };

        const form = document.getElementById('contact-form');

        form.addEventListener('submit', function(event) {
            const formValues = {
                name: form.elements.name.value,
                email: form.elements.email.value,
                message: form.elements.message.value
            };

            const errors = validate(formValues, constraints);

            if (errors) {
                event.preventDefault();
                const errorMessage = Object
                    .values(errors)
                    .map(function(fieldValues) {
                        return fieldValues.join(', ')
                    })
                    .join("\n");

                alert(errorMessage);
            }
        }, false);

        function onRecaptchaSuccess() {
            document.getElementById('contact-form').submit()
        }
    </script>
</body>

</html>