<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" role="navigation" aria-label="navegación principal">
    <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse.true navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item active" aria-current="page" href="registration.php">Registro<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-comités" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-comités">
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item" href="upcoming_event.php">Noche de Bingo</a>
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

<main role="main">
    <!-- Hero Section -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-registration" title="Centro de Conferencias de Monterey en Portola Plaza, Monterey.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <h2 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">La Preinscripción está Activa</span>
                    </h2>
                    <a href="#register-now" class="btn btn-primary me-2">Regístrese Ahora</a>
                    <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div id="register-now"></div>
            <div class="col-xl-8 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                    <div style="height: 50rem;">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf6ouc-DIkpARsMa5rmX7HmLy2dwejBr79fDQ9aqUbR--DDQQ/viewform?embedded=true" id="reg-form" title="Formulario de inscripción al MBAR 2024 a través de formularios de Google.">Cargando…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3 class="card-title mb-3"><a href="#register-now">Descarga el Formulario de Inscripción</a></h3>
                    <p>A continuación se muestra el formulario de registro de MBAR 2024 y se puede devolver por correo postal o electrónico.
                    </p>
                    <p>MONTEREY BAY AREA ROUNDUP<br>
                        Att: Naomi B.<br>
                        P.O. Box 1462<br>
                        Monterey, CA 93942
                    </p>
                    <p>O envíe el formulario completo por correo electrónico a nuestro <a href="mailto:<?php echo getenv('mbar-reg-email') ?>" class="bb-link">Presidente de Registro</a>
                    </p>
                    <p><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                        <a href="" class="bb-link" onclick="window.open('../pdf/mbar-register-form.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Formulario de Registro MBAR 2024</a>
                    </p>
                    <p>Si tiene alguna pregunta, comuníquese con nuestro <a href="mailto:<?php echo getenv('mbar-chair-email') ?>" class="bb-link">Comité Directivo</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Three -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h4 class="card-title mb-3"><a href="activities.php">∆ Bethlehem Lutheran Church</a></h4>
                    <div class="col-md-12 db-5">
                        <p><img src="../images/icons/warning-sign.png" width="50" height="50" alt="Señal de advertencia triangular con un signo de exclamación."><strong>TENGA EN CUENTA:</strong> El Desayuno y la Cena se realizarán en<br>
                            <strong>Bethlehem Lutheran Church, ubicada en 800 Cass Street en Monterey.</strong><br>
                            (Está a poco más de una milla del Centro de Conferencias).
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.345445633647!2d-121.89838222286743!3d36.59398837929454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de425e4f48de1%3A0xc2ec674814c2393f!2sBethlehem%20Lutheran%20Church!5e0!3m2!1ses!2sus!4v1705601422150!5m2!1ses!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <br>
                    <hr>
                    <h4 class="card-title mb-3"><a href="activities.php">Monterey Conference Center</a></h4>
                    <div class="col-md-12 db-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3203.0352026855912!2d-121.89496129999999!3d36.601461199999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808de422461f891b%3A0x20f8f64ee124f091!2sMonterey%20Conference%20Center!5e0!3m2!1ses!2sus!4v1705601249904!5m2!1ses!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Four -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border">
                    <h4 class="card-title text-center mb-3"><a href="#register-now">A.A. Convenciones: ¿Por qué tenemos que pagar?</a></h4>
                    <p>Hay muchos miembros de A.A. conferencias/convenciones celebradas en todo el mundo. Uno de los conceptos erróneos más comunes acerca de su reunión es que son miembros de A.A. reuniones y dado que no hay cuotas ni honorarios para A.A. membresía, no debería haber ningún costo por asistir. Las convenciones y conferencias son eventos especiales, no reuniones regulares de A.A. reuniones. Requieren meses de planificación, preparación y costes.
                    </p>
                    <p>Dado que la mayoría de los eventos se llevan a cabo en hoteles/centros de conferencias, hay un cargo por el uso de algunas instalaciones. Otros gastos incluyen viajes y alojamiento de los oradores, impresión de volantes, horarios, programas, correos, suministros y entretenimiento. Un gran evento requiere una cantidad sustancial de dinero.
                    </p>
                    <p>Cada conferencia es autosuficiente. No se utilizan fondos del grupo para pagar el evento. El costo del evento se paga mediante tarifas de inscripción y eventos de recaudación de fondos de MBAR. La asistencia es voluntaria y como responsable A.A. miembros, ahora "pagamos nuestro propio camino".
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>