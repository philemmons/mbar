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
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Monterey Bay Area Roundup since 1993.">
                    <h4 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">MBAR was established in 1993 with our guiding principle:<br>"Keep It Simple."</span>
                    </h4>
                    <p class="mb-6 h5 text-dark">The event has dedicated itself to helping people facing the toughest challenges and move toward a stronger, and more resilient future.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-4 mb-5">
            <div class="col-sm-5 col-5 text-center px-5">
                <p class="mb-6 h4 text-dark">Below are MBAR's event banners used over the years.
                </p>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../images/2022.png" class="d-block w-100" alt="MBAR 2022">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2019.png" class="d-block w-100" alt="MBAR 2019">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2015.png" class="d-block w-100" alt="MBAR 2015">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2014.png" class="d-block w-100" alt="MBAR 2014">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2013.png" class="d-block w-100" alt="MBAR 2013">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2011.png" class="d-block w-100" alt="MBAR 2011">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2009.png" class="d-block w-100" alt="MBAR 2009">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2007.png" class="d-block w-100" alt="MBAR 2007">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2005.png" class="d-block w-100" alt="MBAR 2005">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2003.png" class="d-block w-100" alt="MBAR 2003">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/2001.png" class="d-block w-100" alt="MBAR 2001">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/1999.png" class="d-block w-100" alt="MBAR 1999">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/1997.png" class="d-block w-100" alt="MBAR 1997">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/1995.png" class="d-block w-100" alt="MBAR 1995">
                        </div>
                        <div class="carousel-item">
                            <img src="../images/1993.png" class="d-block w-100" alt="MBAR 1993">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
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
                        <h6 class="card-title"><a href="mbar_history.php">
                                <i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);"></i>Past Schedule of Events</a></h5>
                            <p class="card-text"> <a href="https://montereybayarearoundup.org/conference-2022.php" class="bb-link" target="_blank">Conference line up 2022</a></p>
                            <p class="card-text"> <a href="https://montereybayarearoundup.org/conference-2021.php" class="bb-link" target="_blank">Conference line up 2021</a></p>
                            <p class="card-text"> <a href="https://montereybayarearoundup.org/conference-2019.php" class="bb-link" target="_blank">Conference line up 2019</a></p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">All have audio files</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2021.php">
                                <i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);"></i>Audio Recording of Speakers</a></h5>
                            <p class="card-text">Paul O. from 2017</p>
                            <audio controls="">
                                <source src="../audio/PaulO2017/01 Track 1.ogg" type="audio/ogg">
                                <source src="../audio/PaulO2017/01 Track 1.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">Speakers are sharing their experience, strength, and hope.</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2021.php">
                                <i class="bi bi-award me-2" style="font-size: 2rem; color: var(--color-8);"></i>Past Fliers Over the Years</a></h5>
                            <p class="card-text"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                                <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2015-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">MBAR 2015 Program</a>
                            </p>
                            <p class="card-text"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                                <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2014-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">MBAR 2014 Program</a>
                            </p>
                            <p class="card-text"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                                <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2003-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">MBAR 2003 Program</a>
                            </p>
                            <p class="card-text"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                                <a href="" class="bb-link" onclick="window.open('pdf/MBAR-1997-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">MBAR 1997 Program</a>
                            </p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">Speakers and guests come from all over the United States.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'footer.inc' ?>
</body>

</html>