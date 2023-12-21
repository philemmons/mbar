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