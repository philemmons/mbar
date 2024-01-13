<?php
ob_start();
session_start();

if (!isset($_SESSION["status"]) || ($_SESSION['status'] != getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
  header("Location: _login.php");
}

include_once 'header.inc';
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
  echo $sql . '<br>';
  $tot =  preExeFetNOPARA($sql);
  print_r($tot);
  return displayTot($tot);
}


function getOnePara($alpha)
{
  global $dbConn;

  $sql = "SELECT SUM(" . $alpha . ") as result FROM registration";
  echo $sql . '<br>';
  $tot =  preExeFetNOPARA($sql);
  print_r($tot);
  return displayTot($tot);
}


function getTwoPara($alpha, $beta)
{
  global $dbConn;

  $sql = "SELECT " . $alpha . " count(*) as result FROM registration where " . $alpha . " like " . $beta . " ";
  echo $sql . '<br>';
  //$tot =  preExeFetNOPARA($sql);
  //print_r($tot);
  //return displayTot($tot);
}

function displayTot($tot)
{
  foreach ($tot as $part) {
    echo $part['result'];
  }
}


/* registration display with update and delete buttons for each */
function displayRegAdmin($registration)
{
  foreach ($registration as $eachReg) {
    echo "<tr>";
    echo "<td>" . $eachReg['firstname'] . "</td>";
    echo "<td>" . $eachReg['lastname'] . "</td>";
    echo "<td>" . $eachReg['email'] . "</td>";

    echo "<td>
    <a href='regUpdate.php?id=" . $eachReg['id'] . "'>
      <button type=\"button\" class=\"btn btn-success\"> Update </button>
    </a>";
    echo "</td>";

    echo "<td>
    <a href='deleteReg.php?id=" . $eachReg['id'] . "' onclick= 'return confirmDelete(\"" . $eachReg['email'] . "\")' >
      <button type=\"button\" class=\"btn btn-danger\"> Delete </button>
    </a>";
    echo "</td>";

    echo "<td>" . $eachReg['payment'] . "</td>";
    echo "<td>" . $eachReg['total'] . "</td>";
    echo "<td>" . $eachReg['paid'] . "</td>";
    echo "<td>" . $eachReg['result'] . "</td>";
    echo "<td>" . $eachReg['phone'] . "</td>";
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
        <li class="nav-item style=" border-right: none;">
          <a class="nav-link" href="contributions.php">Contribution</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="_login.php">Admin<span class="visually-hidden">(current)</span></a>
        </li>
        <?php
        if (isset($_SESSION["status"])) {
          echo '<li class="nav-item" style="border-right: none;">';
          echo '<form method ="POST" id="oneBtn" >';
          echo '<input type="submit" value="LogOut" class="nav-link log-input" name="logout" />';
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
    <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-success" title="Succulent garden by the Bay by Yen Vu">
      <div class="col-xl-7 col-lg-7 col-md-12 py-5">
        <div class="p-3 text-center text-bg-light hero-text-border">
          <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Admin Panel</span>
          </h1>
          <h6> Welcome <?= $_SESSION['name'] ?></h6>
        </div>
      </div>
    </div>
  </section>



  <!-- Section One -->
  <section class="container shadow-wrap">
    <div class="row justify-content-center mb-5">
      <div class="col-xl-12 py-4">
        <div class="p-3 text-bg-light hero-text-border">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <strong>Registration Totals</strong>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <div class='row py-2'>
                    <div class='col-sm-3'>
                      <a href="exportData.php" target='_blank' class="btn btn-primary">Export CSV file</a>
                    </div>
                    <div class="col-sm-3">
                      Attendee's: <?php echo getZeroPara(); ?>
                    </div>
                    <div class='col-sm-3'>
                      Amount Due: <?php echo getOnePara('total'); ?>
                    </div>


                    <div class='col-sm-3'>
                      Amount Paid: <?php echo getOnePara('paid'); ?>
                    </div>
                  </div>

                  <div class='row py-2'>
                    <div class='col-sm-3'>
                      Helping Hands: <?php //echo getOnePara('helpinghand'); 
                                      ?>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    Pre-Reg: <?php //echo getTwoPara('registration', 'before'); ?>
                  </div>
                  
                    <div class='col-sm-3'>
                      Post-Reg: <?php //echo getTwoPara('registration', 'after'); 
                                ?>
                    </div>
                    <div class='col-sm-3'>

                    </div>
                  </div>

                  <div class='row py-2'>
                    <div class='col-sm-3'>
                      Cash: <?php //echo getTwoPara('payment', 'cash'); 
                            ?>
                    </div>
                    <div class="col-sm-3">
                      Check: <?php //echo getTwoPara('payment', 'check'); 
                              ?>
                    </div>
                    <div class='col-sm-3'>
                      Venmo: <?php //echo getTwoPara('payment', 'venmo'); 
                              ?>
                    </div>
                    <div class='col-sm-3'>
                      PayPal: <?php //echo getTwoPara('payment', 'paypal'); 
                              ?>
                    </div>
                  </div>

                  <div class='row py-2'>
                    <div class='col-sm-3'>
                      EBMB: <?php //echo getTwoPara('ebmb', 'yes'); 
                            ?>
                    </div>
                    <div class="col-sm-3">
                      Speaker Dinner: <?php //echo getTwoPara('speakerdinner', 'yes'); 
                                      ?>
                    </div>
                    <div class='col-sm-3'>
                      Breakfast: <?php //echo getTwoPara('breakfast', 'yes'); 
                                  ?>
                    </div>
                    <div class='col-sm-3'>
                      ICS <?php //echo getTwoPara('icecream', 'yes'); 
                          ?>
                    </div>
                  </div>

                  <div class='row py-2'>
                    <div class="col-sm-3">
                      A.A.: <?php //echo getTwoPara('fellowship', 'a.a.'); 
                            ?>
                    </div>
                    <div class='col-sm-3'>
                      Al-Anon: <?php //echo getTwoPara('fellowship', 'al-anon'); 
                                ?>
                    </div>
                    <div class='col-sm-3'>
                      Both: <?php //echo getTwoPara('fellowship', 'double winner'); 
                            ?>
                    </div>
                    <div class='col-sm-3'>
                      Other: <?php //echo getTwoPara('fellowship', 'other'); 
                              ?>
                    </div>
                  </div>
    
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Section Two -->
  <section class="container shadow-wrap">
    <div class="row justify-content-center mb-5">
      <div class="col-xl-12 py-4">
        <div class="p-3 text-bg-light hero-text-border">
          <table class="table table-hover display nowrap" style="width:100%;" id="adminDisplay">
            <caption>Admin Registrations</caption>
            <!--https://www.w3schools.com/bootstrap/bootstrap_tables.asp-->
            <thead class='table-dark text-center'>
              <tr>
                <th>First</th>
                <th>Last</th>
                <th>Email</th>
                <th>Alter</th>
                <th>Remove</th>
                <th>Payment</th>
                <th>Due</th>
                <th>Paid</th>
                <th>Date</th>
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
  </section>

  <?php include_once 'footer.inc' ?>

  <script>
    //https://datatables.net/reference/option
    new DataTable('#adminDisplay', {
      responsive: true
    });
    /*
        new DataTable('#summaryDisplay', {
          lengthMenu: [5, 10],
          searching: false,
          ordering: false,
          responsive: true,
          pagingType: 'simple'
        });

        $('#myModal').on('shown.bs.modal', function() {
          var table = $('#summaryDisplay').DataTable();
          table.columns.adjust();
        });
        */
  </script>

  </body>

  </html>