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
                              <a class="dropdown-item active" aria-current="page" href="upcoming_event.php">St. Patrick's Day Potluck<span class="visually-hidden">(current)</span></a>
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
                         <h2 class="display-6 fw-bold px-3 px-md-0">St. Patrick's Day Potluck</h2>
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
                              <section aria-label="Event Information">
                                   <h3 class="card-title mb-4"><strong>St. Patrick's Potluck and Speaker Meeting</strong></h3>
                              </section>
                         </div>
                    </div>

                    <div class="col-sm-12 col-12 text-center px-3 py-4">
                         <img class="img-fluid" src="../images/saint-patrick-potluck.png" alt="St. Patrick's Potluck and Speaker Meeting Flyer">
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
                              <p class="mb-4 h5 text-dark">Monterey Bay Area Roundup presents: St.Patrick's Potluck and Speaker Meeting
                              </p>
                              <div class="row justify-content-center mb-5">
                                   <div class="col-md-6 col-sm-12 mb-4">
                                        <p class="fs-2 text-success center rotate-15">
                                             Funds
                                             <br>
                                             and
                                             <br>
                                             Fellowship
                                        </p>
                                        <p class="text-dark">
                                             When: Sunday 03/16/25
                                             <br>
                                             Where: 437 Laureles Grade, Carmel Valley
                                             <br>
                                             Doors: at 3pm
                                             <br>
                                             Dinner at 4pm
                                             <br>
                                             Speaker: Surprise at 5pm
                                        </p>
                                   </div>
                                   <div class="col-md-6 col-sm-12 mb-4">
                                        <p class="text-dark">
                                             Potluck Suggestions
                                             <br>
                                             1st Initial
                                             <br>
                                             A to C: Dessert
                                             <br>
                                             D to J: Hot Veggie Dish
                                             <br>
                                             K to O: Potato Dish
                                             <br>
                                             P to Z: Salad or Bread
                                        </p>
                                        <p class="fs-4 text-uppercase text-decoration-underline">
                                             Event Highlights
                                        </p>
                                        <ul>
                                             <li>Corned Beef and Cabbage Provided</li>
                                             <li>50 / 50 Raffle</li>
                                             <li>Bring a Chair and Some Friends of Bill W.</li>
                                             <li>Wear Your Green or Previous MBAR Gear!</li>
                                        </ul>
                                   </div>
                              </div>
                              <p class="">
                                   In lieu of the 7th Tradition, we will be collecting contributions for MBAR 206!
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <?php include_once 'event-gratitude.inc' ?>

     <div id="map"></div>

     <?php include_once 'footer.inc' ?>
     </body>

     </html>