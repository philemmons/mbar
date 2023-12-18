<form role="form" action="assets/contact.php" method="post">
    <div class="form-group">
        <label class="sr-only" for="contact-email">Email</label>
        <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
    </div>
    <div class="form-group">
        <label class="sr-only" for="contact-subject">Subject</label>
        <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
    </div>
    <div class="form-group">
        <label class="sr-only" for="contact-message">Message</label>
        <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
    </div>
    <div class="form-group">
        <label for="contact-antispam">Antispam question: 7 + 5 = ?</label>
        <input type="text" name="antispam" placeholder="Your answer..." class="contact-antispam form-control" id="contact-antispam">
    </div>
    <button type="submit" class="btn">Send message</button>
</form>


 <!-- Javascript -->
 <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>



        <?php
 
// Email address verification
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
 
if($_POST) {
 
    // Enter the email where you want to receive the message
    $emailTo = 'contact.azmind@gmail.com';
 
    $clientEmail = addslashes(trim($_POST['email']));
    $subject = addslashes(trim($_POST['subject']));
    $message = addslashes(trim($_POST['message']));
    $antispam = addslashes(trim($_POST['antispam']));
 
    $array = array('emailMessage' => '', 'subjectMessage' => '', 'messageMessage' => '', 'antispamMessage' => '');
 
    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($subject == '') {
        $array['subjectMessage'] = 'Empty subject!';
    }
    if($message == '') {
        $array['messageMessage'] = 'Empty message!';
    }
    if($antispam != '12') {
        $array['antispamMessage'] = 'Wrong antispam answer!';
    }
    if(isEmail($clientEmail) && $subject != '' && $message != '' && $antispam == '12') {
        // Send email
        $headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        mail($emailTo, $subject . " (bootstrap contact form tutorial)", $message, $headers);
    }
 
    echo json_encode($array);
 
}
 
?>

<script>
jQuery(document).ready(function() {
     
     /*
         Fullscreen background
     */
     $.backstretch("assets/img/backgrounds/1.jpg");
      
     /*
     Contact form
     */
     $('.contact-form form input[type="text"], .contact-form form textarea').on('focus', function() {
         $('.contact-form form input[type="text"], .contact-form form textarea').removeClass('input-error');
     });
     $('.contact-form form').submit(function(e) {
         e.preventDefault();
         $('.contact-form form input[type="text"], .contact-form form textarea').removeClass('input-error');
         var postdata = $('.contact-form form').serialize();
         $.ajax({
             type: 'POST',
             url: 'assets/contact.php',
             data: postdata,
             dataType: 'json',
             success: function(json) {
                 if(json.emailMessage != '') {
                     $('.contact-form form .contact-email').addClass('input-error');
                 }
                 if(json.subjectMessage != '') {
                     $('.contact-form form .contact-subject').addClass('input-error');
                 }
                 if(json.messageMessage != '') {
                     $('.contact-form form textarea').addClass('input-error');
                 }
                 if(json.antispamMessage != '') {
                     $('.contact-form form .contact-antispam').addClass('input-error');
                 }
                 if(json.emailMessage == '' && json.subjectMessage == '' && json.messageMessage == '' && json.antispamMessage == '') {
                     $('.contact-form form').fadeOut('fast', function() {
                         $('.contact-form').append('<p>Thanks for contacting us! We will get back to you very soon.</p>');
                         // reload background
                         $.backstretch("resize");
                     });
                 }
             }
         });
     });
      
 });
 </script>

