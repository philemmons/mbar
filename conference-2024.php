<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - 2024 Conference </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/conference-2024.php" >';
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
                        <a class="dropdown-item active" aria-current="page" href="conference-2024.php">MBAR 2024<span class="visually-hidden">(current)</span></a>
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
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in 2026!">
                    <h2 class="display-6 fw-bold px-3 px-md-0">A.A. Conference
                        <br>with
                        <br>Al-Anon Participation
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Event registration, reason, location, and unity">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="MBAR excitement!">
                        <section aria-label="Registration Area">
                            <h3 class="fw-bold px-3 px-md-0">We're excited to announce our upcoming MBAR on<br>Labor Day weekend!</h3>
                            <p class="h3 text-dark">
                                <a class="d-link" href="https://us02web.zoom.us/j/83143062293?pwd=QXZMWUVoZEkzVnUyY0poanAyclBHdz09" rel="noopener noreferrer nofollow" target="_blank">Virtual Kick-Off Zoom Meeting<span class="sr-only">(Opens Zoom Application)</span></a>
                            </p>
                            <p class="dark-text">August 30th at 8:00pm PDT
                                <br>
                                Speaker: Oliver D. from Delaware
                                <br>
                                Meeting ID: <strong>831 4306 2293</strong>
                                <br>
                                Passcode: <strong>2024</strong>
                                <br>
                                This meeting is open to everyone, and we encourage you to join!
                            </p>
                            <p class="h3 text-dark">In-Person Meetings</p>
                            <p class="dark-text">August 31st and September 1st at the Monterey Conference Center
                                <br>
                                Please note that registration is required for the in-person event.
                            </p>
                            <p class="dark-text mb-6">We are excited to have you join us! Please come over to the registration table to sign up in person, as online registration is now closed. We can't wait to welcome you!</p>
                            <p class="h3 text-dark">MBAR's Schedule of Events</p>
                            <a class="btn btn-outline-primary" href="pdf/MBAR-2024-program.pdf"><img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon"> MBAR's Program 2024<span class="sr-only">(Open pdf in browser)</span></a>
                        </section>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center py-4 mb-5">
                <div class="col-sm-12 col-12 text-center px-3">
                    <img class="img-fluid" src="../images/banners-2024.png" alt="Main meeting room stage with A.A. conference banners.">
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two-->
    <article id="schedule" aria-label="MBAR 2024 Schedule">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <section aria-label="Friday's events">
                            <h3 class="white-on-black py-2 mt-2">Friday Night, August 30th - Free for All</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-md-2 top feature-speaker">
                                    <strong>8:00pm</strong>
                                </div>
                                <div class="col-md-5 middle feature-speaker">
                                    <i class="bi bi-camera-video-fill" aria-hidden="true"> </i>A.A. Zoom Meeting
                                    <br>
                                    ID: <strong>831 4306 2293 </strong>
                                    <br>
                                    Password: <strong>2024</strong>
                                </div>
                                <div class="col-md-5 bottom feature-speaker">
                                    Speaker: <strong>Oliver D., Delaware</strong>
                                    <br>
                                    <strong>Topic:</strong> Experience, Strength, and Hope
                                    <br>
                                    <em>(ASL Interpretation Provided)</em>
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>9:30pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>Online 50/50 Drawing</strong>
                                    <br>
                                    (Immediately Following Speaker Meeting)
                                </div>
                            </div>
                        </section>

                        <section aria-label="Saturday's events">
                            <h3 class="white-on-black py-2 mt-2">Saturday, August 31st <br>Steinbeck Ballroom (2 and 3)</h3>
                            <div class="row g-0 mb-4">
                                <div class="col-md-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-md-10 bottom">
                                    <strong>Registration Opens</strong>
                                </div>


                                <div class="col-md-2 top marathon-cell">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-md-10 bottom marathon-cell">
                                    A.A.(English): Marathon Meetings Begin - <strong>Colton 1</strong>
                                    <br>
                                    (<a href="aa-marathon-2024.php" class="d-link">See insert for scheduled times</a>)
                                    <br><br>
                                    A.A.(Spanish): Marathon Meetings Begin - <strong>Colton 1</strong>
                                    <br>
                                    (<a href="aa-spanish-marathon-2024.php" class="d-link">See insert for scheduled times</a>)
                                    <br><br>
                                    Al-Anon(English): Marathon Meetings Begin - <strong>Steinbeck 1b</strong>
                                    <br>
                                    (<a href="al-anon-marathon-2024.php" class="d-link">See insert for scheduled times</a>)
                                </div>


                                <div class="col-md-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-md-10 bottom marathon-cell">
                                    Al-Anon(Spanish): Marathon Meetings Begin - <strong>Steinbeck 1a</strong>
                                    <br>
                                    (<a href="al-anon-marathon-2024.php" class="d-link">See insert for scheduled times</a>)
                                </div>

                                <div id="kos"></div>
                                <div class="col-md-2 top feature-speaker">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-md-5 middle feature-speaker">
                                    <strong>A.A. Kick-Off Speaker</strong>
                                    <br>
                                    Speaker: <strong>Mark S., Salinas, CA</strong>
                                    <audio controls="">
                                        <source src="../audio/2024/Mark-S-from-Salinas-CA-MBAR2024-08-31-24.mp3" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <br>
                                    <a href="con-2024-mark.php" class="btn btn-outline-primary btn-sm">Read Transcript<span class="sr-only">(Opens a new window, click to go back)</span></a>
                                    <br><br>
                                    Secretary: Jean T.
                                    <br>
                                    <em>(ASL Interpretation Provided)</em>
                                </div>
                                <div class="col-md-5 bottom feature-speaker">
                                    Preamble: Katherine J.<br>
                                    Twelve Traditions: Todd S.<br>
                                    More About Alcoholism: Arthur T.<br>
                                    How It Works: Samantha C.<br>
                                    Vision For You: Aubrey G.<br>
                                    Closing Prayer: Cole T.
                                </div>

                                <div id="dwp"></div>
                                <div class="col-md-2 top feature-speaker">
                                    <strong>11:30am</strong>
                                </div>
                                <div class="col-md-10 bottom feature-speaker">
                                    <strong>A.A. / Al-Anon Double Winner Panel</strong>
                                    <br>
                                    Panelist: <strong>Annette C. and Micha C.</strong>
                                    <div class="row gx-1">
                                        <div class="col-md-6 border-0">
                                            <strong>Annette C.</strong>
                                            <br>
                                            <audio controls="">
                                                <source src="../audio/2024/Annette-C-double-winner-MBAR2024-08-31-24.mp3" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                            <a href="con-2024-annette.php" class="btn btn-outline-primary btn-sm">Read Transcript 1 of 2<span class="sr-only">(Opens a new window, click to go back)</span></a>
                                        </div>
                                        <div class="col-md-6 border-0"><strong>Micha C.</strong>
                                            <br>
                                            <audio controls="">
                                                <source src="../audio/2024/Micha-C-double-winner-MBAR2024-08-31-24.mp3" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                            <a href="con-2024-micha.php" class="btn btn-outline-primary btn-sm">Read Transcript 2 of 2<span class="sr-only">(Opens a new window, click to go back)</span></a>
                                        </div>
                                    </div>
                                    Secretary: Kathleen S.
                                    <br>
                                    <em>(ASL Interpretation Provided)</em>
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>Speed Fellowship - Stevenson 2</strong>
                                </div>

                                <div id="aalsm"></div>
                                <div class="col-md-2 top feature-speaker">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom feature-speaker">
                                    <strong>A.A. / Al-Anon Speaker Meeting</strong>
                                    <div class="row gx-1">
                                        <div class="col-md-6 border-0">
                                            Al-Anon Speaker: <strong>Shelly S., Newport Beach, CA</strong>
                                            <br>
                                            <audio controls="">
                                                <source src="../audio/2024/Shelly-S-from-Newport-Beach-CA-MBAR2024-08-31-24.mp3" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                            <a href="con-2024-shelly.php" class="btn btn-outline-primary btn-sm">Read Transcript 1 of 2<span class="sr-only">(Opens a new window, click to go back)</span></a>
                                        </div>
                                        <div class="col-md-6 border-0">
                                        <em>(ASL Interpretation Provided)</em>
                                        <br><br>
                                            Secretary: Jane H.<br>
                                            Al-Anon Welcome: Su C.<br>
                                            Al-Anon Preamble: Olya O.<br>
                                            Al-Anon Twelve Steps: Susan A.<br>
                                            Al-Anon Closing : Dawn C.
                                        </div>
                                        <hr>
                                        <div class="col-md-6 border-0">
                                            A.A. Speaker: <strong>Denis D., Santa Cruz, CA </strong>
                                            <br>
                                            <audio controls="">
                                                <source src="../audio/2024/Denis-D-from-Santa-Cruz-CA-MBAR2024-08-31-24.mp3" type="audio/mpeg">
                                                Your browser does not support the audio element.
                                            </audio>
                                            <br>
                                            <a href="con-2024-denis.php" class="btn btn-outline-primary btn-sm">Read Transcript 2 of 2<span class="sr-only">(Opens a new window, click to go back)</span></a>

                                        </div>
                                        <div class="col-md-6 border-0">
                                            Secretary: Renee C.<br>
                                            <em>(ASL Interpretation Provided)</em>
                                            <br><br>
                                            Twelve Traditions: Maryam H.<br>
                                            More About Alcoholism: Paul F.<br>
                                            How It Works: Sean B.<br>
                                            Vision For You: Gina H.<br>
                                            Closing Prayer: T.C. W.<br>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>3:30pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>Goose Chase Scavenger Hunt - Stevenson 2</strong>
                                </div>


                                <div class="col-md-2 top">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom">
                                    <strong>Meet the Speaker's Dinner - Bethlehem Lutheran Church ∆</strong>
                                </div>

                                <div id="asm1"></div>
                                <div class="col-md-2 top feature-speaker">
                                    <strong>7:30pm</strong>
                                </div>
                                <div class="col-md-5 middle feature-speaker">
                                    <strong>A.A. Speaker Meeting</strong>
                                    <br>
                                    Speaker: <strong>Krystal M., Sacramento, CA</strong>
                                    <br><br>
                                    Secretary: Chris T.<br>
                                    Countdown: Carolyn H. and Arthur T. <br>
                                    <em>(ASL Interpretation Provided)</em>
                                </div>
                                <div class="col-md-5 bottom feature-speaker">
                                    Preamble: Kathleen S.<br>
                                    Twelve Traditions: Jill V.<br>
                                    More About Alcoholism: Joel Y.<br>
                                    How It Works: Mark F.<br>
                                    A Vision For You: Micah C.<br>
                                    A Vision for You in Spanish: Robert<br>
                                    Closing Prayer: Phillip E.
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>8:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>The Al-Anon Silent Auction Closes</strong>
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>8:30pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>Roundup Prize Raffle and 50/50 Drawing - Must be present to win</strong>
                                    <br>
                                    (Immediately Following Speaker Meeting)
                                </div>


                                <div class="col-md-2 top">
                                    <strong>9:30pm</strong>
                                </div>
                                <div class="col-md-10 bottom">
                                    <strong>Fun and Fellowship Masquerade Dance</strong>
                                </div>


                            </div>
                        </section>

                        <section aria-label="Sunday's events">
                            <h3 class="white-on-black py-2 mt-2">Sunday, September 1st <br>Steinbeck Ballroom (2 and 3)</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-md-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-md-10 bottom">
                                    <strong>Registration Opens</strong>
                                </div>


                                <div class="col-md-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-md-10 bottom">
                                    <strong>Round-Up Breakfast and Bingo Games - Bethlehem Lutheran Church ∆</strong>
                                </div>


                                <div class="col-md-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-md-10 bottom marathon-cell">
                                    A.A.(English): Marathon Meetings Begin - <strong>Colton 1</strong>
                                    <br>
                                    (<a href="aa-marathon-2024.php" class="d-link">See insert for scheduled times</a>)
                                    <br><br>
                                    A.A.(Spanish): Marathon Meetings Begin - <strong>Steinbeck 1a</strong>
                                    <br>
                                    (<a href="aa-spanish-marathon-2024.php" class="d-link">See insert for scheduled times</a>)
                                    <br><br>
                                    Al-Anon(English\Spanish): Marathon Meetings Begin - <strong>Steinbeck 1b</strong>
                                    <br>
                                    (<a href="al-anon-marathon-2024.php" class="d-link">See insert for scheduled times</a>)
                                </div>

                                <div id="aap"></div>
                                <div class="col-md-2 top feature-speaker">
                                    <strong>9:30am</strong>
                                </div>
                                <div class="col-md-10 bottom feature-speaker">
                                    <strong>A.A. Panel - Experience Exchange: Foundation for the Future</strong>
                                    <br>
                                    Panelist: <strong>Pasquale C., Lisa M., Mike V., and Jill V.</strong>
                                    <br><br>
                                    Secretary: Maryam H.
                                </div>


                                <div class="col-md-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-md-10 bottom marathon-cell">
                                    A.A.(Spanish): Marathon Meetings Begin - <strong>Steinbeck 1a</strong>
                                    <br>
                                    (<a href="aa-spanish-marathon-2024.php" class="d-link">See insert for scheduled times</a>)
                                </div>

                                <div id="alsm"></div>
                                <div class="col-md-2 top feature-speaker">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-md-5 middle feature-speaker">
                                    <strong>Al-Anon Speaker Meeting </strong>
                                    <br>
                                    Speakers: <strong>Chris W. and Eileen W., Redding, CA (Parents)</strong>
                                    <br><br>
                                    Secretary: Jane H.
                                    <br>
                                    <em>(ASL Interpretation Provided)</em>
                                </div>
                                <div class="col-md-5 bottom feature-speaker">
                                    Open with Serenity Prayer: Terrill K.<br>
                                    Al-Anon Welcome: Natalie A.<br>
                                    Al-Anon Preamble: Michelle M.<br>
                                    Al-Anon Twelve Steps: Natalie S.<br>
                                    Al-Anon Closing: Liz M.
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>Paint Party - Stevenson 2</strong>
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>Werewolf Fellowship Game - Stevenson 2</strong>
                                </div>

                                <div id="atsm"></div>
                                <div class="col-md-2 top feature-speaker">
                                    <strong>1:30pm</strong>
                                </div>
                                <div class="col-md-5 middle feature-speaker">
                                    <strong>Alateen Speaker Meeting</strong>
                                    <br>
                                    Speaker: <strong>Amelia - 16 year old and Ask-it-Basket</strong>
                                    <p>MBAR abides by the B-17 NCWSA Requirement for Alateen Member Safety - For more information contact Concetta C. at <?php echo getenv('mbar-alateen-1'); ?> or Marge S. at <?php echo getenv('mbar-alateen-2'); ?></p>

                                    Secretary: Marge S.(Chair)
                                    <br>
                                    <em>(ASL Interpretation Provided)</em>
                                </div>
                                <div class="col-md-5 bottom feature-speaker">
                                    Open with Serenity Prayer<br>
                                    Al-Anon Welcome: Jody E.<br>
                                    Al-Anon Preamble: Susan A.<br>
                                    Al-Anon Twelve Steps: Jackie H.<br>
                                    Al-Anon Closing: Concetta C.<br>
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>Cornhole and Fellowship Hour - Stevenson 2</strong>
                                </div>


                                <div class="col-md-2 top">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom">
                                    <strong>Ice Cream Social - 2nd Floor Terrace</strong>
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>A.A. Trivia: General Service - Stevenson 2</strong>
                                </div>

                                <div id="asm2"></div>
                                <div class="col-md-2 top feature-speaker">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-md-5 middle feature-speaker">
                                    <strong>A.A. Speaker Meeting</strong>
                                    <br>
                                    Speaker: <strong>Dean S., Salinas, CA</strong>
                                    <br><br>
                                    Secretary: Roger M.
                                    <br>
                                    <em>(ASL Interpretation Provided)</em>
                                </div>
                                <div class="col-md-5 bottom feature-speaker">
                                    Preamble: Samantha C.<br>
                                    Preamble in Spanish: Robert<br>
                                    Twelve Traditions: Mark S.<br>
                                    More About Alcoholism: Conor R.<br>
                                    How It Works: Rick<br>
                                    Vision For You: Naomi B.<br>
                                    Closing Prayer: Arthur T.
                                </div>


                                <div class="col-md-2 top cell-color">
                                    <strong>6:30pm</strong>
                                </div>
                                <div class="col-md-10 bottom cell-color">
                                    <strong>Al-Anon Prize Raffle Drawing - Must be present to win</strong>
                                    <br>
                                    (Immediately Following Speaker Meeting)
                                </div>


                                <div class="col-md-2 top">
                                    <strong>7:00pm</strong>
                                </div>
                                <div class="col-md-10 bottom">
                                    <strong>Conference Ends - Until 2026</strong>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <a href="#map" class="d-link"><strong>Δ Location of Event is different than conference site.</strong></a>
                                </div>
                                <div class="col-md-6">
                                    <strong>Disclaimer: This schedule is subject to change.</strong>
                                </div>
                            </div>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Three -->
    <aside aria-label="Registration info">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Check In, Walk In, and Lost and Found">
                            <h3 class="card-title mb-3">Registration Desk</h3>
                            <p>Walk-in attendee's register here and assist with payment issues or questions.</p>
                            <p class="px-sm-4">Check in at registration desk to obtain your registration packet containing your name badge, program, list of all marathon meeting times, any tickets for meals or events, and pre-ordered t-shirt you may have purchased.
                                <br><br>
                                For more information while at the event, questions concerning the event, or lost and found items, please go to the registration desk.
                            </p>
                        </section>

                        <div class="row justify-content-center py-2">
                            <div class="col-md-12"><strong>Host of MBAR 2024:</strong> Cindy A.</div>

                            <div class="col-md-4"><strong>A.A. Chairperson:</strong> Chris T.</div>
                            <div class="col-md-4"><strong>Al-Anon Chairperson:</strong> Jane P.</div>

                            <div class="col-md-12"><strong>Co-Chair:</strong> Renee C.</div>

                            <div class="col-md-4"><strong>Treasurer:</strong> Carolyn H.</div>
                            <div class="col-md-4"><strong>Co-Treasurer:</strong> Jean T.</div>

                            <div class="col-md-12"><strong>Recording Secretary:</strong> Roger M.</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Part Four -->
    <article aria-label="Conference Services">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Describe services">
                            <h3 class="card-title mb-3">Conference Services: Keep it Simple</h3>
                            <p><strong>Shuttle service will be available</strong> as to drive from the conference center to the Bethlehem Lutheran Church for the Sunday morning breakfast and the Saturday evening Meet the Speaker's Dinner. Go to the registration desk for more information about this complimentary service.
                            </p>
                            <p>This is the Monterey Conference Center floor plan for navigating MBAR.
                                <br>
                                <a class="bb-link" href="pdf/mcc-floor-plan-2024.pdf">Monterey Conference Center Map<img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon"><span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <hr>
                            <p>See our local A.A. Central Office website
                                <a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank" rel="noopener noreferrer" title="M.B.I.A.A meeting schedule.">www.aamonterey.org<span class="sr-only">(Opens a new window)</span></a> for a current listing of meetings in the area.
                            </p>
                        </section>
                    </div>
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

    <!-- Part Six -->
    <div id="map"></div>
    <article aria-label="MBAR 2024 Google Map">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Event locations">
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Bethlehem+Lutheran+Church+800+Cass+St+Monterey,+CA+93940/@36.5939841,-121.8958073,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de425e4f48de1:0xc2ec674814c2393f!2m2!1d-121.8958736!2d36.5940092?entry=ttu" class="bb-link" target="_blank" title="Direct link to Google Map">Bethlehem Lutheran Church<span class="sr-only">(Opens a new window)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <p><img src="images/icons/warning-sign.png" width="50" height="50" alt="Triangular warning sign with an exclamation point."><strong class="text-uppercase">Please note:</strong> Breakfast and Dinner will be held at<br>
                                    <strong>Bethlehem Lutheran Church, located at 800 Cass Street in Monterey.</strong><br>
                                    (It is a little over one mile from the Conference Center.)
                                </p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25626.756836816734!2d-121.91606218727391!3d36.59400863899273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1sen!2sus!4v1704873760536!5m2!1sen!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Bethlehem Lutheran Church" aria-hidden="true"></iframe>
                            </div>
                            <br>
                            <hr>
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Monterey+Conference+Center+1+Portola+Plaza+Monterey,+CA+93940/@36.6014612,-121.8949613,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de422461f891b:0x20f8f64ee124f091!2m2!1d-121.8949613!2d36.6014612?entry=ttu" class="bb-link" target="_blank" title="Direct link to Google Map">Monterey Conference Center<span class="sr-only">(Opens a new window)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0350279920303!2d-121.89983220605843!3d36.601465407473455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1sen!2sus!4v1704873971870!5m2!1sen!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Monterey Conference Center" aria-hidden="true"></iframe>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include_once 'ada-access-inclusion.inc' ?>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>