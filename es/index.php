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
                    <a class="nav-link active" aria-current="page" href="index.php" aria-current="page">Hogar
                        <span class="visually-hidden">(actual)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
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
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home" title="Hermosa costa de la Bahía de Monterey con vista a Lover's Point.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Reunirse del Área de la Bahía de Monterey 2024</span>
                    </h1>
                    <p class="mb-6 h2 text-dark">Fin de Semana del Día del Trabajo, 31 de Agosto y <br>1 de Septiembre</p>
                    <a href="registration.php" class="btn btn-primary me-2">Regístrese Ahora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="upcoming_event.php">
                                <i class="bi bi-trophy me-2" style="font-size: 2rem; color: var(--color-8);"></i>NOCHE DE BINGO: "DIVERSIÓN Y COMPAÑERISMO"</a></h5>
                            <p class="card-text">¡Únase a The Herd at The Moose para una noche de compañerismo, recuperación y bingo!
                                <br>
                                <strong>Cuándo:</strong> viernes, 26 de enero de 2024, de 6 a 9pm
                            </p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="upcoming_event.php" class="btn btn-primary">Ver más información aquí</a></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2024.php">
                                <i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);"></i>Voluntarios</a></h5>
                            <p class="card-text">La mayoría de nosotros hemos descubierto que ofrecer servicio voluntario mejora la calidad de nuestra recuperación. En otras palabras, obtienes lo que das.
                            </p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Déjenos saber si esta interesado</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2024.php">
                                <i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);"></i>Conferencia 2024</a></h5>
                            <p class="card-text">Calendario de eventos durante nuestro reunirs de dos días. Vuelva con nosotros para obtener actualizaciones y más detalles a medida que nos acercamos a la fecha.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="conference-2022.php" class="btn btn-primary">Ver Archivos de 2022</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="registration.php">
                                <i class="bi bi-cart me-2" style="font-size: 2rem; color: var(--color-8);"></i>Registro</a></h5>
                            <p class="card-text">Las tarifas de inscripción pagan el Centro de Conferencias, los gastos de viaje de los ponentes, etc. Las reuniones Maratón son abiertas y no requieren inscripción.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="registration.php" class="btn btn-primary">La preinscripción está activa</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="activities.php">
                                <i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);"></i>Actividades</a></h5>
                            <p class="card-text">Reuniones Maratónicas, Desayuno Reunirs, Oradores Invitados, encuentro social con helados y qué hacer en Monterey para este <strong>evento de dos días</strong>.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">Avance</a></small>
                    </div>
                </div>
            </div>
        </div>

        <div class=" row justify-content-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="contact.php">
                                <i class="bi bi-people-fill me-2" style="font-size: 2rem; color: var(--color-8);"></i>Comité</a></h5>
                            <p class="card-text">Información adicional o cualquier duda, por favor contáctenos. Siéntase libre de asistir a nuestras reuniones mensuales.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="committees.php" class="btn btn-primary">Contacta con nosotros</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="mbar_history.php">
                                <i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);"></i>Historia</a></h5>
                            <p class="card-text">MBAR se estableció en 1993. Los oradores e invitados provienen de todo Estados Unidos. Eche un vistazo a algunos folletos de MBAR anteriores.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="mbar_history.php" class="btn btn-primary">Nuestro pasado</a></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="contribution.php">
                                <i class="bi bi-hand-thumbs-up me-2" style="font-size: 2rem; color: var(--color-8);"></i>Contribuciones</a></h5>
                            <p class="card-text">De acuerdo con Nuestra Tradición de autofinanciación, aceptamos contribuciones únicamente de A.A. y miembros de Al-Anon.</p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="contributions.php" class="btn btn-primary">Manos amigas</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Three -->
    <section class="container mb-5 py-2 px-4">
        <div class="row">
            <div class="col-lg-8">
                <h3>ACERCA DEL REUNIRSE DEL ÁREA DE LA BAHÍA DE MONTEREY</h3>
                <p><strong>ALCOHÓLICOS ANÓNIMOS</strong> es una comunidad de personas que comparten su experiencia, fortaleza y esperanza entre sí para poder resolver su problema común y ayudar a otros a recuperarse del alcoholismo. El único requisito para ser miembro es el deseo de dejar de beber. No hay cuotas ni honorarios para A.A. afiliación; Nos sustentamos a través de nuestras propias contribuciones. AUTOMÓVIL CLUB BRITÁNICO. no está aliado con ninguna secta, denominación política, organización o institución; no desea involucrarse en ninguna controversia; ni apoya ni se opone a ninguna causa. Nuestro objetivo principal es mantenernos sobrios y ayudar a otros alcohólicos a alcanzar la sobriedad.
                    <br><br>
                    <strong>¿QUÉ ES AL-ANON?</strong>
                    Los Grupos de Familia Al-Anon son una comunidad de familiares y amigos de alcohólicos que comparten su experiencia, fortaleza y esperanza para resolver sus problemas comunes. Creemos que el alcoholismo es una enfermedad familiar y que un cambio de actitud puede ayudar a la recuperación. <br><br>
                    Al-Anon no está aliado con ninguna secta, denominación, entidad política, organización o institución; no participa en ninguna controversia; ni respalda ni se opone a ninguna causa. No hay cuotas de membresía. Al-Anon se autofinancia mediante sus propias contribuciones voluntarias.
                    <br><br>
                    Al-Anon tiene un solo propósito: ayudar a las familias de alcohólicos. Hacemos esto practicando los Doce Pasos, dando la bienvenida y brindando consuelo a las familias de alcohólicos, y brindando comprensión y aliento al alcohólico.
                </p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="../images/coastal_wave.png" class="img-fluid shadow-wrap" alt="Preciosa puesta de sol azul satinado en el Océano Pacífico con olas bañando la costa rocosa." title="Preciosa puesta de sol azul satinado en el Océano Pacífico con olas bañando la costa rocosa.">
            </div>
        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>