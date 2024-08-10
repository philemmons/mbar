<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - 2024 Marathon Meetings</title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/marathon-2024.php" >';
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
                        <a class="dropdown-item active" aria-current="page" href="marathon-2024.php">Marathon Meetings<span class="visually-hidden">(current)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Monterey Conference Center at Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">2024 Marathon Meetings</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Marathon meetings and unity">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Registration is Live">
                        <section aria-label="Marathon Schedule">
                            <h3 class="fw-bold text-dark px-3 px-md-0">MBAR Marathon Schedule 2024</h3>
                            <p class="mb-6 h5 text-dark">Throughout Labor Day weekend, we will have A.A and Al-Anon meetings in Spanish and English. These meetings are open to all and everyone is welcome.
                                <br>
                                <strong>Marathon Meetings are open to <em>all</em>, no registration is required.</strong>
                                <br>
                                As of today, this is our lineup. If you would like to be of service or be a speaker at a meeting, please contact our Marathon Chair, Mark S.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two-->
    <article id="schedule" aria-label="Marathon 2024">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 table-responsive-md py-4">
                    <section aria-label="Saturday's Meetings">
                        <h3 class="white-on-black py-2 mt-2">Saturday, August 31th</h3>

                        <table class="table table-bordered table-striped table-hover" aria-labelledby="tableOne">
                            <caption class="small" id="tableOne">A.A Marathon Meetings for Saturday - The first row consist of four columns which are Time, Name, City, and Topic. The first column has the starting time for each meeting. There are single columns spanning all four columns that are non marathon meeting events with time and event name.</caption>

                            <thead class="table-light">
                                <tr class="text-center">
                                    <th scope="col" class="col-1">Time</th>
                                    <th scope="col" class="col-2">Name</th>
                                    <th scope="col" class="col-2">City</th>
                                    <th scope="col" class="col-2">Topic</th>
                                </tr>
                            </thead>

                            <tr class="table-success">
                                <th scope="row">8:00am</th>
                                <td>Benny S.</td>
                                <td>Salinas</td>
                                <td>Trust The Process</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">9:00am</th>
                                <td>Ron M.</td>
                                <td>Prunedale</td>
                                <td>Spirituality</td>
                            </tr>

                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>10:00am A.A. Kick-Off Speaker</th>
                            </tr>
                            <tr class="table-success">
                                <th scope="row">10:00am</th>
                                <td>Jack F.</td>
                                <td>Salinas</td>
                                <td>Quality vs Quantity</td>
                            </tr>


                            <tr class="table-success">
                                <th scope="row">11:00am</th>
                                <td>Steve C.</td>
                                <td>Salinas</td>
                                <td>Freedom</td>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>11:30 A.A / Al-Anon Double Winner Panel</th>
                            <tr class="table-success">
                                <th scope="row">12:00pm</th>
                                <td>Greg P.</td>
                                <td>Oak Hills</td>
                                <td>Powerlessness</td>
                            </tr>


                            <tr class="table-success">
                                <th scope="row">1:00pm</th>
                                <td>Tony G.</td>
                                <td>Hollister</td>
                                <td>Gratitude</td>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>2:00pm A.A / Al-Anon Speaker Meetings</th>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">2:00pm</th>
                                <td>David G.</td>
                                <td>Monterey</td>
                                <td>Willingness</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">3:00pm</th>
                                <td>Mari W.</td>
                                <td>Salinas</td>
                                <td>One Day At A Time</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">4:00pm</th>
                                <td>Carol H.</td>
                                <td>Salinas</td>
                                <td>Three Legacies of A.A.</td>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>5:00pm Meet the Speaker's Dinner</th>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">5:00pm</th>
                                <td>Eric L.</td>
                                <td>Salinas</td>
                                <td>Acceptance</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">6:00pm</th>
                                <td>Mark F.</td>
                                <td>Monterey</td>
                                <td>Love and Tolerance</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">7:00pm</th>
                                <td>Chael R.</td>
                                <td>Salinas</td>
                                <td>Three Pertinent Ideas</td>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>7:30pm A.A. Speaker Meeting</th>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>8:30pm Round Up Prize Raffle and 50/50 Drawing</th>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>9:30pm Saturday Night Masquerade Dance - Masks Provided</th>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>Good Night and Be Safe</th>
                            </tr>

                            </tbody>
                        </table>

                    </section>

                    <section aria-label="Sunday's events">
                        <h3 class="white-on-black py-2 mt-2">Sunday, September 1st</h3>

                        <table class="table table-bordered table-striped table-hover" aria-labelledby="tableTwo">
                            <caption class="small" id="tableTwo">A.A Marathon Meetings for Sunday - The first row consist of four columns which are Time, Name, City, and Topic. The first column has the starting time for each meeting. There are single columns spanning all four columns that are non marathon meeting events with time and event name.</caption>

                            <thead class="table-light">
                                <tr class="text-center">
                                    <th scope="col" class="col-1">Time</th>
                                    <th scope="col" class="col-2">Name</th>
                                    <th scope="col" class="col-2">City</th>
                                    <th scope="col" class="col-2">Topic</th>
                                </tr>
                            </thead>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>8:00am Round-Up Continental Breakfast and Bingo Games</th>
                            </tr>


                            <tr class="table-success">
                                <th scope="row">9:00am</th>
                                <td>Maxine S.</td>
                                <td>Salinas</td>
                                <td>Newcomers</td>
                            </tr>

                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>9:30am A.A. Panel - Experience Exchange: Foundation for the Future</th>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">10:00am</th>
                                <td>Robert A.</td>
                                <td>Monterey</td>
                                <td>Humility</td>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>11:00am Al-Anon Speaker Meeting</th>
                            </tr>


                            <tr class="table-success">
                                <th scope="row">11:00am</th>
                                <td>Patricia</td>
                                <td>Greenfield</td>
                                <td>Unity</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">12:00pm</th>
                                <td>Cliff A.</td>
                                <td>Monterey</td>
                                <td>Stability</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">1:00pm</th>
                                <td>Ryan Y.</td>
                                <td>Salinas</td>
                                <td>Surrender</td>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>1:30pm Alateen Speaker Meeting</th>
                            </tr>


                            <tr class="table-success">
                                <th scope="row">2:00pm</th>
                                <td>Bob C.</td>
                                <td>Salinas</td>
                                <td>Sponsorship</td>
                            </tr>

                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>3:00pm Ice Cream Social</th>
                            </tr>


                            <tr class="table-success">
                                <th scope="row">3:00pm</th>
                                <td>Michele T.</td>
                                <td>Salinas</td>
                                <td>Serenity</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">4:00pm</th>
                                <td>Irma</td>
                                <td>Salinas</td>
                                <td>Coming Back</td>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>5:00pm A.A.Speaker Meeting</th>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>6:30pm Al-Anon Prize Raffle Drawing</th>
                            </tr>


                            <tr class="table-primary text-center">
                                <th scope="row" colspan=4>A.A. and Al-Anon Marathon Meetings Ends - Hope you had a fun time!</th>
                            </tr>

                            </tbody>
                        </table>
                    </section>

                </div>
            </div>
        </div>
    </article>


    <!-- Part Five -->
    <aside aria-label="Why we have MBAR explanation.">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Why MBAR?">
                            <h3 class="card-title mb-3">Why do we have MBAR?</h3>
                            <p>Frequent contact with newcomers and with each other is the bright spot of our lives.
                                <br>
                                <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">
                                <a class="btn btn-link bb-link" href="pdf/BIG-BOOK-CHAPTER_7_P-89.pdf">Big Book p89<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p class="sr-only">(This is the paragraph from page 89 above.)"Life will take on new meaning. To watch people recover, to see them help others, to watch loneliness vanish, to see a fellowship grow up about you, to have a host of friends—this is an experience you must not miss. We know you will not want to miss it."
                            </p>
                            <p>It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus, we find the fellowship, and so will you.
                                <br>
                                <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">
                                <a class="btn btn-link bb-link" href="pdf/BIG-BOOK-CHAPTER_11_P-152.pdf">Big Book p152<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p class="sr-only">(This is the paragraph from page 152 above.)"Yes, there is a substitute and it is vastly more than that. It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus we find the fellowship, and so will you."
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>


    <!-- Part Seven -->
    <aside aria-label="ADA accessibility and inclusion.">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Event unity">
                            <h4 class="card-title mb-3 text-center text-uppercase">ADA Accessibility</h4>
                            <p>Our team is committed to ensure the success of your event. Please discuss any areas not covered in this document with your Event Manager or our Staff. These general policies, rules and regulations are subject to change.
                            </p>
                            <p><a href="https://www.montereyconferencecenter.com/facility/ada-accessibility/" class="bb-link" target="_blank" rel="noopener noreferrer nofollow"><strong>The Monterey Conference Center ADA compliance policy</strong><span class="sr-only">(Opens a new window)</span></a> - The Monterey Conference Center (MCC) is ADA compliant. In accordance with the ADA, we are responsible for accommodations associated with permanent premise access, such as, but not limited to, wheelchair ramps, elevator standards, door width standards and restroom accessibility.
                            </p>
                            <p>It is the client or renter's responsibility to accommodate non-permanent accessibility requirements and incorporate visually-assisted devices, interpreters, and temporary seating accessibility if needed.
                            </p>
                            <p>Assisted hearing devices are available through our preferred in-house Audio-Visual provider.
                            </p>
                            <p><strong><span class="text-uppercase">ADA Accessibility</span> - MBAR 2024 will provide two ASL Interpreters on these days:</strong>
                            </p>
                            <ul>
                                <li>Saturday - 2.5 hours</li>
                                <li>Sunday - 3.0 hours</li>
                            </ul>
                            <p style="font-style: italic;"><strong class="text-uppercase">Please note:</strong> ADA accessibility's are subject to change with the new schedule, reservation times, and location.
                            </p>
                            <p class='sr-only'>(This is the above text without italics)><strong class="text-uppercase">Please note:</strong> ADA accessibility's are subject to change with the new schedule, reservation times, and location.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>