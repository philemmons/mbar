<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="navegación principal">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="register-now.php">Registro</a>
                        <a class="dropdown-item active" aria-current="page" href="activities.php">Activities<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-quienes-somos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quienes Somos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-quienes-somos">
                        <a class="dropdown-item active" href="our_partner.php">Nuestro Compañero</a>
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item" href="upcoming_event.php">Comida Compartida de San Patricio</a>
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
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

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-activity" title="Hermoso mosaico de azulejos de Monterey en el Centro de Conferencias que inspira actividades de compañerismo.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Reunirs del Área de la Bahía de Monterey<br>
                            Actividades</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Principales eventos de MBAR">
        <div class="container shadow-wrap">
            <div class="row mb-5 py-2">
                <div class="col-lg-4 col-sm-12 col-12">
                    <img src="../images/speaker-on-stage.png" class="img-fluid py-3" alt="Orador que comparte su experiencia, fortaleza y esperanza con nosotros.">

                    <div class="card card-body border-0">
                        <section class="card-title">
                            <h3>Oradores Invitados</h3>
                        </section>
                        <p class="card-text">En las principales reuniones de oradores, nuestros oradores comparten su experiencia, fortaleza y esperanza con nosotros. "Mostrar a otros que sufren cómo recibimos ayuda es precisamente lo que hace que la vida nos parezca tan valiosa ahora. Aférrate al pensamiento de que, en las manos de Dios, el pasado oscuro es la posesión más grande que tienes: la clave de la vida y felicidad para los demás." BB p124
                        </p>

                    </div>
                </div>

                <div class="col-lg-8 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/con-dinner.png" class="img-fluid py-3" alt="Cena con el orador el Sábado por la noche.">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>Cena de Conozca a los Oradores</h3>
                                </section>
                                <p class="card-text"><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(Ver mapa aquí)</a>
                                    <br>
                                    Únase a nosotros para disfrutar de una deliciosa cena y conozca a los oradores <strong>en el Salón de la Iglesia Luterana de Belén</strong> en la parte trasera del edificio.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/meeting-in-progress.png" class="img-fluid py-3" alt="Personas en recuperación asisten a una reunión maratónica.">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>Reuniones Maratónicas</h3>
                                </section>
                                <p class="card-text">Durante la Conferencia MBAR, se llevarán a cabo reuniones abiertas a todos los miembros de A.A. Miembros en varias horas durante el día. No se llevarán a cabo reuniones maratónicas durante las Reuniones de Oradores Principales de la Conferencia. No es necesario estar registrado en la conferencia para asistir a estas reuniones.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/con-breakfast.png" class="img-fluid  py-3" alt="Únase a nosotros para un desayuno el domingo por la mañana.">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>Desayuno Resumen</h3>
                                </section>
                                <p class="card-text"><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(Ver mapa aquí)</a>
                                    <br>
                                    Únase a nosotros para disfrutar de un delicioso desayuno y compañerismo <strong>en el Salón de la Iglesia Luterana de Belén</strong>, en la parte trasera del edificio, para comenzar las actividades del día.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/con-dance.png" class="img-fluid py-3" alt="Una silueta de diversión y compañerismo en el baile del sábado por la noche.">
                        </div>

                        <div class="col-md-7 col-12">
                            <div class="card card-body border-0">
                                <section class="card-title">
                                    <h3>Danza y Compañerismo</h3>
                                </section>
                                <p class="card-text">Después de la reunión de oradores principales el sábado por la noche, únase a nosotros para divertirse y tener compañerismo. Al fin y al cabo, "no somos gente triste. Si los recién llegados no vieran alegría o diversión en nuestra existencia, no la querrían. Insistimos absolutamente en disfrutar de la vida". BB p132
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 col-12">
                            <img src="../images/con-ice-cream.png" class="img-fluid py-3" alt="Cuatro sabores diferentes de helado en conos de waffle, dispuestos en forma de diamante.">
                        </div>

                        <div class="col-md-7 col-12 box-3">
                            <div class="card card-body border-0 ">
                                <section class="card-title">
                                    <h3>Helado Social</h3>
                                </section>
                                <p class="card-text"><a href="https://montereybayarearoundup.org/conference-2024.php#map" class="bb-link">(Ver mapa aquí)</a>
                                    <br>
                                    ¡Deja lo que estás haciendo y ven a tomar un helado con tus ingredientes favoritos! Disfrute del compañerismo y comparta su experiencia al estar en el MBAR de este año con otros miembros.
                                </p>
                                <p class="card-text">Se llevará a cabo en la <strong>Stevenson Terrace</strong> del Centro de Conferencias.</p>
                            </div>
                        </div>
                    </div>

                    <p class="card-text"><strong>Para obtener más información sobre la conferencia, recoja su programa en el mostrador de inscripción.</strong></p>
                </div>

            </div>
        </div>
    </article>

    <!-- Part Two -->
    <aside aria-label="Monterey y Sus Alrededores">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section class="card-title">
                            <h4 class="card-title text-center mb-3 text-uppercase">Explorando Monterey y Sus Alrededores</h4>
                            <a href="https://translate.google.com/?sl=en&tl=es&op=websites" class="bb-link" target="_blank">(Google Translate ayuda a traducir algunos de los sitios web)<span class="sr-only">(Abre una nueva ventana)</span></a>
                        </section>
                        <div class="row">
                            <div class="col-sm-6">
                                <p><a href="https://www.seemonterey.com/" class="bb-link" target="_blank">Visita la Costa<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                            <div class="col-sm-6">
                                <p><a href="https://www.parks.ca.gov/?page_id=571" class="bb-link" target="_blank">Senderismo en Punta Lobos<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p><a href="https://www.montereybayaquarium.org/" class="bb-link" target="_blank">Acuario de la Bahía de Monterey<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                            <div class="col-sm-6">
                                <p><a href="https://www.yelp.com/search?find_desc=Bicycle+rental&find_loc=Monterey%2C+CA" class="bb-link" target="_blank">Montar en bicicleta<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p><a href="https://www.yelp.com/search?find_desc=Restaurants&amp;find_loc=Monterey%2C+CA" class="bb-link" target="_blank">Restaurantes<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                            <div class="col-sm-6">
                                <p><a href="https://www.carmelcalifornia.com/carmel-beach/" class="bb-link" target="_blank">Carmelo-Junto-Al-Mar<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </div>
                        </div>

                        <div class="text-center pt-4">
                            <h4><a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank">Consulte nuestras reuniones locales<span class="sr-only">(Abre una nueva ventana)</span></a></h4>
                            <p><img class="img-fluid" src="../images/mbiaa-logo.png" alt="Intergrupo de la Bahía de Monterey de A.A. logo"></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 py-4 text-center">
                    <img class="figure-img img-fluid" src="../images/bixby-bridge-sam-goodgame.png" title="Vista aérea del puente Bixby en Big Sur a lo largo de la costa." alt="Vista aérea del puente Bixby en Big Sur a lo largo de la costa.">
                </div>

            </div>
        </div>
    </aside>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>