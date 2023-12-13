<?php include 'header.inc' ?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse.true navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php" aria-current="page">Home
                        <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item dropdown" style='width: 180px;'>
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="mbar2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Regristration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item" href="memories.php">Memories</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style='width: 161px;'>
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="meetings.php">Meetings</a>
                        <a class="dropdown-item" href="committees.php">Committees</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logo_contest.php">Logo Contest</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary" title="Beautiful coastline of Monterey Bay overlooking Lover's Point.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup 2024</span>
                    </h1>
                    <p class="mb-6 h2 text-dark">August 31st and September 1st</p>
                    <a href="registration.php" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section One -->
    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-6 mb-3 mb-sm-0 px-4">
                <div class="card">
                    <div class="card-body text-center shadow-wrap">
                        <h5 class="card-title">MBAR Conference Archives</h5>

                        <a href="conference-2022.php" class="btn btn-primary">View Our 2022 Conference</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0 px-4">
                <div class="card">
                    <div class="card-body text-center shadow-wrap">
                        <h5 class="card-title">We are looking for volunteers</h5>
                        <a href="contact.php" class="btn btn-primary">Let us know if you are interested</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">

                    <div class="card-body">
                        <em class="fa fa-microphone" aria-hidden="true"></em>
                        <h5 class="card-title"><a href="conference-2021.php">Conference</a></h5>
                        <p class="card-text">Schedule of Events during our 2-day Roundup. Check back with us for updates and more detail as we get closer to the date.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><a href="conference-2022.php">See archives of 2022</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <em class="fa fa-shopping-bag" aria-hidden="true"></em>
                        <h5 class="card-title"><a href="registration.php">Registration</a></h5>
                        <p class="card-text">Registration fees pay for the Conference Center, Speaker Travel, etc. The Marathon meetings are open and do not require registration.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><a href="registration.php">Closed</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <em class="fa fa-hotel" aria-hidden="true"></em>
                        <h5 class="card-title"><a href="activites.php">Activities</a></h5>
                        <p class="card-text">Marathon Meetings, Roundup Breakfast, Guest Speakers, Ice Cream Social, and what to do around Monterey for this <strong>two day event.</strong>.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><a href="activites.php">Closed</a></small>
                    </div>
                </div>
            </div>
        </div>

        <div class=" row justify-content-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <em class="fa fa-keyboard-o" aria-hidden="true"></em>
                        <h5 class="card-title"><a href="contact.php">Card title</a></h5>
                        <p class="card-text">Additional information or any questions, please contact us.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><a href="committees.php">Committee</a><br></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <em class="fa fa-comments-o" aria-hidden="true"></em>
                        <h5 class="card-title"><a href="MBAR-history.php">History</a></h5>
                        <p class="card-text">MBAR was established in 1993. Speakers and guests come from all over the United States. Take a look at some fliers from past MBAR's.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><a href="mbar-history.php">Read more</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <em class="fa fa-handshake-o" aria-hidden="true"></em>
                        <h5 class="card-title"><a href="anonymous-contribution.php">Contributions</a></h5>
                        <p class="card-text">In keeping with A.A.'s Seventh Tradition of self-support, we accept contributions only from A.A. members.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><a href="anonymous-contribution.php">Read more</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Three -->

</main>

<?php include 'footer.inc' ?>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>