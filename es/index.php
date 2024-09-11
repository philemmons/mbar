<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Home </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/" >';
include_once 'header-bottom.inc';
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Resumen del Área de la Bahía de Monterey</h2>
                    <p class="h3 text-dark">Gratitud y Reflexión Post-Conferencia
                    </P>
                    <p class="dark-text">Queremos tomarnos un momento para agradecer a todos los que participaron y contribuyeron al éxito de nuestra reciente conferencia de A.A. El espíritu de compañerismo y recuperación estuvo vivo en cada sesión, conversación y experiencia compartida. Ya sea que haya asistido, colaborado como voluntario o prestado apoyo desde lejos, su presencia y participación ayudaron a crear un entorno de sanación, crecimiento y conexión.
                        <br><br>
                        Al regresar a nuestra vida diaria, lo alentamos a reflexionar sobre las valiosas lecciones y perspectivas obtenidas durante la conferencia. Sigamos llevando el mensaje de recuperación a quienes aún sufren y fortaleciendo nuestros vínculos dentro de esta comunidad. Esperamos verlo en futuras reuniones y, hasta entonces, ¡manténgase conectado y siga regresando!
                    </p>
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
                            <p class="card-title h6"><i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Sentido del Corazón Gracias
                            </p>
                            <p class="card-text">En nombre de todos los miembros de nuestras comunidades de A.A. y Al-Anon, queremos expresar nuestro más profundo agradecimiento a todos los voluntarios que hicieron posible este evento. Su dedicación, compasión y arduo trabajo han creado un espacio para la recuperación, el apoyo y la conexión. Ya sea que estuvieran organizando o simplemente ofreciendo una palabra amable, sus esfuerzos no pasaron desapercibidos y reflejan el verdadero espíritu de compañerismo. No podríamos haberlo hecho sin ustedes y, por eso, estamos inmensamente agradecidos. Gracias por dar su tiempo, energía y corazón a este importante evento.
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
                            <p class="card-title h6"><i class="bi bi-cart me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Regístrese en Persona
                            </p>
                            <p class="card-text">¡Estamos emocionados de que te unas a nosotros! Acérquese a la mesa de registro para registrarse en persona, ya que el registro en línea ya está cerrado. ¡Estamos ansiosos por darle la bienvenida!
                                <br><br>
                                Las reuniones de maratón están abiertas y no requieren inscripción.
                                <br><br>
                                ¡La reunión inicial de Zoom está disponible para todos y estamos ansiosos por verte allí!
                            </p>
                            <p class="card-text">Le recordamos que su inscripción se completará cuando se haya realizado el <a href="register-now.php#payment-now" class="bb-link">pago</a>.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="https://www.google.com/maps/dir//Monterey+Conference+Center+1+Portola+Plaza+Monterey,+CA+93940/@36.6014612,-121.8949613,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x808de422461f891b:0x20f8f64ee124f091!2m2!1d-121.8949613!2d36.6014612?hl=es&entry=ttu" class="btn btn-primary" target="_blank" title="Direct link to Google Map">Centro de Conferencias de Monterey<span class="sr-only">(Abre una nueva ventana)</span></a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-cup-hot-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><strong>Nuevo</strong> - Reuniones Maratonianas
                            </p>
                            <p class="card-text">Las reuniones de maratón son una parte crucial de las convenciones de A.A. y Al-Anon porque brindan apoyo y compañerismo continuos para todos. Estas reuniones ofrecen un espacio para que los miembros compartan sus experiencias, fortaleza y esperanza las 24 horas del día, lo que garantiza que siempre haya ayuda disponible cuando la necesiten.
                                <br><br>
                                Si desea brindar servicio, ser orador en una reunión o enviar su programa de reuniones de maratón, comuníquese con Nuestro Coordinador de Maratón de A.A.: Mark S. o con Nuestro Coordinador de Habla Hispana: Robert o con Nuestra Coordinadora de Maratón de Al-Anon: Olya O.
                            </p>
                        </div>

                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-sm-6 text-center mb-2 mb-sm-0">
                                    <small class="text-body-secondary"><a href="aa-spanish-marathon-2024.php" class="btn btn-primary">Reuniones de A.A. en Español</a></small>
                                </div>
                                <div class="col-sm-6 text-center mb-2 mb-sm-0">
                                    <small class="text-body-secondary"><a href="aa-marathon-2024.php" class="btn btn-primary">Reuniones de A.A. en Inglés</a></small>
                                </div>
                                <div class="col-sm-12 text-center mt-sm-2">
                                    <small class="text-body-secondary"><a href="al-anon-marathon-2024.php" class="btn btn-primary">Reuniones de Al-Anon</a></small>
                                </div>
                            </div>
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
                            <p class="card-title h6"><i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><strong>Nuevo</strong> - <a href="activities.php" class="bb-link">Más Compañerismo</a>
                            </p>
                            <p class="card-text">¿Qué mejor manera de cuidar a otra persona que conocerla mejor? Este año tenemos más actividades de compañerismo que en años anteriores y te invitamos a participar. Los enlaces a continuación abren archivos PDF con más información. "Aunque sabían que debían ayudar a otros alcohólicos si querían permanecer sobrios, ese motivo pasó a un segundo plano. Fue superado por la felicidad que encontraron al entregarse a los demás". BB p132
                            </p>
                            <p class="card-text">
                            <ul>
                                <li><strong>Nuevo</strong> - Fotomatones: ¡Captura divertidos selfies!
                                </li>
                                <li>Comunicación Rápida
                                </li>
                                <li><a class="bb-link" href="../pdf/scavenger_hunt.pdf">Búsqueda del Tesoro de la Persecución del Ganso<span class="sr-only">(Abrir PDF en el navegador)</span></a>
                                </li>
                                <li><a class="bb-link" href="../pdf/paint-party.pdf">Fiesta de Pintura<span class="sr-only">(Abrir PDF en el navegador)</span></a>
                                </li>
                                <li><a class="bb-link" href="../pdf/werewolf.pdf">Juego Werewolf Compañerismo<span class="sr-only">(Abrir PDF en el navegador)</span></a>
                                </li>
                                <li><a class="bb-link" href="../pdf/cornhole.pdf">Cornhole y Compañerismo<span class="sr-only">(Abrir PDF en el navegador)</span></a>
                                </li>
                                <li><a class="bb-link" href="../pdf/aa_trivia.pdf">Trivialidades de A.A: Servicios Generales<span class="sr-only">(Abrir PDF en el navegador)</span></a>
                                </li>
                            </ul>
                            Anota en tu calendario un fin de semana de recuperación, compañerismo y diversión. ¡Pronto habrá más detalles!
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">Vista Previa de Todas las Actividades de MBAR</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-translate me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="https://montereybayarearoundup.org/es/" class="bb-link">Traducción Española</a>
                            </p>
                            <p class="card-text">¡Estamos comprometidos con nuestras comunidades de A.A. y Al-Anon de habla hispana!
                                <br><br>
                                Traducir un sitio web al español es importante porque garantiza que los recursos esenciales de recuperación sean accesibles para las personas de habla hispana. En Alcohólicos Anónimos (A.A.) y Al-Anon, la inclusión es clave para llegar a la mayor cantidad posible de personas que necesitan apoyo. Al ofrecer una versión del sitio en español, podemos atender mejor las diversas necesidades de nuestra comunidad, asegurándonos de que todos, independientemente del idioma, tengan la oportunidad de encontrar ayuda y conectarse con otros en su camino hacia la recuperación.
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
                            <p class="card-title h6"><i class="bi bi-people-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Manos Que Ayudan
                            </p>
                            <p class="card-text">Eche una 'Mano Amiga' a alguien que quiera asistir a la conferencia pero no pueda permitírselo. El objetivo es garantizar que cualquiera que quiera beneficiarse de la recuperación y el apoyo disponibles en estos eventos pueda participar, independientemente de sus limitaciones financieras. Esto encarna el espíritu de apoyo mutuo y compañerismo central para la misión de A.A.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a class="btn btn-primary" href="helping_hands.php">Manos Que Ayudan</a></small>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="contact.php" class="bb-link">Voluntariado en Recuperación</a>
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
                            <p class="card-title h6"><i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="mbar_history.php" class="bb-link">Nuestro Pasado</a>
                            </p>
                            <p class="card-text">Desde 1993, Monterey Bay Area Round Up(MBAR) ha unido a oradores e invitados de todo el país. El voluntariado mejora nuestro camino hacia la recuperación al contribuir y fomentar el crecimiento personal. Explore los volantes anteriores de MBAR para ver el impacto y únase a nosotros para continuar con este legado.
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