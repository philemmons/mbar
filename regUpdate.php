<?php
ob_start();
session_start();

if (!isset($_SESSION["status"]) || ($_SESSION['status'] != getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
    header("Location: _login.php");
}

include_once 'header.inc';
include_once 'source/php_source.php';
include_once 'source/dbConnection.php';

$dbConn = getDBConnection();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}

//NOTE: the next 3 sections of code sequence matters for the updated output

if (isset($_POST['submitUpdate'])) {  //admin has submitted the "update user" form

    $register = !empty($_POST['upd-reg']) ? htmlspecialchars($_POST['upd-reg'], ENT_QUOTES) : '';
    $ebmb = !empty($_POST['upd-ebmb']) ? htmlspecialchars($_POST['upd-ebmb'], ENT_QUOTES) : '';
    $mtsd = !empty($_POST['upd-mtsd']) ? htmlspecialchars($_POST['upd-mtsd'], ENT_QUOTES) : '';
    $rucb = !empty($_POST['upd-rucb']) ? htmlspecialchars($_POST['upd-rucb'], ENT_QUOTES) : '';
    $ics = !empty($_POST['upd-ics']) ? htmlspecialchars($_POST['upd-ics'], ENT_QUOTES) : '';
    $hhc = !empty($_POST['upd-hhc']) ? htmlspecialchars($_POST['upd-hhc'], ENT_QUOTES) : '';

    $total = getTotal($register, $ebmb, $mtsd, $rucb, $ics, $hhc);

    $sql = "UPDATE registration
            SET 
                firstname = :firstName,
                lastname = :lastName,
                email = :email,
                phone = :phone,
                address = :address,
                city = :city,
                state = :state,
                zipcode = :zc,
                fellowship = :fs,
                homegroup = :hg,
                registration = :register,
                ebmb = :ebmb,
                speakerdinner = :mtsd,
                breakfast = :rucb,
                icecream = :ics,
                dance = :snd,
                helpinghand = :hhc,
                payment = :pm,
                total = $total,
                paid = :paid
            WHERE id = :reg_id";




    $nPara[':reg_id'] = htmlspecialchars($_GET['id'], ENT_QUOTES);
    $nPara[':firstName'] = strtolower(htmlspecialchars($_POST['upd-fn'], ENT_QUOTES));
    $nPara[':lastName'] = strtolower(htmlspecialchars($_POST['upd-ln'], ENT_QUOTES));
    $nPara[':email'] = strtolower(htmlspecialchars($_POST['upd-em'], ENT_QUOTES));
    $nPara[':phone'] = strtolower(htmlspecialchars($_POST['upd-phone'], ENT_QUOTES));
    $nPara[':address'] = strtolower(htmlspecialchars($_POST['upd-addr'], ENT_QUOTES));
    $nPara[':city'] = strtolower(htmlspecialchars($_POST['upd-city'], ENT_QUOTES));
    $nPara[':state'] = strtolower(htmlspecialchars($_POST['upd-state'], ENT_QUOTES));
    $nPara[':zc'] = strtolower(htmlspecialchars($_POST['upd-zc'], ENT_QUOTES));
    $nPara[':fs'] = strtolower(htmlspecialchars($_POST['upd-fs'], ENT_QUOTES));
    $nPara[':hg'] = strtolower(htmlspecialchars($_POST['upd-hg'], ENT_QUOTES));
    $nPara[':register'] = strtolower(htmlspecialchars($_POST['upd-reg'], ENT_QUOTES));
    $nPara[':ebmb'] = strtolower(htmlspecialchars($_POST['upd-ebmb'], ENT_QUOTES));
    $nPara[':mtsd'] = strtolower(htmlspecialchars($_POST['upd-mtsd'], ENT_QUOTES));
    $nPara[':rucb'] = strtolower(htmlspecialchars($_POST['upd-rucb'], ENT_QUOTES));
    $nPara[':ics'] = strtolower(htmlspecialchars($_POST['upd-ics'], ENT_QUOTES));
    $nPara[':snd'] = strtolower(htmlspecialchars($_POST['upd-snd'], ENT_QUOTES));
    $nPara[':hhc'] = strtolower(htmlspecialchars($_POST['upd-hhc'], ENT_QUOTES));
    $nPara[':pm'] = strtolower(htmlspecialchars($_POST['upd-pm'], ENT_QUOTES));
    $nPara[':paid'] = htmlspecialchars($_POST['upd-paid'], ENT_QUOTES);

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($nPara);

    $nPara = array();

    //sleep(5); // pause the modal

} //eof if

?>

<!--<script src='js/jsFinal.js'></script>

<script>
    $(document).ready(function() {
        $("#conName").change(function() {
            notBlank("#conName");
        });
    }); //documentReady
</script>
-->

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
            </ul>
        </div>
    </div>
</nav>

