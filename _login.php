<?php
ob_start();
session_start();

if (isset($_SESSION["status"]) && ($_SESSION['status'] == getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
  header("Location: _admin.php");
} else {
  $_SESSION["name"] = "Guest";
}

include_once 'header.inc';
include_once 'source/php_source.php';

$dbConn = getDBConnection();

if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("Location: index.php");
}

?>

<nav class="navbar navbar-expand-lg" role="navigation" aria-label="main navigation">
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
          <button class="nav-link dropdown-toggle" type="button" id="dropdown-conference" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
          <div class="dropdown-menu" aria-labelledby="dropdown-conference">
            <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
            <a class="dropdown-item" href="registration.php">Registration</a>
            <a class="dropdown-item" href="activities.php">Activities</a>
            <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
            <a class="dropdown-item" href="memories.php">Memories</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdown-committees" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
          <div class="dropdown-menu" aria-labelledby="dropdown-committees">
            <a class="dropdown-item" href="meetings.php">Meetings</a>
            <a class="dropdown-item" href="committees.php">Committees</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdown-upcoming-events" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
          <div class="dropdown-menu" aria-labelledby="dropdown-upcoming-events">
            <a class="dropdown-item" href="upcoming_event.php">Bingo Night</a>
            <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
          </div>
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

<main role="main">

  <!-- Hero Section -->
  <div class="container shadow-wrap">
    <div class="row justify-content-center py-6 bg-body-tertiary bg-img-login" title="Computer generated fractal with blue and orange colors.">
      <div class="col-xl-7 col-lg-7 col-md-12 py-5">
        <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
          <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Admin Login</span>
          </h2>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Navbar -->
  <nav class="navbar navbar-expand-lg mb-5" role="navigation">
    <div class="container">
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse.true navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
          <li class="nav-item" <?php echo (!isset($_SESSION["status"])) ? 'style="border-right: none;"' : ''; ?>>
            <a class="nav-link active" aria-current="page" href="_login.php">Admin<span class="visually-hidden">(current)</span></a>
          </li>
          <?php
          if (isset($_SESSION["status"])) {
            echo '<li class="nav-item" style="border-right: none;">';
            echo '<div role= "form">';
            echo '<form method ="POST" id="oneBtn" >';
            echo '<input type="submit" value="LogOut" class="nav-link log-input" name="logout">';
            echo '</form>';
            echo '</div>';
            echo '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Section One -->
  <div class="container shadow-wrap">
    <div class="row justify-content-center mb-5">
      <div class="col-xl-7 col-lg-7 col-md-12 py-4">
        <div class="p-3 text-center text-bg-light hero-text-border" title="Please login to continue.">
          <h3 class="fw-bold text-dark px-md-0">Thank you for your service.
          </h3>
          <div class="d-grid col-sm-8 mx-auto p-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <?php
            if (isset($_POST['login'])) {
              goMain();
            }
            ?>
          </div>
        </div>
      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body text-bg-light hero-text-border" id="loginModalLabel">

            <form method="POST" class="row g-1 needs-validation" name="loginForm" novalidate>

              <label for="ittLM">Username</label>
              <input type="text" class="form-control" name="formUN" id="ittLM" required>
              <div class="invalid-feedback">
                Required
              </div>

              <label for="itpLM">Password</label>
              <input type="password" class="form-control" name="formPW" id="itpLM" required>
              <div class="invalid-feedback">
                Required
              </div>

              <div class="d-grid col-sm-5 mx-auto pt-3">
                <input type="submit" name="login" value="Login" class="btn btn-primary">
              </div>

              <div class="d-grid col-sm-5 mx-auto pt-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <?php include_once 'footer.inc' ?>

    </body>

    </html>