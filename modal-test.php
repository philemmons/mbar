<!-- Your HTML form -->
<form id="myForm" method="post" action="process_form.php">
  <!-- Your form fields go here -->
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Submit</button>
</form>

<!-- Bootstrap Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Submitted Successfully</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Your form has been submitted successfully.</p>
      </div>
    </div>
  </div>
</div>


<?php
// Process form submission here
// Example: Save form data to a database

// Assume the form submission is successful
$success = true;

if ($success) {
  // Redirect back to the page with a parameter indicating success
  header("Location: your_page.php?form_success=true");
  exit();
} else {
  // Handle errors or redirect with failure parameter
  header("Location: your_page.php?form_success=false");
  exit();
}
?>

<!-- Bootstrap JS -->
<script src="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-3m8T1R7Xwfo/GsWHfYweA07eA6aafVgvsdtxjURdz/cOxl8fY+Y5voc89b1S9qK3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-eIwH8fVf1F5uP1j/yiAR9Zu69MfsiHTZ0kg8pTyo/TQTaFNRjs/7RpaKiR6iKZkw" crossorigin="anonymous"></script>

<script>
  // Check for the form success parameter in the URL
  const urlParams = new URLSearchParams(window.location.search);
  const formSuccess = urlParams.get('form_success');

  // If the form was submitted successfully, show the modal
  if (formSuccess === 'true') {
    // Get the modal element
    var myModal = new bootstrap.Modal(document.getElementById('myModal'));

    // Show the modal
    myModal.show();
  }
</script>



