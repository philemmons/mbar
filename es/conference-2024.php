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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Centro de Conferencias de Monterey en Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">A.A. Conferencia
                            <br>con
                            <br>Participación de Al-Anon</span></h2>
                    <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Registro de eventos, motivo, ubicación y unidad.">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                        <section aria-label="Área de Registro">
                            <h3 class="fw-bold text-dark px-3 px-md-0">Monterey Bay Area Roundup 2024
                                <br>
                                ¡Próximamente se publicará el calendario de eventos!
                            </h3>
                            <p class="mb-6 h4 text-dark">Únase a nosotros en línea, el fin de semana del Día del Trabajo, con una reunión inicial por Zoom el 30 de Agosto con Oliver D. de Delaware, y en vivo el 31 de Agosto y el 1 de Septiembre en el Centro de conferencias de Monterey.
                                <br>ID de la Reunión: <strong>831 4306 2293</strong>
                                <br>Contraseña: <strong>2024</strong>
                            </p>
                            <a href="register-now.php" class="btn btn-primary me-2">Regístrese Ahora</a>
                        </section>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center py-4 mb-5">
                <div class="col-sm-12 col-12 text-center px-3">
                    <img class="img-fluid" src="../images/conference-room.png" alt="Sala de reuniones del Monterey Conference Center, sillas alineadas frente a un escenario y más allá de A.A. pancartas de conferencias.">
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two -->
    <aside aria-label="Por qué tenemos una explicación de MBAR">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="¿Por qué MBAR?">
                            <h4 class="card-title mb-3 text-uppercase">¿Por qué tenemos MBAR?</h4>
                            <p>El contacto frecuente con los recién llegados y entre nosotros es el punto brillante de nuestras vidas.
                                <br>
                                <img src="../images/icons/pdf-logo.png" width="25" height="25" alt="Icono de Adobe PDF">
                                <a class="btn btn-primary btn-sm" href="../pdf/BIG-BOOK-CHAPTER_7_P-89.pdf">Libro Grande p89<span class="sr-only">(Abrir pdf en el navegador)</span></a>
                            </p>
                            <p class="sr-only">(Este es el párrafo de la página 89 anterior.) "La vida adquirirá un nuevo significado. Ver a las personas recuperarse, verlas ayudar a los demás, ver cómo se desvanece la soledad, ver crecer el compañerismo hablar sobre ti, tener una gran cantidad de amigos: esta es una experiencia que no debes perderte. Sabemos que no querrás perdértela".
                            </p>
                            <p>Es una confraternidad de Alcohólicos Anónimos. Allí encontrará liberación del cuidado, el aburrimiento y la preocupación. Tu imaginación se disparará. La vida por fin significará algo. Los años más satisfactorios de tu existencia están por venir. Así, nosotros encontramos la comunión, y tú también la encontrarás.
                                <br>
                                <img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                                <a class="btn btn-primary btn-sm" href="../pdf/BIG-BOOK-CHAPTER_11_P-152.pdf">Libro Grande p152<span class="sr-only">(Abrir pdf en el navegador)</span></a>
                            </p>
                            <p class="sr-only">(Este es el párrafo de la página 152 anterior). "Sí, hay un sustituto y es muchísimo más que eso. Es una comunidad de Alcohólicos Anónimos. Allí encontrará la liberación de El cuidado, el aburrimiento y la preocupación se dispararán. La vida por fin significará algo. Los años más satisfactorios de tu existencia están por delante. Así encontraremos la comunión, y tú también.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Part Three -->
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

    <!-- Part Four -->
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