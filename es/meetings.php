<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Reuniones </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/meetings.php" >';
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-meetings" title="Conocer la diversidad mejora nuestras vidas.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Nos importa.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Reunión del Comité<br>
                            Información</span></h2>
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
                    <a class="btn btn-primary btn-sm" href="https://us02web.zoom.us/j/83143062293?pwd=QXZMWUVoZEkzVnUyY0poanAyclBHdz09" rel="noopener noreferrer nofollow" target="_blank"><img class="img-fluid" src="../images/zoom-login.png" alt="Pantalla de inicio de sesión de Zoom invertida con fondo azul."><span class="sr-only">(Abre la aplicación Zoom)</span></a>
                </div>
                <div class="col-md-8 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="Programa de reuniones mensuales">
                            <h3 class="card-title text-center mb-3 px-sm-3"><em>
                                    A medida que se acerca el MBAR, hemos programado reuniones adicionales a las 10:00 a. m. durante 1,5 horas.</em></h3>
                        </section>
                        <p class="text-center"><strong>ID de Zoom</strong>: 831 4306 2293 <br>
                            <strong>Contraseña</strong>: 2024
                        </p>
                        <p class="text-center"><strong>Próximas reuniones:</strong> 27/07/2024, 07/08/2024, 10/08/2024, 17/08/2024 y 24/08/2024</p>
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
                        <h4 class="fw-bold mb-3 text-center"><span class="text-dark px-3 px-md-0"><i class="bi bi-book me-2" style="font-size: 1.5rem; color: var(--color-8);" aria-hidden="true"></i>Acta de la Reunión de 2024</span>
                        </h4>
                        <hr>
                        <div class="accordion accordion-flush" id="accordion2024">

                        <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#august-10-2024" aria-expanded="false" aria-controls="august2024">10 de Agosto</button>
                                </h4>

                                <?php include 'meeting-2024-08-10.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#august2024" aria-expanded="false" aria-controls="august2024">3 de Agosto</button>
                                </h4>

                                <?php include 'meeting-2024-08-03.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#july2024" aria-expanded="false" aria-controls="july2024">13 de Julio</button>
                                </h4>

                                <?php include 'meeting-2024-07.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#june2024" aria-expanded="false" aria-controls="june2024">8 de Junio</button>
                                </h4>

                                <?php include 'meeting-2024-06.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#may2024" aria-expanded="false" aria-controls="may2024">13 de Mayo</button>
                                </h4>

                                <?php include 'meeting-2024-05.inc'; ?>

                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#april2024" aria-expanded="false" aria-controls="april2024">13 de Abril</button>
                                </h4>

                                <?php include 'meeting-2024-04.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#march2024" aria-expanded="false" aria-controls="march2024">9 de Marzo</button>
                                </h4>

                                <?php include 'meeting-2024-03.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#february2024" aria-expanded="false" aria-controls="february2024">10 de Febrero</button>
                                </h4>

                                <?php include 'meeting-2024-02.inc'; ?>

                            </div>

                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#january2024" aria-expanded="false" aria-controls="january2024">13 de Enero</button>
                                </h4>

                                <?php include 'meeting-2024-01.inc'; ?>

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
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <div class="accordion accordion-flush" id="accordionFlushExample">

                            <?php include 'meetings-2023.inc'; ?>

                            <?php include 'meetings-2022.inc'; ?>

                            <?php include 'meetings-2021.inc'; ?>

                            <?php include 'meetings-2020.inc'; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>