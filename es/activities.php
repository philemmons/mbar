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
                    <a class="nav-link" href="index.php" aria-current="page">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item active" aria-current="page" href="activities.php">Activities<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="nav-link" href="upcoming_event.php">Noche de bingo</a>
                        <a class="nav-link" href="logo_contest.php">Concurso de logotipos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link" href="contributions.php">Contribución</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <!-- Hero Section -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-activity" title="Hermoso mosaico de azulejos de Monterey en el Centro de Conferencias que inspira actividades de compañerismo.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Reunirs del área de la Bahía de Monterey<br>
                            Actividades</span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row pt-4 mb-5">
            <div class="col-lg-4 col-sm-12 col-12">
                <figure class="figure">
                    <img src="../images/speaker-on-stage.png" class="figure-img img-fluid" alt="Orador que comparte su experiencia, fortaleza y esperanza con nosotros.">
                    <figcaption class="figure-caption">
                        <h2>Oradores Invitados</h2>
                    </figcaption>
                    <p>En las principales reuniones de oradores, nuestros oradores comparten su experiencia, fortaleza y esperanza. "Mostrar a otros que sufren cómo recibimos ayuda es precisamente lo que hace que la vida nos parezca tan valiosa ahora. Aférrate al pensamiento de que, en las manos de Dios, el pasado oscuro es la posesión más grande que tienes: la llave a la vida y felicidad para los demás." BB p124
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
                            <h3>Cena de Conozca a los Oradores</h3>
                        </figcaption>
                        <p><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(Ver mapa aquí)</a></p>
                        <p>Únase a nosotros para disfrutar de una deliciosa cena y conozca a los oradores <strong>en el Salón de la Iglesia Luterana de Belén</strong> en la parte trasera del edificio.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/meeting-in-progress.png" class="figure-img img-fluid" alt="Personas en recuperación asisten a una reunión maratónica.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12">
                        <figcaption class="figure-caption">
                            <h3>Reuniones Maratónicas</h3>
                        </figcaption>
                        <p>Durante la Conferencia MBAR, se llevarán a cabo reuniones abiertas a todos los miembros de A.A. Miembros en varias horas durante el día. No se llevarán a cabo reuniones maratónicas durante las reuniones de oradores principales de la Conferencia. No es necesario estar registrado en la conferencia para asistir a estas reuniones.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/con-breakfast.png" class="figure-img img-fluid" alt="Únase a nosotros para un desayuno el domingo por la mañana.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12">
                        <figcaption class="figure-caption">
                            <h3>Desayuno Reunirse</h3>
                        </figcaption>
                        <p><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(Ver mapa aquí)</a></p>
                        <p>Únase a nosotros para disfrutar de un delicioso desayuno y compañerismo <strong>en el Salón de la Iglesia Luterana de Belén</strong>, en la parte trasera del edificio, para comenzar las actividades del día.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/con-dance.png" class="figure-img img-fluid" alt="Silueta disco de los 80 de diversión y camaradería en el baile del Sábado por la noche.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12">
                        <figcaption class="figure-caption">
                            <h3>Danza y Compañerismo</h3>
                        </figcaption>
                        <p>Después de la reunión de oradores principales el sábado por la noche, únase a nosotros para divertirse y tener compañerismo. Al fin y al cabo, "No somos gente triste. Si los recién llegados no vieran alegría o diversión en nuestra existencia, no la querrían. Insistimos absolutamente en disfrutar de la vida". BB p132
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-12">
                        <figure class="figure">
                            <img src="../images/con-ice-cream.png" class="figure-img img-fluid" alt="Cuatro sabores diferentes de helado en conos de waffle, dispuestos en forma de diamante.">
                        </figure>
                    </div>
                    <div class="col-sm-6 col-12 box-3">
                        <figcaption class="figure-caption">
                            <h3>Helado Social</h3>
                        </figcaption>
                        <p><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(Ver mapa aquí)</a></p>
                        <p>¡Deja lo que estás haciendo y ven a tomar un helado con tus ingredientes favoritos! Disfrute del compañerismo y comparta su experiencia al estar en el MBAR de este año con otros miembros.
                        </p>
                        <p>Se llevará a cabo en la <strong>Stevenson Terrace</strong> del Centro de Conferencias.
                        </p>
                        <p><strong>Para obtener más información sobre la conferencia, recoja su programa en el mostrador de inscripción.</strong></p>
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
                        <h4 class="card-title text-center mb-3">EXPLORANDO MONTEREY y SUS ALREDEDORES</h4>
                    </figcaption>
                    <div class="row">
                        <div class="col-sm-6">
                            <p><a href="https://www.seemonterey.com/" class="bb-link" target="_blank">Visita la Costa</a></p>
                        </div>
                        <div class="col-sm-6">
                            <p><a href="https://www.parks.ca.gov/?page_id=571" class="bb-link" target="_blank">Senderismo en Punta Lobos</a></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <p><a href="https://www.montereybayaquarium.org/" class="bb-link" target="_blank">Acuario de la Bahía de Monterey</a></p>
                        </div>
                        <div class="col-sm-6">
                            <p><a href="https://www.yelp.com/search?find_desc=Bicycle+rental&find_loc=Monterey%2C+CA" class="bb-link" target="_blank">Montar en bicicleta</a></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <p><a href="https://www.yelp.com/search?find_desc=Restaurants&amp;find_loc=Monterey%2C+CA" class="bb-link" target="_blank">Restaurantes</a></p>
                        </div>
                        <div class="col-sm-6">
                            <p><a href="https://www.carmelcalifornia.com/carmel-beach/" class="bb-link" target="_blank">Carmelo-Junto-Al-Mar</a></p>
                        </div>
                    </div>

                    <div class="text-center pt-4">
                        <h5><a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank">Consulte nuestras reuniones locales</a></h5>
                        <p><img class="img-fluid" src="../images/mbiaa-logo.png" alt="Intergrupo de la Bahía de Monterey de A.A. logo"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-4 text-center">
                <figure class="figure">
                    <img class="figure-img img-fluid" src="../images/bixby-bridge-sam-goodgame.png" alt="Vista aérea del puente Bixby en Big Sur a lo largo de la costa.">
                </figure>
            </div>

        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>