<?php
ob_start();
session_start();

if (!isset($_SESSION["status"]) || ($_SESSION['status'] != getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
  header("Location: _login.php");
}

include_once 'header-top.inc';
echo "<title>MBAR - Admin </title>";
include_once 'header-bottom.inc';
include_once 'source/php_source.php';

$dbConn = getDBConnection();

if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("Location: index.php");
}

/**** registration totals ****/

function getZeroPara()
{
  global $dbConn;

  $sql = "SELECT count(*) as result FROM registration";
  //echo $sql . '<br>';
  $tot =  preExeFetNOPARA($sql);
  //print_r($tot);
  return $tot[0]['result'];
}


function getOnePara($alpha)
{
  global $dbConn;

  $sql = "SELECT SUM(" . $alpha . ") as result FROM registration";
  //echo $sql . '<br>';
  $tot =  preExeFetNOPARA($sql);
  //print_r($tot);
  return $tot[0]['result'];
}


function getTwoPara($alpha, $beta)
{
  global $dbConn;

  $sql = "SELECT count(*) as result FROM registration where " . $alpha . " like '" . $beta . "'";
  //echo $sql . '<br>';
  $tot =  preExeFetNOPARA($sql);
  //print_r($tot);
  return $tot[0]['result'];
}

function getTwoParaSum($alpha, $beta)
{
  global $dbConn;

  $sql = "SELECT sum(total) as result FROM registration where " . $alpha . " like '" . $beta . "'";
  //echo $sql . '<br>';
  $tot =  preExeFetNOPARA($sql);
  //print_r($tot);
  return $tot[0]['result'];
}

function getHelpHand()
{
  global $dbConn;

  $sql = "SELECT SUM( CAST(helpinghand AS UNSIGNED) ) AS result FROM registration WHERE helpinghand REGEXP '[0-9]'";
  //echo $sql . '<br>';
  $tot =  preExeFetNOPARA($sql);
  //print_r($tot);
  return $tot[0]['result'];
}

function displayTot($tot)
{
  //foreach ($tot as $part) {
  //echo $part['result'] . " ";
  //}
  echo $tot[0]['result'];
}


/* registration display with update and delete buttons for each */
function displayRegAdmin($registration)
{
  foreach ($registration as $eachReg) {

    $fPhone = formatPhone($eachReg['phone']);

    echo "<tr>";
    echo "<td>" . $eachReg['result'] . "</td>";
    echo "<td>" . $eachReg['firstname'] . "</td>";
    echo "<td>" . $eachReg['lastname'] . "</td>";
    echo "<td>" . $eachReg['email'] . "</td>";

    echo "<td>
    <a href='regUpdate.php?id=" . $eachReg['id'] . "'>
      <button type=\"button\" class=\"btn btn-success btn-sm\"> Update </button>
    </a>";
    echo "</td>";

    echo "<td>
    <a href='deleteReg.php?id=" . $eachReg['id'] . "' onclick= 'return confirmDelete(\"" . $eachReg['email'] . "\")' >
      <button type=\"button\" class=\"btn btn-danger btn-sm\"> Delete </button>
    </a>";
    echo "</td>";

    echo "<td>" . $eachReg['payment'] . "</td>";
    echo "<td>" . $eachReg['total'] . "</td>";
    echo "<td>" . $eachReg['paid'] . "</td>";
    echo "<td>" . $eachReg['onfile'] . "</td>";
    echo "<td>" . $eachReg['verification'] . "</td>";
    echo "<td>" . $eachReg['badgename'] . "</td>";
    echo "<td>" . $fPhone . "</td>";
    echo "<td>" . $eachReg['address'] . "</td>";
    echo "<td>" . $eachReg['city'] . "</td>";
    echo "<td>" . $eachReg['state'] . "</td>";
    echo "<td>" . $eachReg['zipcode'] . "</td>";
    echo "<td>" . $eachReg['fellowship'] . "</td>";
    echo "<td>" . $eachReg['homegroup'] . "</td>";
    echo "<td>" . $eachReg['registration'] . "</td>";
    echo "<td>" . $eachReg['ebmb'] . "</td>";
    echo "<td>" . $eachReg['speakerdinner'] . "</td>";
    echo "<td>" . $eachReg['breakfast'] . "</td>";
    echo "<td>" . $eachReg['icecream'] . "</td>";
    echo "<td>" . $eachReg['dance'] . "</td>";
    echo "<td>" . $eachReg['helpinghand'] . "</td>";
    echo "<td>" . $eachReg['tos'] . "</td>";
    echo "</tr>";
  }
}

