<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" role="navigation" aria-label="main navigation">
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
                    <button class="nav-link dropdown-toggle active" type="button" id="dropdown-conference" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference<span class="visually-hidden">(current)</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conference">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="register-now.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" aria-current="page" href="mbar_history.php">MBAR History<span class="visually-hidden">(2019 conference, click to go back)</span></a>
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
                        <a class="dropdown-item" href="upcoming_event.php">St. Patrick's Potluck</a>
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

<main role="main" id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="MBAR Conference 2022 Archive">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Conference 2019 and Audio Files<br>Archive</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Conference Services">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <h3 class="card-title text-center">Conference Services: <span class="text-uppercase">Keep It Simple</span></h3>
                        <br>
                        <p><strong>Check in at the registration table</strong> to obtain your registration packets containing your name badges, programs and any tickets for meals or the dance which you may have purchased.
                        </p>
                        <p><strong>Shuttle service will be available</strong> to drive from the conference center to the Bethlehem Lutheran Church for the Saturday morning breakfast and the Saturday evening meet the speakers dinner. Go to registration desk for more information about this complimentary service.
                        </p>
                        <p>Frequent contact with newcomers and with each other is the bright spot of our lives.
                            <br>
                            <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Adobe PDF icon, followed by link">
                            <button type="button" class="btn btn-link bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_7_P-89.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Big Book p89<span class="sr-only">(Opens a new window)</span></button>
                        </p>
                        <p>It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus, we find the fellowship, and so will you.
                            <br>
                            <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, followed by link">
                            <button type="button" class="btn btn-link bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_11_P-152.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Big Book p152<span class="sr-only">(Opens a new window)</span></button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two -->
    <article aria-label="MBAR 2019 Friday Schedule">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <h3 class="text-center"><i class="bi bi-calendar2-check-fill"> </i>Friday, August 30, 2019</h3>
                        <br>
                        <span class="text-uppercase">Steinbeck Ballroom</span> 2 and 3 (Up the Escalator)
                        <br><br>
                        <p><strong>2:00pm</strong> - Registration Opens (Main Lobby Upstairs — Registration Area)
                            <br>
                            <strong>3:00pm</strong> - Kick-Off A.A. Speaker Meeting
                            <br>
                        </p>
                        <hr>
                        <strong>Early Bird A.A. Speaker :</strong> Teresa J. from Monterey, CA
                        <br>
                        <audio controls="">
                            <source src="audio/2019/Teresa-J-Monterey.ogg" type="audio/ogg">
                            <source src="audio/2019/Teresa-J-Monterey.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;">Teresa J. Audio File</span>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                Secretary: Cindy A.
                                <br>
                                Preamble: Arthur T.
                                <br>
                                Traditions: Lisa
                            </div>

                            <div class="col-sm-6">
                                Chapter 3: Donna M.
                                <br>
                                How It Work: Brady S.
                                <br>
                                Vision For You: Kathy M.
                            </div>
                        </div>
                        <br>
                        <strong> From 4:00pm - <span class="text-uppercase">A.A. Marathon Meeting Schedule</span></strong>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                4:00pm - Chael R. (Salinas) Willingness
                                <br>
                                5:00pm - Patricia W. (Salinas) Acceptance
                            </div>

                            <div class="col-sm-6">
                                6:00pm - Saramae (Salinas) Quality vs Quantity
                            </div>
                        </div>
                        <br>
                        <strong>From 6:00pm - <span class="text-uppercase">Al-Anon Marathon Meeting Schedule</span></strong>
                        <div class="row">
                            <div class="col-sm-6">
                                6:00pm Thursday ODAT
                            </div>
                        </div>
                        <br>
                        <strong>6:30pm</strong> - Raffle Prize Drawing
                        <br>
                        <strong>7:30pm</strong> - Friday Night A.A./Al-Anon Meeting
                        <br>
                        (ASL Interpretation Provided)
                        <br>
                        <hr>
                        <strong>A.A. Speaker:</strong> Harry H. from Denver, CO
                        <br><br>
                        <audio controls="">
                            <source src="audio/2019/Harry-H-Denver.ogg" type="audio/ogg">
                            <source src="audio/2019/Harry-H-Denver.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;">Harry H. Audio File</span>
                        <br>
                        <hr>
                        <strong>Al-Anon Speaker:</strong> Jane H. from Denver, CO
                        <br>
                        <audio controls="">
                            <source src="audio/2019/Jane-H-Denver.ogg" type="audio/ogg">
                            <source src="audio/2019/Jane-H-Denver.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;">Jane H. Audio File</span>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                Secretary - Thomas L.
                                <br>
                                Open with Serenity Prayer
                                <br>
                                Al-Anon Welcome
                                <br>
                                Al-Anon Preamble
                                <br>
                                Al-Anon Twelve Steps
                                <br>
                                Al-Anon Twelve Traditions
                                <br>
                                Al-Anon Safety Statement
                                <br>
                                Al-Anon Closing
                            </div>

                            <div class="col-sm-6">
                                Secretary - Ashley G.
                                <br>
                                Preamble: Laura
                                <br>
                                Traditions: Kim
                                <br>
                                Chapter 3: David
                                <br>
                                How It Works: Mare
                                <br>
                                Vision For You: Courtney C.
                                <br>
                                Closing Prayer
                            </div>
                        </div>
                        <br><br>
                        <strong>9:30pm</strong> - Fun and Fellowship Event: <span style="color: #00f; font-weight: 600;">One Man Band</span>
                        <br><br>
                        <strong><span class="text-uppercase">ADA Accessibility</span>: MBAR 2019 will provide</strong>:
                        <ul>
                            <li><strong>2 ASL Interpreters</strong> - Friday: 2.5h</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Three -->
    <article aria-label="MBAR 2019 Saturday Schedule">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <h3 class="text-center"><i class="bi bi-calendar2-check-fill"> </i>Saturday, August 31, 2019</h3>
                        <span class="text-uppercase">Steinbeck Ballroom</span> 2 and 3 (Up the Escalator)
                        <br><br>
                        <p><strong>From 8:00am - <span class="text-uppercase">A.A. Marathon Meeting Schedule</span></strong>
                            <br>
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                8:00am Ron M. (Prunedale)
                                <br>
                                9:00am Jack F. (Salinas) Character Defect
                                <br>
                                10:00am Mike H. (Hollister)
                                <br>
                                11:00am Mark Y. (Salinas) How It Works
                                <br>
                                12:00pm Charlie A. (Salinas)
                                <br>
                                1:00pm Rob C. (Hollister)
                            </div>

                            <div class="col-sm-6">
                                2:00pm Michelle S. (Monterey)
                                <br>
                                3:00pm Jodi B. (Castroville) Twenty-Four-Hour-Living
                                <br>
                                4:00pm Jean T. (Monterey) Rigorous Honesty
                                <br>
                                5:00pm Dan S. (Marina)
                                <br>
                                6:00pm Wes M.
                                <br>
                                10:00pm Steve C.
                            </div>
                        </div>
                        <br><br>
                        <p>
                            <strong>From 8:00am - <span class="text-uppercase">Al-Anon Marathon Meeting Schedule</span></strong>
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                8:00am Monday Night Serenity
                                <br>
                                9:00am Friday Noon Carmel - Keep it Simple
                                <br>
                                10:00am Salinas Saturday - Step and Tradition
                                <br>
                                11:00am Marla M. - I am Enough
                                <br>
                                12:00pm Jem G. - Our Courage to Change
                            </div>

                            <div class="col-sm-6">
                                1:00pm Alateen Panel
                                <br>
                                3:00pm Alateen Meeting (Closed Meeting: Alateen Members Only)
                                <br>
                                3:00pm Su B. - Family Recovery in Institutions
                                <br>
                                4:00pm Laurie B. and Guadalupe L.- Una Dia de la Vez - Spanish speaking
                            </div>
                        </div>
                        <br>
                        <strong>8:00am</strong> - Round Up Fellowship Breakfast (Bethlehem Lutheran Church Hall ∆)
                        <br>
                        <hr>
                        <strong>10:00pm</strong> Doctors Opinion Panel: Jerry C. and Sheila C.
                        <br>
                        <audio controls="">
                            <source src="audio/2019/Doctors-Opinion-Panel.ogg" type="audio/ogg">
                            <source src="audio/2019/Doctors-Opinion-Panel.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;"> Doctors Opinion Panel Audio File</span>
                        <br>
                        <hr>
                        <strong>11:15am</strong> Emotional Sobriety Workshop: Sonny C. and Masa M.
                        <br>
                        <audio controls="">
                            <source src="audio/2019/Emotional-Sobriety-Workshop.ogg" type="audio/ogg">
                            <source src="audio/2019/Emotional=Sobriety=Workshop.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;">Emotional Sobriety Workshop Audio File</span>
                        <br>
                        <hr>
                        <strong>12:30pm</strong> The Many Paths to Spirituality Panel Meeting
                        <br>
                        <span style="margin-left: 100px">Panelist:</span> Jean T., Maggie W., and Carrie H. (Monterey, CA)
                        <br>
                        <audio controls="">
                            <source src="audio/2019/The-Many-Paths-to-Spirituality-Panel.ogg" type="audio/ogg">
                            <source src="audio/2019/The-Many-Paths-to-Spirituality-Panel.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;">Many Paths to Spirituality Panel Meeting Audio File</span>
                        <br>
                        <hr>
                        <strong>2:00pm</strong> - Ice Cream Social <strong>(Stevenson Terrace)</strong>
                        <br>
                        <strong>4:00pm</strong> - Speed Fellowship
                        <br>
                        <strong>5:00pm</strong> - Meet the Speakers Dinner <strong>(Bethlehem Lutheran Church Hall ∆)</strong>
                        <br>

                        <strong>7:00pm</strong> - Round Up Drawing - Must Be Present to Win
                        <br>
                        <strong>8:00pm</strong> - Saturday Night Speaker Meeting - ASL Interpretation Provided
                        <br>
                        <hr>
                        <span style="margin-left: 100px"><strong>A.A. Speaker:</strong> Charlie H. Henderson, NV</span>
                        <br>
                        <audio controls="">
                            <source src="audio/2019/Charlie-H-Henderson.ogg" type="audio/ogg">
                            <source src="audio/2019/Charlie-H-Henderson.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;">Charlie H. Henderson Audio File</span>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                Secretary - May H.
                                <br>
                                Countdown: Michael R. and Naomi B.
                                <br>
                                Preamble: Kristen
                                <br>
                                Traditions: Jimmy B.
                            </div>

                            <div class="col-sm-6">
                                Chapter Three — More About Alcoholism: George F.
                                <br>
                                How It Works: Donna D.
                                <br>
                                Vision For You: Stephanie
                                <br>
                                Closing Prayer
                            </div>
                        </div>
                        <hr>
                        <br>
                        <strong>9:30pm</strong> - Fun and Fellowship Dance
                        <br><br>
                        <strong><span class="text-uppercase">ADA Accessibility</span>: MBAR 2019 will provide</strong>:
                        <ul>
                            <li><strong>2 ASL Interpreters</strong> - Saturday: 2.5h</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Four -->
    <article aria-label="MBAR 2019 Sunday Schedule">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <h3 class="text-center"><i class="bi bi-calendar2-check-fill"> </i>Sunday, September 1, 2019</h3>
                        <span class="text-uppercase">Steinbeck Ballroom</span> 2 and 3 (Up the Escalator)
                        <br><br>
                        <p><strong>8:00am - <span class="text-uppercase">A.A. Marathon Meeting Schedule</span></strong>
                            <br>
                            8:00am Chuck N. (Salinas)
                            <br><br>
                            <strong>8:00am - <span class="text-uppercase">Al-Anon Marathon Meeting Schedule</span></strong>
                            <br>
                            8:00am GMHP Meditation Daily Reader
                        </p>
                        <hr>
                        <strong>9:00am</strong> - <strong>Al-Anon Speaker:</strong> Louise M. (Sacramento, CA)
                        <br>
                        <audio controls="">
                            <source src="audio/2019/Louise-M-Sacramento.ogg" type="audio/ogg">
                            <source src="audio/2019/Louise-M-Sacramento.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;">Louise M. Audio File</span>
                        <br>
                        <hr>
                        (ASL Interpretation Provided)
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                Secretary - Thomas L.
                                <br>
                                Open with Serenity Prayer
                                <br>
                                Al-Anon Welcome
                                <br>
                                Al-Anon Preamble
                            </div>

                            <div class="col-sm-6">
                                Al-Anon Twelve Steps
                                <br>
                                Al-Anon Twelve Traditions
                                <br>
                                Al-Anon Safety Statement
                                <br>
                                Al-Anon Closing
                            </div>
                        </div>
                        <br>
                        <hr>
                        <strong>11:00am</strong> - <strong>A.A. Speaker:</strong> Pat B. from Clovis, CA
                        <br>
                        <audio controls="">
                            <source src="audio/2019/Pat-B-Clovis.ogg" type="audio/ogg">
                            <source src="audio/2019/Pat-B-Clovis.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <br>
                        <span style="font-size: 15px; color: #00f;">Pat B. Audio File</span>
                        <br>
                        <hr>
                        (ASL Interpretation Provided)
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                Preamble
                                <br>
                                Traditions
                                <br>
                                Chapter Three — More About Alcoholism
                            </div>

                            <div class="col-sm-6">
                                How It Works
                                <br>
                                Vision For You
                            </div>
                        </div>
                        <br>
                        <p><strong>12:00pm</strong> - Conference Ends — See You Next Time
                            <br>
                            May God Bless You and Keep You Until Then (Big Book p164)
                        </p>
                        <strong><span class="text-uppercase">ADA Accessibility</span>: MBAR 2019 will provide</strong>:
                        <ul>
                            <li>
                                <strong>2 ASL Interpreters</strong>
                            </li>
                        </ul>
                        <br>
                        <a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank">
                            <img class="img-fluid" src="../images/mbiaa-logo.png" alt="Monterey Bay Area Intergroup Alcoholics Anonymous logo, click to go back to aamonterey.org page."><span class="sr-only">(Opens a new window)<span>
                        </a>
                        <br><br>
                        Click on the logo above to see our local A.A. Central Office website for a current listing of meetings in the area for you after the conclusion of the conference.
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Five -->
    <aside role="complementary" aria-label="Why we have MBAR explanation.">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <h3 class="card-title mb-3 text-uppercase">Why Do We Have MBAR?</h3>
                        <p>Frequent contact with newcomers and with each other is the bright spot of our lives.
                            <br>
                            <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Adobe PDF icon, followed by link">
                            <button type="button" class="btn btn-link bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_7_P-89.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Big Book p89<span class="sr-only">(Opens a new window)</span></button>
                        </p>
                        <p>It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus, we find the fellowship, and so will you.
                            <br>
                            <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, followed by link">
                            <button type="button" class="btn btn-link bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_11_P-152.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Big Book p152<span class="sr-only">(Opens a new window)</span></button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Part Six -->
    <article aria-label="MBAR 2019 Google Map off site location">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <h3 class="card-title mb-3">∆ Bethlehem Lutheran Church</h3>
                        <div class="col-md-12 db-5">
                            <p><img src="images/icons/warning-sign.png" width="50" height="50" alt="Triangular warning sign with an exclamation point."><strong class="text-uppercase">Please Note:</strong> Breakfast and Dinner will be held at<br>
                                <strong>Bethlehem Lutheran Church is located at 800 Cass Street in Monterey.</strong><br>
                                (It is a little over one mile from the Conference Center.)
                            </p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25626.756836816734!2d-121.91606218727391!3d36.59400863899273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1sen!2sus!4v1704873760536!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Bethlehem Lutheran Church"></iframe>
                        </div>
                        <br>
                        <hr>
                        <h3 class="card-title mb-3">Monterey Conference Center</h3>
                        <div class="col-md-12 db-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0350279920303!2d-121.89983220605843!3d36.601465407473455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1sen!2sus!4v1704873971870!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Monterey Conference Center"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Seven -->
    <aside role="complementary" aria-label="ADA accessibility and inclusion.">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <h3 class="card-title mb-3 text-center text-uppercase">ADA Accessibility</h3>
                        <p>Our team is committed to ensure the success of your event. Please discuss any areas not covered in this document with your Event Manager or our Staff. These general policies, rules and regulations are subject to change.
                        </p>
                        <p><a href="https://www.montereyconferencecenter.com/facility/ada-accessibility/" class="bb-link" target="_blank"><strong>The Monterey Conference Center ADA compliance policy</strong><span class="sr-only">(Opens a new window)</span></a> - The Monterey Conference Center (MCC) is ADA compliant. In accordance with the ADA, we are responsible for accommodations associated with permanent premise access, such as, but not limited to, wheelchair ramps, elevator standards, door width standards and restroom accessibility.
                        </p>
                        <p>It is the client or renter's responsibility to accommodate non-permanent accessibility requirements and incorporate visually-assisted devices, interpreters, and temporary seating accessibility if needed.
                        </p>
                        <p>Assisted hearing devices are available through our preferred in-house Audio-Visual provider.
                        </p>
                        <p><strong><span class="text-uppercase">ADA Accessibility</span> - MBAR 2019 will provide two ASL Interpreters on these days:</strong>
                        </p>
                        <ul>
                            <li>Friday - 2.5 hours</li>
                            <li>Saturday - 2.5 hours</li>
                            <li>Sunday - 3.0 hours</li>
                        </ul>
                        <p style="font-style: italic;"><strong class="text-uppercase">Please Note:</strong> ADA accessibility's are subject to change with the new schedule, reservation times, and location.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </aside>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>