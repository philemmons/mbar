<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Reuniones </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/meetings.php" >';
include_once 'header-bottom.inc';
?>

<nav class="navbar navbar-expand-xl" aria-label="navegación principal">
    <div class="container my-1">
        <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-xl-0">
                <li class="nav-item">
                    <a class="nav-link" href="/es/">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
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
                        <a class="dropdown-item active" aria-current="page" href="meetings.php">Reuniones<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
                        <a class="dropdown-item" href="upcoming_event.php">Comida Compartida de San Patricio</a>
                        <a class="dropdown-item" href="al-anon-with-aa-event.php">Participación en Al-Anon con A.A.</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="helping_hands.php">Manos Amigas</a>
                </li>
                <li class="nav-item" style="border-right: none;">
                    <a class="nav-link" href="/">Inglés</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-meetings" title="Conocer la diversidad mejora nuestras vidas.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Nos importa.">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Reunión del Comité<br>
                        Información</h2>
                    <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Información de zoom">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-sm-auto py-4">
                    <a class="btn btn-primary btn-sm" href="https://us02web.zoom.us/j/3301007207?pwd=olR3pXbrM9zKtXLjhdVqFPfOtbbbdh.1&omn=87244042787" rel="noopener noreferrer nofollow" target="_blank"><img class="img-fluid" src="../images/zoom-login.png" alt="Pantalla de inicio de sesión de Zoom invertida con fondo azul."><span class="sr-only">(Abre la aplicación Zoom)</span></a>
                </div>
                <div class="col-md-8 py-4">
                    <div class="p-3 text-bg-light hero-text-border text-center">
                        <section aria-label="Programa de reuniones mensuales">
                            <h3 class="card-title mb-3 px-sm-3">Puestos vacantes en el comité</h3>
                        </section>
                        <p>¡Únase a nuestra reunión de negocios, el 8 de febrero a las 10 am, para conocer las responsabilidades de los puestos enumerados! Difusión, Copresidente de Difusión, Tesorero, Secretario, Hospitalidad, Copresidente de Redes Sociales, Enlace GSR/IGR, Enlace H&I, Premio de la rifa, Rifa 50/50, Registro y más!
                        </p>
                        <h4>10:00 a. m. durante 1,5 horas</h4>
                        <p><strong>ID de Zoom</strong>: 330 100 7207
                            <br>
                            <strong>Contraseña</strong>: 2026
                        </p>
                        <p><strong>Próximas Reuniones:</strong> Elecciones del Comité de MBAR 2026 08/03/2025 y 12/04/2025</p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two -->
    <article aria-label="Notas de la reunión actual">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <h4 class="fw-bold mb-3 text-center"><span class="text-dark px-3 px-md-0"><i class="bi bi-book me-2" style="font-size: 1.5rem; color: var(--color-8);" aria-hidden="true"></i>Acta de la Reunión de 2025</span>
                        </h4>
                        <hr>
                        <div class="accordion accordion-flush" id="accordion2025">
                            
                        <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#february2025" aria-expanded="false" aria-controls="february2025">10 de Febrero</button>
                                </h4>

                                <?php include_once 'meeting-2025-02.inc'; ?>

                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#january2025" aria-expanded="false" aria-controls="january2025">11 de Enero</button>
                                </h4>

                                <?php include_once 'meeting-2025-01.inc'; ?>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article aria-label="Notas de reuniones pasadas">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">

                <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <h4 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">Actas de Reuniones Archivadas A LO Largo de los Años</span>
                        </h4>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-bg-light hero-text-border">

                        <div class="accordion accordion-flush" id="accordionFlushExample">

                            <?php include_once 'meetings-2024.inc'; ?>

                            <?php include_once 'meetings-2023.inc'; ?>

                            <?php include_once 'meetings-2022.inc'; ?>

                            <?php include_once 'meetings-2021.inc'; ?>

                            <?php include_once 'meetings-2020.inc'; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>