<main>

    <!-- Hero Section -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center py-6 bg-body-tertiary bg-img-update" title="Seychelles beach during a beautiful day by Chris Blaichch.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Update Registration</span>
                    </h2>
                    <p class="h6"> Welcome <?= ucwords($_SESSION['name']) ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Navbar -->
    <nav class="navbar navbar-expand-lg mb-5">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse.true navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="_login.php">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="regInsert.php">New Registration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="regUpdate.php">Update Registration<span class="visually-hidden">(current)</span></a>
                    </li>
                    <?php
                    if (isset($_SESSION["status"])) {
                        echo '<li class="nav-item" style="border-right: none;">';
                        echo '<form method ="POST" id="oneBtn" >';
                        echo '<input type="submit" value="LogOut" class="nav-link log-input" name="logout"/>';
                        echo '</form>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-12 py-4">
                <h6>Update Registration Info</h6>
                <br>

                <?php
                if (isset($_GET['id'])) {
                    $regInfo = getRegInfo($_GET['id']);
                ?>
                    <form method='POST' name="updateRegForm" class="row g-3 needs-validation" id="updateRegForm" novalidate>

                        <div class="col-lg-1">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="upd-id" placeholder="Default - auto incremented" name="upd-id" value="<?= $regInfo['id'] ?>" disabled>
                                <label for="upd-id">RegID</label>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-fn" id="upd-fn" placeholder="Enter FN" value="<?= $regInfo['firstname'] ?>" required />
                                <label for="upd-fn">First Name</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter first name.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-ln" id="upd-ln" placeholder="Enter LN" value="<?= $regInfo['lastname'] ?>" required>
                                <label for="upd-ln" class="form-label">Last Name</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter last name.
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="upd-em" id="upd-em" placeholder="Enter EM" value="<?= $regInfo['email'] ?>" required>
                                <label for="upd-em" class="form-label">Email</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter email.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="tel" class="form-control" name="upd-phone" id="upd-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="Enter PH" value="<?= $regInfo['phone'] ?>">
                                <label for="upd-phone" class="form-label">Phone</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter phone number.
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" name="upd-pm" id="upd-pm" required>
                                    <option value="<?= $regInfo['payment'] ?>" selected> <?php echo $regInfo['payment'] ?></option>
                                    <option value="venmo">Venmo</option>
                                    <option value="cash">Cash</option>
                                    <option value="check">Check</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                                <label for="upd-pm" class="form-label">Payment Method</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Select one.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="upd-total" id="upd-total" placeholder="Enter TO" value="<?= $regInfo['total'] ?>">
                                <label for="upd-total">Total</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter total amount.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="upd-paid" id="upd-paid" placeholder="Enter PA" value="<?= $regInfo['paid'] ?>">
                                <label for="upd-paid">Paid</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter paid amount.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" name="upd-hhc" id="upd-hhc">
                                    <option value="<?= $regInfo['helpinghand'] ?>" selected> <?php echo $regInfo['helpinghand'] ?></option>
                                    <option value="5">$5</option>
                                    <option value="10">$10</option>
                                    <option value="20">$20</option>
                                    <option value="35">$35</option>
                                    <option value="45">$45</option>
                                    <option value="50">$50</option>
                                    <option value="100">$100</option>
                                    <option value="other">Other</option>
                                    <option value="no thank you">No thank you</option>
                                </select>
                                <label for="upd-hhc" class="form-label">Helping Hand</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter Contribution.
                            </div>
                        </div>

                        <hr>
                        <div class="col-lg-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-addr" id="upd-addr" placeholder="Enter MA" value="<?= $regInfo['address'] ?>">
                                <label for="upd-addr" class="form-label">Address</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter address.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-city" id="upd-city" placeholder="Enter CI" value="<?= $regInfo['city'] ?>">
                                <label for="upd-city" class="form-label">City</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter city.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" name="upd-state" id="upd-state">
                                    <option value="<?= $regInfo['state'] ?>" selected> <?php echo $regInfo['state'] ?></option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                                <label for="upd-state" class="form-label">State</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Select one.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-zc" id="upd-zc" placeholder="Enter ZC" value="<?= $regInfo['zipcode'] ?>">
                                <label for=" upd-zc" class="form-label">Zip Code</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter zip code.
                            </div>
                        </div>
                        <hr>
                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" name="upd-fs" id="upd-fs" required>
                                    <option value="<?= $regInfo['fellowship'] ?>" selected> <?php echo $regInfo['fellowship'] ?></option>
                                    <option value="a.a.">A.A.</option>
                                    <option value="al-anon">Al-Anon</option>
                                    <option value="double winner">Double Winner</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="upd-fs" class="form-label">Fellowship</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter Fellowship.
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-hg" id="upd-hg" placeholder="Enter HO" value="<?= $regInfo['homegroup'] ?>">
                                <label for="upd-hg" class="form-label">Homegroup(s)</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter Homegroup(s).
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" name="upd-reg" id="upd-reg" onChange="optionSND(this)" required>
                                    <option value="<?= $regInfo['registration'] ?>" selected> <?php echo $regInfo['registration'] ?></option>
                                    <option value="before">Before</option>
                                    <option value="after">After</option>
                                </select>
                                <label for="upd-reg" class="form-label">Registration</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Please check one.
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <select class="form-select" name="upd-snd" id="upd-snd">
                                    <option value="<?= $regInfo['dance'] ?>" selected> <?php echo $regInfo['dance'] ?></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="undecided">Undecided</option>
                                </select>
                                <label for="upd-snd" class="form-label">Saturday Night Dance</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Please select one.
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <select class="form-select" name="upd-ebmb" id="upd-ebmb" onChange="optionEBMB(this)" required>
                                    <option value="<?= $regInfo['ebmb'] ?>" selected> <?php echo $regInfo['ebmb'] ?></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="undecided">Undecided</option>
                                </select>
                                <label for="upd-ebmb" class="form-label">Early Bird Meal Bundle</label>
                            </div>

                            <div class="invalid-feedback">
                                Required - Please select one.
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <select class="form-select" name="upd-mtsd" id="upd-mtsd" onChange="optionCHANGE()" required>
                                    <option value="<?= $regInfo['speakerdinner'] ?>" selected> <?php echo $regInfo['speakerdinner'] ?></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="undecided">Undecided</option>
                                </select>
                                <label for="upd-mtsd" class="form-label">Speaker's Dinner</label>
                            </div>

                            <div class="invalid-feedback">
                                Required - Please select one.
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <select class="form-select" name="upd-rucb" id="upd-rucb" onChange="optionCHANGE()" required>
                                    <option value="<?= $regInfo['breakfast'] ?>" selected> <?php echo $regInfo['breakfast'] ?></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="undecided">Undecided</option>
                                </select>
                                <label for="upd-rucb" class="form-label">Continental Breakfast</label>
                            </div>

                            <div class="invalid-feedback">
                                Required - Please select one.
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <select class="form-select" name="upd-ics" id="upd-ics" onChange="optionCHANGE()" required>
                                    <option value="<?= $regInfo['icecream'] ?>" selected> <?php echo $regInfo['icecream'] ?></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <option value="undecided">Undecided</option>
                                </select>
                                <label for="upd-ics" class="form-label">Ice Cream Social</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Please select one.
                            </div>
                        </div>

                        <hr>
                        <!-- Button trigger modal
                        <div class="col-md-3">
                            <button type="submit" name="submitUpdate" value="update" class="btn" data-bs-toggle="modal" data-bs-target="#updateModal">Update</btn>
                        </div>
                        -->
                        <div class="col-lg-3 text-center">
                            <button type="submit" class="btn btn-primary btn-sm" name="submitUpdate" value='update'>Update Registration</button>
                        </div>

                        <div class="col-lg-3 text-center">
                            <button type="reset" name="reset" value="reset" class="btn btn-primary btn-sm"> Reset Registration</button>
                        </div>
                        <div class="col-lg-6">

                        <?php } else {  ?>
                            <h6> Hello, there was no Registration selected which to update, and please select one from the Admin panel.</h6>

                            <div class="col-lg-12">
                            <?php } ?>

                            <a href="_admin.php" class="btn btn-primary btn-sm" style="float:right;">Return to Admin</a>
                            </div>

                    </form>
            </div>
        </div>
    </section>

    <!-- Modal
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-body" style="text-align: center">
                            <h3>Update</h3>
                            <img src='img/complete.png' alt='complete word with red border with a brick like texture.' >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            -->

    <?php include_once 'footer.inc' ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script>
        /**
         * https://stackoverflow.com/questions/39034981/disable-different-inputs-based-on-option-selected-from-a-select-element
         */
        function optionEBMB($obj) {

            let myArr = ['upd-mtsd', 'upd-rucb', 'upd-ics'];

            myArr.forEach(function($key) {
                if ($obj.value == "yes" || $obj.value == "undecided")
                    document.getElementById($key).value = "no";
                //else
                //document.getElementById($key).value = "";
            });

        }

        function optionSND($obj) {
            let snd = document.getElementById("upd-snd");
            if ($obj.value == 'before' || $obj.value == 'after')
                snd.value = "yes";
        }

        function optionCHANGE() {
            let ebmb = document.getElementById('upd-ebmb');
            let mtsd = document.getElementById('upd-mtsd');
            let rucb = document.getElementById('upd-rucb');
            let ics = document.getElementById('upd-ics');

            if (mtsd.value == "yes" || rucb.value == "yes" || ics.value == "yes" || mtsd.value == "undecided" || rucb.value == "undecided" || ics.value == "undecided")
                ebmb.value = "no";
            //else
            //ebmb.value = "";
        }
    </script>
    <script>
        function myReset(thisForm) {
            document.getElementById(thisForm).reset();
        }
    </script>
    </body>

    </html>