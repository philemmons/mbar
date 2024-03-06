<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="main navigation">
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
                              <a class="dropdown-item" href="register-now.php">Registration</a>
                              <a class="dropdown-item" href="activities.php">Activities</a>
                              <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
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
                              <a class="dropdown-item active" aria-current="page" href="upcoming_event.php">St. Patrick's Potluck<span class="visually-hidden">(current)</span></a>
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
     <div class="container shadow-wrap">
          <div class="row justify-content-center mb-5">
               <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                         <p class="mb-6 h5 text-dark">Check back for various events leading up to the 2024 Conference!</p>
                    </div>
               </div>

               <div class="col-xl-10 col-lg-10 col-md-12 text-center px-3 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                         <img class="img-fluid" src="../images/saint-patrick-potluck.png" alt="St. Patrick's Potluck and Speaker Meeting Flyer">
                    </div>
               </div>
          </div>
     </div>

     <!-- Part Two -->
     <div class="container shadow-wrap">
          <div class="row justify-content-center mb-5">
               <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                         <h3 class="card-title mb-3"><a href="activities.php" class="bb-link">Monterey Bay Area Roundup presents</a></h3>
                         <p class="mb-6 h5 text-dark">☘️<strong>St. Patrick's Potluck and Speaker Meeting</strong>☘️
                              <br>
                              Join us in the "Funds and Fellowship"
                              <br><br>
                              <strong>When:</strong> Saturday — March 17, 2024
                              <br>
                              <strong>Where:</strong> 437 Laureles Grade, Carmel Valley, CA
                              <br>
                              Doors Open at 4pm; Dine at 5pm
                              <br>
                              <strong>Speaker:</strong> Avil L. from Salinas, CA at 6pm
                              <br><br>
                              Corned Beef & Cabbage will be provided — Raffle Prizes and 50/50 Raffle
                              <br><br>
                              Potluck Suggestions by 1st Initial:
                              <br>
                              A to C: Dessert
                              <br>
                              D to J: Hot Veggie Dish
                              <br>
                              K to O: Potato Dish
                              <br>
                              P to Z: Salad or Bread
                              <br><br>
                              <strong>Bring a chair and some friends of Bill!</strong>
                              <br>
                              Wear your Green or previous MBAR gear!
                              <br><br>
                              <strong>Note:</strong> In Lieu of the 7th tradition, we will be collecting contributions for 2024 MBAR!
                         </p>
                         <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Adobe PDF icon, followed by link">
                         <a href="" class="bb-link" onclick="window.open('pdf/st-patricks-day-speaker.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">View and Download the Flyer</a>
                    </div>
               </div>
          </div>
     </div>


     <?php include_once 'footer.inc' ?>
     </body>

     </html>