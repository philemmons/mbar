<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Upcoming Events </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/upcoming_event.php" />';
include_once 'header-bottom.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="main navigation">
     <div class="container">
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
               <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                         <a class="nav-link" href="/">Home</a>
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
                              <a class="dropdown-item" aria-current="page" href="upcoming_event.php">Softball Fellowship Event<span class="visually-hidden">(current)</span></a>
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

<main id="main-content">
     <!-- Hero Part -->
     <div class="container shadow-wrap">
          <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-upcoming" title="Prior events create fellowship and generate contributions to offset MBAR's cost.">
               <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                         <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Upcoming Events 2024</span></h2>
                    </div>
               </div>
          </div>
     </div>

     <!-- Part One -->
     <article aria-label="Current event">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <p class="mb-6 h5 text-dark">Softball Fellowship Event! Please continue to check back for other occasions leading up to the 2024 Conference!</p>
                         </div>
                    </div>
                    <!--
                    <div class="col-xl-10 col-lg-10 col-md-12 text-center px-3 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <img class="img-fluid" src="../images/saint-patrick-potluck.png" alt="St. Patrick's Potluck and Speaker Meeting Flyer">
                         </div>
                    </div>
-->
               </div>
          </div>
     </article>

     <!-- Part Two -->
     <article aria-label="Event details">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <section aria-label="Event header">
                                   <h3 class="card-title mb-3"><a href="activities.php" class="bb-link">Monterey Bay Area Roundup presents</a></h3>
                                   <p class="mb-6 h5 text-dark"><span aria-hidden='true'>⚾</span><strong>Softball Fellowship Event!</strong><span aria-hidden='true'>⚾</span>
                                        <br><br>
                                        <strong>When:</strong> Sunday — July 16th, 2024
                                        <br>
                                        <strong>Time:</strong> 12 to 4pm
                                        <strong>Where:</strong> Dampierre Little League Park, Carmel Valley, CA
                                        <br><br>
                                        "Hot Dogs provided. Bring a mit and a side to share!"
                                   </p>
                                   <p class="mb-6 h5 text-dark">
                                        PDF flyer is coming soon!
                                   </p>
                                   <!--
                                   <button type="button" class="btn btn-primary btn-sm" onclick="window.open('pdf/softball-fellowship-event.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon"> View and Download the Flyer</button>
                                   -->
                              </section>
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <div id="map"></div>
    <article aria-label="Google Map for Dampierre Little League Park ">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Park location">
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/place/Dampierre+Park/@36.478664,-121.739975,14z/data=!4m6!3m5!1s0x808df39f2bb991fd:0x905b6dd7a85fb3cd!8m2!3d36.4786643!4d-121.7399751!16s%2Fg%2F11cm0fp649?hl=en&entry=ttu" class="bb-link" target="_blank" title="Direct link to Google Map"><span aria-hidden='true'>⚾</span>Dampierre Little League Park<span aria-hidden='true'>⚾</span><span class="sr-only">(Opens a new window)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12832.505391961493!2d-121.7399751!3d36.4786643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808df39f2bb991fd%3A0x905b6dd7a85fb3cd!2sDampierre%20Park!5e0!3m2!1sen!2sus!4v1715114915603!5m2!1sen!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Dampierre Little League Park" aria-hidden="true"></iframe>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>


     <?php include_once 'footer.inc' ?>
     </body>

     </html>