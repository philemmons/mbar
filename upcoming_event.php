<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Upcoming Events </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/upcoming_event.php" >';
include_once 'header-bottom.inc';
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
                              <a class="dropdown-item" href="aa-spanish-marathon-2024.php">Spanish-Speaking A.A. Marathon Meetings</a>
                              <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Marathon Meetings</a>
                              <a class="dropdown-item" href="al-anon-marathon-2024.php">Al-Anon Marathon Meetings</a>
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
                              <a class="dropdown-item active" aria-current="page" href="upcoming_event.php">Gratitude<span class="visually-hidden">(current)</span></a>
                              <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
                         </div>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item" style="border-right: none;">
                         <a class="nav-link" href="helping_hands.php">Helping Hands</a>
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
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live!">
                         <h2 class="display-6 fw-bold px-3 px-md-0">Upcoming Events 2024</h2>
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
                              <p class="h5 text-dark">Thank you for continuing to check back for more events leading up to the 2024 Conference!</p>
                         </div>
                    </div>

                    <!-- <div class="col-xl-10 col-lg-10 col-md-12 text-center px-3 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <img class="img-fluid" src="../images/softball-fellowship-event.png" alt="Softball Fellowship Event Flier">
                         </div>
                    </div> -->

               </div>
          </div>
     </article>

     <!-- Part Two -->
     <article aria-label="Event details">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <p class="mb-4 h5 text-dark"><a href="activities.php" class="bb-link">Monterey Bay Area Round Up Appreciation</a></p>
                              <section aria-label="Event Information">
                                   <h3 class="card-title mb-4"><strong>Gratitude!</strong></h3>
                                   <p class="mb-4 h5 text-dark">
                                        MBAR events like potlucks, softball games, and bingo nights offer wonderful opportunities for everyone to come together, share experiences, and have fun. Potlucks bring a delicious variety of homemade dishes to enjoy, where each person's contribution adds to the communal feast. Softball games encourage friendly competition and teamwork, regardless of skill level, fostering a spirit of fellowship and shared enjoyment of the outdoors. Bingo nights provide excitement and laughter as participants eagerly await their numbers to be called, creating moments of suspense and joy for all involved. These inclusive activities celebrate diversity, create bonds, and ensure that everyone feels welcomed and valued within their recovery journey. Whether you're bringing a dish, swinging a bat, or marking your bingo card, these events embody the spirit of togetherness and enjoyment for everyone involved.
                                        <br><br>
                                        Once again, thank you all.
                                   </p>

                                   <!-- <a class="btn btn-primary btn-sm" href="pdf/softball-fellowship-event.pdf"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">View and Download the Flier</a> -->

                              </section>
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <div id="map"></div>
     <!--
     <article aria-label="Google Map for Dampierre Little League Park ">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <section aria-label="Park location">
                                   <h4 class="card-title mb-3"><a href="https://www.google.com/maps/place/Dampierre+Park/@36.478664,-121.739975,14z/data=!4m6!3m5!1s0x808df39f2bb991fd:0x905b6dd7a85fb3cd!8m2!3d36.4786643!4d-121.7399751!16s%2Fg%2F11cm0fp649?hl=en&entry=ttu" class="bb-link" target="_blank" title="Direct link to Google Map">Dampierre Little League Park<span class="sr-only">(Opens a new window)</span></a></h4>
                                   <div class="col-md-12 db-5">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12832.505391961493!2d-121.7399751!3d36.4786643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808df39f2bb991fd%3A0x905b6dd7a85fb3cd!2sDampierre%20Park!5e0!3m2!1sen!2sus!4v1715114915603!5m2!1sen!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Dampierre Little League Park" aria-hidden="true"></iframe>
                                   </div>
                              </section>
                         </div>
                    </div>
               </div>
          </div>
     </article>
     -->

     <?php include_once 'footer.inc' ?>
     </body>

     </html>