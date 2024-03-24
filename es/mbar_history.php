<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Historia </title>";
echo '<link rel="canonical" href= "https://monterey.bayarearoundup.org/es/mbar_history.php" />';
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
                    <a class="nav-link" href="index.php">Hogar</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-conferencia">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="register-now.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item active" aria-current="page" href="mbar_history.php">Historia del MBAR<span class="visually-hidden">(actual)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-history" title="Increíble Playa Estatal de Monterey">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Únete a nosotros en la comunión.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Monterey Bay Area Roundup<br>
                            Historia</span></h2>
                    <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Logotipos pasados">
        <div class="container shadow-wrap">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Monterey Bay Area Roundup desde 1993.">
                        <section aria-label="Lema y propósito de MBAR">
                            <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">MBAR se estableció en 1993 con nuestro principio rector:<br>"Mantenlo Simple".</span>
                            </h3>
                            <p class="mb-6 h5 text-dark">Este evento se ha dedicado a ayudar a las personas que enfrentan los desafíos más difíciles y a avanzar hacia un futuro más fuerte y resiliente.</p>
                        </section>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center py-4 mb-5">
                <div class="col-xl-4 col-lg-5 col-sm-8 text-center">
                    <section aria-label="Mostrar logotipos anteriores con carrusel">
                        <h3 class="mb-6 text-dark">A continuación se muestran los carteles de MBAR utilizados a lo largo de los años.
                        </h3>
                        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../images/2022.png" class="d-block w-100" alt="MBAR 2022">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2019.png" class="d-block w-100" alt="MBAR 2019">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2015.png" class="d-block w-100" alt="MBAR 2015">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2014.png" class="d-block w-100" alt="MBAR 2014">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2013.png" class="d-block w-100" alt="MBAR 2013">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2011.png" class="d-block w-100" alt="MBAR 2011">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2009.png" class="d-block w-100" alt="MBAR 2009">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2007.png" class="d-block w-100" alt="MBAR 2007">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2005.png" class="d-block w-100" alt="MBAR 2005">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2003.png" class="d-block w-100" alt="MBAR 2003">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/2001.png" class="d-block w-100" alt="MBAR 2001">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/1999.png" class="d-block w-100" alt="MBAR 1999">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/1997.png" class="d-block w-100" alt="MBAR 1997">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/1995.png" class="d-block w-100" alt="MBAR 1995">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/1993.png" class="d-block w-100" alt="MBAR 1993">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg mt-3 me-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <i class="bi bi-chevron-double-left" aria-hidden="true"></i>
                                <span class="sr-only">Previo</span>
                            </button>
                            <button class="btn btn-primary btn-lg mt-3 ms-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <i class="bi bi-chevron-double-right" aria-hidden="true"></i>
                                <span class="sr-only">Próximo</span>
                            </button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two -->
    <article aria-label="Horarios anteriores, orador y volantes">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <section aria-label="Horarios 2019 y 2022">
                                <h3 class="card-title h6">
                                    <i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Calendario de Eventos Pasados
                                </h3>
                                <p class="card-text"> <a href="https://monterey.bayarearoundup.org/es/conference-2022.php" class="bb-link" target="_blank" rel="noopener noreferrer">2022 Conferencia<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                                <p class="card-text"> <a href="https://monterey.bayarearoundup.org/es/conference-2019.php" class="bb-link" target="_blank" rel="noopener noreferrer">2019 Conferencia<span class="sr-only">(Abre una nueva ventana)</span></a></p>
                            </section>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary">Consulte la programación de MBAR de nuestros eventos anteriores.</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <section aria-label="Orador 2017">
                                <h3 class="card-title h6">
                                    <i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Grabación de audio de los oradores Nota:
                                </h3>
                                <p class="card-text">Paul O. de 2017</p>
                                <audio controls="">
                                    <source src="../audio/2017/Paul-O.ogg" type="audio/ogg">
                                    <source src="../audio/2017/Paul-O.mp3" type="audio/mpeg">
                                    Su navegador no soporta el elemento de audio.
                                </audio>
                                <div class="d-grid gap-2 pt-3">
                                    <a href="con-2017-paul-o.php" class="btn btn-outline-primary btn-sm">Abre la Transcripción<span class="sr-only">(Abre una nueva ventana, haz clic para regresar)</span></a>
                                </div>
                            </section>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary">Compartiendo su experiencia, fortaleza y esperanza.</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <section aria-label="Volantes anteriores">
                                <h3 class="card-title h6">
                                    <i class="bi bi-award me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Volantes Anteriores A LO Largo de los Años
                                </h3>
                                <p class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/MBAR-2015-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF"> 2015 Programa</button>
                                </p>
                                <p class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/MBAR-2014-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF"> 2014 Programa</button>
                                </p>
                                <p class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/MBAR-2003-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF"> 2003 Programa</button>
                                </p>
                                <p class="d-grid gap-2">
                                    <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/MBAR-1997-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF"> 1997 Programa</button>
                                </p>
                            </section>
                        </div>
                        <div class="card-footer text-center">
                            <small class="text-body-secondary">Los oradores e invitados provienen de todo Estados Unidos.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include_once 'footer.inc' ?>
        </body>

        </html>