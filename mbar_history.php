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
                        <a class="dropdown-item" href="registration.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item active" aria-current="page" href="mbar_history.php">MBAR History<span class="visually-hidden">(current)</span></a>
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

<main role="main">
    <!-- Hero Section -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-history" title="Amazing Monterey State Beach">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup<br>
                            History</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Monterey Bay Area Roundup since 1993.">
                    <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">MBAR was established in 1993 with our guiding principle:<br>"Keep It Simple."</span>
                    </h3>
                    <p class="mb-6 h5 text-dark">This event has dedicated itself to helping people facing the toughest challenges and move toward a stronger, and more resilient future.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-4 mb-5">
            <div class="col-sm-5  text-center px-5">
                <h4 class="mb-6 text-dark">Below are MBAR's banners used over the years.
                    </>
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
    </div>

    <!-- Part Two -->
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h4 class="card-title h6"><a href="mbar_history.php">
                                <i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Past Schedule of Events</a></h4>
                        <p class="card-text"> <a href="https://montereybayarearoundup.org/conference-2022.php" class="bb-link" target="_blank">2022 Conference<span class="sr-only">(Opens a new window)<span></a></p>
                        <p class="card-text"> <a href="https://montereybayarearoundup.org/conference-2019.php" class="bb-link" target="_blank">2019 Conference<span class="sr-only">(Opens a new window)<span></a></p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">Check out MBAR's line up from our previous events</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h4 class="card-title h6"><a href="conference-2021.php">
                                <i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Audio Recording of Speakers</a></h4>
                        <p class="card-text">Paul O. from 2017</p>
                        <audio controls="">
                            <source src="../audio/PaulO2017/01 Track 1.ogg" type="audio/ogg">
                            <source src="../audio/PaulO2017/01 Track 1.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">Sharing their experience, strength, and hope</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h4 class="card-title h6"><a href="conference-2021.php">
                                <i class="bi bi-award me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Past Fliers Over the Years</a></h4>
                        <p class="card-text"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                            <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2015-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">2015 Program</a>
                        </p>
                        <p class="card-text"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                            <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2014-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">2014 Program</a>
                        </p>
                        <p class="card-text"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                            <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2003-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">2003 Program</a>
                        </p>
                        <p class="card-text"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                            <a href="" class="bb-link" onclick="window.open('pdf/MBAR-1997-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">1997 Program</a>
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">Speakers and guests come from all over the U.S.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>