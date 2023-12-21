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
                        <a class="dropdown-item active" href="meetings.php">Meetings<span class="visually-hidden">(current)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-meetings" title="Meeting diversity enhances our lives.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Committee Meeting Info</span></h1>
                </div>
            </div>
        </div>
    </section>



    <!-- Section Three -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-auto py-4">
                <a href="" onclick="window.open('https://us02web.zoom.us/j/83143062293?pwd=QXZMWUVoZEkzVnUyY0poanAyclBHdz09', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;"><img class="img-fluid" src="../images/zoom-login.png" alt="Inverted Zoom login screen with blue background."></a>
            </div>
            <div class="col-sm-6 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h3 class="card-title text-center mb-3">The 2nd Saturday of each month at 10:00am PST</h3>
                    <p class="text-center"><strong>Zoom ID</strong>: 831 4306 2293 <br>
                        <strong>Password</strong>: 2024.<br>
                        <em><strong>The 2nd Saturday of each month at 11:00am PT.</strong></em>
                    </p>
                    <p class="text-center">Next Meetings: <strong>01/13/2024, 02/10/2024, 03/09/2024</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-7 col-lg-7 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Preregistration is open!">
                    <h3 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Preregistration is Live</span>
                    </h3>
                    <a href="registration.php" class="btn btn-primary me-2">Register Now</a>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'footer.inc' ?>
</body>

</html>