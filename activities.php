<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Activities </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/activities.php" >';
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
                        <a class="dropdown-item active" aria-current="page" href="activities.php">Activities<span class="visually-hidden">(current)</span></a>
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
                        <a class="dropdown-item" href="upcoming_event.php">Gratitude</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-activity" title="Beautiful Monterey tile mosaic at the Conference Center inspiring fellowship activities.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup<br>
                            Activities</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="MBAR's Main Events">
        <div class="container shadow-wrap">
            <div class="row mb-5 py-2">
                <div class="col-lg-4 col-sm-12 col-12">
                    <img src="../images/speaker-on-stage.png" class="img-fluid py-3" alt="Speaker sharing their experience, strength, and hope with us.">

                    <div class="card card-body border-0">
                        <section class="card-title">
                            <h3>Guest Speakers and Panel Sessions</h3>
                        </section>
                        <p class="card-text">At the main speaker meetings, our Speakers are sharing their experience, strength and hope with us. "Showing others who suffer how we were given help is the very thing which makes life seem so worth while to us now. Cling to the thought that, in God's hands, the dark past is the greatest possession you have - the key to life and happiness for others." BB p124
                        </p>

                    </div>
                </div>

                <div class="col-lg-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/con-dinner.png" class="img-fluid py-3" alt="Dinner with the speaker on Saturday night.">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>Meet the Speaker's Dinner</h3>
                                </section>
                                <p class="card-text"><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(See map here)</a>
                                    <br>
                                    Join us for a delicious dinner and meet the speakers <strong>at the Bethlehem Lutheran Church Hall</strong> in the back of the building.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/meeting-in-progress.png" class="img-fluid py-3" alt="Recovering people are attending a marathon meeting.">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>Marathon Meetings</h3>
                                </section>
                                <p class="card-text">During the MBAR Conference, there will be meetings held that are open to all A.A. and Al-Anon Members at various hours during the day. Marathon meetings will not be held during the Conference's Main Speaker Meetings. You do not have to be registered for the conference to attend these meetings.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/con-breakfast.png" class="img-fluid  py-3" alt="Join us for a Sunday morning breakfast.">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>Roundup Breakfast and Bingo</h3>
                                </section>
                                <p class="card-text"><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(See map here)</a>
                                    <br>
                                    Rejoin us for a tasty breakfast and fellowship <strong>at Bethlehem Lutheran Church Hall</strong>, in the back of the building, to start off the activities of the day. Yes, get your dauber ready and the thrill of the win!
                                    <br><br>
                                    <span class="text-center">
                                        <a class="btn btn-outline-primary btn-sm" href="pdf/breakfast_bingo.pdf"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">Breakfast and Bingo Games<span class="sr-only">(Open pdf in browser)</span></a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/con-dance.png" class="img-fluid py-3" alt="A silhouette of fun and fellowship at the Saturday night dance.">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>Masquerade Dance</h3>
                                </section>
                                <p class="card-text">After the Main Speaker Meeting on Saturday night, join us for some fun and fellowship. Dance the night away at our Masquerade - Masks provided. After all, "We aren't a glum lot. If newcomers could see no joy or fun in our existence, they wouldn't want it. We absolutely insist on enjoying life." BB p132
                                    <br><br>
                                    <span class="text-center">
                                        <a class="btn btn-outline-primary btn-sm" href="pdf/masquerade_dance.pdf"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">Masquerade Dance<span class="sr-only">(Open pdf in browser)</span></a>
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/con-ice-cream.png" class="img-fluid py-3" alt="Four different ice cream flavors on waffle cones, layout in a diamond formation.">
                        </div>

                        <div class="col-md-7 col-12 box-3">
                            <div class="card card-body border-0 ">
                                <section class="card-title">
                                    <h3>Ice Cream Social</h3>
                                </section>
                                <p class="card-text"><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(See map here)</a>
                                    <br>
                                    Stop what you are doing, and come have some ice cream, with your favorite toppings! Enjoy the fellowship and share about your experience at being at this year's MBAR with other members.
                                </p>
                                <p class="card-text">It will be held on the <strong>Stevenson Terrace</strong> at the Conference Center.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/164.png" class="img-fluid py-3" alt="Straight out of the first 164 logo">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>More Fellowship</h3>
                                </section>
                                <p class="card-text">What better way to care for another, than to get to know them better. This year we have more fellowship activities for us than in previous years and invite you to them. The links below open PDF's with more information. "Though they knew they must help other alcoholics if they would remain sober, that motive became secondary. It was transcended by the happiness they found in giving themselves for others." BB p132
                                </p>
                                <p class="card-text">
                                <ul>
                                    <li>Speed Fellowship-ing</li>
                                    <li><a class="bb-link" href="pdf/scavenger_hunt.pdf">Goose Chase Scavenger Hunt<span class="sr-only">(Open pdf in browser)</span></a>
                                    </li>
                                    <li>Paint Fellowship</li>
                                    <li>Werewolf Fellowship Game</li>
                                    <li><a class="bb-link" href="pdf/cornhole.pdf">Cornhole and Fellowship<span class="sr-only">(Open pdf in browser)</span></a>
                                    </li>
                                    <li><a class="bb-link" href="pdf/aa_trivia.pdf">A.A Trivia: General Service<span class="sr-only">(Open pdf in browser)</span></a>
                                    </li>
                                </ul>


                                <span class="text-center">

                                </span>
                                </p>

                            </div>
                        </div>
                    </div>

                    <p class="card-text"><strong>For more conference info, pick up your program at the registration desk.</strong></p>
                </div>

            </div>
        </div>
    </article>

    <!-- Part Two -->

    <aside aria-label="Monterey and Surrounding Areas">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section class="card-title">
                            <h4 class="card-title text-center mb-3 text-uppercase">Exploring Monterey and Surrounding Areas</h4>
                        </section>
                        <div class="row">
                            <div class="col-sm-6">
                                <p><a href="https://www.seemonterey.com/" class="bb-link" target="_blank" rel="noopener noreferrer nofollow">Visit the Coast<span class="sr-only">(Opens a new window)</span></a></p>
                            </div>
                            <div class="col-sm-6">
                                <p><a href="https://www.parks.ca.gov/?page_id=571" class="bb-link" target="_blank" rel="noopener noreferrer nofollow">Hiking at Point Lobos<span class="sr-only">(Opens a new window)</span></a></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p><a href="https://www.montereybayaquarium.org/" class="bb-link" target="_blank" rel="noopener noreferrer nofollow">Monterey Bay Aquarium<span class="sr-only">(Opens a new window)</span></a></p>
                            </div>
                            <div class="col-sm-6">
                                <p><a href="https://www.yelp.com/search?find_desc=Bicycle+rental&find_loc=Monterey%2C+CA" class="bb-link" target="_blank" rel="noopener noreferrer nofollow">Bicycling<span class="sr-only">(Opens a new window)</span></a></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p><a href="https://www.yelp.com/search?find_desc=Restaurants&amp;find_loc=Monterey%2C+CA" class="bb-link" target="_blank" rel="noopener noreferrer nofollow">Restaurants<span class="sr-only">(Opens a new window)</span></a></p>
                            </div>
                            <div class="col-sm-6">
                                <p><a href="https://www.carmelcalifornia.com/carmel-beach/" class="bb-link" target="_blank" rel="noopener noreferrer nofollow">Carmel-By-The-Sea<span class="sr-only">(Opens a new window)</span></a></p>
                            </div>
                        </div>

                        <div class="text-center pt-4">
                            <h4><a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank" rel="noopener noreferrer">Check out our local meetings<span class="sr-only">(Opens a new window)</span></a></h4>
                            <p><img class="img-fluid" src="../images/mbiaa-logo.png" alt="Monterey Bay Intergroup of A.A. logo"></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 py-4 text-center">
                    <img class="img-fluid" src="../images/bixby-bridge-sam-goodgame.png" title="Arial view of the Bixby Bridge at Big Sur along the coastline." alt="Arial view of the Bixby Bridge at Big Sur along the coastline.">
                </div>

            </div>
        </div>
    </aside>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>