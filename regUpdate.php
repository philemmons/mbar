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

//NOTE: the next 3 sections of code sequence matters for the updated output

if (isset($_POST['submitUpdate'])) {  //admin has submitted the "update user" form
    $sql = "UPDATE registration
          SET conName = :conName,
              start_date = :start_date,
              end_date = :end_date,
              year = :year,
              event_location = :event_location,
              city = :city,
              state = :state,
              country =:country,
              website = :website   
          WHERE id = :con_id";

    $nPara[':con_id'] = htmlspecialchars($_GET['id'], ENT_QUOTES);
    $nPara[':conName']  = htmlspecialchars($_POST['conName'], ENT_QUOTES);
    $nPara[':start_date'] = htmlspecialchars($_POST['start_date'], ENT_QUOTES);
    $nPara[':end_date'] = htmlspecialchars($_POST['end_date'], ENT_QUOTES);
    $nPara[':year'] = htmlspecialchars($_POST['year'], ENT_QUOTES);
    $nPara[':event_location'] = htmlspecialchars($_POST['event_location'], ENT_QUOTES);
    $nPara[':city'] = htmlspecialchars($_POST['city'], ENT_QUOTES);
    $nPara[':state'] = htmlspecialchars($_POST['state'], ENT_QUOTES);
    $nPara[':country'] = htmlspecialchars($_POST['country'], ENT_QUOTES);
    $nPara[':website'] = htmlspecialchars(preg_replace("(^https?://)", "", $_POST['website']), ENT_QUOTES);

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($nPara);

    $nPara = array();

    sleep(5); // pause the modal

} //eof if

?>

<script src='js/jsFinal.js'></script>

<script>
    $(document).ready(function() {
        $("#conName").change(function() {
            notBlank("#conName");
        });
    }); //documentReady
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
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-12 py-4">
                <h6>
                    Welcome <?= ucwords($_SESSION['name']) ?> - Update Registration Info
                </h6>
                <br>

                <?php
                if (isset($_GET['id'])) {
                    $conInfo = getConInfo($_GET['id']);
                ?>
                    <form method='POST' name="updateConForm" class='row gx-4 gy-3 align-items-center' onsubmit='validateUpdate();'>

                        <div class="col-md-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="conID" placeholder="Default - auto incremented" name="conID" value="<?= $conInfo['id'] ?>" disabled />
                                <label for="conID">ConID</label>
                                <span id="conIDError"></span>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="conName" placeholder="Enter Registration Name" name="conName" value="<?= $conInfo['conName'] ?>" />
                                <label for="conName">Registration Name</label>
                                <span id="conNameError"></span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="start_date" name="start_date" value="<?= $conInfo['start_date'] ?>" />
                                <label for="start_date">Start Month & Day Only</label>
                                <span id="start_dateError"></span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="end_date" name="end_date" value="<?= $conInfo['end_date'] ?>" />
                                <label for="end_date">End Month & Day Only</label>
                                <span id="end_dateError"></span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="int" class="form-control" id="year" placeholder="Enter Year:" name="year" value="<?= $conInfo['year'] ?>" />
                                <label for="year">Year</label>
                                <span id="yearError"></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="event_location" placeholder="Enter Location" name="event_location" value="<?= $conInfo['event_location'] ?>" />
                                <label for="event_location">Event Location</label>
                                <span id="event_locationError"></span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" value="<?= $conInfo['city'] ?>" />
                                <label for="city">City</label>
                                <span id="cityError"></span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="state" placeholder="Enter State" name="state" value="<?= $conInfo['state'] ?>" />
                                <label for="state">State</label>
                                <span id="stateError"></span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" value="<?= $conInfo['country'] ?>" />
                                <label for="country">Country</label>
                                <span id="countryError"></span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="website" placeholder="xxx.example.xxx" name="website" value="<?= $conInfo['website'] ?>" />
                                <label for="website">Website</label>
                                <span id="websiteError"></span>
                            </div>
                        </div>

                        <div class="col-md-3"><!-- Button trigger modal -->
                            <button type="submit" name="submitUpdate" value="update" class="btn" data-bs-toggle="modal" data-bs-target="#updateModal">Update</btn>
                        </div>

                        <div class="col-md-3">
                            <button type="reset" name="reset" value="reset" class="btn" onlclick="myReset('updateConForm')" ;> Reset </button>
                        </div>
                    <?php } else {  ?>
                        <h6> Hello, there was no Registration selected which to update, and please select one from the Admin panel.</h6>
                    <?php } ?>

                    <div class="col-md-6">
                        <a href="_admin.php" class="btn btn-primary btn-sm" style="float:right">Return to Admin</a>
                    </div>

                    </form>
            </div>
        </div>
    </section>

</main>

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center">
                <h3>Update</h3>
                <img src='img/complete.png' alt='complete word with red border with a brick like texture.' />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<?php include_once 'footer.inc' ?>

</body>

</html>