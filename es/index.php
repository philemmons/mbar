<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Home </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/" >';
include_once 'header-bottom.inc'
?>

<nav class="navbar navbar-expand-lg" aria-label="menú principal">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/es/">Hogar<span class="visually-hidden">(actual)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
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
                        <a class="dropdown-item" href="upcoming_event.php">Evento de Beca de Softbol</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">La Pre-Inscripción está Activa</span>
                    </h2>
                    <p class="mb-6 h3 text-dark">Fin de semana del Día del Trabajo,<br>Reunión Inaugural por Zoom<br>30 de Agosto y en Vivo el 31 de Agosto y <br>1 de Septiembre en el Centro de Conferencias de Monterey </p>
                    <a href="register-now.php" class="btn btn-primary me-2">Regístrese Ahora</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="tarjetas de información">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-trophy me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Próximos Eventos
                            </p>
                            <p class="card-text"><span aria-hidden='true'>⚾</span><strong>Evento de Becas de Softbol</strong>: ¿Estás listo para una tarde divertida? Si es así, nos vemos allí. Perritos calientes <span aria-hidden='true'>🌭</span> proporcionados. ¡Trae un mit y un acompañamiento para compartir!
                                <br><br>
                                <strong>Cuándo:</strong> Sábado, 6 de Julio de 2024
                                <br>
                                <strong>Hora:</strong> 12 a 4pm
                                <br>
                                <strong>Dónde:</strong> Parque Dampierre Little League, Carmel Valley, CA
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="upcoming_event.php" class="btn btn-primary">Ver el Próximo Evento</a></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Voluntarios
                            </p>
                            <p class="card-text">¿Quieres ser de utilidad? Actualmente estamos buscando Presidente de Instalaciones. Si tu respuesta es sí, o conoces a alguien que esté dispuesto a asumir un compromiso de servicio, por favor contáctanos o envía un correo electrónico a nuestro <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">Presidente de A.A.</a>.
                                <br><br>
                                Hemos descubierto que ofrecerse voluntariamente para hacer servicio mejora la calidad de nuestra recuperación.
                                <br><br>
                                Recuerda, recibes lo que das.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Contacta con nosotros si estás interesado</a></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-translate me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Traducción Española
                            </p>
                            <p class="card-text">MBAR se compromete a hacer que nuestro sitio web sea accesible, utilizable y culturalmente adecuado para nuestra Comunidad Española.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="https://montereybayarearoundup.org/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Sitio Web en Inglés<span class="sr-only">(Se abre en una ventana nueva)</span></a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Part Two -->
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Actualización de la Conferencia 2024
                            </p>
                            <p class="card-text">Anuncio de nuestra reunión inicial de Zoom el 30 de agosto a las 8 p.m. PST. Únase a nosotros con nuestro primer orador del evento 2024: Oliver D. de Delaware.<br><a class="bb-link" href="register-now.php#zoom-info">Vea la información de Zoom aquí</a>
                            </p>
                            <p class="card-text">Vuelve con nosotros para obtener más actualizaciones y detalles a medida que nos acercamos a la fecha. Mientras tanto, consulte las acciones de la Conferencia de 2022.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="conference-2022.php" class="btn btn-primary">Calendario de Conferencias 2022</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-cart me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Pre-Inscripción
                            </p>
                            <p class="card-text">Las tarifas de inscripción pagan el Centro de Conferencias, los gastos de viaje de los ponentes, etc. Las reuniones Maratón son abiertas y no requieren inscripción.</p>
                            <p class="card-text">Le recordamos que su registro se completará cuando se haya realizado el <a href="register-now.php#payment-now" class="bb-link">pago</a>.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="register-now.php" class="btn btn-primary">Regístrate Ahora</a></small>
                        </div>
                    </div>
                </div>


            </div>

            <div class=" row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Actividades
                            </p>
                            <p class="card-text">Reuniones Maratónicas, Desayuno Reunirs, Oradores Invitados, encuentro social con helados y qué hacer en Monterey para este <strong>evento de dos días</strong>.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">Vista Previa de Nestras Actividades</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-people-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Comités
                            </p>
                            <p class="card-text">Información adicional o cualquier duda, por favor contáctenos. Siéntase libre de asistir también a nuestras reuniones mensuales.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Contacta con Nosotros</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Nuestro Pasado
                            </p>
                            <p class="card-text">MBAR se estableció en 1993. Los oradores e invitados provienen de todo Estados Unidos. Eche un vistazo a algunos folletos de MBAR anteriores.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="mbar_history.php" class="btn btn-primary">Historia de MBAR</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-hand-thumbs-up me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Manos Amigas
                            </p>
                            <p class="card-text">De acuerdo con Nuestra Tradición de autofinanciación, aceptamos contribuciones únicamente de A.A. y miembros de Al-Anon.</p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contributions.php" class="btn btn-primary">Contribución</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Three -->
    <article aria-label="definición de grupo">
        <div class="container mb-5 py-2 px-4">
            <div class="row">
                <div class="col-lg-8">
                    <section aria-label="Acerca de MBAR">
                        <h3 class="text-uppercase">Acerca del resumen del área de la Bahía de Monterey</h3>
                        <p><strong class="text-uppercase">Alcohólicos Anónimos</strong> es una comunidad de personas que comparten su experiencia, fortaleza y esperanza entre sí para poder resolver su problema común y ayudar a otros a recuperarse del alcoholismo. El único requisito para ser miembro es el deseo de dejar de beber. No hay cuotas ni honorarios para A.A. afiliación; Nos sustentamos a través de nuestras propias contribuciones. AUTOMÓVIL CLUB BRITÁNICO. no está aliado con ninguna secta, denominación política, organización o institución; no desea involucrarse en ninguna controversia; ni apoya ni se opone a ninguna causa. Nuestro objetivo principal es mantenernos sobrios y ayudar a otros alcohólicos a alcanzar la sobriedad.
                            <br><br>
                            <strong class="text-uppercase">¿Qué es Al-Anon?</strong>
                            Los Grupos de Familia Al-Anon son una comunidad de familiares y amigos de alcohólicos que comparten su experiencia, fortaleza y esperanza para resolver sus problemas comunes. Creemos que el alcoholismo es una enfermedad familiar y que un cambio de actitud puede ayudar a la recuperación.
                            <br><br>
                            Al-Anon no está aliado con ninguna secta, denominación, entidad política, organización o institución; no participa en ninguna controversia; ni respalda ni se opone a ninguna causa. No hay cuotas de membresía. Al-Anon se autofinancia mediante sus propias contribuciones voluntarias.
                            <br><br>
                            Al-Anon tiene un solo propósito: ayudar a las familias de alcohólicos. Hacemos esto practicando los Doce Pasos, dando la bienvenida y brindando consuelo a las familias de alcohólicos, y brindando comprensión y aliento al alcohólico.
                        </p>
                    </section>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/coastal_wave.png" class="img-fluid shadow-wrap" alt="Preciosa puesta de sol azul satinado en el Océano Pacífico con olas bañando la costa rocosa." title="Preciosa puesta de sol azul satinado en el Océano Pacífico con olas bañando la costa rocosa.">
                </div>
            </div>
        </div>
    </article>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>