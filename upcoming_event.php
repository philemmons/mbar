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
                              <a class="dropdown-item" href="logo_contest.php">Logo Contest</a>
                              <a class="dropdown-item active" aria-current="page" href="upcoming_event.php">St. Patrick's Day Potluck>(current)</span></a>
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
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in 2026!">
                         <h2 class="display-6 fw-bold px-3 px-md-0">Upcoming Events 2026</h2>
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
                              <p class="h5 text-dark">Thank you for continuing to check back for more events leading up to the 2026 Conference!</p>
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <!-- Part Two -->
     <article aria-label="Event details">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <p class="mb-4 h5 text-dark"><a href="activities.php" class="bb-link">Monterey Bay Area Roundup Appreciation</a></p>
                              <section aria-label="Event Information">
                                   <h3 class="card-title mb-4"><strong>Gratitude!</strong></h3>
                                   <p class="mb-4 h5 text-dark">
                                        MBAR events like potlucks, softball games, and bingo nights offer wonderful opportunities for everyone to come together, share experiences, and have fun. Potlucks bring a delicious variety of homemade dishes to enjoy, where each person's contribution adds to the communal feast. Softball games encourage friendly competition and teamwork, regardless of skill level, fostering a spirit of fellowship and shared enjoyment of the outdoors. Bingo nights provide excitement and laughter as participants eagerly await their numbers to be called, creating moments of suspense and joy for all involved. These inclusive activities celebrate diversity, create bonds, and ensure that everyone feels welcomed and valued within their recovery journey. Whether you're bringing a dish, swinging a bat, or marking your bingo card, these events embody the spirit of togetherness and enjoyment for everyone involved.
                                        <br><br>
                                        Once again, thank you all.
                                   </p>
                              </section>
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <div id="map"></div>

     <?php include_once 'footer.inc' ?>
     </body>

     </html>