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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">El Registro Está en Vivo</span>
                    </h2>
                    <p class="mb-6 h3 text-dark">Fin de semana del Día del Trabajo,<br>Reunión Inaugural por Zoom<br>30 de Agosto y en Vivo el 31 de Agosto y <br>1 de Septiembre en el Centro de Conferencias de Monterey</p>
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
                            <p class="card-title h6"><i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><strong>Nuevo</strong> - Calendario de Eventos de 2024
                            </p>
                            <p class="card-text">Anunciamos nuestra reunión inaugural por Zoom el 30 de Agosto a las 8:00pm. (hora del Pacífico). Únase a nosotros con nuestro primer orador del evento de 2024: Oliver D. de Delaware.<br><a class="bb-link" href="register-now.php#zoom-info">Vea la información de Zoom aquí</a>
                            </p>
                            <p class="card-text">¡Prepárese para sumergirse! ¡Nuestro calendario de eventos ya está disponible! Pronto se revelarán más detalles a medida que la trama se complique.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="conference-2024.php" class="btn btn-primary">Calendario de Conferencias 2024</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-cart me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>La Inscripción está <strong>Vivir</strong>
                            </p>
                            <p class="card-text">¡Regístrese ahora y $1 de su registro se destinará al sorteo 50/50 que se llevará a cabo el sábado por la noche! Ayúdanos a planificar un evento perfecto con anticipación, para garantizar que todo salga a la perfección para ti y para todos los demás. Demuestra tu compromiso y entusiasmo al registrarte con anticipación.
                                <br><br>
                                Las reuniones de maratón están abiertas y no requieren inscripción.
                            </p>
                            <p class="card-text">Le recordamos que su inscripción se completará cuando se haya realizado el <a href="register-now.php#payment-now" class="bb-link">pago</a>.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="register-now.php" class="btn btn-primary">Regístrese ahora</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-hand-thumbs-up me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Manos Amigas
                            </p>
                            <p class="card-text">Así es como nos comportamos con alguien que quiere asistir a la conferencia pero no puede hacerlo. De acuerdo con Nuestra Tradición de autofinanciación, aceptamos contribuciones únicamente de A.A. y miembros de Al-Anon.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="helping_hands.php" class="btn btn-primary">Manos Amigas</a></small>
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
                            <p class="card-title h6"><i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><strong>Nuevo</strong> - Actividades de MBAR
                            </p>
                            <p class="card-text">Nos complace presentar nuestra programación, que incluye: reuniones de maratón para todos, oradores invitados, mesas redondas, cena de presentación de oradores, baile de máscaras, desayuno de fin de semana con bingo y helado social. Además, habrá Speed Fellowship, una búsqueda del tesoro de Goose Chase, Paint Fellowship, Werewolf Fellowship Game, A.A. Trivia y lanzamiento de cornhole.
                                <br><br>
                                Anota en tu calendario un fin de semana de recuperación, compañerismo y diversión. ¡Pronto habrá más detalles!
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">Vista Previa de Nestras Actividades</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-translate me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Traducción Española
                            </p>
                            <p class="card-text">¡Nos complace anunciar el lanzamiento de nuestro nuevo sitio web traducido al español! Esta mejora tiene como objetivo hacer que nuestros recursos e información sean más accesibles para nuestros miembros hispanohablantes.
                                <br><br>
                                Explore todas las funciones y el contenido que ahora están disponibles en español. Esperamos que esta actualización mejore su experiencia y nos permita brindarle un mejor servicio.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="https://montereybayarearoundup.org/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Sitio Web en Inglés<span class="sr-only">(Se abre en una ventana nueva)</span></a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-people-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Reunión del Comité de MBAR
                            </p>
                            <p class="card-text">Mientras nos preparamos para nuestro próximo evento, realizaremos varias reuniones de planificación adicionales para asegurarnos de que todo transcurra sin problemas. Sus aportes y participación son cruciales para nuestro éxito. ¡Juntos, podemos hacer que este evento sea realmente excepcional!
                                <br><br>
                                Esperamos colaborar con todos ustedes.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="meetings.php" class="btn btn-primary">Información de la Reunión</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Voluntariado en Recuperación
                            </p>
                            <p class="card-text">Hemos descubierto que ofrecerse voluntariamente para prestar servicio mejora significativamente la calidad de nuestra recuperación. Al contribuir, no solo ayudamos a otros, sino que también fortalecemos nuestro propio camino.
                                <br><br>
                                Recuerde, recibe lo que da. Únase a nosotros para generar un impacto positivo y mejorar nuestra comunidad de recuperación.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="contact.php" class="btn btn-primary">Listo para prestar Servicio</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Nuestro Pasado
                            </p>
                            <p class="card-text">Desde 1993, Monterey Bay Area Roundup(MBAR) ha unido a oradores e invitados de todo el país. El voluntariado mejora nuestro camino hacia la recuperación al contribuir y fomentar el crecimiento personal. Explore los volantes anteriores de MBAR para ver el impacto y únase a nosotros para continuar con este legado.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="mbar_history.php" class="btn btn-primary">Historia de MBAR</a></small>
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