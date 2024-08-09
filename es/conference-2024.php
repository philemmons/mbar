<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - 2024 Conferencia </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/conference-2024.php" >';
include_once 'header-bottom.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="navegación principal">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/es/">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item active" aria-current="page" href="conference-2024.php">MBAR 2024<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="register-now.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-quienes-somos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quienes Somos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-quienes-somos">
                        <a class="dropdown-item" href="our_partner.php">Nuestro Compañero</a>
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item" href="upcoming_event.php">Gratitud</a>
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link" href="helping_hands.php">Manos Amigas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Centro de conferencias de Monterey en Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La Inscripción está Vivir abierta!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Conferencia de A.A.
                            <br>con
                            <br>Participación de Al-Anon</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Primera parte -->
    <article aria-label="Inscripción al evento, motivo, ubicación y unidad">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="La Inscripción está Vivir Activa">
                        <section aria-label="Área de Inscripción">
                            <h3 class="fw-bold text-dark px-3 px-md-0">Resumen del área de la bahía de Monterey 2024</h3>
                            <p class="mb-6 h4 text-dark">Únase a nosotros en línea el 30 de Agosto con una reunión inicial de Zoom, o en vivo el 31 de Agosto y el 1 de Septiembre en el Centro de Conferencias de Monterey.
                                <br>
                                ¡Se anunciarán más detalles a medida que nos acerquemos!
                            </p>
                            <a href="register-now.php" class="btn btn-primary me-2">Regístrese Ahora</a>
                        </section>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center py-4 mb-5">
                <div class="col-sm-12 col-12 text-center px-3">
                    <img class="img-fluid" src="../images/conference-room.png" alt="Sala de reuniones del Centro de Conferencias de Monterey, sillas alineadas frente a un escenario y más allá de los carteles de la conferencia de A.A.">
                </div>
            </div>
        </div>
    </article>

    <!-- Segunda parte-->
    <article id="schedule" aria-label="Programa MBAR 2024">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <section aria-label="Eventos del viernes">
                            <h3 class="white-on-black py-2 mt-2">Viernes por la Noche, 30 de Agosto</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 feature-speaker">
                                    8:00pm
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    <i class="bi bi-camera-video-fill" aria-hidden="true"> </i>Reunión de A.A. por Zoom
                                    <br>
                                    ID: <strong>831 4306 2293 </strong>
                                    <br>
                                    Contraseña: <strong>2024</strong>
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Orador: <strong>Oliver D., Delaware</strong>
                                </div>


                                <div class="col-sm-2">
                                    9:00pm
                                </div>
                                <div class="col-sm-10">
                                    Sorteo 50/50 en Línea
                                    <br>
                                    (Inmediatamente después de la reunión de oradores)
                                </div>

                            </div>
                        </section>

                        <section aria-label="Eventos del Sábado">
                            <h3 class="white-on-black py-2 mt-2">Sábado 31 de Agosto</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2">
                                    8:00am
                                </div>
                                <div class="col-sm-10">
                                    <strong>Se Abren las Inscripciones</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    9:00am
                                </div>
                                <div class="col-sm-10 cell-color">
                                    A.A y Al-Anon (Inglés/Español) - Comienzan las Reuniones Maratónicas
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    10:00am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Orador Inaugural de A.A.
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Orador: <strong> Mark S., Salinas, CA </strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    11:30am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Panel de Ganadores Dobles de A.A./Al-Anon
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Oradora: <strong>Annette C.</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    1:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Velocidad Compañerismo- <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    2:00pm
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Reunión de Oradores de A.A./Al-Anon
                                    <br>
                                    <strong>(Interpretación de Lenguaje de Señas Disponible)</strong>
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Orador de Al-Anon: <strong>Shelly S., Newport Beach, CA</strong>
                                    <br>
                                    Orador de A.A.: <strong>Denis D., Santa Cruz, CA</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    3:30pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Búsqueda del Tesoro de Persecución del Ganso - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2">
                                    5:00pm
                                </div>
                                <div class="col-sm-10">
                                    Cena de Presentación de los Oradores - <strong>Bethlehem Lutheran Church ∆</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    7:30pm
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Reunión de Oradores de A.A.
                                    <br>
                                    <strong>(Interpretación de ASL Proporcionada)</strong>
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Oradora: <strong>Krystal M., Sacramento, AZ</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    8:30pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Sorteo de Premios y Sorteo 50/50: Debe estar presente para ganar
                                    <br>
                                    (Inmediatamente Después de la Reunión de Oradores)
                                </div>


                                <div class="col-sm-2">
                                    9:30pm
                                </div>
                                <div class="col-sm-10">
                                    Baile de Máscaras el Sábado por la Noche. Se Proporcionarán Máscaras.
                                    <br>
                                    (Inmediatamente Después del Sorteo)
                                </div>

                            </div>
                        </section>

                        <section aria-label="Eventos del Domingo">
                            <h3 class="white-on-black py-2 mt-2">Domingo 1 de Septiembre</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2">
                                    8:00am
                                </div>
                                <div class="col-sm-10">
                                    <strong>Inscripciones Abiertas</strong>
                                </div>


                                <div class="col-sm-2">
                                    8:00am
                                </div>
                                <div class="col-sm-10">
                                    Desayuno Continental y Juegos de Bingo - <strong>Bethlehem Lutheran Church ∆</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    9:00am
                                </div>
                                <div class="col-sm-10 cell-color">
                                    A.A y Al-Anon (Inglés/Español) - Comienzan las Reuniones Maratónicas
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    9:30am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Panel de Cuatro Oradores de A.A.
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Tema: <strong>Intercambio de Experiencias: Bases Para el Futuro</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    10:00am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Comienzan las Reuniones de A.A. en Español
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Oradores: <strong>Que se Anunciará</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    11:00am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Reunión de Oradores de Al-Anon
                                    <br>
                                    <strong>(Se Proporciona Interpretación ASL)</strong>
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Orador: <strong>Chris W., Redding, CA</strong>
                                    <br>
                                    Orador: <strong>Eileen W., Redding, CA</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    12:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                Fiesta de pintura - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    1:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Werewolf Compañerismo Juego - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    1:30am
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Reunión de Oradores de Alateen
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Oradora: <strong>Amelia, de 16 años y miembro de Pregúntale-a-la-Cesta</strong>
                                    <br>
                                    <em>(MBAR cumple con el requisito de NCWSA B-17 para la seguridad de Alateen)</em>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    2:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Hora de Cornhole y Compañerismo - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2">
                                    3:00pm
                                </div>
                                <div class="col-sm-10">
                                    Helado Social - <strong>2nd Floor Terrace</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    4:00pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Trivialidades de A.A.: Servicio General - <strong>Stevenson 2</strong>
                                </div>


                                <div class="col-sm-2 feature-speaker">
                                    5:00pm
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Reunión de Oradores de A.A.
                                    <br>
                                    <strong>(Interpretación en Lenguaje de Señas)</strong>
                                </div>
                                <div class="col-sm-5 feature-speaker">
                                    Orador: <strong>Dean S., Salinas, CA</strong>
                                </div>


                                <div class="col-sm-2 cell-color">
                                    6:30pm
                                </div>
                                <div class="col-sm-10 cell-color">
                                    Sorteo de Premios: Debe estar presente para ganar
                                    <br>
                                    (Inmediatamente Después de la Reunión de Oradores)
                                </div>


                                <div class="col-sm-2">
                                    9:00pm
                                </div>
                                <div class="col-sm-10">
                                    <strong>La Conferencia Termina en 2026</strong>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <strong>Δ La ubicación del evento es diferente al sitio de la conferencia</strong>
                                </div>
                                <div class="col-sm-6">
                                    <strong>Descargo de responsabilidad: Este programa está sujeto a cambios.</strong>
                                </div>
                            </div>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Three -->

    <div class="container shadow-wrap">
        <aside aria-label="Información de check-in">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Registro de Entrada">
                            <h3 class="card-title mb-3">Registro de Entrada</h3>
                            <p>Regístrese en el mostrador de registro para obtener su paquete de inscripción que contiene su credencial, programa, lista de todos los horarios de reuniones del maratón y cualquier boleto para comidas o eventos, y la camiseta preordenada que haya comprado.
                                <br><br>
                                Para obtener más información durante el evento, si tiene preguntas sobre el evento o si perdió o encontró algún artículo, diríjase al mostrador de registro.
                            </p>
                        </section>
                        <p><strong>Anfitriona de MBAR 2024:</strong> Cindy A.
                            <br>
                            <strong>Comité Directivo de MBAR</strong>
                            <br>
                            <strong>Presidente:</strong> Chris T.
                            <strong>Copresidente:</strong> Renee C.
                            <br>
                            <strong>Tesorera:</strong> Carolyn H. <strong>Cotesorera:</strong> Jean T.
                            <br>
                            <strong>Secretaria de actas:</strong> Roger M.
                        </p>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <!-- Part Four -->
    <article aria-label="Servicios de conferencias">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Describe services">
                            <h3 class="card-title mb-3">Servicios de la Conferencia: Manténgalo Simple</h3>
                            <p><strong>Habrá un servicio de transporte disponible</strong> para trasladarse desde el centro de conferencias hasta la Bethlehem Lutheran Church para el desayuno del domingo por la mañana y la cena de presentación de los oradores del sábado por la noche. Diríjase al mostrador de inscripción para obtener más información sobre este servicio gratuito.
                            </p>
                            <hr>
                            <p>Visite el sitio web de nuestra Oficina Central de A.A. local
                                <a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" target="_blank" rel="noopener noreferrer" title="Horario de reuniones de M.B.I.A.A.">www.aamonterey.org<span class="sr-only">(Abre una nueva ventana)</span></a> para obtener una lista actualizada de las reuniones en el área.
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
                        <section aria-label="¿Por qué MBAR?">
                            <h3 class="card-title mb-3">¿Por qué tenemos MBAR?</h3>
                            <p>El contacto frecuente con los recién llegados y entre nosotros es el punto brillante de nuestras vidas. <br>
                                <img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF">
                                <a class="btn btn-link bb-link" href="../pdf/BIG-BOOK-CHAPTER_7_P-89.pdf">Big Book pág. 89<span class="sr-only">(Abrir el pdf en el navegador)</span></a>
                            </p>
                            <p class="sr-only">(Este es el párrafo de la página 89 anterior.) "La vida adquirirá un nuevo significado. Ver a las personas recuperarse, verlas ayudar a otros, ver cómo se desvanece la soledad, ver cómo se forma una comunidad a tu alrededor, tener una multitud de amigos: ésta es una experiencia que no debes perderte. Sabemos que no querrás perdértela".
                            </p>
                            <p>Es una comunidad en Alcohólicos Anónimos. Allí encontrarás liberación de la preocupación, el aburrimiento y la ansiedad. Tu imaginación se encenderá. La vida tendrá algún significado al fin. Los años más satisfactorios de tu existencia están por venir. Así, nosotros encontramos la comunión, y tú también la encontrarás. <br>
                                <img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF">
                                <a class="btn btn-link bb-link" href="../pdf/BIG-BOOK-CHAPTER_11_P-152.pdf">Big Book pág. 152<span class="sr-only">(Abrir el PDF en el navegador)</span></a>
                            </p>
                            <p class="sr-only">(Este es el párrafo de la página 152 anterior.)"Sí, hay un sustituto y es mucho más que eso. Es una comunidad en Alcohólicos Anónimos. Allí encontrará liberación de la preocupación, el aburrimiento y la inquietud. Su imaginación se encenderá. La vida tendrá un significado por fin. Los años más satisfactorios de su existencia están por venir. Así encontraremos la comunidad, y usted también la encontrará."
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Part Six -->
    <div id="map"></div>
    <article aria-label="Ubicación externa del mapa de Google de MBAR 2024">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Ubicaciones de eventos">
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Bethlehem+Lutheran+Church+800+Cass+St+Monterey,+CA+93940/@36.5939841,-121.8958073,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de425e4f48de1:0xc2ec674814c2393f!2m2!1d-121.8958736!2d36.5940092?hl=es&entry=ttu" class="bb-link" target="_blank" title="Enlace directo a Google Map">Bethlehem Lutheran Church<span class="sr-only">(Se abre en una ventana nueva)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <p><img src="../images/icons/warning-sign.png" width="50" height="50" alt="Señal de advertencia triangular con un signo de exclamación."><strong class="text-uppercase">Tenga en cuenta:</strong> El Desayuno y la Cena se realizarán en<br>
                                    <strong>Bethlehem Lutheran Church, ubicada en 800 Cass Street en Monterey.</strong><br>
                                    (Está a poco más de una milla del Centro de Conferencias).
                                </p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.345445633647!2d-121.89838222286743!3d36.59398837929454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1ses!2sus!4v1705601422150!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Bethlehem Lutheran Church" aria-hidden="true"></iframe>
                            </div>
                            <br>
                            <hr>
                            <h4 class="card-title mb-3"><a href="https://www.google.com/maps/dir//Monterey+Conference+Center+1+Portola+Plaza+Monterey,+CA+93940/@36.6014612,-121.8949613,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de422461f891b:0x20f8f64ee124f091!2m2!1d-121.8949613!2d36.6014612?hl=es&entry=ttu" class="bb-link" target="_blank" title="Enlace directo a Google Map">Monterey Conference Center<span class="sr-only">(Se abre en una ventana nueva)</span></a></h4>
                            <div class="col-md-12 db-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0352026855912!2d-121.89496129999999!3d36.601461199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1ses!2sus!4v1705601249904!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Monterey Conference Center" aria-hidden="true"></iframe>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Seven -->
    <aside aria-label="Accesibilidad e inclusión de la ADA">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Unidad de eventos">
                            <h4 class="card-title mb-3 text-center text-uppercase">ADA Accesibilidad</h4>
                            <p>Nuestro equipo está totalmente comprometido a garantizar la inclusión y el compañerismo dentro de MBAR, y si necesita ayuda de la ADA para el evento, infórmenos. Según la primera tradición de A.A., por favor discuta cualquier área que no esté cubierta aquí con cualquiera de los miembros de nuestro comité. Estas políticas, reglas y regulaciones generales están sujetas a cambios.
                            </p>
                            <p><a href="https://www.montereyconferencecenter.com/facility/ada-accessibility/" class="bb-link" target="_blank" rel="noopener noreferrer nofollow"><strong>La política de cumplimiento de la ADA del Monterey Conference Center</strong><span class="sr-only">(Abre una nueva ventana)</span></a> - El Centro de Conferencias de Monterey (MCC) cumple con la ADA. De acuerdo con la ADA, somos responsables de las adaptaciones asociadas con el acceso permanente a las instalaciones, como, entre otras, rampas para sillas de ruedas, estándares de ascensores, estándares de ancho de puertas y accesibilidad a los baños.
                            </p>
                            <p>Es responsabilidad del cliente o inquilino adaptarse a los requisitos de accesibilidad no permanente e incorporar dispositivos de asistencia visual, intérpretes y accesibilidad a asientos temporales si es necesario.
                            </p>
                            <p>Los dispositivos de audición asistida están disponibles a través de nuestro proveedor audiovisual interno preferido.
                            </p>
                            <p><strong><span class="text-uppercase">Accesibilidad ADA</span> MBAR 2024 proporcionará dos Intérpretes de ASL en estos días:</strong>
                            </p>
                            <ul>
                                <li>Sábado - 2,5 horas</li>
                                <li>Domingo - 3,0 horas</li>
                            </ul>
                            <p style="font-style: italic;"><strong class="text-uppercase">Tenga en cuenta:</strong> la accesibilidad ADA está sujeta a cambios con el nuevo horario, horarios de reserva y ubicacións.
                            </p>
                            <p class='sr-only'>(Este es el texto anterior sin cursiva.)<strong class="text-uppercase">Tenga en cuenta:</strong> la accesibilidad ADA está sujeta a cambios con el nuevo horario, horarios de reserva y ubicacións.
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