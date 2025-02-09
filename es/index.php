<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Hogar </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/index.php" >';
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
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-home">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Resumen del Área de la Bahía de Monterey</h2>
                    <p class="h3 text-dark">Puestos Vacantes en el Comité
                    </P>
                    <p class="text-dark">
                        <strong>*NUEVO* ID de Zoom:</strong> 330 100 7207
                        <br>
                        <strong>Contraseña:</strong> 2026
                        <br><br>
                        <a class="bb-link" href="https://us02web.zoom.us/j/3301007207?pwd=olR3pXbrM9zKtXLjhdVqFPfOtbbbdh.1&omn=87244042787" rel="noopener noreferrer nofollow" target="_blank"><span class="sr-only">(Abre la aplicación Zoom)</span>¡Únase a nuestra reunión de negocios</a>, el 8 de febrero a las 10 a. m., para conocer las responsabilidades de los puestos enumerados! Difusión, Copresidente de Difusión, Tesorero, Secretario, Hospitalidad, Copresidente de Redes Sociales, Enlace GSR/IGR, Enlace H&I, Premio de la rifa, Rifa 50/50, Registro y más.
                        <br><br>
                        Nota: Solo el Comité Directivo tiene requisitos descritos en el PDF a continuación.
                    </p>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary"><a href="../pdf/steering-election-flyer.pdf" class="btn btn-primary"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF"> Más Información: Comité Directivo <span class="sr-only">(Abrir PDF en el navegador)</span></a></small>
                    </div>
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
                            <p class="card-title h6"><i class="bi bi-shield-shaded me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="logo_contest.php" class="bb-link">Concurso de logotipos 2026</a>
                            </p>
                            <p class="card-text">¡El contenido del logotipo de MBAR ya está aquí! A continuación se indican los requisitos para la presentación:
                            <ul>
                                <li>Envíe su diseño y obra de arte para que el Comité MBAR lo considere</li>
                                <li>Cada propuesta debe incluir el tema de la conferencia, "Keep It Simple" (Manténgalo simple), y el año, "2026"</li>
                                <li>Asegúrese de que los gráficos sean simples, con un máximo de 3 colores y que se puedan usar para un logotipo de 2" x 2"</li>
                                <li>La propuesta del artista ganador recibirá una <span class="text-uppercase fw-bold">inscripción gratuita</span> a la conferencia y una <span class="text-uppercase fw-bold">camiseta</span>. ¡No se pierda la diversión y la camaradería!</li>
                                <li class="text-uppercase fw-bold">Envíe las propuestas antes del 04/05/25</li>
                                <li>El ganador se anunciará en la reunión del cumpleaños de junio, el 28/06/25</li>
                            </ul>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="btn btn-primary">Enviar Logotipo y Preguntas</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><img class="me-2 mb-3" src="../images/icons/big-shamrock.png" width="40" height="40" alt="Icono de trébol" aria-hidden="true"><a href="upcoming_event.php" class="bb-link">Comida Compartida de San Patricio</a>
                            </p>
                            <p class="card-text">Nuestra reunión anual de oradores y comida compartida de San Patricio se llevará a cabo el domingo 16 de Marzo de 2025 en 437 Laureles Grade, Carmel Valley. Las puertas se abrirán a las 3:00 pm, la cena será a las 4:00 pm y Tinia compartirá su experiencia, fortaleza y esperanza a las 5:00 pm.
                                <br><br>
                                <a href="upcoming_event.php" class="btn btn-link bb-link">Consulta más Información Aquí</a>

                            <ul>
                                <li>Fondos y Becas</li>
                                <li>Se Proporcionará Carne en Conserva y Repollo</li>
                                <li>Sugerencias para Compartir con los Participantes Iniciales</li>
                                <li>Rifa 50/50</li>
                                <li>Trae una Silla y Algunos Amigos de Bill W.</li>
                                <li>Usa tu Equipo Verde o Anterior de MBAR</li>
                            </ul>
                            <br>
                            ¡Nos vemos en Marzo!
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a href="upcoming_event.php" class="btn btn-primary">Próximo evento</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-instagram me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Nueva Página de Instagram
                            </p>
                            <p class="card-text"> ¡En vivo! ¡Página oficial de Instagram de MBAR 2026! Esta cuenta <strong>privada</strong> garantiza un espacio seguro y de apoyo para que nuestras comunidades compartan actualizaciones, generen entusiasmo y demuestren la espiritualidad que estamos encontrando entre nosotros. "¡Insistimos absolutamente en disfrutar la vida!"
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary"><a class="btn btn-primary" href="https://www.instagram.com/mbar2026/" target="_blank" rel="noopener noreferrer nofollow"><span class="sr-only">(Abre una nueva ventana)</span>MBAR2026 Instagram</a></small>
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
                                <p class="card-title h6"><i class="bi bi-door-open me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="meetings.php" class="bb-link">Gratitud y Reflexión</a>
                                </p>
                                <p class="card-text">Agradecemos sinceramente a todos los que participaron y contribuyeron al éxito de nuestra reciente conferencia de A.A. Su participación, ya sea asistiendo, trabajando como voluntarios o brindando apoyo, ayudó a fomentar una atmósfera de compañerismo, recuperación y conexión.
                                    <br><br>
                                    Al regresar a nuestra vida diaria, reflexionemos sobre las lecciones y los conocimientos que compartimos y sigamos llevando el mensaje de recuperación a quienes lo necesitan. ¡Manténgase conectado, siga viniendo y esperamos verlo en futuras reuniones!
                                </p>
                                <div class="card-footer text-center">
                                    <small class="text-body-secondary"><a href="conference-2024.php" class="btn btn-primary">Calendario de Conferencias 2024</a></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                        <div class="card h-100 shadow-wrap">
                            <div class="card-body">
                                <p class="card-title h6"><i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="mbar_history.php" class="bb-link">Crecimiento y Legado</a>
                                </p>
                                <p class="card-text">El Monterey Bay Area Roundup (MBAR) ha crecido de manera constante en tamaño e importancia desde su inicio. A medida que el evento continúa evolucionando, sigue estando profundamente arraigado en los principios espirituales de A.A. y Al-Anon, con un fuerte enfoque en fomentar el crecimiento personal, el apoyo mutuo y el desarrollo espiritual.
                                    <br><br>
                                    A lo largo de su historia, el Roundup ha desempeñado un papel vital en las vidas de innumerables personas y familias, brindando un espacio donde pueden encontrar esperanza, sanación y compañerismo en su camino hacia la recuperación.
                                    <br><br>
                                    Explore conferencias pasadas, folletos y grabaciones de oradores de A.A./Al-Anon para echar un vistazo a nuestro próximo MBAR.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-body-secondary"><a href="mbar_history.php" class="btn btn-primary">Historia de MBAR</a></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" row justify-content-center mb-5">
                    <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                        <div class="card h-100 shadow-wrap">
                            <div class="card-body">
                                <p class="card-title h6"><i class="bi bi-translate me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="https://montereybayarearoundup.org/es/" class="bb-link">Traducción Española</a>
                                </p>
                                <p class="card-text">Traducir un sitio web al español es importante porque garantiza que los recursos esenciales de recuperación sean accesibles para las personas de habla hispana. En Alcohólicos Anónimos (A.A.) y Al-Anon, la inclusión es clave para llegar a la mayor cantidad posible de personas que necesitan apoyo. Al ofrecer una versión del sitio en español, podemos atender mejor las diversas necesidades de nuestra comunidad, asegurándonos de que todos, independientemente del idioma, tengan la oportunidad de encontrar ayuda y conectarse con otros en su camino hacia la recuperación.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-body-secondary"><a href="https://montereybayarearoundup.org/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Sitio Web en Inglés<span class="sr-only">(Se abre en una ventana nueva)</span></a></small>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                        <div class="card h-100 shadow-wrap">
                            <div class="card-body">
                                <p class="card-title h6"><i class="bi bi-question-circle me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>¿Por qué tenemos MBAR?
                                </p>

                                <p class="card-text">Las convenciones de A.A. son más que simples reuniones sociales; son retiros espirituales, oportunidades educativas y celebraciones de la sobriedad que ayudan a las personas y a las familias a mantenerse conectadas con los principios de Alcohólicos Anónimos. Fomentan la camaradería, brindan oportunidades para el crecimiento personal y espiritual y sirven como recordatorio de que la recuperación es un viaje que dura toda la vida, apoyado por la comunidad y un Poder Superior.
                                </p>
                                <p class="card-text text-center">El contacto frecuente con los recién llegados y entre nosotros es el punto brillante de nuestras vidas.
                                    <br>
                                    <img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF">
                                    <a class="btn btn-link bb-link" href="../pdf/BIG-BOOK-CHAPTER_7_P-89.pdf">Big Book pág. 89<span class="sr-only">(Abrir el pdf en el navegador)</span></a>
                                </p>
                                <p class="sr-only">(Este es el párrafo de la página 89 anterior.) "La vida adquirirá un nuevo significado. Ver a las personas recuperarse, verlas ayudar a otros, ver cómo se desvanece la soledad, ver cómo se forma una comunidad a tu alrededor, tener una multitud de amigos: ésta es una experiencia que no debes perderte. Sabemos que no querrás perdértela".
                                </p>
                                <p class="card-text text-center">Es una comunidad en Alcohólicos Anónimos. Allí encontrarás liberación de la preocupación, el aburrimiento y la ansiedad. Tu imaginación se encenderá. La vida tendrá por fin algún significado. Los años más satisfactorios de tu existencia están por venir. Así, nosotros encontramos la comunión, y tú también la encontrarás. <br>
                                    <img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF">
                                    <a class="btn btn-link bb-link" href="../pdf/BIG-BOOK-CHAPTER_11_P-152.pdf">Big Book pág. 152<span class="sr-only">(Abrir el PDF en el navegador)</span></a>
                                </p>
                                <p class="sr-only">(Este es el párrafo de la página 152 anterior.)"Sí, hay un sustituto y es mucho más que eso. Es una comunidad en Alcohólicos Anónimos. Allí encontrará liberación de la preocupación, el aburrimiento y la preocupación. Su imaginación se encenderá. La vida tendrá algún significado por fin. Los años más satisfactorios de su existencia están por venir. Así encontramos la comunidad, y usted también la encontrará."
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-body-secondary"><a href="memories.php" class="btn btn-primary">Recuerdos de Eventos</a></small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                        <div class="card h-100 shadow-wrap">
                            <div class="card-body">
                                <p class="card-title h6"><i class="bi bi-activity me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i><a href="activities.php" class="bb-link">Actividades y Aspectos Destacados</a>
                                </p>
                                <p class="card-text">A lo largo de los años, Monterey Bay Area Roundup ha crecido hasta incluir una variedad de actividades que apoyan el crecimiento personal y espiritual, entre ellas:
                                </p>

                                <ul>
                                    <li><strong>Reuniones de oradores</strong>: En estas sesiones, a menudo participan miembros de A.A. o Al-Anon que comparten sus historias de experiencia, fortaleza y esperanza.
                                    </li>
                                    <li><strong>Talleres y paneles</strong>: Los temas cubren los aspectos prácticos de mantener la sobriedad, como el apadrinamiento, el bienestar emocional y la conexión espiritual.
                                    </li>
                                    <li><strong>Eventos sociales y de confraternidad</strong>: Los bailes, las comidas y las reuniones informales brindan oportunidades para que los participantes se relacionen y compartan experiencias fuera de las reuniones formales.
                                    </li>
                                    <li><strong>Voluntariado y servicio</strong>: Muchos participantes ofrecen su tiempo y esfuerzo como voluntarios para ayudar a organizar el evento, lo que refleja la tradición de servicio de A.A. y Al-Anon como un elemento clave de la recuperación.
                                    </li>
                                </ul>

                            </div>
                            <div class="card-footer text-center">
                                <small class="text-body-secondary"><a href="activities.php" class="btn btn-primary">Ver 2024 Actividades</a></small>
                            </div>
                        </div>
                    </div>
                    <!--
                <div class="col-lg-4 mb-3 mb-lg-5 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><i class="bi bi-cup-hot-fill me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>2024 Reuniones Maratonianas
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
-->
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