<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg" role="navigation">
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
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-comités" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-comités">
                        <a class="dropdown-item" href="meetings.php">Reuniones</span></a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
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

<main role="main">
    <!-- Hero Section -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-access" title="Accessibility workflow diagram with a laptop backdrop.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Declaración de accesibilidad</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-bg-light hero-text-border" title="Our belief of inclusiveness nurtures our desire for recovery">
                    <h3 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Declaración general de accesibilidad de MBAR</span>
                    </h3>
                    <p class="mb-3 text-dark">montereybayarearoundup.org se esfuerza por garantizar que sus servicios sean accesibles para personas con discapacidades. montereybayarearoundup.org ha invertido una cantidad significativa de recursos para ayudar a garantizar que su sitio web sea más fácil de usar y más accesible para las personas con discapacidades, con la firme convicción de que toda persona tiene derecho a vivir con dignidad, igualdad, comodidad e independencia.</p>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="">

                    <h4 class="fw-bold text-primary">
                        <span class="text-dark px-3 px-md-0">Accesibilidad en montereybayarearoundup.org</span>
                    </h4>

                    < class="mb-3 text-dark">montereybayarearoundup.org se esfuerza continuamente por superar las Pautas de accesibilidad al contenido web 2.0 de W3C WAI. Varios verificadores de sitios permiten a montereybayarearoundup.org mejorar su cumplimiento de las Pautas de accesibilidad al contenido web (WCAG 2.1).</p>

                        <h4 class="fw-bold text-primary">
                            <span class="text-dark px-3 px-md-0">Descargo de responsabilidad</span>
                        </h4>

                        <p class="mb-3 text-dark">montereybayarearoundup.org continúa sus esfuerzos para mejorar constantemente la accesibilidad de su sitio y sus servicios en la creencia de que es nuestra obligación moral colectiva permitir un uso fluido, accesible y sin obstáculos también para aquellos de nosotros con discapacidades.</p>

                        <p class="mb-3 text-dark">A pesar de nuestros esfuerzos para que todas las páginas y el contenido de montereybayarearoundup.org sean totalmente accesibles, es posible que algunos contenidos aún no se hayan adaptado completamente a los estándares de accesibilidad más estrictos. Esto puede deberse a no haber encontrado o identificado la solución tecnológica más adecuada.</p>

                        <h4 class="fw-bold text-primary">
                            <span class="text-dark px-3 px-md-0">Aquí para ti</span>
                        </h4>

                        <p class="mb-3 text-dark">Si tiene dificultades con algún contenido de montereybayarearoundup.org o necesita ayuda con cualquier parte de nuestro sitio, comuníquese con nosotros y estaremos encantados de ayudarle.</p>

                        <h4 class="fw-bold text-primary">
                            <span class="text-dark px-3 px-md-0">Contáctenos</span>
                        </h4>

                        <p class="mb-3 text-dark">Si desea informar un problema de accesibilidad, tiene alguna pregunta o necesita ayuda, comuníquese con el servicio de atención al cliente de montereybayarearoundup.org de la siguiente manera: correo electrónico: <a href="mailto:<?php echo getenv('mbar-to-email'); ?>" class="bb-link">SysAdmin con solicitud de ADA</a></p>

                </div>
            </div>
        </div>
    </section>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>