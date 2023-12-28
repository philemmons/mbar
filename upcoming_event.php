<?php include_once 'header.inc' ?>

<nav class="navbar navbar-expand-lg">
     <div class="container">
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse.true navbar-collapse" id="collapsibleNavId">
               <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="index.php" aria-current="page">Home
                              <span class="visually-hidden">(current)</span></a>
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
                              <a class="dropdown-item" href="meetings.php">Meetings</a>
                              <a class="dropdown-item" href="committees.php">Committees</a>
                         </div>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link active" href="logo_contest.php">Upcoming Events<span class="visually-hidden">(current)</span></a>
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
          <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-upcoming" title="Prior events create fellowship and generate contributions to offset MBAR's cost.">
               <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Preregistration is open!">
                         <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Upcoming Events 2024</span></h1>
                    </div>
               </div>
          </div>
     </section>

     <!-- Section One -->
     <section class="container shadow-wrap">
          <div class="row justify-content-center py-4 mb-5">
               <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                         <p class="mb-6 h5 text-dark">Check back for various events leading up to the 20243 conference!</p>
                    </div>
               </div>

               <div class="col-sm-12 col-12 text-center px-3">
                    <img class="img-fluid" src="../images/bingo-night.png" alt="Fun-ds & Fellowship - Bingo Night Fundraiser Flyer">
               </div>
          </div>
     </section>

     <!-- Section Two -->
     <section class="container shadow-wrap">
          <div class="row justify-content-center mb-5">
               <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                         <h4 class="card-title mb-3"><a href="activities.php">Monterey Bay Area Roundup presents</a></h4>
                         <p>BINGO!
                              <br>
                              "Fun-ds & Fellowship" Bingo Night Fundraiser
                              <br>
                              Join The Herd at The Moose for a night of Fellowship, Recovery, and Bingo! 🎉
                              <br>
                              <strong>When:</strong> January 26, 2024, 6-9pm
                              <br>
                              <strong>Where:</strong> Moose Lodge - 555 Canyon Del Rey Blvd,Del Rey Oaks CA
                              <br>
                              <strong>Speaker:</strong> Elena B
                              <br>
                              Hot Dogs - Beverages - Light Snacks - 50/50 Raffle and Bingo Prizes
                              <br>
                              <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Adobe PDF icon, no link just design">
                              <a href="" class="bb-link" onclick="window.open('pdf/bingo-fundraiser-flyer.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">View and Download the Flyer</a>
                         </p>
                    </div>
               </div>
          </div>
     </section>

     <!-- Section Three -->
     <section class="container shadow-wrap">
          <div class="row justify-content-center mb-5">
               <div class="col-xl-8 col-lg-8 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Preregistration is open!">
                         <h3 class="fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup 2024</span>
                         </h3>
                         <p class="mb-6 h4 text-dark">August 31st and September 1st</p>
                         <a href="registration.php" class="btn btn-primary me-2">Register Now</a>
                    </div>
               </div>
          </div>
     </section>

</main>
<?php include_once 'footer.inc' ?>
</body>

</html>