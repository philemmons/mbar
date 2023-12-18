https://mdbootstrap.com/docs/b4/jquery/forms/contact/

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

<?php
  if(isset( $_POST['name']))
  $name = $_POST['name'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  if(isset( $_POST['message']))
  $message = $_POST['message'];
  if(isset( $_POST['subject']))
  $subject = $_POST['subject'];

  $content="From: $name \n Email: $email \n Message: $message";
  $recipient = "youremail@here.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
  echo "Email sent!";
?>

<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
<a class="btn btn-primary" onclick="validateForm();">Send</a>
<script>
function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.querySelector('.status').innerHTML = "Name cannot be empty";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.querySelector('.status').innerHTML = "Email cannot be empty";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<script>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.querySelector('.status').innerHTML = "Email format invalid";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.querySelector('.status').innerHTML = "Subject cannot be empty";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.querySelector('.status').innerHTML = "Message cannot be empty";
      return false;
  }
  document.querySelector('.status').innerHTML = "Sending...";
}
</script>


<? php
  if (isset($_POST['name']))
    $name = $_POST['name'];
  if (isset($_POST['email']))
    $email = $_POST['email'];
  if (isset($_POST['message']))
    $message = $_POST['message'];
  if (isset($_POST['subject']))
    $subject = $_POST['subject'];
  if ($name === '') {
    echo "Name cannot be empty.";
    die();
  }
  if ($email === '') {
    echo "Email cannot be empty.";
    die();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email format invalid.";
      die();
    }
  }
  if ($subject === '') {
    echo "Subject cannot be empty.";
    die();
  }
  if ($message === '') {
    echo "Message cannot be empty.";
    die();
  }
  $content = "From: $name \nEmail: $email \nMessage: $message";
  $recipient = "youremail@here.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
  echo "Email sent!";
?>
<script>
    document.getElementById('status').innerHTML = "Sending...";
formData = {
  'name': $('input[name=name]').val(),
  'email': $('input[name=email]').val(),
  'subject': $('input[name=subject]').val(),
  'message': $('textarea[name=message]').val()
};


$.ajax({
  url: "mail.php",
  type: "POST",
  data: formData,
  success: function (data, textStatus, jqXHR) {

    $('#status').text(data.message);
    if (data.code) //If mail was sent successfully, reset the form.
      $('#contact-form').closest('form').find("input[type=text], textarea").val("");
  },
  error: function (jqXHR, textStatus, errorThrown) {
    $('#status').text(jqXHR);
  }
});
</script>

<div class="form-check">
  <input type="checkbox" class="form-check-input" name="updates" id="updates" value="1">
  <label for="updates" class="form-check-label">Notify me about new updates</label>
</div>

<script>
    formData = {
  'name'     : $('input[name=name]').val(),
  'email'    : $('input[name=email]').val(),
  'subject'  : $('input[name=subject]').val(),
  'message'  : $('textarea[name=message]').val(),
  'updates'  : $('input:checkbox[name=updates]').is(':checked')
};
</script>

<?php
if(isset( $_POST['updates']))
$updates = $_POST['updates'];
?>



OLD-----
<form action="/memories.php" method="post" id="contact-form" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <?php //echo ((!empty($errorMessage)) ? $errorMessage : '') 
                            ?>
                        </div>
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
                        <div class="col-md-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    I agree to have my message published on MBAR's website.
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- <button class="btn btn-primary g-recaptcha" type="submit" data-sitekey=<? echo getenv('g-site-key'); ?> data-callback='onRecaptchaSuccess'>Submit form
                            </button> -->
                        </div>
                    </form>
