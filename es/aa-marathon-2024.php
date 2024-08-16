<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - 2024 Reuniones de Maratón</title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/aa-marathon-2024.php" >';
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
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item active" aria-current="page" href="aa-marathon-2024.php">A.A. Reuniones de Maratón<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="al-anon-marathon-2024.php">Al-Anon Reuniones de Maratón</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Monterey Conference Center - Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Reuniones de Maratón de 2024">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">A.A. Reuniones de Maratón de 2024</span></h2>
                    <p class="mb-6 h5 text-dark">Durante el fin de semana del Día del Trabajo, tendremos reuniones de A.A. y Al-Anon en Español y Inglés.
                        <br>
                        <strong>Las reuniones de maratón están abiertas a <em>todos</em>, no es necesario registrarse.</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Título de las reuniones del Maratón de A.A.">
        <div class=" container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="La inscripción está abierta">
                        <section aria-label="Horario del maratón de A.A.">
                            <h3 class=" fw-bold text-dark px-3 px-md-0">Horario del Maratón de A.A. - Inglés</h3>
                            <p class="mb-6 h5 text-dark">A partir de hoy, esta es nuestra programación. Si desea brindar servicio, ser orador en una reunión o enviar su programa de reuniones maratónicas, comuníquese con nuestro Presidente de Reuniones Maratónicas: Mark S.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two-->
    <article id="schedule" aria-label="Reuniones de A.A. - Inglés">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <section aria-label="Reuniones de A.A. del Sábado">
                            <h3 class="white-on-black p-2 mt-2 text-center">Sábado 31 de Agosto</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Benny S., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Confía en el Proceso
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Ron M., Prunedale
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Espiritualidad
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>10:00am A.A. Orador Inaugural</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Jack F., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Calidad vs Cantidad
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Steve C., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Libertad
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>11:30 Panel de Ganadores Dobles de A.A / Al-Anon</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Greg P., Oak Hills
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Impotencia
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Tony G., Hollister
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Gratitud
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>2:00pm Reuniones de Oradores de A.A / Al-Anon</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    David G., Monterey
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Voluntad
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Mari W., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Un Día a la Vez
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Carol H., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Tres legados de A.A.
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>5:00pm Conoce la Cena del Orador</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Eric L., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Aceptación
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>6:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Mark F., Monterey
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Amor y Tolerancia
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>7:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Chael R., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Tres Ideas Pertinentes
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>7:30pm Reunión de Oradores de A.A.</strong>
                                </div>


                                <div class="col-sm-12 text-center cell-color">
                                    <strong>8:30pm Sorteo de Premios Round Up y Sorteo 50 / 50</strong>
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>9:30pm Baile de Máscaras el Sábado por la Noche (se Proporcionan Máscaras)</strong>
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>Buenas noches y cuídate!</strong>
                                </div>

                            </div>
                        </section>

                        <section aria-label="Reuniones de A.A. del Domingo">
                            <h3 class="white-on-black p-2 mt-2 text-center">Domingo 1 de Septiembre</h3>

                            <div class="row g-0 mb-4">

                                <div class="col-sm-12 text-center">
                                    <strong>8:00am Desayuno Continental y Juegos de bingo</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Maxine S., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Recién llegados
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>9:30am Panel A.A. - Intercambio de Experiencias: Bases para el Futuro</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Robert A., Monterey
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Humildad
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>11:00am Reunión de Oradores de Al-Anon</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Patricia, Greenfield
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Unidad
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Cliff A., Monterey
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Estabilidad
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Ryan Y., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Rendirse
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>1:30pm Reunión de oradores de Alateen</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Bob C., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Patrocinio
                                </div>


                                <div class="col-sm-12 text-center">
                                    <strong>3:00pm Helado Social</strong>
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Michele T., Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Serenidad
                                </div>


                                <div class="col-sm-2 top marathon-cell">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Irma, Salinas
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Regresando
                                </div>


                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>Reunión de Oradores de A.A. a las 5:00pm</strong>
                                </div>

                                <div class="col-sm-12 text-center cell-color">
                                    <strong>Sorteo de Premios de Al-Anon a las 6:30pm</strong>
                                </div>

                                <div class="col-sm-12 white-on-black p-2 mt-2 text-center">
                                    <strong>Finalizan las Reuniones de Maratón de A.A. ¡Esperamos que te hayas divertido!</strong>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12 p-2 mt-2">
                                    <strong>Descargo de responsabilidad: Este programa está sujeto a cambios.</strong>
                                </div>
                            </div>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </article>


    <!-- Part Five -->
    <aside aria-label="Por qué tenemos reuniones maratónicas">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="¿Por qué tenemos reuniones maratónicas?">
                            <h4 class="card-title mb-3">¿Por qué A.A. tiene reuniones maratónicas durante las convenciones?</h4>
                            <p>Las reuniones maratónicas son una parte crucial de las convenciones de AA porque brindan apoyo y compañerismo continuos a los asistentes. Estas reuniones ofrecen un espacio para que los miembros compartan sus experiencias, fortaleza y esperanza las 24 horas del día, lo que garantiza que siempre haya ayuda disponible cuando se la necesita.
                            </p>
                            <p>Para muchos, las convenciones pueden ser intensas emocionalmente y desencadenar recuerdos o sentimientos que requieren atención y apoyo inmediatos. Las reuniones maratónicas abordan este problema al brindar un entorno seguro y acogedor donde los miembros pueden conectarse con otros en cualquier momento, de día o de noche. Esta disponibilidad continua es vital para ayudar a los miembros a mantenerse centrados, especialmente aquellos que pueden estar luchando con antojos, emociones o experiencias difíciles durante la convención.
                            </p>
                            <p>Además, las reuniones maratónicas fomentan un sentido de comunidad e inclusión, asegurando que todos, independientemente de su horario, tengan la oportunidad de participar en las reuniones. Simbolizan el compromiso de AA de estar ahí para sus miembros siempre que lo necesiten, reforzando los principios de unidad y ayuda mutua que están en el corazón del programa de AA.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>


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