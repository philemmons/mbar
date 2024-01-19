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
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item active" aria-current="page" href="mbar_history.php">Historia del MBAR<span class="visually-hidden">(actual)</span></a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-history" title="Amazing Monterey State Beach">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Únete a nosotros en la comunión.">
                    <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Reunirse del Área de la Bahía de Monterey<br>
                    Historia</span></h1>
                    <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section One -->
    <section class="container shadow-wrap">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Reunirse del Área de la Bahía de Monterey desde 1993.">
                    <h4 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">MBAR se estableció en 1993 con nuestro principio rector:<br>"Keep It Simple".</span>
                    </h4>
                    <p class="mb-6 h5 text-dark">Este evento se ha dedicado a ayudar a las personas que enfrentan los desafíos más difíciles y a avanzar hacia un futuro más fuerte y resiliente.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center py-4 mb-5">
            <div class="col-sm-5  text-center px-5">
                <p class="mb-6 h4 text-dark">A continuación se muestran los carteles de MBAR utilizados a lo largo de los años.
                </p>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previo</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Two -->
    <section class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="mbar_history.php">
                                <i class="bi bi-book me-2" style="font-size: 2rem; color: var(--color-8);"></i>Calendario de Eventos Pasados</a></h5>
                            <p class="card-text"> <a href="https://montereybayarearoundup.org/es/conference-2022.php" class="bb-link" target="_blank">2022 Conferencia</a></p>
                            <p class="card-text"> <a href="https://montereybayarearoundup.org/es/conference-2019.php" class="bb-link" target="_blank">2019 Conferencia</a></p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">Consulte la programación de MBAR de nuestros eventos anteriores.</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2021.php">
                                <i class="bi bi-mic me-2" style="font-size: 2rem; color: var(--color-8);"></i>Grabación de audio de los oradores Nota:</a></h5>
                            <p class="card-text">Paul O. de 2017</p>
                            <audio controls="">
                                <source src="../audio/PaulO2017/01 Track 1.ogg" type="audio/ogg">
                                <source src="../audio/PaulO2017/01 Track 1.mp3" type="audio/mpeg">
                                Su navegador no soporta el elemento de audio.
                            </audio>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">Compartiendo su experiencia, fortaleza y esperanza.</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <h6 class="card-title"><a href="conference-2021.php">
                                <i class="bi bi-award me-2" style="font-size: 2rem; color: var(--color-8);"></i>Volantes Anteriores A LO Largo de los Años</a></h5>
                            <p class="card-text"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                                <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2015-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">2015 Programa</a>
                            </p>
                            <p class="card-text"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                                <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2014-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">2014 Programa</a>
                            </p>
                            <p class="card-text"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                                <a href="" class="bb-link" onclick="window.open('pdf/MBAR-2003-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">2003 Programa</a>
                            </p>
                            <p class="card-text"><img src="../images/icons/pdf-logo.png" width="30" height="30" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                                <a href="" class="bb-link" onclick="window.open('pdf/MBAR-1997-Program.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">1997 Programa</a>
                            </p>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-body-secondary">Los oradores e invitados provienen de todo Estados Unidos.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>