<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Home </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/" >';
include_once 'header-bottom.inc';
?>

<nav class="navbar navbar-expand-lg" aria-label="main menu">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home<span class="visually-hidden">(current)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Monterey Bay Area Roundup</h2>
                    <p class="h3 text-dark">Post-Conference Gratitude and Reflection
                    </P>
                    <p class="dark-text">We want to take a moment to thank everyone who participated in and contributed to the success of our recent A.A. conference. The spirit of fellowship and recovery was alive in every session, conversation, and shared experience. Whether you attended, volunteered, or supported from afar, your presence and involvement helped create an environment of healing, growth, and connection.
                        <br><br>
                        As we return to our daily lives, we encourage you to reflect on the valuable lessons and insights gained during the conference. Let's continue to carry the message of recovery to those who still suffer and strengthen our bonds within this community. We look forward to seeing you at future gatherings, and until then, stay connected and keep coming back!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="information cards">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-heart-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Heartfelt Thank You
                            </p>
                            <p class="card-text">On behalf of everyone in our A.A. and Al-Anon communities, we want to extend our deepest gratitude to all the volunteers who made this event possible. Your dedication, compassion, and hard work have created a space for recovery, support, and connection. Whether you were setting up, organizing, or simply offering a kind word, your efforts did not go unnoticed, and they reflect the true spirit of fellowship. We couldn't have done this without you, and for that, we are immensely grateful. Thank you for giving your time, energy, and heart to this important event.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="conference-2024.php" class="btn btn-primary">2024 Conference Schedule</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">

                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="contact.php" class="bb-link">Volunteering in Recovery</a>
                            </p>
                            <p class="card-text">We have found that volunteering to do service significantly improves the quality of our recovery. By giving back, we not only help others but also strengthen our own journey.
                                <br><br>
                                Remember, you get what you give. Join us in making a positive impact and enhancing our recovery community.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Ready to be of Service</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-people-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Helping Hands
                            </p>
                            <p class="card-text">Give a 'Helping Hand' for someone who wants to go to the conference but can't afford it. The purpose is to ensure that anyone who wants to benefit from the recovery and support available at these events is able to participate, regardless of financial constraints. This embodies the spirit of mutual support and fellowship central to A.A.'s mission.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a class="btn btn-primary" href="helping_hands.php">Helping Hands</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Part Two -->
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="mbar_history.php" class="bb-link">Growth and Legacy</a>
                            </p>
                            <p class="card-text">Since 1993, the Monterey Bay Area Roundup (MBAR) has steadily grown in size and significance since its inception, As the event continues to evolve, it remains deeply rooted in the spiritual principles of A.A. and Al-Anon, with a strong focus on fostering personal growth, mutual support, and spiritual development.
                                <br><br>
                                Throughout its history, the Roundup has played a vital role in the lives of countless individuals and families, providing a space where they can find hope, healing, and fellowship in their recovery journey.
                                <br><br>
                                Explore past conferences, flyers, and A.A./Al-Anon speaker recordings to catch a glimpse of our next MBAR.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="mbar_history.php" class="btn btn-primary">MBAR's History</a></small>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-translate me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="https://montereybayarearoundup.org/es/" class="bb-link">Spanish Translation</a>
                            </p>
                            <p class="card-text">Translating a website into Spanish is important because it ensures that essential recovery resources are accessible to Spanish-speaking individuals. In Alcoholics Anonymous(A.A.) and Al-Anon, inclusivity is key to reaching as many people as possible who need support. By offering a Spanish-language version of the site, we can better serve the diverse needs of our community, making sure that everyone, regardless of language, has the opportunity to find help and connect with others on their recovery journey.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="https://montereybayarearoundup.org/es/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Spanish Website<span class="sr-only">(Opens a new window)</span></a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-cup-hot-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Marathon Meetings
                            </p>
                            <p class="card-text">Marathon meetings are a crucial part of A.A. and Al-Anon conventions because they provide continuous support and fellowship for all. These meetings offer a space for members to share their experiences, strength, and hope around the clock, ensuring that help is always available when needed.
                                <br><br>
                                If you would like to be of service, or be a speaker at a meeting or submit your marathon meeting schedule, please contact our A.A Marathon Chair: Mark S. or our Spanish-Speaking Chair: Robert or our Al-Anon Marathon Chair: Olya O.
                            </p>
                        </div>

                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-sm-7 text-center mb-2 mb-sm-0">
                                    <small class="text-body-secondary"><a href="aa-spanish-marathon-2024.php" class="btn btn-primary">Spanish A.A. Meetings</a></small>
                                </div>
                                <div class="col-sm-5 text-center mb-2 mb-sm-0">
                                    <small class="text-body-secondary"><a href="aa-marathon-2024.php" class="btn btn-primary">A.A. Meetings</a></small>
                                </div>
                                <div class="col-sm-12 text-center mt-sm-2">
                                    <small class="text-body-secondary"><a href="al-anon-marathon-2024.php" class="btn btn-primary">Al-Anon Meetings</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="activities.php" class="bb-link">Activities and Highlights</a>
                            </p>
                            <p class="card-text">Over the years, the Monterey Bay Area Roundup has grown to include a variety of activities that support personal and spiritual growth, including:
                            </p>
                            <p class="card-text">
                            <ul>
                                <li><strong>Speaker Meetings</strong>: These sessions often feature A.A. or Al-Anon members who share their stories of experience, strength, and hope.
                                </li>
                                <li><strong>Workshops and Panels</strong>: Topics cover the practical aspects of maintaining sobriety, such as sponsorship, emotional well-being, and staying spiritually connected.
                                </li>
                                <li><strong>Fellowship and Social Events</strong>: Dances, meals, and informal gatherings provide opportunities for participants to bond and share experiences outside of formal meetings.
                                </li>
                                <li><strong>Volunteerism and Service</strong>: Many participants volunteer their time and effort to help organize the event, reflecting A.A.'s and Al-Anon's tradition of service as a key element of recovery.
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">View 2024 Activities</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-question-circle me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Why do we have MBAR?
                            </p>
                            <p class="card-text">A.A. conventions are more than just social gatherings; they are spiritual retreats, educational opportunities, and celebrations of sobriety that help individuals and families stay connected to the principles of Alcoholics Anonymous. They foster fellowship, provide opportunities for personal and spiritual growth, and serve as a reminder that recovery is a lifelong journey supported by community and a Higher Power.
                            </p>
                            <p class="card-text">Frequent contact with newcomers and with each other is the bright spot of our lives.
                                <br>
                                <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">
                                <a class="btn btn-link bb-link" href="pdf/BIG-BOOK-CHAPTER_7_P-89.pdf">Big Book p89<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p class="sr-only">(This is the paragraph from page 89 above.)"Life will take on new meaning. To watch people recover, to see them help others, to watch loneliness vanish, to see a fellowship grow up about you, to have a host of friends—this is an experience you must not miss. We know you will not want to miss it."
                            </p>
                            <p class="card-text">It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus, we find the fellowship, and so will you.
                                <br>
                                <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">
                                <a class="btn btn-link bb-link" href="pdf/BIG-BOOK-CHAPTER_11_P-152.pdf">Big Book p152<span class="sr-only">(Open pdf in browser)</span></a>
                            </p>
                            <p class="sr-only">(This is the paragraph from page 152 above.)"Yes, there is a substitute and it is vastly more than that. It is a fellowship in Alcoholics Anonymous. There you will find release from care, boredom and worry. Your imagination will be fired. Life will mean something at last. The most satisfactory years of your existence lie ahead. Thus we find the fellowship, and so will you."
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="memories.php" class="btn btn-primary">Event Memories</a></small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </article>

    <!-- Part Three -->
    <article aria-label="group definition">
        <div class="container mb-5 py-2 px-4">
            <div class="row">
                <div class="col-lg-8">
                    <section aria-label="About MBAR">
                        <h3 class="text-uppercase">About Monterey Bay Area Roundup</h3>
                        <p><strong class="text-uppercase">Alcoholics Anonymous</strong> is a fellowship of people who share their experience, strength and hope with each other that they may solve their common problem and help others to recover from alcoholism. The only requirement for membership is a desire to stop drinking. There are no dues or fees for A.A. membership; we are self-supporting through our own contributions. A.A. is not allied with any sect denomination, politics, organization or institution; does not wish to engage in any controversy; neither endorses nor opposes any causes. Our primary purpose is to stay sober and help other alcoholics to achieve sobriety.
                            <br><br>
                            <strong class="text-uppercase">What is Al-Anon?</strong>
                            Al-Anon Family Groups are a fellowship of relatives and friends of alcoholics who share their experience, strength, and hope in order to solve their common problems. We believe alcoholism is a family illness and that changed attitudes can aid recovery.
                            <br><br>
                            Al-Anon is not allied with any sect, denomination, political entity, organization, or institution; does not engage in any controversy; neither endorses nor opposes any cause. There are no dues for membership. Al-Anon is self-supporting through its own voluntary contributions.
                            <br><br>
                            Al-Anon has but one purpose: to help families of alcoholics. We do this by practicing the Twelve Steps, by welcoming and giving comfort to families of alcoholics, and by giving understanding and encouragement to the alcoholic.
                        </p>
                    </section>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/coastal_wave.png" class="img-fluid shadow-wrap" alt="Gorgeous, satin blue Pacific Ocean sunset with waves washing on the rocky shore." title="Gorgeous, satin blue Pacific Ocean sunset with waves washing on the rocky shore.">
                </div>
            </div>
        </div>
    </article>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>