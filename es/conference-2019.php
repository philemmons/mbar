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
                    <button class="nav-link dropdown-toggle active" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia<span class="visually-hidden">(actual)</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" aria-current="page" href="memories.php">Recuerdos</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="MBAR Conference 2022 Archive">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Conferencia 2019 y Archivos de Audio<br>Archivo</span></h1>
                    <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h3 class="text-center">Servicios de Conferencias: KEEP IT SIMPLE</h3>
                    <br>
                    <p><strong>Regístrese en la mesa de registro</strong> para obtener sus paquetes de registro que contienen sus credenciales, programas y boletos para las comidas o el baile que haya comprado.
                    </p>
                    <p><strong>Habrá servicio de transporte disponible</strong> para conducir desde el centro de conferencias hasta la Iglesia Luterana de Belén para el desayuno del sábado por la mañana y la cena del sábado por la noche para conocer a los oradores. Dirígete al mostrador de registro para obtener más información sobre este servicio gratuito.
                    </p>
                    <p>El contacto frecuente con los recién llegados y entre nosotros es el punto brillante de nuestras vidas.
                        <br>
                        <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_7_P-89.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Libro Grande p89</a>
                    </p>
                    <p>Es una confraternidad de Alcohólicos Anónimos. Allí encontrará liberación del cuidado, el aburrimiento y la preocupación. Tu imaginación se disparará. La vida por fin significará algo. Los años más satisfactorios de tu existencia están por venir. Así, nosotros encontramos la comunión, y tú también la encontrarás.
                        <br>
                        <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_11_P-152.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Libro Grande p152</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h3 class="text-center"><i class="bi bi-calendar2-check-fill"> </i>Viernes, 30 de Agosto de 2019</h3>
                    <br>
                    STEINBECK BALLROOM 2 y 3 (Subiendo las escaleras mecánicas)
                    <br><br>
                    <p><strong>2:00pm</strong> - Se Abre la Inscripción (Vestíbulo Principal Arriba - Área de Inscripción)
                        <br>
                        <strong>3:00pm</strong> -Lanzamiento de A.A. Reunión de Oradores
                        <br>
                    </p>
                    <hr>
                    <strong>Los Madrugadores A.A. Vocero :</strong> Teresa J. de Monterey, CA
                    <br>
                    <audio controls="">
                        <source src="audio/2019/Teresa-J-Monterey.ogg" type="audio/ogg">
                        <source src="audio/2019/Teresa-J-Monterey.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue">Teresa J. Archivo de Audio</span>
                    <br>
                    <hr>
                    <div style="column-count: 2">
                        Secretario: Cindy A.
                        <br>
                        Preámbulo: Arthur T.
                        <br>
                        Tradiciones: Lisa
                        <br>
                        Capítulo 3 : Donna M.
                        <br>
                        Como Funciona: Brady S.
                        <br>
                        Visión Para Ti: Kathy M.
                        <br>
                    </div>
                    <br>
                    <strong> De 4:00pm - A.A. CALENDARIO DE REUNIONES DEL MARATÓN</strong>
                    <br>
                    <div style="column-count: 2">
                        4:00pm - Chael R. (Salinas) Voluntad
                        <br>
                        5:00pm - Patricia W. (Salinas) Aceptación
                        <br>
                        6:00pm - Saramae (Salinas) Calidad versus Cantidad
                        <br>
                    </div>
                    <br>
                    <strong>De 6:00pm - AL-ANON CALENDARIO DE REUNIONES DEL MARATÓN</strong>
                    <div style="column-count: 2">
                        6:00pm Thursday ODAT - Un Día a la Vez
                        <br>
                    </div>
                    <br>
                    <strong>6:30pm</strong> - Sorteo del Premio de la Rifa
                    <br>
                    <strong>7:30pm</strong> - Viernes Noche A.A./Al-Anon Reunión
                    <br>
                    (Se proporciona interpretación ASL)
                    <br>
                    <hr>
                    <strong>A.A. Orador:</strong> Harry H., de Denver, CO
                    <br><br>
                    <audio controls="">
                        <source src="audio/2019/Harry-H-Denver.ogg" type="audio/ogg">
                        <source src="audio/2019/Harry-H-Denver.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue">Harry H. Archivo de Audio</span>
                    <br>
                    <hr>
                    <strong>Al-Anon Orador:</strong> Jane H. de Denver, CO
                    <br>
                    <audio controls="">
                        <source src="audio/2019/Jane-H-Denver.ogg" type="audio/ogg">
                        <source src="audio/2019/Jane-H-Denver.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue">Jane H. Archivo de Audio</span>
                    <br>
                    <hr>
                    <div style="column-count: 2">
                        Secretario - Thomas L.
                        <br>
                        Abra con la Oración de la Serenidad
                        <br>
                        Bienvenida a Al-Anon
                        <br>
                        Preámbulo de Al-Anon
                        <br>
                        Los Doce Pasos de Al-Anon
                        <br>
                        Las Doce Tradiciones de Al-Anon
                        <br>
                        Declaración de seguridad de Al-Anon
                        <br>
                        Clausura de Al-Anon
                        <br><br>
                        Secretaria - Ashley G.
                        <br>
                        Preámbulo: Laura
                        <br>
                        Tradiciones: Kim
                        <br>
                        Capítulo 3: David
                        <br>
                        Cómo Funciona: Mare
                        <br>
                        Visión Para Ti: Courtney C.
                        <br>
                        Oración Final
                        <br><br>
                    </div>
                    <strong>9:30pm</strong> - Evento de Diversión y Compañerismo: <span style="color: blue; font-weight: 600">One Man Band</span>
                    <br><br>
                    <strong>ACCESIBILIDAD ADA: MBAR 2019 proporcionará</strong>:
                    <ul>
                        <li><strong>2 Intérpretes de ASL</strong> - Viernes: 2,5h</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Three -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h3 class="text-center"><i class="bi bi-calendar2-check-fill"> </i>Sábado, 31 de Agosto de 2019</h3>
                    STEINBECK BALLROOM 2 y 3
                    <br><br>
                    <p><strong>De 8:00am - A.A. CALENDARIO DE REUNIONES DEL MARATÓN</strong>
                        <br>
                    </p>
                    <div style="column-count: 2">
                        8:00am Ron M. (Prunedale)
                        <br>
                        9:00am Jack F. (Salinas) Defecto de Carácter
                        <br>
                        10:00am Mike H. (Hollister)
                        <br>
                        11:00am Mark Y. (Salinas) Cómo Funciona
                        <br>
                        12:00pm Charlie A. (Salinas)
                        <br>
                        1:00pm Rob C. (Hollister)
                        <br>
                        2:00pm Michelle S. (Monterey)
                        <br>
                        3:00pm Jodi B. (Castroville) Vivir-Veinticuatro-Horas
                        <br>
                        4:00pm Jean T. (Monterey) Honestidad Rigurosa
                        <br>
                        5:00pm Dan S. (Marina)
                        <br>
                        6:00pm Wes M.
                        <br>
                        10:00pm Steve C.
                        <br>
                    </div>
                    <br><br>
                    <p>
                        <strong>De 8:00am - AL-ANON CALENDARIO DE REUNIONES DEL MARATÓN</strong>
                    </p>
                    <div style="column-count: 2">
                        8:00am Serenidad del Lunes por la Noche
                        <br>
                        9:00am Viernes Mediodía Carmel - Mantenlo Simple
                        <br>
                        10:00am Salinas Sábado - Paso y Tradición
                        <br>
                        11:00am Marla M. - Yo soy Euficiente
                        <br>
                        12:00pm Jem G. - Nuestro Coraje para Cambiar
                        <br>
                        1:00pm Al-Ateen Panel
                        <br>
                        3:00pm Al-Ateen Reunión (Reunión Cerrada: Solo Miembros de Al-Ateen)
                        <br>
                        3:00pm Su B. - Recuperación Familiar En Instituciones
                        <br>
                        4:00pm Laurie B. y Guadalupe L.- Una Dia de la Vez - Habla Español
                        <br>
                    </div>
                    <br>
                    <strong>8:00am</strong> - Desayuno de Compañerismo Resumen(Bethlehem Lutheran Church Hall ∆)
                    <br><br>
                    <hr>
                    <strong>10:00pm</strong> Panel de Opinión de Médicos: Jerry C. y Sheila C.
                    <br>
                    <audio controls="">
                        <source src="audio/2019/Doctors-Opinion-Panel.ogg" type="audio/ogg">
                        <source src="audio/2019/Doctors-Opinion-Panel.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue"> Panel de Opinión de Médicos Archivo de Audio</span>
                    <br>
                    <hr>
                    <strong>11:15am</strong> Taller de Sobriedad Emocional: Sonny C. y Masa M.
                    <br>
                    <audio controls="">
                        <source src="audio/2019/Emotional-Sobriety-Workshop.ogg" type="audio/ogg">
                        <source src="audio/2019/Emotional=Sobriety=Workshop.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue">Taller de Sobriedad Emocional Archivo de Audio</span>
                    <br>
                    <hr>
                    <strong>12:30pm</strong>Reunión del Panel Los Muchos Caminos Hacia la Espiritualidad
                    <br>
                    <span style="margin-left: 100px">Miembro del jurado:</span> Jean T., Maggie W., y Carrie H. (Monterey, CA)
                    <br>
                    <audio controls="">
                        <source src="audio/2019/The-Many-Paths-to-Spirituality-Panel.ogg" type="audio/ogg">
                        <source src="audio/2019/The-Many-Paths-to-Spirituality-Panel.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue">Reunión del Panel Muchos Caminos Hacia la Espiritualidad Archivo de Audio</span>
                    <br>
                    <hr>
                    <strong>2:00pm</strong> - Helado Social (Stevenson Terrace)
                    <br>
                    <strong>4:00pm</strong> - Beca de Velocidad
                    <br>
                    <strong>5:00pm</strong> - Cena de Conozca a los Oradores (Bethlehem Lutheran Church Hall ∆)
                    <br>

                    <strong>7:00pm</strong> - Sorteo redondeado: debe estar presente para ganar
                    <br>
                    <strong>8:00pm</strong> - Reunión de Oradores el Sábado por la Noche: se Proporciona Interpretación de ASL
                    <br>
                    <hr>
                    <span style="margin-left: 100px"><strong>A.A. Orador:</strong> Charlie H. Henderson, NV</span>
                    <br>
                    <audio controls="">
                        <source src="audio/2019/Charlie-H-Henderson.ogg" type="audio/ogg">
                        <source src="audio/2019/Charlie-H-Henderson.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue">Charlie H. Henderson Archivo de Audio</span>
                    <hr>
                    <div style="column-count: 2">
                        Secretario - May H.
                        <br>
                        Cuenta regresiva: Michael R. y Naomi B.
                        <br>
                        Preámbulo: Kristen
                        <br>
                        Tradiciones: Jimmy B.
                        <br>
                        Capítulo Tres: Más Sobre el Alcoholismo: George F.
                        <br>
                        Cómo Funciona: Donna D.
                        <br>
                        Visión Para Ti: Stephanie
                        <br>
                        Oración Final
                        <br>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <strong>9:30pm</strong> - Baile Divertido y de Compañerismo
                    <br><br>
                    <strong>ACCESIBILIDAD ADA: MBAR 2019 proporcionará</strong>:
                    <ul>
                        <li><strong>Dos Intérpretes de ASL</strong> - Sábado: 2,5h</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Four -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h3 class="text-center"><i class="bi bi-calendar2-check-fill"> </i>Domingo, 1 de Septiembre de 2019</h3>
                    STEINBECK BALLROOM 2 y 3
                    <br><br>
                    <p><strong>8:00am - A.A. CALENDARIO DE REUNIONES DEL MARATÓN</strong>
                        <br>
                        8:00am Chuck N. (Salinas)
                        <br><br>
                        <strong>8:00am - AL-ANON CALENDARIO DE REUNIONES DEL MARATÓN</strong>
                        <br>
                        8:00am Lector Diario de Meditación GMHP
                    </p>
                    <hr>
                    <strong>9:00am</strong> - <strong>Al-Anon Orador:</strong> Louise M., Sacramento, CA
                    <br>
                    <audio controls="">
                        <source src="audio/2019/Louise-M-Sacramento.ogg" type="audio/ogg">
                        <source src="audio/2019/Louise-M-Sacramento.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue">Louise M. Archivo de Audio</span>
                    <hr>
                    <br>
                    Se Proporciona Interpretación de ASL
                    <br>
                    <div style="column-count: 2">
                        Secretario - Thomas L.
                        <br>
                        Abierto con Oración de Serenidad
                        <br>
                        Al-Anon Bienvenido
                        <br>
                        Al-Anon Preámbulo
                        <br>
                        Al-Anon Doce Pasos
                        <br>
                        Al-Anon Twelve Tradiciones
                        <br>
                        Al-Anon Declaración de Seguridad
                        <br>
                        Al-Anon Clausura
                        <br>
                    </div>
                    <br>
                    <hr>
                    <strong>11:00am</strong> - <strong>A.A. Orador: </strong> Pat B., Clovis, CA
                    <br>
                    <audio controls="">
                        <source src="audio/2019/Pat-B-Clovis.ogg" type="audio/ogg">
                        <source src="audio/2019/Pat-B-Clovis.mp3" type="audio/mpeg">
                        Su navegador no soporta el elemento de audio.
                    </audio>
                    <br>
                    <span style="font-size: 15px; color: blue">Pat B. Archivo de Audio</span>
                    <br>
                    <hr>
                    (Se Proporciona Interpretación ASL)<br>
                    <div style="column-count: 2">
                        Preámbulo
                        <br>
                        Tradiciones
                        <br>
                        Capítulo Tres: Más Sobre el Alcoholismo
                        <br>
                        Cómo Funciona
                        <br>
                        Visión Para Ti
                        <br>
                    </div>
                    <br>
                    <p><strong>12:00pm</strong> - Finaliza la Conferencia: Nos Vemos la Próxima Vez
                        <br>
                        Que Dios te Bendiga y te Guarde Hasta Entonces (Libro Grande p164)
                    </p>
                    <strong>ACCESIBILIDAD ADA: MBAR 2019 proporcionará</strong>:
                    <ul>
                        <li>
                            <strong>Dos Intérpretes de ASL</strong>
                        </li>
                    </ul>
                    <br>
                    <a href="https://www.aamonterey.org/aa-meetings/" class="bb-link" _target="blank">
                        <img class="img-fluid" src="../images/mbiaa-logo.png" alt="Logotipo del Intergrupo de Alcohólicos Anónimos del Área de la Bahía de Monterey, haga clic para regresar a la página aamonterey.org.">
                    </a>
                    <br><br>
                    Vea nuestro grupo local de A.A. Sitio web de la Oficina Central (enlace arriba) para obtener una lista actualizada de las reuniones en el área, para después de la conclusión de la conferencia.
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
                        <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_7_P-89.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Libro Grande p89</a>
                    </p>
                    <p>Es una confraternidad de Alcohólicos Anónimos. Allí encontrarás liberación de preocupaciones, aburrimiento y preocupación. Tu imaginación se disparará. La vida por fin significará algo. Los años más satisfactorios de tu existencia están por venir. Así, nosotros encontramos la comunión, y tú también.
                        <br>
                        <img src="images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon, no link just design">
                        <a href="" class="bb-link" onclick="window.open('pdf/BIG-BOOK-CHAPTER_11_P-152.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Libro Grande p152</a>
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
                        <p><img src="images/icons/warning-sign.png" width="50" height="50" alt="Señal de advertencia triangular con un signo de exclamación."><strong>TENGA EN CUENTA:</strong> El Desayuno y la Cena se realizarán en<br>
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