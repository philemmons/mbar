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
                    <button class="nav-link dropdown-toggle active" type="button" id="dropdown-conferencia" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia<span class="visually-hidden">(actual)</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" aria-current="page" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-comités" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-comités">
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="nav-link" href="upcoming_event.php">Noche de Bingo</a>
                        <a class="nav-link" href="logo_contest.php">Concurso de Logotipos</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Archivo de la Conferencia MBAR 2022">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup 2022 Archivo</span></h2>
                    <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="">
                    <h3 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">2022 A.A. Conferencia con Participación de Al-Anon</h3></span>
                    </h3>
                    <p class="mb-6 h4 text-dark">Con Audio del Orador</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-12 text-center px-3 py-4">
                <img class="img-fluid" src="../images/conference-room.png" alt="Sala de reuniones del Monterey Conference Center, sillas alineadas frente a un escenario y más allá de A.A. pancartas de conferencias.">
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
                                    <h3>Viernes por la Noche, 2 de Septiembre</h3>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8:00pm</td>
                                    <td><i class="bi bi-camera-video-fill"> </i>A.A. Reunión de Zoom</td>
                                    <td>Ponente: <strong>Reggie W., Los Ángeles, CA</strong></td>
                                </tr>
                                <tr>
                                    <td>Sorteo 50/50</td>
                                    <td>ID de reunión de Zoom: <strong>851-8969-3046</strong></td>
                                    <td>Contraseña de la reunión de Zoom: <strong>338999</strong></td>
                                </tr>
                            </tbody>

                            <thead class="table-dark">
                                <th colspan="3">
                                    <h3>Sábado 3 de Septiembre</h3>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8:00am</td>
                                    <td>Se Abre la Inscripción</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:00am</td>
                                    <td>Al-Anon Reuniones Maratonianas (Inglés/Español)</td>
                                    <td></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>10:00am</td>
                                    <td>Lanzamiento de A.A. Reunión</td>
                                    <td>Orador: <strong>Arthur T., Carmel, CA</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/ArthurTFromCarmelCA-MBAR2022-09-03-22_01.ogg" type="audio/ogg">
                                            <source src="../audio/2022/ArthurTFromCarmelCA-MBAR2022-09-03-22_01.wav" type="audio/wav">
                                            <source src="../audio/2022/ArthurTFromCarmelCA-MBAR2022-09-03-22.mp3" type="audio/mpeg">
                                            Su navegador no soporta el elemento de audio.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10:00am</td>
                                    <td>A.A. Reunión de Habla Hispana</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:00am</td>
                                    <td>A.A. Comienzan las Reuniones Maratónicas</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:30am</td>
                                    <td>A.A. Panel de Veteranos</td>
                                    <td></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>2:00pm</td>
                                    <td>A.A. / Al-Anon Reunión de Oradores</td>
                                    <td>Al-Anon Orador: <strong>Mary N., Orange, CA</strong><br>A.A. Orador: <strong>Guillermo N., Orange, CA</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Mary-N_(Al-Anon)_Guillermo-N.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Mary-N_(Al-Anon)_Guillermo-N.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Mary-N_(Al-Anon)_Guillermo-N.wav" type="audio/wav">
                                            Su navegador no soporta el elemento de audio.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5:00pm</td>
                                    <td>Cena de Conozca a los Oradores</td>
                                    <td><strong>Bethlehem Lutheran Church ∆</strong></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>7:30pm</td>
                                    <td>A.A. Reunión de Oradores </td>
                                    <td>Orador: <strong>Rocky S., Phoenix, AZ</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Rocky S_From_PhoenixAZ-MBAR 2022.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Rocky S_From_PhoenixAZ-MBAR 2022.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Rocky S_From_PhoenixAZ-MBAR 2022.mp3" type="audio/mpeg">
                                            Su navegador no soporta el elemento de audio.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8:30pm</td>
                                    <td>Sorteo de Premios y Sorteo 50/50</td>
                                    <td>(Inmediatamente después de la Reunión de Oradores)</td>
                                </tr>
                                <tr>
                                    <td>9:30pm</td>
                                    <td>Bailar</td>
                                    <td>(Inmediatamente Después del Sorteo)</td>
                                </tr>
                            </tbody>

                            <thead class="table-dark">
                                <th colspan="3">
                                    <h3>Domingo 4 de Septiembre</h3>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8:00am</td>
                                    <td>Desayuno Continental Redondo</td>
                                    <td><strong>Bethlehem Lutheran Church ∆</strong></td>
                                </tr>
                                <tr>
                                    <td>8:00am</td>
                                    <td>A.A. Comienzan las Reuniones Maratónicas</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:00am</td>
                                    <td>Al-Anon Reuniones Maratonianas (Inglés/Español)</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:00am</td>
                                    <td>A.A. Reunión de Habla Hispana </td>
                                    <td>Orador: <strong>A Ser Anunciado(TBA)</strong></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>11:00am</td>
                                    <td>Al-Anon Reunión de Oradores </td>
                                    <td>Orador: <strong>Robin K. Marina, CA</strong><br>Orador: <strong>Terril K. Marina, CA</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Al-Anon-Speaker-Meeting_Robin-K_Terrill-K_01.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Al-Anon-Speaker-Meeting_Robin-K_Terrill-K.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Al-Anon-Speaker-Meeting_Robin-K_Terrill-K_01.wav" type="audio/wav">
                                            Su navegador no soporta el elemento de audio.
                                        </audio>
                                    </td>
                                </tr>
                                <tr class="table-primary">
                                    <td>1:30am</td>
                                    <td>Al-Anon Panel Familiar</td>
                                    <td>Panelist: <strong>Michele M. / Pete C. y Dawn C. / Joe P.</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Al-Anon_Family_Panel-Michele-M_Pete-C_Dawn-C_Joe-P_01.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Al-Anon_Family_Panel-Michele-M_Pete-C_Dawn-C_Joe-P.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Al-Anon_Family_Panel-Michele-M_Pete-C_Dawn-C_Joe-P_01.wav" type="audio/wav">
                                            Su navegador no soporta el elemento de audio.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3:00pm</td>
                                    <td>Helado Social</td>
                                    <td><strong>(Terraza 2do Piso)</strong></td>
                                </tr>
                                <tr class="table-primary">
                                    <td>5:00pm</td>
                                    <td>A.A.Reunión de Oradores</td>
                                    <td>Orador: <strong>Chris T., Del Rey Oaks, CA</strong><br>
                                        <audio controls="">
                                            <source src="../audio/2022/Chris-T_From-Del-Rey-Oaks_01.ogg" type="audio/ogg">
                                            <source src="../audio/2022/Chris-T_From-Del-Rey-Oaks.mp3" type="audio/mpeg">
                                            <source src="../audio/2022/Chris-T_From-Del-Rey-Oaks_01.wav" type="audio/wav">
                                            Su navegador no soporta el elemento de audio.
                                        </audio>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6:30pm</td>
                                    <td>Sorteo</td>
                                    <td>(Inmediatamente Después de la Reunión de Oradores)</td>
                                </tr>
                                <tr>
                                    <td>8:00pm</td>
                                    <td>Compañerismo y Música</td>
                                    <td>(Inmediatamente Espués del Sorteo)</td>
                                </tr>
                                <tr>
                                    <td>9:00pm</td>
                                    <td>Finaliza la Conferencia</td>
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
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción para 2024 ya está abierta!">
                    <a href="registration.php" class="btn btn-light btn-lg active" role="button" aria-pressed="true">
                        <img class="img-fluid" src="../images/button-reg-es.png" alt="Logotipo de nutria marina 2022 con texto de registro aquí.">
                    </a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción para 2024 ya está abierta!">
                    <p>REGÍSTRESE EN EL MOSTRADOR DE INSCRIPCIÓN PARA OBTENER SU PAQUETE DE INSCRIPCIÓN QUE CONTIENE SU IDENTIFICACIÓN, PROGRAMA, LISTA DE TODOS LOS HORARIOS DE LAS REUNIONES DEL MARATÓN Y CUALQUIER BOLETO PARA COMIDAS O EVENTOS QUE HAYA COMPRADO.
                        <br><br>
                        PARA OBTENER MÁS INFORMACIÓN DURANTE EL EVENTO, PREGUNTAS SOBRE EL EVENTO O ARTÍCULOS PERDIDOS Y ENCONTRADOS, VAYA AL MOSTRADOR DE INSCRIPCIÓN.
                        <br><br>
                        Δ La ubicación del evento es diferente al sitio de la conferencia
                        <br><br>
                        <strong>Anfitrión de MBAR 2022:</strong> May H. - Comité Directivo de MBAR
                        <br>
                        <strong>Presidente:</strong> Cindy A. <strong>Copresidente:</strong> Phil C.
                        <br>
                        <strong>Tesorera:</strong> Daylene A. <strong>Cotesorera:</strong> Mona S.
                    </p>
                    <hora>
                        <p>Consulte nuestro grupo local de A.A. Sitio web de la oficina central
                            <a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" _target="blank" title="Programa de reuniones locales de M.B.I.A.A.">aamonterey.org</a> para obtener una lista actualizada de las reuniones en el área.
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
                    <h3 class="card-title mb-3 text-center">Servicios de Conferencias: MANTÉNGASE SIMPLE</h3>
                    <p><strong>Regístrese en la mesa de registro</strong> para obtener sus paquetes de registro que contienen sus credenciales, programas y cualquier boleto para las comidas o el baile que haya comprado.
                    </p>
                    <p><strong>Habrá servicio de transporte disponible</strong> para conducir desde el centro de conferencias hasta la Iglesia Luterana de Belén para el desayuno del sábado por la mañana y la cena del sábado por la noche para conocer a los oradores. Dirígete al mostrador de registro para obtener más información sobre este servicio gratuito.
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
                    <h3 class="card-title mb-3"><a href="activities.php">¿POR QUÉ TENEMOS MBAR?</a></h3>
                    <p>El contacto frecuente con los recién llegados y entre nosotros es el punto brillante de nuestras vidas.
                        <br>
                        <img src="../images/icons/pdf-logo.png" width="25" height="25" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                        <a href="" class="bb-link" onclick="window.open('../pdf/BIG-BOOK-CHAPTER_7_P-89.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Libro Grande p89</a>
                    </p>
                    <p>Es una confraternidad de Alcohólicos Anónimos. Allí encontrará liberación del cuidado, el aburrimiento y la preocupación. Tu imaginación se disparará. La vida por fin significará algo. Los años más satisfactorios de tu existencia están por venir. Así, nosotros encontramos la comunión, y tú también la encontrarás.
                        <br>
                        <img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                        <a href="" class="bb-link" onclick="window.open('../pdf/BIG-BOOK-CHAPTER_11_P-152.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Libro Grande p152</a>
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
                    <h3 class="card-title mb-3"><a href="activities.php">∆ Bethlehem Lutheran Church</a></h3>
                    <div class="col-md-12 db-5">
                        <p><img src="../images/icons/warning-sign.png" width="50" height="50" alt="Señal de advertencia triangular con un signo de exclamación."><strong>TENGA EN CUENTA:</strong> El Desayuno y la Cena se realizarán en<br>
                            <strong>Bethlehem Lutheran Church, ubicada en 800 Cass Street en Monterey.</strong><br>
                            (Está a poco más de una milla del Centro de Conferencias).
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.345445633647!2d-121.89838222286743!3d36.59398837929454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1ses!2sus!4v1705601422150!5m2!1ses!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <br>
                    <hr>
                    <h3 class="card-title mb-3"><a href="activities.php">Monterey Conference Center</a></h3>
                    <div class="col-md-12 db-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0352026855912!2d-121.89496129999999!3d36.601461199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1ses!2sus!4v1705601249904!5m2!1ses!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <h3 class="card-title mb-3 text-center">ACCESIBILIDAD ADA</h3>
                    <p>Nuestro equipo está comprometido a garantizar el éxito de su evento. Analice cualquier área que no esté cubierta en este documento con su Administrador de Eventos o Nuestro Personal. Estas políticas, reglas y regulaciones generales están sujetas a cambios.
                    </p>
                    <p><a href="https://www.montereyconferencecenter.com/facility/ada-accessibility/" class="bb-link" target="_blank"><strong>La política de cumplimiento de la ADA del Monterey Conference Center</ strong></a> - El Centro de Conferencias de Monterey (MCC) cumple con la ADA. De acuerdo con la ADA, somos responsables de las adaptaciones asociadas con el acceso permanente a las instalaciones, como, entre otras, rampas para sillas de ruedas, estándares de ascensores, estándares de ancho de puertas y accesibilidad a los baños.
                    </p>
                    <p>Es responsabilidad del cliente o inquilino adaptarse a los requisitos de accesibilidad no permanente e incorporar dispositivos de asistencia visual, intérpretes y accesibilidad temporal a asientos si es necesario.
                    </p>
                    <p>Los dispositivos de audición asistida están disponibles a través de nuestro proveedor Audiovisual interno preferido.
                    </p>
                    <p><strong>ACCESIBILIDAD ADA: MBAR 2019 proporcionará dos intérpretes de ASL en estos días:</strong>
                    </p>
                    <ul>
                        <li>Viernes - 2,5 horas</li>
                        <li>Sábado - 2,5 horas</li>
                        <li>Domingo - 3,0 horas</li>
                    </ul>
                    <p style="font-style: italic;"><strong>TENGA EN CUENTA:</strong> la accesibilidad ADA está sujeta a cambios con el nuevo horario, horarios de reserva y ubicación.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>