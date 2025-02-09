<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Concurso de Logotipos </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/logo_contest.php" >';
include_once 'header-bottom.inc';
?>

<nav class="navbar navbar-expand-lg" aria-label="navegación principal">
    <div class="container my-1">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item active" href="logo_contest.php" aria-current="page">Concurso de Logotipos<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="upcoming_event.php">Comida Compartida de San Patricio</a>
                        <a class="dropdown-item" href="al-anon-with-aa-event.php">Participación en Al-Anon con A.A.</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-logoContest" title="Cinco logotipos anteriores como nuestro banner.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Ganador y finalistas del Logo Contest 2024.">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Concurso de Logotipos 2026</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Información del Concurso">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <section aria-label="Concurso de logotipos">
                            <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">¡El Contenido del Logotipo de MBAR ya está aquí!
                                    <br>
                                    A continuación, se detallan los requisitos para la presentación:</span>
                            </h3>
                            <p class="mb-6 h5 text-dark">
                                Envíe su diseño y obra de arte para que el Comité de MBAR lo considere.
                                <br><br>
                                Cada entrada debe incluir el tema de la conferencia
                                <br>
                                <span class="fw-bold">"Keep It Simple"</span>
                                <br>
                                y el año.
                                <br>
                                <span class="fw-bold">"2026"</span>
                                <br><br>
                                Asegúrese de que los gráficos sean simples, con un máximo de 3 colores y que se puedan usar para un logotipo de 2" x 2".
                                <br><br>
                                La propuesta del artista ganador recibirá
                                <br>
                                <span class="text-uppercase fw-bold">Inscripción Gratuita</span> a la conferencia y una <span class="text-uppercase fw-bold">Camiseta</span>.
                                <br><br>
                                ¡No te pierdas la Diversión y la Camaradería!
                                <br><br>
                                <span class="text-uppercase fw-bold">Envía tus propuestas antes del 04/05/25</span>
                                <br><br>
                                El ganador se anunciará en la reunión del cumpleaños de Junio.
                                <br>
                                28/06/25
                            </p>
                            <p class="mb-6 h4 text-dark">Envía el Logotipo y las Preguntas: <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">Presidente de MBAR 2026</a>.
                            </p>
                            </sección>
                    </div>
                </div>

                <!-- <div class="col-sm-12 col-12 text-center px-3 py-4">
                    <img class="img-fluid" src="../images/logo2024.png" alt="Se presentaron doce logotipos diferentes para 2024 con el tema Mantenlo Simple.">
                </div>
-->
            </div>
        </div>
    </article>

    <?php include_once 'event-gratitude.inc' ?>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>