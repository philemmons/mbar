<?php
ob_start();
session_start();

if (!isset($_SESSION["status"]) || ($_SESSION['status'] != getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
    header("Location: _login.php");
}

include_once 'header-top.inc';
echo "<title>MBAR - Reg Insert </title>";
include_once 'header-bottom.inc';
include_once 'source/php_source.php';
include_once 'source/dbConnection.php';

$dbConn = getDBConnection();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}

//NOTE: the next 3 sections of code sequence matters for the updated output

$status = $statusMsg = '';

if (isset($_POST['submitInsert'])) {  //admin has submitted the "new user" form

    $fPhone = preg_replace('/[^0-9]/', '', $_POST['upd-phone']);

    $register = !empty($_POST['ins-reg']) ? htmlspecialchars($_POST['ins-reg'], ENT_QUOTES) : '';
    $ebmb = !empty($_POST['ins-ebmb']) ? htmlspecialchars($_POST['ins-ebmb'], ENT_QUOTES) : '';
    $mtsd = !empty($_POST['ins-mtsd']) ? htmlspecialchars($_POST['ins-mtsd'], ENT_QUOTES) : '';
    $rucb = !empty($_POST['ins-rucb']) ? htmlspecialchars($_POST['ins-rucb'], ENT_QUOTES) : '';
    $ics = !empty($_POST['ins-ics']) ? htmlspecialchars($_POST['ins-ics'], ENT_QUOTES) : '';
    $hhc = !empty($_POST['ins-hhc']) ? htmlspecialchars($_POST['ins-hhc'], ENT_QUOTES) : '';

    $total = getTotal($register, $ebmb, $mtsd, $rucb, $ics, $hhc);
    $tos = 1;


    $sql = "INSERT INTO registration (
                firstname,
                lastname,
                badgename,
                email,
                phone,
                address,
                city,
                state,
                zipcode,
                fellowship,
                homegroup,
                registration,
                ebmb,
                speakerdinner,
                breakfast,
                icecream,
                dance,
                helpinghand,
                payment,
                total,
                paid,
                tos,
                verification
                ) VALUES (
                    :firstName, :lastName, :badgeName, :email, :phone, :address, :city, :state, :zc, :fs, :hg, :register, :ebmb, :mtsd, :rucb, :ics, :snd, :hhc, :pm, $total, :paid, $tos, :vc
                )";

    //echo $sql . '<br>';


    $nPara[':firstName'] = strtolower(htmlspecialchars($_POST['ins-fn'], ENT_QUOTES));
    $nPara[':lastName'] = strtolower(htmlspecialchars($_POST['ins-ln'], ENT_QUOTES));
    $nPara[':badgeName'] = strtolower(htmlspecialchars($_POST['ins-bn'], ENT_QUOTES));
    $nPara[':email'] = strtolower(htmlspecialchars($_POST['ins-em'], ENT_QUOTES));
    $nPara[':phone'] = strtolower(htmlspecialchars($fPhone, ENT_QUOTES));
    $nPara[':address'] = strtolower(htmlspecialchars($_POST['ins-addr'], ENT_QUOTES));
    $nPara[':city'] = strtolower(htmlspecialchars($_POST['ins-city'], ENT_QUOTES));
    $nPara[':state'] = strtolower(htmlspecialchars($_POST['ins-state'], ENT_QUOTES));
    $nPara[':zc'] = strtolower(htmlspecialchars($_POST['ins-zc'], ENT_QUOTES));
    $nPara[':fs'] = strtolower(htmlspecialchars($_POST['ins-fs'], ENT_QUOTES));
    $nPara[':hg'] = strtolower(htmlspecialchars($_POST['ins-hg'], ENT_QUOTES));
    $nPara[':register'] = strtolower(htmlspecialchars($_POST['ins-reg'], ENT_QUOTES));
    $nPara[':ebmb'] = strtolower(htmlspecialchars($_POST['ins-ebmb'], ENT_QUOTES));
    $nPara[':mtsd'] = strtolower(htmlspecialchars($_POST['ins-mtsd'], ENT_QUOTES));
    $nPara[':rucb'] = strtolower(htmlspecialchars($_POST['ins-rucb'], ENT_QUOTES));
    $nPara[':ics'] = strtolower(htmlspecialchars($_POST['ins-ics'], ENT_QUOTES));
    $nPara[':snd'] = strtolower(htmlspecialchars($_POST['ins-snd'], ENT_QUOTES));
    $nPara[':hhc'] = strtolower(htmlspecialchars($_POST['ins-hhc'], ENT_QUOTES));
    $nPara[':pm'] = strtolower(htmlspecialchars($_POST['ins-pm'], ENT_QUOTES));
    $nPara[':paid'] = htmlspecialchars($_POST['ins-paid'], ENT_QUOTES);
    $nPara[':vc'] = strtolower(htmlspecialchars($_POST['ins-vc'], ENT_QUOTES));

    // print_r($nPara); die;

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($nPara);

    $nPara = array();

    $status = 'success';
    $statusMsg = "Registration Accepted";
} else {
    $status = 'error';
    $statusMsg = 'Please fill all the mandatory fields.';
}

