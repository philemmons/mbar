<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Al-Anon Reuniones de Maratón 2024</title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/al-anon-marathon-2024.php" >';
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
                        <a class="dropdown-item" href="aa-spanish-marathon-2024.php">Reuniones de A.A. Maratón de Habla Hispana</a>
                        <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Reuniones de Maratón</a>
                        <a class="dropdown-item active" aria-current="page" href="al-anon-marathon-2024.php">Al-Anon Reuniones de Maratón<span class="visually-hidden">(actual)</span></a>
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
                    <a class="nav-link" href="helping_hands.php">Manosamigas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="main-content">
    <!-- Hero Part -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-conference-2024" title="Centro de conferencias de Monterey - Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Reuniones maratonianas de 2024">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Reuniones Maratonianas de Al-Anon de 2024</h2>
                    <p class="mb-6 h5 text-dark">Durante el fin de semana del Día del Trabajo, tendremos reuniones de A.A. y Al-Anon En español e inglés.
                        <br>
                        <strong>Las reuniones de maratón están abiertas a <em>todos</em>, no es necesario registrarse.</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Primera parte -->
    <article aria-label="Título de las reuniones del maratón de Al-Anon">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Reuniones del maratón de Al-Anon de 2024">
                        <section aria-label="Horario del maratón de Al-Anon">
                            <h3 class="fw-bold text-dark px-3 px-md-0">Horario de las Reuniones del Maratón de Al-Anon</h3>
                            <p class="mb-6 h5 text-dark px-md-5">A continuación, se muestra nuestra programación actual. Si está interesado en ofrecerse como voluntario o hablar en una reunión, comuníquese con nuestra presidenta del Maratón de Al-Anon, Olya O.
                            </p>
                            <p class="mb-6 h5 text-dark mb-3"><strong>Ubicación: Steinbeck 1c</strong></p>
                            <a class="bb-link" href="../pdf/final-al-anon-marathon.pdf"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Adobe PDF icon">Programa de la reunión del Maratón de Al-Anon<span class="sr-only">(Abrir PDF en el navegador)</span></a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Segunda parte-->
    <article id="schedule" aria-label="Reuniones de Al-Anon">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <section aria-label="Reuniones de Al-Anon de los sábados">
                            <h3 class="white-on-black p-2 mt-2 text-center">Sábado 31 de Agosto</h3>
                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/Nombre: Buenos Días, Poder Superior
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Meditación
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/Nombre: Viernes Mediodía
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Paso 8
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>11:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/Nombre: Serenidad del Lunes Por la Noche
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Confía en el Proceso
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>12:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/nombre: Martes, Mediodía de Mujeres
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Servicio
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>1:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/nombre: Luz y Esperanza
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Cuando Estoy Ocupado Me Siento Mejor
                                </div>

                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>2:00pm Denis D. (A.A.) y Shelly S. (Al-Anon) — Reunión de Oradores</strong>
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/Nombre: Lema del Sábado
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Pero por la Gracia de Dios
                                </div>

                            </div>
                        </section>

                        <section aria-label="Reuniones de Al-Anon de los domingos">
                            <h3 class="white-on-black p-2 mt-2 text-center">Domingo 1 de Septiembre</h3>

                            <div class="row g-0 mb-4">

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>9:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/Nombre: Buenos días, Poder Superior
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Meditación
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>10:00am</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/Nombre: Denis D.
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Donaciones de Al-Anon: Cómo Liberar Nuestro Enorme Potencial
                                </div>

                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>11:00am Chris y Eileen W.: Reunión de Oradores de Al-Anon</strong>
                                </div>

                                <div class="col-sm-12 text-center feature-speaker">
                                    <strong>1:30pm Amelia M.: Reunión de Oradores de Alateen</strong>
                                    <p>MBAR cumple con el requisito B-17 NCWSA para la seguridad de los miembros de Alateen. Para obtener más información, comuníquese con Concetta C. en <?php echo getenv('mbar-alateen-1');?> o Marge S. en <?php echo getenv('mbar-alateen-2');?></p>
                                </div>

                                <div class="col-sm-2 top marathon-cell">
                                    <strong>4:00pm</strong>
                                </div>
                                <div class="col-sm-5 middle marathon-cell">
                                    Grupo/Nombre: Un día a la vez (Jueves)
                                </div>
                                <div class="col-sm-5 bottom marathon-cell">
                                    Tema: Desprendimiento
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12 p-2 mt-2">
                                    <strong>Descargo de responsabilidad: este cronograma está sujeto a cambios.</strong>
                                </div>

                            </div>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Quinta parte -->
    <aside aria-label="Por qué tenemos reuniones maratónicas">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <section aria-label="¿Por qué tenemos reuniones maratónicas?">
                            <h4 class="text-center card-title mb-3">¿Por qué Al-Anon Tiene Reuniones Maratónicas Durante las Convenciones?</h4>
                            <p>Al-Anon organiza reuniones maratónicas durante las convenciones para brindar apoyo continuo y un sentido de comunidad a los asistentes que lo puedan necesitar en cualquier momento durante el evento. Estas reuniones son especialmente valiosas en el contexto de una convención porque:
                            <ul>
                                <li><strong>Ofrecen apoyo continuo:</strong> las convenciones pueden ser intensas, y las reuniones maratónicas garantizan que haya ayuda disponible las 24 horas del día para cualquier persona que pueda estar teniendo dificultades o necesite compartir sus experiencias.
                                </li>
                                <li><strong>Fomentan la conexión:</strong> las convenciones reúnen a una gran cantidad de personas de diferentes lugares. Las reuniones maratónicas permiten a los participantes conectarse con otros de manera continua, lo que genera un sentido más fuerte de comunidad y apoyo mutuo.
                                </li>
                                <li><strong>Abordan necesidades variadas:</strong> los asistentes pueden tener diferentes horarios o sentir la necesidad de asistir a una reunión fuera del horario habitual. Las reuniones maratónicas se adaptan a estas necesidades variadas al estar disponibles en todo momento.
                                </li>
                                <li><strong>Proporcionan un espacio seguro:</strong> para muchos, las convenciones pueden ser abrumadoras o desencadenantes. Las reuniones maratónicas ofrecen un entorno seguro y sin prejuicios donde los participantes pueden buscar consuelo, compartir sus luchas y obtener fuerza de los demás. </li>
                            </ul>
                            Estas reuniones se alinean con la misión de Al-Anon de brindar apoyo constante a quienes se ven afectados por el consumo de alcohol de otra persona, garantizando que siempre haya ayuda disponible durante la convención.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <?php include_once 'ada-access-inclusion.inc' ?>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>