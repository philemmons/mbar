<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Accesibilidad del Sitio</title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/accessibility.php" />';
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
                    <a class="nav-link" href="/">Hogar</a>
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
                        <a class="dropdown-item" href="upcoming_event.php">Comida Compartida de San Patricio</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-access" title="Accessibility workflow diagram with a laptop backdrop.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Declaración de accesibilidad</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Igual y Amor">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-bg-light hero-text-border" title="Our belief of inclusiveness nurtures our desire for recovery">
                        <section aria-label="declaración de accesibilidad">
                            <h3 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Declaración General de Accesibilidad del MBAR</span>
                            </h3>
                            <p class="mb-3 text-dark">montereybayarearoundup.org se esfuerza por garantizar que sus servicios sean accesibles para personas con discapacidades. montereybayarearoundup.org ha invertido una cantidad significativa de recursos para ayudar a garantizar que su sitio web sea más fácil de usar y más accesible para las personas con discapacidades, con la firme convicción de que toda persona tiene derecho a vivir con dignidad, igualdad, comodidad e independencia.</p>
                        </section>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border" title="">
                        <section aria-label="método de accesibilidad">
                            <h3 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Accesibilidad e Inclusión</span>
                            </h3>

                            <p class="mb-3 text-dark">montereybayarearoundup.org se esfuerza continuamente por superar las Pautas de accesibilidad al contenido web 2.1 de W3C WAI. Varios verificadores de sitios permiten a montereybayarearoundup.org mejorar su cumplimiento de las Pautas de accesibilidad al contenido web (WCAG 2.2).</p>

                            <h4 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Descargo de responsabilidad</span>
                            </h4>

                            <p class="mb-3 text-dark">montereybayarearoundup.org continúa sus esfuerzos para mejorar constantemente la accesibilidad de su sitio y sus servicios en la creencia de que es nuestra obligación moral colectiva permitir un uso fluido, accesible y sin obstáculos también para aquellos de nosotros con discapacidades.</p>

                            <p class="mb-3 text-dark">A pesar de nuestros esfuerzos para que todas las páginas y el contenido de montereybayarearoundup.org sean totalmente accesibles, es posible que algunos contenidos aún no se hayan adaptado completamente a los estándares de accesibilidad más estrictos. Esto puede deberse a no haber encontrado o identificado la solución tecnológica más adecuada.</p>

                            <h4 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Aquí para ti</span>
                            </h4>

                            <p class="mb-3 text-dark">Si tiene alguna dificultad o frustración con algún contenido de montereybayarearoundup.org o necesita ayuda con cualquier parte de nuestro sitio, contáctenos y estaremos encantados de ayudarle.</p>

                            <h4 class="fw-bold text-primary">
                                <span class="text-dark px-3 px-md-0">Contáctenos</span>
                            </h4>

                            <p class="mb-3 text-dark">Si desea informar cualquier problema de accesibilidad, tiene alguna pregunta o necesita ayuda, comuníquese con el soporte técnico de montereybayarearoundup.org de la siguiente manera: correo electrónico: <a href="mailto:<?php echo getenv('mbar-to-email'); ?>" class="bb-link">SysAdmin con solicitud de ADA</a></p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Registration -->
    <article aria-label="información de registro y enlace">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-8 col-lg-8 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                        <h3 class="fw-bold text-dark px-3 px-md-0">Únete a nosotros en MBAR 2024
                        </h3>
                        <p class="mb-6 h4 text-dark">Fin de Semana del Día del Trabajo, 31 de Agosto y 1 de Septiembre</p>
                        <a href="register-now.php" class="btn btn-primary me-2">Regístrate Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <a href="#toTop" class="btn btn-primary back-to-top" id="back-to-top-link" title="Volver Arriba" aria-label="Volver Arriba"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>

</main>


<div class='container top-footer'>
    <aside aria-label="declaración de responsabilidad">
        <div class=" row justify-content-md-center">
            <div class='col-sm-4 banner'>
                <img src="../images/mbar_logo.png" class="img-fluid rounded-top" alt="Logotipo de Monterey Bay Area Roundup 2024 con una cola de ballena con pantalones y el lema: Mantenlo Simple.">
            </div>
            <div class='col-sm-8 col-md-6 p-4'>
                <h4>Nuestra Declaración de Responsabilidad:</h4>
                <p class="h4">Yo soy responsable.<br>
                    Cuando alguien, en cualquier lugar, pide ayuda, quiero que la mano de AA esté siempre ahí.<br>
                    Y de eso soy responsable.
                </p>
            </div>
        </div>
    </aside>

    <aside aria-label="grupo privado de facebook">
        <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-10 shadow text-center">
                <hr>
                <h4 class="text-center"><strong>Unirse <a href="https://www.facebook.com/groups/MBAR2021/" target="_blank" rel="noopener noreferrer nofollow">
                            <img src="../images/facebook_logo.png" width="40" alt="Logotipo de Facebook para grupos privados de A.A. miembros."><span class="sr-only">(Abre una nueva ventana)</span></a> Grupo Privado</strong></h4>
                <hr>
            </div>
        </div>
    </aside>
</div>

<footer>
    <div class='container'>
        <div class="row justify-content-md-center">
            <div class="col-sm-12" id="footer-image" role=img aria-label="Un camino a través de colinas, cubiertas de flores, con una puesta de sol como telón de fondo.">
                <p>Copyright © <?php echo date('Y'); ?> Reunirs del Área de la Bahía de Monterey. Reservados todos los derechos.
                </p>
            </div>
            <nav class="navbar navbar-expand-sm bg-dark border-bottom border-body" data-bs-theme="dark" aria-label="menú de pie de página">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-size active" href="accessibility.php" aria-current="page">Accesibilidad del Sitio<span class="visually-hidden">(actual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-size" href="privacy-policy.php">Política de Privacidad</a>
                    </li>
                    <li class="nav-item" style="border-right: none;">
                        <a class="nav-link nav-link-size" href="sitemap.php">Mapa del Sitio</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="../js/backToTop.js"></script>
</body>

</html>