<?php include 'header.inc' ?>

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
                <li class="nav-item dropdown" style='width: 180px;'>
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item active" href="mbar_history.php">MBAR History<span class="visually-hidden">(current)</span></a>
                        <a class="dropdown-item" href="memories.php">Memories</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style='width: 161px;'>
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-history" title="Amazing Monterey State Beach">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup<br>
                    History</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Monterey Bay Area Roundup since 1993.">
                    <h3 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">MBAR was established in 1993 with our guiding principle:<br>"Keep It Simple."</span>
                    </h3>
                    <p class="mb-6 h4 text-dark">The event has dedicated itself to helping people facing the toughest challenges and move toward a stronger, and more resilient future.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-4 mb-5">
            <div class="col-sm-12 col-12 text-center px-3">
                <p class="mb-6 h4 text-dark">Below are the logos used over the years.
                </p>
                --- carousal ---
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-6 mb-3 mb-sm-0 px-4">
                <div class="card">
                    <div class="card-body text-center shadow-wrap">
                        <h5 class="card-title">Past Conference Schedule of Events</h5>

                        Conference line up 2022 (With audio files)

                        Conference line up 2021 (With audio files)

                        Conference line up 2019 (With audio files)

                        <a href="conference-2022.php" class="btn btn-primary">View Our 2022 Conference</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0 px-4">
                <div class="card">
                    <div class="card-body text-center shadow-wrap">
                        <h3 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Audio recording of speakers sharing their experience, strength, and hope.</span>
                        </h3>
                        <p class="mb-6 h4 text-dark">Paul O. from 2017</p>
                        ----audio file here----
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Three -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Preregistration is open!">
                    <h5 class="card-title">Speakers and guests come from all over the United States. Take a look at some fliers from past MBAR's.</h5>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-4 mb-5">
            <div class="col-sm-12 col-12 text-center px-3">
                <img class="img-fluid" src="../images/conference-room.png" alt="Monterey Conference Center meeting room, chairs lined up facing a stage, and past A.A. conference banners.">
            </div>
        </div>
    </section>
</main>
<?php include 'footer.inc' ?>
</body>

</html>