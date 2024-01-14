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
                    $regInfo = getRegInfo($_GET['id']);
                ?>
                    <form method='POST' name="updateRegForm" class="row g-3 needs-validation" id="updateForm" novalidate>

                        <div class="col-md-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="upd-id" placeholder="Default - auto incremented" name="upd-id" value="<?= $regInfo['id'] ?>" disabled />
                                <label for="upd-id">RegID</label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-fn" id="upd-fn" placeholder="Enter FN" value="<?= $regInfo['firstname'] ?>" />
                                <label for="upd-fn">First Name</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter first name.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-ln" id="upd-ln" placeholder="Enter LN" required>
                                <label for="upd-ln" class="form-label">Last Name</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter last name or initial.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="upd-em" id="upd-em" placeholder="Enter EM" required>
                                <label for="upd-em" class="form-label">Email</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter email.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="upd-pm" id="upd-pm" required>
                                    <option value="" selected>Choose...</option>
                                    <option value="venmo">Venmo</option>
                                    <option value="cash">Cash</option>
                                    <option value="check">Check</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                                <label for="upd-mp" class="form-label">Payment Method</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Select one.
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-total" id="upd-total" placeholder="Enter TO" value="<?= $regInfo['total'] ?>" />
                                <label for="upd-total">Total</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter total amount.
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-paid" id="upd-paid" placeholder="Enter PA" value="<?= $regInfo['paid'] ?>" />
                                <label for="upd-paid">Paid</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter paid amount.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" name="upd-phone" id="upd-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                                <label for="upd-phone" class="form-label">Phone</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter phone number.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-addr" id="upd-addr" placeholder="Enter MA">
                                <label for="upd-addr" class="form-label">Mailing Address</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter address.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-city" id="upd-city" placeholder="Enter CI">
                                <label for="upd-city" class="form-label">City</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter city.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-floating">
                                <select class="form-select" name="upd-state" id="upd-state">
                                    <option value="" selected>Choose...</option>
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

                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-zc" id="upd-zc" placeholder="Enter ZC>
                                <label for=" upd-zc" class="form-label">Zip Code</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter zip code.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-floating">
                                <select class="form-select" name="upd-fs" id="upd-fs" required>
                                    <option value="" selected>Choose...</option>
                                    <option value="A.A.">A.A.</option>
                                    <option value="Al-Anon">Al-Anon</option>
                                    <option value="Double Winner">Double Winner</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="upd-fs" class="form-label">Fellowship</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter Fellowship.
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="upd-hg" id="upd-hg" placeholder="Enter HO">
                                <label for="upd-hg" class="form-label">Homegroup(s)</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter Homegroup(s).
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="form-floating">
                                <select class="form-select" name="upd-reg" id="upd-reg" required>
                                    <option value="" selected>Choose...</option>
                                    <option>A.A.</option>
                                    <option>Al-Anon</option>
                                    <option>Double Winner</option>
                                    <option>Other</option>
                                </select>
                                <label for="upd-reg" class="form-label">Registration</label>


                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="upd-early" name="radio-stacked" value="before" onChange="optionSND(this)" required>
                                    <label class="form-check-label" for="upd-early">Early Registration (Before July 31, 2024) - $45</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" id="upd-late" name="radio-stacked" value="after" onChange="optionSND(this)" required>
                                    <label class="form-check-label" for="upd-late">Registration (After July 31, 2024) - $50</label>

                                </div>
                                <div class="invalid-feedback">
                                    Required - Please check one.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="form-floating">
                                <select class="form-select" name="upd-ebmb" id="upd-ebmb" onChange="optionEBMB(this)" required>
                                    <option value="" selected>Choose...</option>
                                    <option value="yes">Yes, please!</option>
                                    <option value="no">No thank you</option>
                                    <option value="undecided" disabled>Still deciding</option>
                                </select>
                                <label for="upd-ebmb" class="form-label">Early Bird Meal Bundle (Dinner, Breakfast, and Ice Cream Social)* - $35 </label>
                            </div>

                            <div class="invalid-feedback">
                                Required - Please select one.
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-floating">
                                <select class="form-select" name="upd-mtsd" id="upd-mtsd" onChange="optionCHANGE()" required>
                                    <option value="" selected>Choose...</option>
                                    <option value="yes">Yes, please!</option>
                                    <option value="no">No thank you</option>
                                    <option value="undecided">Still deciding</option>
                                </select>
                                <label for="upd-mtsd" class="form-label">Speaker's Dinner</label>
                            </div>

                            <div class="invalid-feedback">
                                Required - Please select one.
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-floating">
                                <select class="form-select" name="upd-rucb" id="upd-rucb" onChange="optionCHANGE()" required>
                                    <option value="" selected>Choose...</option>
                                    <option value="yes">Yes, please!</option>
                                    <option value="no">No thank you</option>
                                    <option value="undecided">Still deciding</option>
                                </select>
                                <label for="upd-rucb" class="form-label">Continental Breakfast</label>
                            </div>

                            <div class="invalid-feedback">
                                Required - Please select one.
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-floating">
                                <select class="form-select" name="upd-ics" id="upd-ics" onChange="optionCHANGE()" required>
                                    <option value="" selected>Choose...</option>
                                    <option value="yes">Yes, please!</option>
                                    <option value="no">No thank you</option>
                                    <option value="undecided">Still deciding</option>
                                </select>
                                <label for="upd-ics" class="form-label">Ice Cream Social</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Please select one.
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-6">
                            <div class="form-floating">
                                <select class="form-select" name="upd-snd" id="upd-snd">
                                    <option value="" selected>Choose...</option>
                                    <option value="yes">I'll be wearing my dancing shoes!</option>
                                    <option value="no">I don't dance...LOL</option>
                                    <option value="undecided">Still deciding</option>
                                </select>
                                <label for="upd-snd" class="form-label">Saturday Night Dance</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Please select one.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating">
                                <select class="form-select" name="upd-hhc" id="upd-hhc">
                                    <option value="" selected>Choose...</option>
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

                        <!-- Button trigger modal
                        <div class="col-md-3">
                            <button type="submit" name="submitUpdate" value="update" class="btn" data-bs-toggle="modal" data-bs-target="#updateModal">Update</btn>
                        </div>
 -->
                        <div class="col-md-3 text-center">
                            <button type="submit" class="btn btn-primary btn-sm" name="submitUpdate" value='update'>Update Registration</button>
                        </div>

                        <div class="col-md-3 text-center">
                            <button type="reset" name="reset" value="reset" class="btn btn-primary btn-sm" onclick="myReset('updateConForm')" ;> Reset Registration</button>
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

<!-- Modal
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
        if ($obj.checked)
            snd.value = "yes";
        else
            snd.value = "";
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
    /* only for conUpdate */
    function myReset(thisForm) {
        document.getElementById(thisForm).reset();
    }
</script>
</body>

</html>