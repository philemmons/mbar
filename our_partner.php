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
                        <a class="dropdown-item" href="activities.php">Activities</a>
                        <a class="dropdown-item" href="mbar_history.php">MBAR History</a>
                        <a class="dropdown-item" href="memories.php">Memories</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="our_partner.php" aria-current="page">Our Partner<span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Committees</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" aria-current="page" href="meetings.php">Meetings</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-partner" title="Let It Begin With Me">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Both function more effectively if we remains 'separate,' cooperating but not affiliating with the other.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Our Partner<br>Al-Anon Family Groups</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                <div class="p-3  text-bg-light hero-text-border">
                    <h4 class="fw-bold mb-3 text-primary text-center"><span class="text-dark px-3 px-md-0">A.A.'s Debt of Gratitude to Al-Anon</span>
                    </h4>
                    <hr>
                    <p>The following resolution of gratitude to the Fellowship of the Al-Anon Family Groups was unanimously approved by the 1969 General Service Conference of Alcoholics Anonymous.
                        <br><br>
                        The delegates of this, the 19th General Service Conference of Alcoholics Anonymous, meeting in official session in New York City, this 25th day of April, 1969, do hereby declare:
                        <br><br>
                        WHEREAS, it is the desire of this Conference to confirm the relationship between Alcoholics Anonymous and the Al-Anon Family Groups, and
                        <br><br>
                        WHEREAS, it is the further desire of this Conference to acknowledge A.A.'s debt of gratitude to the Al-Anon Family Groups, therefore,
                        <br><br>
                        BE IT RESOLVED, that Alcoholics Anonymous recognizes the special relationship which it enjoys with the Al-Anon Family Groups, a separate but similar fellowship. And be it further resolved that Alcoholics Anonymous wishes to recognize, and hereby does recognize, the great contribution which the Al-Anon Family Groups have made and are making in assisting the families of alcoholics everywhere.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                <div class="p-3  text-bg-light hero-text-border">
                    <h4 class="fw-bold mb-3 text-primary text-center"><span class="text-dark px-3 px-md-0">How Al-Anon Works for Families and Friends of Alcoholics<br>Lois's Story(1995)</span>
                    </h4>
                    <hr>
                    <p>According to Lois W. — "After a while I began to wonder why I was not as happy as I ought to be, since the one thing I had been yearning for all my married life [Bill's sobriety] had come to pass. Then one Sunday, Bill asked me if I was ready to go to the meeting with him. To my own astonishment as well as his, I burst forth with, 'Damn your old meetings!' and threw a shoe as hard as I could."
                        <br><br>
                        "This surprising display of temper over nothing pulled me up short and made me start to analyze my own attitudes."
                        <br><br>
                        "My life's purpose of sobering up Bill, which had made me feel desperately needed, had vanished. I decided to strive for my own spiritual growth. I used the same principles as he did to learn how to change my attitudes."
                        <br><br>
                        "We began to learn... that the partner of the alcoholic also needed to live by a spiritual program."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Three -->
    <section class="container mb-5 py-2 px-4">
        <div class="row">
            <div class="col-lg-4 text-center mb-5">
                <img src="../images/al-anon-quotes.png" class="img-fluid shadow-wrap" alt="Al-Anon quotes fitting together are the triangle with a transparent background." title="Al-Anon quotes fitting together are the triangle with a transparent background.">
            </div>

            <div class="col-lg-8">
                <h4 class="fw-bold mb-3 text-primary text-center"><span class="text-dark px-3 px-md-0">Al-Anon: Who We Are</span>
                </h4>
                <hr>
                <p>Al-Anon Family Groups are a fellowship of relatives and friends of alcoholics who share their experience, strength, and hope in order to solve their common problems. We believe alcoholism is a family illness and that changed attitudes can aid recovery.
                    <br><br>
                    Al-Anon is not allied with any sect, denomination, political entity, organization, or institution; does not engage in any controversy; neither endorses nor opposes any cause. There are no dues for membership. Al-Anon is self-supporting through its own voluntary contributions.
                    <br><br>
                    Al-Anon has but one purpose: to help families of alcoholics. We do this by practicing the Twelve Steps, by welcoming and giving comfort to families of alcoholics, and by giving understanding and encouragement to the alcoholic.
                </p>
            </div>
        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>