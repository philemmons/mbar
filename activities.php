<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

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
                        <a class="dropdown-item active" aria-current="page" href="activities.php">Activities<span class="visually-hidden">(current)</span></a>
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
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Upcoming Events</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="nav-link" href="upcoming_event.php">Bingo Night</a>
                        <a class="nav-link" href="logo_contest.php">Logo Contest</a>
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

<main>
    <!-- Hero Section -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-activity" title="Beautiful Monterey tile mosaic at the Conference Center inspiring fellowship activities.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup<br>
                            Activities</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row pt-4 mb-5">
            <div class="col-lg-4 col-sm-12 col-12">
                <figure class="figure">
                    <img src="../images/speaker-on-stage.png" class="figure-img img-fluid" alt="Speaker sharing their experience, strength, and hope with us.">
                    <figcaption class="figure-caption">
                        <h2>Guest Speakers</h2>
                    </figcaption>
                    <p>At the main speaker meetings our Speakers share their experience, strength and hope. "Showing others who suffer how we were given help is the very thing which makes life seem so worth while to us now. Cling to the thought that, in God's hands, the dark past is the greatest possession you have - the key to life and happiness for others." BB p124
                    </p>
                </figure>
            </div>

            <div class="col-lg-8 col-sm-12 col-12">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/con-dinner.png" class="figure-img img-fluid" alt="Dinner with the speaker on Saturday night.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12">
                        <figcaption class="figure-caption">
                            <h3>Meet the Speakers Dinner</h3>
                        </figcaption>
                        <p><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(See map here)</a></p>
                        <p>Join us for a delicious dinner and meet the speakers <strong>at the Bethlehem Lutheran Church Hall</strong> in the back of the building.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/meeting-in-progress.png" class="figure-img img-fluid" alt="Recovering people are attending a marathon meeting.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12">
                        <figcaption class="figure-caption">
                            <h3>Marathon Meetings</h3>
                        </figcaption>
                        <p>During the MBAR Conference, there will be meetings held that are open to all A.A. Members at various hours during the day. Marathon meetings will not be held during the Conference's Main Speaker Meetings. You do not have to be registered for the conference to attend these meetings.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/con-breakfast.png" class="figure-img img-fluid" alt="Join us for a Sunday morning breakfast.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12">
                        <figcaption class="figure-caption">
                            <h3>Roundup Breakfast</h3>
                        </figcaption>
                        <p><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(See map here)</a></p>
                        <p>Rejoin us for a tasty breakfast and fellowship <strong>at Bethlehem Lutheran Church Hall</strong>, in the back of the building, to start off the activities of the day.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/con-dance.png" class="figure-img img-fluid" alt="A silhouette of fun and fellowship at the Saturday night dance.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12">
                        <figcaption class="figure-caption">
                            <h3>Dance and Fellowship</h3>
                        </figcaption>
                        <p>After the Main Speaker Meeting on Saturday night, join us for some fun and fellowship. After all, "We aren't a glum lot. If newcomers could see no joy or fun in our existence, they wouldn't want it. We absolutely insist on enjoying life." BB p132
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/con-ice-cream.png" class="figure-img img-fluid" alt="Four different ice cream flavors on waffle cones, layout in a diamond formation.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12 box-3">
                        <figcaption class="figure-caption">
                            <h3>Ice Cream Social</h3>
                        </figcaption>
                        <p><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(See map here)</a></p>
                        <p>Stop what you are doing, and come have some ice cream, with your favorite toppings! Enjoy the fellowship and share about your experience at being at this year's MBAR with other members.
                        </p>
                        <p>It will be held on the <strong>Stevenson Terrace</strong> at the Conference Center.</p>

                        <p><strong>For more conference info, pick up your program at the Registration desk.</strong></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <figcaption class="figure-caption">
                        <h4 class="card-title text-center mb-3">EXPLORING MONTEREY and SURROUNDING AREAS</h4>
                    </figcaption>
                    <div class="row">
                        <div class="col-sm-6">
                            <p><a href="https://www.seemonterey.com/" class="bb-link" target="_blank">Visit the Coast</a></p>
                        </div>
                        <div class="col-sm-6">
                            <p><a href="https://www.parks.ca.gov/?page_id=571" class="bb-link" target="_blank">Hiking at Point Lobos</a></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <p><a href="https://www.montereybayaquarium.org/" class="bb-link" target="_blank">Monterey Bay Aquarium</a></p>
                        </div>
                        <div class="col-sm-6">
                            <p><a href="https://www.yelp.com/search?find_desc=Bicycle+rental&find_loc=Monterey%2C+CA" class="bb-link" target="_blank">Bicycling</a></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <p><a href="https://www.yelp.com/search?find_desc=Restaurants&amp;find_loc=Monterey%2C+CA" class="bb-link" target="_blank">Restaurants</a></p>
                        </div>
                        <div class="col-sm-6">
                            <p><a href="https://www.carmelcalifornia.com/carmel-beach/" class="bb-link" target="_blank">Carmel-By-The-Sea</a></p>
                        </div>
                    </div>

                    <div class="text-center pt-4">
                        <h5><a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank">Check out our local meetings</a></h5>
                        <p><img class="img-fluid" src="../images/mbiaa-logo.png" alt="Monterey Bay Intergroup of A.A. logo"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-4 text-center">
                <figure class="figure">
                    <img class="figure-img img-fluid" src="../images/bixby-bridge-sam-goodgame.png" title="Arial view of the Bixby Bridge at Big Sur along the coastline." alt="Arial view of the Bixby Bridge at Big Sur along the coastline.">
                </figure>
            </div>

        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>