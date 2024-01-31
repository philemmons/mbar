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
                    <button class="nav-link dropdown-toggle active" type="button" id="dropdown-conference" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conference<span class="visually-hidden">(current)</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registration</a>
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item" aria-current="page" href="memories.php">Memories</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="MBAR Conference 2022 Archive">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration is open!">
                    <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup 2022 Archive</span></h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="">
                    <h3 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">2022 A.A. Conference with Al-Anon Participation</h3></span>
                    </h3>
                    <p class="mb-6 h4 text-dark">Featuring Speaker's Audio</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-12 text-center px-3 py-4">
                <img class="img-fluid" src="../images/conference-room.png" alt="Monterey Conference Center meeting room, chairs lined up facing a stage, and past A.A. conference banners.">
            </div>
        </div>
    </section>

    <!--Section Two-->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-sm">
                            <thead class="table-dark">
                                <th colspan="3">
                                    <h3>Friday Night, September 2nd</h3>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8:00pm</td>
                                    <td><i class="bi bi-camera-video-fill"> </i>A.A. Zoom Meeting</td>
                                    <td>Speaker: <strong>Reggie W., Los Angeles, CA</strong></td>
                                </tr>
                                <tr>
                                    <td>50/50 Raffle</td>
                                    <td>Zoom Meeting ID: <strong>851-8969-3046</strong></td>
                                    <td>Zoom Meeting Password: <strong>338999</strong></td>
                                </tr>
                            </tbody>

                            <thead class="table-dark">
                                <th colspan="3">
                                    <h3>Saturday, September 3rd</h3>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8:00am</td>
                                    <td>Registration Opens</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:00am</td>
                                    <td>Al-Anon Marathon Meetings (English/Spanish)</td>
                                    <td></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>10:00am</td>
                                    <td>Kick-Off A.A. Meeting </td>
                                    <td>Speaker: <strong>Arthur T., Carmel, CA</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/ArthurTFromCarmelCA-MBAR2022-09-03-22_01.ogg" type="audio/ogg">
                                            <source src="../audio/2022/ArthurTFromCarmelCA-MBAR2022-09-03-22_01.wav" type="audio/wav">
                                            <source src="../audio/2022/ArthurTFromCarmelCA-MBAR2022-09-03-22.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10:00am</td>
                                    <td>A.A. Meeting Spanish Speaking</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:00am</td>
                                    <td>A.A. Marathon Meetings Begin</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:30am</td>
                                    <td>A.A. Old-Timers' Panel</td>
                                    <td></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>2:00pm</td>
                                    <td>A.A. / Al-Anon Speaker Meeting</td>
                                    <td>Al-Anon Speaker: <strong>Mary N., Orange, CA</strong><br>A.A. Speaker: <strong>Guillermo N., Orange, CA</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Mary-N_(Al-Anon)_Guillermo-N.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Mary-N_(Al-Anon)_Guillermo-N.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Mary-N_(Al-Anon)_Guillermo-N.wav" type="audio/wav">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5:00pm</td>
                                    <td>Meet the Speakers Dinner</td>
                                    <td><strong>Bethlehem Lutheran Church ∆</strong></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>7:30pm</td>
                                    <td>A.A. Speaker Meeting </td>
                                    <td>Speaker: <strong>Rocky S., Phoenix, AZ</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Rocky S_From_PhoenixAZ-MBAR 2022.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Rocky S_From_PhoenixAZ-MBAR 2022.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Rocky S_From_PhoenixAZ-MBAR 2022.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8:30pm</td>
                                    <td>Prize Raffle and 50/50 Drawing</td>
                                    <td>(Immediately Following Speaker Meeting)</td>
                                </tr>
                                <tr>
                                    <td>9:30pm</td>
                                    <td>Dance</td>
                                    <td>(Immediately Following Raffle)</td>
                                </tr>
                            </tbody>

                            <thead class="table-dark">
                                <th colspan="3">
                                    <h3>Sunday, September 4th</h3>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8:00am</td>
                                    <td>Continental Round-Up Breakfast</td>
                                    <td><strong>Bethlehem Lutheran Church ∆</strong></td>
                                </tr>
                                <tr>
                                    <td>8:00am</td>
                                    <td>A.A. Marathon Meetings Begin</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:00am</td>
                                    <td>Al-Anon Marathon Meetings (English/Spanish)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:00am</td>
                                    <td>A.A. Spanish Speaking Meeting </td>
                                    <td>Speaker: <strong>TBA</strong></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>11:00am</td>
                                    <td>Al-Anon Speaker Meeting </td>
                                    <td>Speaker: <strong>Robin K. Marina, CA</strong><br>Speaker: <strong>Terril K. Marina, CA</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Al-Anon-Speaker-Meeting_Robin-K_Terrill-K_01.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Al-Anon-Speaker-Meeting_Robin-K_Terrill-K.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Al-Anon-Speaker-Meeting_Robin-K_Terrill-K_01.wav" type="audio/wav">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </td>
                                </tr>
                                <tr class="table-primary">
                                    <td>1:30am</td>
                                    <td>Al-Anon Family Panel</td>
                                    <td>Panelist: <strong>Michele M. / Pete C. and Dawn C. / Joe P.</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Al-Anon_Family_Panel-Michele-M_Pete-C_Dawn-C_Joe-P_01.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Al-Anon_Family_Panel-Michele-M_Pete-C_Dawn-C_Joe-P.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Al-Anon_Family_Panel-Michele-M_Pete-C_Dawn-C_Joe-P_01.wav" type="audio/wav">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3:00pm</td>
                                    <td>Ice Cream Social</td>
                                    <td><strong>(2nd Floor Terrace)</strong></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>5:00pm</td>
                                    <td>A.A.Speaker Meeting</td>
                                    <td>Speaker: <strong>Chris T., Del Rey Oaks, CA</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Chris-T_From-Del-Rey-Oaks_01.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Chris-T_From-Del-Rey-Oaks.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Chris-T_From-Del-Rey-Oaks_01.wav" type="audio/wav">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6:30pm</td>
                                    <td>Raffle Drawing</td>
                                    <td>(Immediately Following Speaker Meeting)</td>
                                </tr>
                                <tr>
                                    <td>8:00pm</td>
                                    <td>Fellowship and Music</td>
                                    <td>(Immediately Following Raffle)</td>
                                </tr>
                                <tr>
                                    <td>9:00pm</td>
                                    <td>Conference Ends</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Three -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration for 2024 is now open!">
                    <a href="registration.php" class="btn btn-light btn-lg active" role="button" aria-pressed="true">
                        <img class="img-fluid" src="../images/button-reg.png" alt="2022 sea otter logo with register here text.">
                    </a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Pre-Registration for 2024 is now open!">
                    <p>CHECK IN AT REGISTRATION DESK TO OBTAIN YOUR REGISTRATION PACKET CONTAINING YOUR NAME BADGE, PROGRAM, LIST OF ALL MARATHON MEETING TIMES, AND ANY TICKETS FOR MEALS OR EVENTS YOU MAY HAVE PURCHASED.
                        <br><br>
                        FOR MORE INFORMATION WHILE AT THE EVENT, QUESTIONS CONCERNING THE EVENT, OR LOST AND FOUND ITEMS, PLEASE GO TO THE REGISTRATION DESK.
                        <br><br>
                        Δ Location of Event is different than conference site
                        <br><br>
                        <strong>Host of MBAR 2022:</strong> May H. - MBAR Steering Committee
                        <br>
                        <strong>Chairperson:</strong> Cindy A. <strong>Co-Chair:</strong> Phil C.
                        <br>
                        <strong>Treasurer:</strong> Daylene A. <strong>Co-Treasurer:</strong> Mona S.
                    </p>
                    <hr>
                    <p>See our local A.A. Central Office website
                        <a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" _target="blank" title="M.B.I.A.A meeting schedule.">aamonterey.org</a> for a current listing of meetings in the area.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Four -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h3 class="card-title mb-3 text-center">Conference Services: KEEP IT SIMPLE</h3>
                    <p><strong>Check-in at the registration table</strong> to obtain your registration packets containing your name badges, programs and any tickets for meals or the dance which you may have purchased.
                    </p>
                    <p><strong>Shuttle service will be available</strong> to drive from the conference center to the Bethlehem Lutheran Church for the Saturday morning breakfast and the Saturday evening meet the speakers dinner. Go to registration desk for more information about this complimentary service.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Five -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3 class="card-title mb-3"><a href="activities.php">WHY DO WE HAVE MBAR?</a></h3>
                    <p>Frequent contact with newcomers and with each other is the bright spot of our lives.
                        <br>
                        <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_7_P-89.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Big Book p89</a>
                    </p>
                    <p>It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus, we find the fellowship, and so will you.
                        <br>
                        <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_11_P-152.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Big Book p152</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Six -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3 class="card-title mb-3"><a href="activities.php">Bethlehem Lutheran Church</a></h3>
                    <div class="col-md-12 db-5">
                        <p><img src="images/icons/warning-sign.png" width="50" height="50" alt="Triangular warning sign with an exclamation point."><strong>PLEASE NOTE:</strong> Breakfast and Dinner will be held at<br>
                            <strong>Bethlehem Lutheran Church, located at 800 Cass Street in Monterey.</strong><br>
                            (It is a little over one mile from the Conference Center.)
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25626.756836816734!2d-121.91606218727391!3d36.59400863899273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1sen!2sus!4v1704873760536!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <br>
                    <hr>
                    <h3 class="card-title mb-3"><a href="activities.php">Monterey Conference Center</a></h3>
                    <div class="col-md-12 db-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0350279920303!2d-121.89983220605843!3d36.601465407473455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1sen!2sus!4v1704873971870!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Seven -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h3 class="card-title mb-3 text-center">ADA ACCESSIBILITY</h3>
                    <p>Our team is committed to ensure the success of your event. Please discuss any areas not covered in this document with your Event Manager or our Staff. These general policies, rules and regulations are subject to change.
                    </p>
                    <p><a href="https://www.montereyconferencecenter.com/facility/ada-accessibility/" class="bb-link" target="_blank"><strong>The Monterey Conference Center ADA compliance policy</strong></a> - The Monterey Conference Center (MCC) is ADA compliant. In accordance with the ADA, we are responsible for accommodations associated with permanent premise access, such as, but not limited to, wheelchair ramps, elevator standards, door width standards and restroom accessibility.
                    </p>
                    <p>It is the client or renter's responsibility to accommodate non-permanent accessibility requirements and incorporate visually-assisted devices, interpreters, and temporary seating accessibility if needed.
                    </p>
                    <p>Assisted hearing devices are available through our preferred in-house Audio-Visual provider.
                    </p>
                    <p><strong>ADA ACCESSIBILITY - MBAR 2022 will provide two ASL Interpreters on these days:</strong>
                    </p>
                    <ul>
                        <li>Friday - 2.5 hours</li>
                        <li>Saturday - 2.5 hours</li>
                        <li>Sunday - 3.0 hours</li>
                    </ul>
                    <p style="font-style: italic;"><strong>PLEASE NOTE:</strong> ADA accessibility's are subject to change with the new schedule, reservation times, and location.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>