?>

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
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-who-we-are" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Who We Are</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-who-we-are">
                        <a class="dropdown-item" href="our_partner.php">Our Partner</a>
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
        <div class="row justify-content-center py-6 bg-body-tertiary bg-img-insert" title="Hiking in the Pfeiffer Big Sur and Julia Pfeiffer Burns State Parks.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Add New Registration</span>
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
                        <a class="nav-link" href="_login.php">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="regInsert.php">New Registration<span class="visually-hidden">(current)</span></a>
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

            <?php if (!empty($statusMsg)) { ?>
                <div class='row'>
                    <div class="col-xl-8 col-lg-8 col-md-12 pt-4 mx-auto">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="Online registration form message.">
                            <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="col-xl-12 py-4">
                <h3>New Registration Info</h3>
                <br>

                <form method='POST' name="insertRegForm" class="row g-3 needs-validation" id="insertRegForm" novalidate>

                    <div class="col-lg-1">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="ins-id" placeholder="Default - auto incremented" name="ins-id" disabled>
                            <label for="ins-id">RegID</label>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-fn" id="ins-fn" placeholder="Enter first Name" required>
                            <label for="ins-fn">First Name *</label>
                        </div>
                        <div class="invalid-feedback">
                            Required - Enter first name.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-ln" id="ins-ln" placeholder="Enter last name" required>
                            <label for="ins-ln" class="form-label">Last Name *</label>
                        </div>
                        <div class="invalid-feedback">
                            Required - Enter last name.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-bn" id="ins-bn" placeholder="Enter badge name">
                            <label for="ins-bn" class="form-label">Badge Name</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Enter badge name.
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="ins-em" id="ins-em" placeholder="Enter email" required>
                            <label for="ins-em" class="form-label">Email *</label>
                        </div>
                        <div class="invalid-feedback">
                            Required - Enter email.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="tel" class="form-control" name="ins-phone" id="ins-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="831.555.0714">
                            <label for="ins-phone" class="form-label">Phone</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Enter phone number.
                        </div>
                    </div>

                    <hr>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <select class="form-select" name="ins-pm" id="ins-pm" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="venmo">Venmo</option>
                                <option value="cash">Cash</option>
                                <option value="check">Check</option>
                                <option value="paypal">PayPal</option>
                            </select>
                            <label for="ins-pm" class="form-label">Payment Method *</label>
                        </div>
                        <div class="invalid-feedback">
                            Required - Select one.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="ins-total" id="ins-total" placeholder="Automatic" value= "Auto" disabled>
                            <label for="ins-total">Total</label>
                        </div>
                        <div class="invalid-feedback">
                            Total due is calculated.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="ins-paid" id="ins-paid" placeholder="0" value=0 required>
                            <label for="ins-paid">Paid *</label>
                        </div>
                        <div class="invalid-feedback">
                            Required - Enter paid amount.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-vc" id="ins-vc" placeholder="TBD">
                            <label for="ins-vc" class="form-label">Trans ID</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Enter transaction ID.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <select class="form-select" name="ins-hhc" id="ins-hhc">
                                <option selected disabled value="">Choose...</option>
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
                            <label for="ins-hhc" class="form-label">Helping Hand</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Enter Contribution.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-dt" id="ins-dt" placeholder="Automatic" value="Auto" disabled>
                            <label for="ins-dt">Reg Date</label>
                        </div>
                        <div class="invalid-feedback">
                            Date time is automatic
                        </div>
                    </div>

                    <hr>

                    <div class="col-lg-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-addr" id="ins-addr" placeholder="Enter mail address">
                            <label for="ins-addr" class="form-label">Address</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Enter address.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-city" id="ins-city" placeholder="Enter city">
                            <label for="ins-city" class="form-label">City</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Enter city.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <select class="form-select" name="ins-state" id="ins-state">
                                <option selected disabled value="">Choose...</option>
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
                            <label for="ins-state" class="form-label">State</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Select one.
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-zc" id="ins-zc" placeholder="Enter zip code">
                            <label for=" ins-zc" class="form-label">Zip Code</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Enter zip code.
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-2">
                        <div class="form-floating">
                            <select class="form-select" name="ins-fs" id="ins-fs" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="a.a.">A.A.</option>
                                <option value="al-anon">Al-Anon</option>
                                <option value="double winner">Double Winner</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="ins-fs" class="form-label">Fellowship *</label>
                        </div>
                        <div class="invalid-feedback">
                            Required - Enter Fellowship.
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="ins-hg" id="ins-hg" placeholder="Enter homegroups(s)">
                            <label for="ins-hg" class="form-label">Homegroup(s)</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Enter Homegroup(s).
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="form-floating">
                            <select class="form-select" name="ins-reg" id="ins-reg" onChange="optionSND(this)" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="before">Before</option>
                                <option value="after">After</option>
                            </select>
                            <label for="ins-reg" class="form-label">Registration *</label>
                        </div>
                        <div class="invalid-feedback">
                            Required - Please check one.
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-floating">
                            <select class="form-select" name="ins-snd" id="ins-snd">
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="undecided">Undecided</option>
                            </select>
                            <label for="ins-snd" class="form-label">Saturday Night Dance</label>
                        </div>
                        <div class="invalid-feedback">
                            Optional - Please select one.
                        </div>
                    </div>

                    <hr>

                    <div class="col-lg-3">
                        <div class="form-floating">
                            <select class="form-select" name="ins-ebmb" id="ins-ebmb" onChange="optionEBMB(this)" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="undecided">Undecided</option>
                            </select>
                            <label for="ins-ebmb" class="form-label">Early Bird Meal Bundle *</label>
                        </div>

                        <div class="invalid-feedback">
                            Required - Please select one.
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-floating">
                            <select class="form-select" name="ins-mtsd" id="ins-mtsd" onChange="optionCHANGE()" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="undecided">Undecided</option>
                            </select>
                            <label for="ins-mtsd" class="form-label">Speaker's Dinner *</label>
                        </div>

                        <div class="invalid-feedback">
                            Required - Please select one.
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-floating">
                            <select class="form-select" name="ins-rucb" id="ins-rucb" onChange="optionCHANGE()" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="undecided">Undecided</option>
                            </select>
                            <label for="ins-rucb" class="form-label">Continental Breakfast *</label>
                        </div>

                        <div class="invalid-feedback">
                            Required - Please select one.
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="form-floating">
                            <select class="form-select" name="ins-ics" id="ins-ics" onChange="optionCHANGE()" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                <option value="undecided">Undecided</option>
                            </select>
                            <label for="ins-ics" class="form-label">Ice Cream Social *</label>
                        </div>
                        <div class="invalid-feedback">
                            Required - Please select one.
                        </div>
                    </div>

                    <hr>

                    <div class="col-lg-3 text-center">
                        <button type="submit" class="btn btn-primary btn-sm" name="submitInsert" value='update'>Submit Registration</button>
                    </div>

                    <div class="col-lg-3 text-center">
                        <button type="reset" name="reset" value="reset" class="btn btn-primary btn-sm">Reset Registration</button>
                    </div>

                    <div class="col-lg-6">
                        <a href="_admin.php" class="btn btn-primary btn-sm" style="float:right;">Return to Admin</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

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

            let myArr = ['ins-mtsd', 'ins-rucb', 'ins-ics'];

            myArr.forEach(function($key) {
                if ($obj.value == "yes" || $obj.value == "undecided")
                    document.getElementById($key).value = "no";
                //else
                //document.getElementById($key).value = "";
            });

        }

        function optionSND($obj) {
            let snd = document.getElementById("ins-snd");
            if ($obj.value == 'before' || $obj.value == 'after')
                snd.value = "yes";
        }

        function optionCHANGE() {
            let ebmb = document.getElementById('ins-ebmb');
            let mtsd = document.getElementById('ins-mtsd');
            let rucb = document.getElementById('ins-rucb');
            let ics = document.getElementById('ins-ics');

            if (mtsd.value == "yes" || rucb.value == "yes" || ics.value == "yes" || mtsd.value == "undecided" || rucb.value == "undecided" || ics.value == "undecided")
                ebmb.value = "no";
            //else
            //ebmb.value = "";
        }
    </script>
    </body>

    </html>