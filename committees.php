<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
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
                        <a class="dropdown-item" href="register-now.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item" href="memories.php">Memories</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-committees" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-committees">
                        <a class="dropdown-item" href="meetings.php">Meetings</a>
                        <a class="dropdown-item active" aria-current="page" href="committees.php">Committees<span class="visually-hidden">(current)</span></a>
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

<main role="main" id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-committee" title="Please contact any of us with any questions, feedback, or concerns.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">MBAR's<br>
                            Trusted Servants</span></h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <section>
                        <h3 class="fw-bold"><span class="text-dark px-3 px-md-0">Past and Present Planning Committee's Roles and Members</span>
                        </h3>
                    </section>
                </div>
            </div>

            <div class="col-xl-11 col-lg-8 table-responsive-md py-4">
                <h3 class="fw-bold">A.A. Steering Committee</h3>
                <table class="table table-bordered table-striped table-hover" id="planning-committee-2024" summary="describe the data by rows and columns">
                    <caption class="small">2019 to 2024 A.A Steering Committee</caption>
                    <thead class="table-light">
                        <tr class="text-center">
                            <th class="col-4">Roles</th>
                            <th class="col-2">2019</th>
                            <th class="col-2">2022</th>
                            <th class="col-2">2024</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        <tr class="table-success">
                            <th>A.A. Chairperson</th>
                            <td>May H.</td>
                            <td>Cindy A.</td>
                            <td>Chris T.</td>
                        </tr>
                        <tr class="table-success">
                            <th>A.A. Co-Chair</th>
                            <td>--</td>
                            <td>Phil C. </td>
                            <td>Renee C.</td>
                        </tr>
                        <tr class="table-success">
                            <th>A.A. Treasurer</th>
                            <td>Cindy A.</td>
                            <td>Daylene A.</td>
                            <td>Carolyn H.</td>
                        </tr>
                        <tr class="table-success">
                            <th>A.A. Co-Treasurer</th>
                            <td>Cindy A.</td>
                            <td>Mona S.</td>
                            <td>Jean T.</td>
                        </tr>
                        <tr class="table-success">
                            <th>A.A. Recording Secretary</th>
                            <td>Andy V.</td>
                            <td>Andy V.</td>
                            <td>Roger M.</td>
                        </tr>
                    </tbody>
                </table>

                <h3 class="fw-bold">Al-Anon Steering Committee</h3>
                <table class="table table-bordered table-striped table-hover" id="planning-committee-2024" summary="describe the data by rows and columns">
                    <caption class="small">2019 to 2024 Al-Anon Steering Committee</caption>
                    <thead class="table-light">
                        <tr class="text-center">
                            <th class="col-4">Roles</th>
                            <th class="col-2">2019</th>
                            <th class="col-2">2022</th>
                            <th class="col-2">2024</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        <tr class="table-warning">
                            <th>Al-Anon Chair</th>
                            <td>Thomas L.</td>
                            <td>Sidney A.R.</td>
                            <td>Jane H.</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Meetings Chair</th>
                            <td>Donna F.</td>
                            <td>--</td>
                            <td>Olya O.</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Alateen Co-Chair</th>
                            <td>--</td>
                            <td>--</td>
                            <td>Concetta C./ Marge S.</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Catering/Food</th>
                            <td>--</td>
                            <td>--</td>
                            <td>Joanie D.</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Fundraising Co-Chair</th>
                            <td>--</td>
                            <td>--</td>
                            <td>Rachel G. / Amorina S.</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Greeters</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Literature</th>
                            <td>--</td>
                            <td>Dawn C.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Registration Chair</th>
                            <td>Debbie O.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Secretary</th>
                            <td>--</td>
                            <td>--</td>
                            <td>Dawn C.</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Speaker Co-Chair</th>
                            <td>Susan A.</td>
                            <td>Susan A.</td>
                            <td>Susan A. / Su C.</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Tech Wizard</th>
                            <td>--</td>
                            <td>--</td>
                            <td>Julie H.</td>
                        </tr>
                        <tr class="table-warning">
                            <th>Al-Anon Treasurer</th>
                            <td>--</td>
                            <td>Thomas L.</td>
                            <td>Thomas L.</td>
                        </tr>
                    </tbody>
                </table>

                <h3 class="fw-bold">Committee Chairs</h3>
                <table class="table table-bordered table-striped table-hover" id="planning-committee-2024" summary="describe the data by rows and columns">
                    <caption class="small">2019 to 2024 Committee Chairs</caption>
                    <thead class="table-light">
                        <tr class="text-center">
                            <th class="col-4">Roles</th>
                            <th class="col-2">2019</th>
                            <th class="col-2">2022</th>
                            <th class="col-2">2024</th>
                        </tr>
                    </thead>

                    <tbody class="table-group-divider">
                        <tr class="table-primary">
                            <th>Registration Chair</th>
                            <td>Naomi B.</td>
                            <td>Naomi B.</td>
                            <td>Naomi B.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Activities</th>
                            <td>Samantha C.</td>
                            <td>--</td>
                            <td></td>
                        </tr>
                        <tr class="table-primary">
                            <th>BBQ Chair</th>
                            <td>Joanie</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Breakfast Chair</th>
                            <td>Joanie</td>
                            <td>Renee N.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Dance Chair</th>
                            <td>--</td>
                            <td>Chris T.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Decorations Chair</th>
                            <td>Hilda P.</td>
                            <td>Hilda P.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Dinner Chair</th>
                            <td>Joanie</td>
                            <td>Aubrey</td>
                            <td>Aubrey</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Facilites Chair</th>
                            <td>Nick K.</td>
                            <td>Billy H.</td>
                            <td>Sally H.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>GSR Liaison</th>
                            <td>Teresa J.</td>
                            <td>--</td>
                            <td>Cole</td>
                        </tr>
                        <tr class="table-primary">
                            <th>H&amp;I Liaison</th>
                            <td>Michael R.</td>
                            <td>Michael R.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Hospitality</th>
                            <td>Phil C.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Host</th>
                            <td>Phil C.</td>
                            <td>May H.</td>
                            <td>Cindy A.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Ice Cream Social</th>
                            <td>Joanie D.</td>
                            <td>Joanie D.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Literature Chair</th>
                            <td>Monica P.</td>
                            <td>May H.</td>
                            <td>May H.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Marathon Meetings Chair</th>
                            <td>Mark S.</td>
                            <td>Mark S.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Merchandise Chair</th>
                            <td>May H.</td>
                            <td>May H.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Outreach Chair</th>
                            <td>--</td>
                            <td>Kathleen M.</td>
                            <td>Laura P.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Panel</th>
                            <td>--</td>
                            <td>Mary Grace</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Raffle Chair</th>
                            <td>Esther F.</td>
                            <td>Katherine J.</td>
                            <td>Katherine J.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Shuttle Service Chair</th>
                            <td>Chuck N.</td>
                            <td>Chuck N.</td>
                            <td></td>
                        </tr>
                        <tr class="table-primary">
                            <th>Social Media Co-Chair</th>
                            <td>--</td>
                            <td>Chris T. / Victoria M.</td>
                            <td>Gina H. / Sean B.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Spanish Community</th>
                            <td>--</td>
                            <td>Eric M.</td>
                            <td>Eric M.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Speaker Chair</th>
                            <td>Brady S.</td>
                            <td>Mark B.</td>
                            <td>Kathleen S.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Speaker Chair (Al-Anon)</th>
                            <td>--</td>
                            <td>Susan A.</td>
                            <td>Susan A.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>T-shirts Chair</th>
                            <td>---.</td>
                            <td>Charly F.</td>
                            <td>Jessica L.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Website Chair</th>
                            <td>--</td>
                            <td>--</td>
                            <td>Phillip E.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Welcome &amp; Social Chair</th>
                            <td>---</td>
                            <td>Arthur T.</td>
                            <td>Arthur T.</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Young People Chair</th>
                            <td>Samantha C.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <th>Zoom Meeting</th>
                            <td>--</td>
                            <td>Phillip E.</td>
                            <td>Phillip E.</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>