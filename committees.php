<?php
session_start();  //start or resume an existing session
include_once 'header.inc' 
?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse.true navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" aria-current="page">Home</a>
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
                        <a class="dropdown-item active" aria-current="page" href="committees.php">Committees<span class="visually-hidden">(current)</span></a>
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
            </ul>
        </div>
    </div>
</nav>

<main>
    <!-- Hero Section -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-committee" title="Please contact any of us with any questions, feedback, or concerns.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">MBAR's<br>
                            Trusted Servants</span></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">

            <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h4 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Past and Present Planning Committee's</span>
                    </h4>
                </div>
            </div>

            <div class="col-xl-11 col-lg-9 col-md-7 py-4">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th>Committees</th>
                            <th>2019</th>
                            <th>2022</th>
                            <th>2024</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <thead class="filterHead">
                        <tr class="filterRow">
                            <th colspan="4" scope="col">A.A. Steering Committee</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="table-success">
                            <td>AA Chairperson</td>
                            <td>May H.</td>
                            <td>Cindy A.</td>
                            <td>Chris T.</td>
                        </tr>
                        <tr class="table-success">
                            <td>AA Co-Chair</td>
                            <td>--</td>
                            <td>Phil C. </td>
                            <td>Renee C</td>
                        </tr>
                        <tr class="table-success">
                            <td>AA Treasurer</td>
                            <td>Cindy A.</td>
                            <td>Daylene A.</td>
                            <td>Carolyn H.</td>
                        </tr>
                        <tr class="table-success">
                            <td>AA Co-Treasurer</td>
                            <td>Cindy A.</td>
                            <td>Mona S.</td>
                            <td>Jean T.</td>
                        </tr>
                        <tr class="table-success">
                            <td>AA Recording Secretary</td>
                            <td>Andy V.</td>
                            <td>Andy V.</td>
                            <td>Roger M.</td>
                        </tr>
                    </tbody>
                    <thead class="filterHead">
                        <tr class="filterRow">
                            <th colspan="4" scope="col">Al-Anon Steering Committee</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="table-warning">
                            <td>Al-Anon Chair</td>
                            <td>Thomas L.</td>
                            <td>Sidney A.R.</td>
                            <td>Sidney A.R.</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Co-Chair</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Decorations</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Literature</td>
                            <td>--</td>
                            <td>Dawn C.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Marathon Mtg. Chair</td>
                            <td>Donna F.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Raffle</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Recording Secretary</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Registration Chair</td>
                            <td>Debbie O.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Secretary</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Speaker Chair</td>
                            <td>Susan A.</td>
                            <td>Susan A.</td>
                            <td>Susan A.</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Treasurer</td>
                            <td>--</td>
                            <td>Thomas L.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Ateen</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                    </tbody>


                    <thead class="filterHead">
                        <tr class="filterRow">
                            <th colspan="4" scope="col">Committee Chairs</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="table-primary">
                            <td>Registration Chair</td>
                            <td>Naomi B.</td>
                            <td>Naomi B.</td>
                            <td>Naomi B.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Activities</td>
                            <td>Samantha C.</td>
                            <td>--</td>
                            <td></td>
                        </tr>
                        <tr class="table-primary">
                            <td>BBQ Chair</td>
                            <td>Joanie</td>
                            <td>Henry L.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Breakfast Chair</td>
                            <td>Joanie</td>
                            <td>Renee N.</td>
                            <td>Renee N.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Dance Chair</td>
                            <td>--</td>
                            <td>Chris T.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Decorations Chair</td>
                            <td>Hilda P.</td>
                            <td>Hilda P.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Dinner Chair</td>
                            <td>Joanie</td>
                            <td>Aubrey</td>
                            <td>Aubrey</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Facilites Chair</td>
                            <td>Nick K.</td>
                            <td>Billy H.</td>
                            <td>Sally H</td>
                        </tr>
                        <tr class="table-primary">
                            <td>GSR Liaison</td>
                            <td>Teresa J.</td>
                            <td>--</td>
                            <td>Cole</td>
                        </tr>
                        <tr class="table-primary">
                            <td>H&amp;I Liaison</td>
                            <td>Michael R.</td>
                            <td>--</td>
                            <td>Michael R.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Hospitality</td>
                            <td>Phil C.</td>
                            <td>Phil C.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Host</td>
                            <td>Phil C.</td>
                            <td>May H.</td>
                            <td>Cindy A.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Ice Cream Social</td>
                            <td>Joanie D.</td>
                            <td>Joanie D.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Literature Chair</td>
                            <td>Monica P.</td>
                            <td>May H.</td>
                            <td>May H.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Marathon Meetings Chair</td>
                            <td>Mark S.</td>
                            <td>Mark S.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Merchandise Chair</td>
                            <td>May H.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Outreach Chair</td>
                            <td>--</td>
                            <td>Kathleen M.</td>
                            <td>Laura P.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Panel</td>
                            <td>--</td>
                            <td>Mary Grace</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Raffle Chair</td>
                            <td>Esther F.</td>
                            <td>Katherine J.</td>
                            <td>Katherine J</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Shuttle Service Chair</td>
                            <td>Chuck N.</td>
                            <td>Trevor F.</td>
                            <td></td>
                        </tr>
                        <tr class="table-primary">
                            <td>Social Media Co-Chair</td>
                            <td>--</td>
                            <td>Chris T.</td>
                            <td>Gina H</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Social Media Co-Chair</td>
                            <td>--</td>
                            <td>Victoria M.</td>
                            <td>Sean B</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Spanish Community</td>
                            <td>--</td>
                            <td>Eric M.</td>
                            <td>Eric M.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Speaker Chair</td>
                            <td>Brady S.</td>
                            <td>Mark B.</td>
                            <td></td>
                        </tr>
                        <tr class="table-primary">
                            <td>Speaker Chair (Al-anon)</td>
                            <td>--</td>
                            <td>Susan A.</td>
                            <td>Kathleen S.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>T-shirts Chair</td>
                            <td>---.</td>
                            <td>Charly F.</td>
                            <td>Jessica L.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Website Chair</td>
                            <td>--</td>
                            <td>--</td>
                            <td>Phillip E.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Welcome &amp; Social Chair</td>
                            <td>---</td>
                            <td>Arthur T.</td>
                            <td>Arthur T.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Young People Chair</td>
                            <td>Samantha C.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Zoom Meeting</td>
                            <td>--</td>
                            <td>Phillip E.</td>
                            <td>Phillip E.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>
<?php include_once 'footer.inc' ?>
</body>

</html>