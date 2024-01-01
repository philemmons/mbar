<?php
session_start();

if (!isset($_SESSION["status"])) {  //Check whether the admin has logged in
  $_SESSION["name"] = "Guest";
} else {
  header("Location:admin.php");
}

include_once 'header.inc';
include_once 'source/php-source.php';

$dbConn = getDBConnection();

if (isset($_POST['logout'])) {
  session_destroy();
  header("Location: index.php");
}

?>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse.true navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
            <a class="dropdown-item" href="registration.php">Registration</a>
            <a class="dropdown-item" href="activities.php">Activities</a>
            <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
            <a class="dropdown-item" href="memories.php">Memories</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="meetings.php">Meetings</a>
            <a class="dropdown-item" href="committees.php">Committees</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="nav-link" href="upcoming_event.php">Bingo Night</a>
            <a class="nav-link" href="logo_contest.php">Logo Contest</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item" style="border-right: none;">
          <a class="nav-link" href="contributions.php">Contribution</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="_login.php">Admin<span class="visually-hidden">(current)</span></a>
        </li>
        <?php
        if (isset($_SESSION["status"])) {
          echo '<li class="nav-item">';
          echo '<form method ="POST" id="one" >';
          echo '<input type="submit" value="Logout" class="nav-link" name="Logout"/>';
          echo '</form>';
          echo '</li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

<main>
  <!-- Hero Section -->
  <section class="container shadow-wrap">
    <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-login" title="Computer generated fractal with blue and orange colors.">
      <div class="col-xl-7 col-lg-7 col-md-12 py-5">
        <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
          <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup Login</span>
          </h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Section One -->
  <section class="container shadow-wrap">
    <div class="row justify-content-center mb-5">
      <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
        <div class="p-3 text-center text-bg-light hero-text-border" title="Welcome1">
          <!-- https://www.w3schools.com/howto/howto_css_login_form.asp -->
          <div id="mLogin">
            <h4 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Please login to continue...</span>
            </h4>
            <br>
            <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">Login</button>
            <?php
            if (isset($_POST['login'])) {
              goMain();
            }
            ?>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<div id="id01" class="modalAD">
  <form method="POST" class="modal-contentAD animateAD" name="loginForm">

    <div class="containerAD">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="formUN" required id="ittAD">

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="formPW" required id="itpAD">

      <input type="submit" name="login" value="Login" class="btnAD btn" style="width: 100%;" />
    </div>

    <div class="containerAD">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" id="cancelbtnAD" class="btn">Cancel</button>
    </div>
  </form>
</div>

<?php include_once 'footer.inc' ?>

<script>
  // Get the modal
  var modal = document.getElementById('id01');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

</body>

</html>