?>

<script>
  function confirmDelete($user) {
    var confirmDelete = confirm("Do you really want to delete: " + $user + "");
    if (!confirmDelete) {
      return false;
    } else {
      return true;
    }
  }
</script>

<nav class="navbar navbar-expand-lg" aria-label="main navigation">
  <div class="container">
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdown-conference" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
          <div class="dropdown-menu" aria-labelledby="dropdown-conference">
            <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
            <a class="dropdown-item" href="register-now.php">Registration</a>
            <a class="dropdown-item" href="activities.php">Activities</a>
            <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
            <a class="dropdown-item" href="memories.php">Memories</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdown-committees" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
          <div class="dropdown-menu" aria-labelledby="dropdown-committees">
            <a class="dropdown-item" href="meetings.php">Meetings</a>
            <a class="dropdown-item" href="committees.php">Committees</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <button class="nav-link dropdown-toggle" type="button" id="dropdown-upcoming-events" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
          <div class="dropdown-menu" aria-labelledby="dropdown-upcoming-events">
            <a class="dropdown-item" href="upcoming_event.php">St. Patrick's Potluck</a>
            <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item style=" border-right: none;">
          <a class="nav-link" href="contributions.php">Contribution</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main id="main-content">
  <!-- Hero Part -->
  <div class="container shadow-wrap">
    <div class="row justify-content-center py-6 bg-body-tertiary bg-img-success" title="Succulent garden by the Bay">
      <div class="col-xl-7 col-lg-7 col-md-12 py-5">
        <div class="p-3 text-center text-bg-light hero-text-border">
          <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Admin Panel</span>
          </h2>
          <p class="h6"> Welcome <?= ucwords($_SESSION['name']) ?></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Navbar -->
  <nav class="navbar navbar-expand-lg mb-5" aria-label="middle navigation">
    <div class="container">
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="_admin.php">Admin Panel<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="regInsert.php">New Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="regUpdate.php">Update Registration</a>
          </li>
          <?php
          if (isset($_SESSION["status"])) {
            echo '<li class="nav-item" style="border-right: none;">';
            echo '<div role= "form">';
            echo '<form method ="POST" id="oneBtn">';
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

  <!-- Part One -->
  <div class="container shadow-wrap">
    <div class="row justify-content-center mb-5">
      <div class="col-xl-12 py-4">
        <div class="p-3 text-bg-light hero-text-border">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <strong>Online Registration Summary</strong>
                </button>
              </h3>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <div class='row py-2'>
                    <div class="col-sm-6">
                      <a href="exportData.php" target='_blank' class="btn btn-primary">CSV Export All Data</a>
                    </div>
                    <div class="col-sm-6">
                      <a href="exportBadge.php" target='_blank' class="btn btn-primary">CSV Export Badge Data</a>
                    </div>
                  </div>


                  <div class='row py-2'>
                    <div class="col-sm-4">
                      Total Registrations: <?php echo getZeroPara(); ?>
                    </div>
                    <div class="col-sm-4">
                      Before 7-1-24: <?php echo getTwoPara('registration', 'before'); ?>
                    </div>
                    <div class='col-sm-4'>
                      After 7-1-24: <?php echo getTwoPara('registration', 'after'); ?>
                    </div>
                  </div>

                  <hr>

                  <div class='row py-2'>
                    <div class='col-sm-4'>
                      Total Amount Due: $<?php echo getOnePara('total'); ?>.00
                    </div>
                    <div class='col-sm-4'>
                      Total Amount Paid: $<?php echo getOnePara('paid'); ?>.00
                    </div>
                    <div class='col-sm-4'>
                      Total Helping Hands: $<?php echo getHelpHand(); ?>.00
                    </div>
                  </div>


                  <fieldset text-bg-light pb-3 mb-3>
                    <legend>Totals</legend>
                    <div class='row py-2'>
                      <div class='col-sm-3'>
                        Cash: $<?php echo getTwoParaSum('payment', 'cash'); ?>.00
                      </div>
                      <div class="col-sm-3">
                        Check: $<?php echo getTwoParaSum('payment', 'check'); ?>.00
                      </div>
                      <div class='col-sm-3'>
                        Venmo: $<?php echo getTwoParaSum('payment', 'venmo'); ?>.00
                      </div>
                      <div class='col-sm-3'>
                        PayPal: $<?php echo getTwoParaSum('payment', 'paypal'); ?>.00
                      </div>
                    </div>
                  </fieldset>

                  <hr>

                  <div class='row py-2'>
                    <div class='col-sm-3'>
                      Total Dinners: <?php echo (getTwoPara('ebmb', 'yes') + getTwoPara('speakerdinner', 'yes')); ?>
                    </div>
                    <div class="col-sm-3">
                      Total Breakfast: <?php echo (getTwoPara('ebmb', 'yes') + getTwoPara('speakerdinner', 'yes')); ?>
                    </div>
                    <div class='col-sm-3'>
                      Total ICS: <?php echo (getTwoPara('ebmb', 'yes') + getTwoPara('breakfast', 'yes')); ?>
                    </div>
                    <div class='col-sm-3'>
                      Total Dance: <?php ?>
                    </div>
                  </div>


                  <div class='row py-2'>
                    <div class='col-sm-3'>
                      Total Meal Bundles: <?php echo getTwoPara('ebmb', 'yes'); ?>
                    </div>
                    <div class="col-sm-3">
                      Dinner Only: <?php echo getTwoPara('speakerdinner', 'yes'); ?>
                    </div>
                    <div class='col-sm-3'>
                      Breakfast Only: <?php echo getTwoPara('breakfast', 'yes'); ?>
                    </div>
                    <div class='col-sm-3'>
                      Ice Cream Only: <?php echo getTwoPara('icecream', 'yes'); ?>
                    </div>
                  </div>

                  <hr>

                  <div class='row py-2'>
                    <div class="col-sm-3">
                      AA: <?php echo getTwoPara('fellowship', 'a.a.'); ?>
                    </div>
                    <div class='col-sm-3'>
                      Al-Anon: <?php echo getTwoPara('fellowship', 'al-anon'); ?>
                    </div>
                    <div class='col-sm-3'>
                      Both: <?php echo getTwoPara('fellowship', 'double winner'); ?>
                    </div>
                    <div class='col-sm-3'>
                      Other: <?php echo getTwoPara('fellowship', 'other'); ?>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Part Two -->
  <div class="container shadow-wrap">
    <div class="row justify-content-center mb-5">
      <div class="col-xl-12 py-4">
        <div class="p-3 text-bg-light hero-text-border">
          <table class="table table-hover display nowrap" style="width:100%;" id="adminDisplay">
            <caption>Admin Registrations</caption>
            <!--https://www.w3schools.com/bootstrap/bootstrap_tables.asp-->
            <thead class='table-dark text-center'>
              <tr>
                <th>Date</th>
                <th>First</th>
                <th>Last</th>
                <th>Email</th>
                <th>Alter</th>
                <th>Remove</th>
                <th>Payment</th>
                <th>Due</th>
                <th>Paid</th>
                <th>On File</th>
                <th>Tran ID</th>
                <th>Badge Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Fellowship</th>
                <th>Home Group</th>
                <th>Reg Type</th>
                <th>EBMB</th>
                <th>Dinner</th>
                <th>BreakFast</th>
                <th>Ice Cream</th>
                <th>Dance</th>
                <th>Help-Hand</th>
                <th>TOS</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $registration = getRegData("registration");
              displayRegAdmin($registration);
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <?php include_once 'footer.inc' ?>

  <!-- https://datatables.net/ -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

  <script>
    //https://datatables.net/reference/option
    new DataTable('#adminDisplay', {
      responsive: true,
      order: [
        [0, 'desc']
      ]
    });
  </script>

  </body>

  </html>