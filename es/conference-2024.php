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
                        <a class="dropdown-item" href="aa-spanish-marathon-2024.php">Reuniones de A.A. Maratón de Habla Hispana</a>
                        <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Reuniones de Maratón</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Centro de conferencias de Monterey en Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La Inscripción está Vivir Abierta!">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Conferencia de A.A.
                        <br>con
                        <br>Participación de Al-Anon
                    </h2>
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
                        <section aria-label="Área de registro">
                            <h3 class="fw-bold px-3 px-md-0">¡Nos complace anunciar nuestra próxima reunión de MBAR el fin de semana del Día del Trabajo!</h3>
                            <p class="h3 text-dark">Reunión Virtual de Lanzamiento por Zoom</p>
                            <p class="dark-text">30 de Agosto a las 8:00pm, hora del Pacífico
                                <br>
                                Orador: Oliver D. de Delaware
                                <br>
                                ID de la reunión: <strong>831 4306 2293</strong>
                                <br>
                                Código de acceso: <strong>2024</strong>
                                <br>
                                ¡Esta reunión está abierta a todos y lo alentamos a unirse!
                            </p>
                            <p class="h3 text-dark">Reuniones Presenciales</p>
                            <p class="dark-text">31 de Agosto y 1 de Septiembre en el Centro de Conferencias de Monterey
                                <br>
                                Tenga en cuenta que es necesario registrarse para el evento presencial. ¡Asegúrese de registrarse con anticipación!
                            </p>
                            <a href="register-now.php" class="btn btn-primary mb-2">Regístrese Ahora</a>
                            <p class="dark-text mb-6">Esperamos contar con su participación en ambas sesiones. ¡Hagamos que este MBAR sea un gran éxito!</p>
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

                        <section aria-label="Eventos del Viernes">
                            <h3 class="white-on-black p-2 mt-2">Viernes por la Noche, 30 de Agosto: Entrada Gratuita para Todos</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>8:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    <i class="bi bi-camera-video-fill" aria-hidden="true"> </i>A.A. Reunión de Zoom
                                    <br>
                                    ID: <strong>831 4306 2293 </strong>
                                    <br>
                                    Contraseña: <strong>2024</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Orador: <strong>Oliver D., Delaware</strong>
                                </div>

                                <div class="col-sm-2 top cell-color">
                                    <strong>9:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Sorteo 50/50 en Línea
                                    <br>
                                    (Inmediatamente después de la Reunión de Oradores)
                                </div>
                            </div>
                        </section>

                        <section aria-label="Eventos del sábado">
                            <h3 class="white-on-black p-2 mt-2">Sábado 31 de Agosto</h3>
                            <div class="row g-0 mb-4">
                                <div class="col-sm-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    <strong>Inscripción Abierta</strong>
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    A.A. (Inglés/Español): Comienzan las Reuniones de Maratón - <strong>Colton 1</strong>
                                    <br>
                                    <a href="aa-marathon-2024.php" class="bb-link">(Ver el Inserto para los Horarios Programados)</a>
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    Al-Anon (Inglés/Español): Comienzan las Reuniones de Maratón - <strong>Steinbeck 1c</strong>
                                    <br>
                                    <a href="al-anon-marathon-2024.php" class="bb-link">(Ver el Inserto para los Horarios Programados)</a>
                                </div>

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. Orador Inaugural
                                </div>

                                <div class="col-sm-5 bottom feature-speaker">
                                    Orador: <strong>Mark S., Salinas, CA</strong>
                                </div>

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>11:30am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. / Panel de Ganadores Dobles de Al-Anon

                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Oradores: <strong>Annette C. y Micha C.</strong>

                                </div>
                                <div class="col-sm-2 top cell-color">
                                    <strong>1:00pm</strong>

                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Speed Fellowship - <strong>Stevenson 2</strong>
                                </div>
                                <div class="col-sm-2 top feature-speaker">
                                    <strong>2:00pm</strong>

                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. / Reunión de Oradores de Al-Anon
                                    <br>
                                    <strong>(Interpretación en lenguaje de señas disponible)</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Orador de Al-Anon: <strong>Shelly S., Newport Beach, CA</strong>
                                    <br>
                                    Orador de A.A.: <strong>Denis D., Santa Cruz, CA</strong>
                                </div>

                                <div class="col-sm-2 top cell-color">
                                    <strong>3:30pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Búsqueda del Tesoro Goose Chase - <strong>Stevenson 2</strong>
                                </div>

                                <div class="col-sm-2 top">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    Cena de Presentación del Orador - <strong>Bethlehem Lutheran Church ∆</strong>
                                </div>

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>7:30pm</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    A.A. Reunión de Oradores
                                    <br>
                                    <strong>(Interpretación en lenguaje de señas disponible)</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Oradora: <strong>Krystal M., Sacramento, CA</strong>
                                </div>

                                <div class="col-sm-2 top cell-color">
                                    <strong>8:30pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Sorteo de Premios Round Up y Sorteo 50/50: Debe Estar Presente para Ganar
                                    <br>
                                    (Inmediatamente después de la Reunión de Oradores)
                                </div>

                                <div class="col-sm-2 top">
                                    <strong>9:30pm</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    Baile de Máscaras el Sábado por la Noche: se Proporcionan Máscaras
                                    <br>
                                    (Inmediatamente después del sorteo)
                                </div>

                            </div>
                        </section>

                        <section aria-label="Eventos del domingo">
                            <h3 class="white-on-black p-2 mt-2">Domingo 1 de Septiembre</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    <strong>Inscripción Abierta</strong>
                                </div>

                                <div class="col-sm-2 top">
                                    <strong>8:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    Desayuno y Juegos de Bingo - <strong>Bethlehem Lutheran Church ∆</strong>
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    A.A.(Inglés): Comienzan las Reuniones de Maratón - <strong>Colton 1</strong>
                                    <br>
                                    <a href="aa-marathon-2024.php" class="bb-link">(Ver el Inserto para los Horarios Programados)</a>
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    A.A.(Español): Comienzan las Reuniones de Maratón - <strong>Steinbeck 1a</strong>
                                    <br>
                                    <a href="#" class="bb-link">(Ver el Inserto para los Horarios Programados)</a>
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    Al-Anon(Inglés/Español): Comienzan las Reuniones de Maratón - <strong>Steinbeck 1c</strong>
                                    <br>
                                    <a href="al-anon-marathon-2024.php" class="bb-link">(Ver el Inserto para los Horarios Programados)</a>
                                </div>

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>9:30am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    Panel de A.A. - Intercambio de Experiencias: Fundación para el Futuro
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Oradores: <strong>Pasquale C., Lisa M., Mike V. y Naomi B.</strong>
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-10 bottom marathon-cell">
                                    Panel de A.A. Comienzan las Reuniones de Habla Hispana: <strong>Steinbeck 1a</strong>
                                    <br>
                                    (Consulte el Folleto para Conocer las Ubicaciones y los Horarios)
                                </div>

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    Reunión de Oradores de Al-Anon
                                    <br>
                                    <strong>(Interpretación en lenguaje de señas disponible)</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Oradores: <strong>Chris W. y Eileen W., Redding, CA (Padres)</strong>
                                </div>

                                <div class="col-sm-2 top cell-color">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Fiesta de Pintura: <strong>Stevenson 2</strong>
                                </div>

                                <div class="col-sm-2 top cell-color">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Juego de la Comunidad de Hombres Lobo - <strong>Stevenson 2</strong>
                                </div>

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>1:30am</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    Reunión de Oradores de Alateen
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Oradora: <strong>Amelia - 16 años y Cesta-de-Preguntas</strong>
                                    <p>MBAR cumple con el requisito B-17 NCWSA para la seguridad de los miembros de Alateen. Para obtener más información, comuníquese con Concetta C. en <?php echo getenv('mbar-alateen-1');?> o Marge S. en <?php echo getenv('mbar-alateen-2');?></p>
                                </div>

                                <div class="col-sm-2 top cell-color">
                                    <strong>2:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Hora de Cornhole y Compañerismo - <strong>Stevenson 2</strong>
                                </div>

                                <div class="col-sm-2 top">
                                    <strong>3:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    Helado Social - <strong>Terrace del 2.º piso</strong>
                                </div>

                                <div class="col-sm-2 top cell-color">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    A.A. Trivia: Servicio General - <strong>Stevenson 2</strong>
                                </div>

                                <div class="col-sm-2 top feature-speaker">
                                    <strong>5:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle feature-speaker">
                                    Reunión de Oradores de A.A.
                                    <br>
                                    <strong>(Interpretación en lenguaje de señas disponible)</strong>
                                </div>
                                <div class="col-sm-5 bottom feature-speaker">
                                    Orador: <strong>Dean S., Salinas, CA</strong>
                                </div>

                                <div class="col-sm-2 top cell-color">
                                    <strong>6:30pm</strong>
                                </div>
                                <div class="col-sm-10 bottom cell-color">
                                    Sorteo de premios de Al-Anon: Debe Estar Presente para Ganar
                                    <br>
                                    (Inmediatamente después de la Reunión de Oradores)
                                </div>

                                <div class="col-sm-2 top">
                                    <strong>9:00pm</strong>
                                </div>
                                <div class="col-sm-10 bottom">
                                    <strong>Fin de la Conferencia: Hasta 2026</strong>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <strong>Δ La ubicación del evento es diferente al sitio de la conferencia</strong>
                                </div>
                                <div class="col-sm-6">
                                    <strong>Descargo de responsabilidad: Este cronograma está sujeto a cambios.</strong>
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
                                para obtener más información durante el evento, si tiene preguntas sobre el evento o si perdió o encontró algún artículo, diríjase al mostrador de registro.
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
                            <p>Este es el plano del Centro de Conferencias de Monterey para navegar por MBAR.
                                <br>
                                <a class="bb-link" href="../pdf/mcc-floor-plan-2024.pdf">Mapa del Centro de Conferencias de Monterey<img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF"><span class="sr-only">(Abrir PDF en el navegador)</span></a>
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


    <?php include_once 'ada-access-inclusion.inc' ?>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>