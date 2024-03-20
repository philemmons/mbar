<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Reuniones </title>";
echo '<link rel="canonical" href= "https://monterey.bayarearoundup.org/es/" />';
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
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-quienes-somos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quienes Somos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-quienes-somos">
                        <a class="dropdown-item" href="our_partner.php">Nuestro Compañero</a>
                        <a class="dropdown-item active" aria-current="page" href="meetings.php">Reuniones<span class="visually-hidden">(actual)</span></a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-meetings" title="Conocer la diversidad mejora nuestras vidas.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Nos importa.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Reunión del Comité<br>
                            Información</span></h2>
                    <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <article aria-label="Información de zoom">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-sm-auto py-4">
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('https://us02web.zoom.us/j/83143062293?pwd=QXZMWUVoZEkzVnUyY0poanAyclBHdz09', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;"><img class="img-fluid" src="../images/zoom-login.png" alt="Pantalla de inicio de sesión de Zoom invertida con fondo azul."></button>
                </div>
                <div class="col-md-8 col-sm-6 py-4">
                    <div class="p-3 text-bg-light hero-text-border">
                        <h3 class="card-title text-center mb-3"><em>El segundo Sábado de cada mes a las 10:00am PST</em></h3>
                        <p class="text-center"><strong>ID de Zoom</strong>: 831 4306 2293 <br>
                            <strong>Contraseña</strong>: 2024
                        </p>
                        <p class="text-center"><strong>Próximas reuniones:</strong> 04/13/2024, 05/11/2024, 06/08/2024</p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Part Two -->
    <article aria-label="Notas de la reunión actual">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <h4 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">2024 Minutos</span>
                        </h4>
                        <hr>
                        <div class="d-grid gap-3">
                            <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2024/01-13-24.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 01/13/2024</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article aria-label="Notas de reuniones pasadas">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">

                <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <h4 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">Actas de Reuniones Archivadas A LO Largo de los Años</span>
                        </h4>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <i class="bi bi-book me-2" style="font-size: 1.5rem; color: var(--color-8);" aria-hidden="true"></i><strong>2023</strong>
                                    </button>
                                </h4>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body d-grid gap-3">

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/12-9-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 12/09/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/11-11-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 11/11/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/10-14-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 10/14/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/9-9-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 09/09/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/8-12-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 08/12/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/6-10-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 06/10/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/5-13-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 05/13/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/4-8-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 04/08/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/3-11-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 03/11/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/2-11-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 02/11/2023</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2023/1-14-23.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 01/14/2023</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <i class="bi bi-book me-2" style="font-size: 1.5rem; color: var(--color-8);" aria-hidden="true"></i><strong>2022</strong>
                                    </button>
                                </h4>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body d-grid gap-3">

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/12-10-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 12/10/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/11-12-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 11/12/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/10-8-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 10/08/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/9-24-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 09/24/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/8-27-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 08/27/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/8-20-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 08/20/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/8-13-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 08/13/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/8-6-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 08/06/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/7-9-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 07/09/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/6-11-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 06/11/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/5-14-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 05/14/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/4-9-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 04/09/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/3-12-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 03/12/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/2-12-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 02/12/2022</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2022/1-8-22.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 01/08/2022</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <i class="bi bi-book me-2" style="font-size: 1.5rem; color: var(--color-8);" aria-hidden="true"></i><strong>2021</strong>
                                    </button>
                                </h4>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body d-grid gap-3">

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/12-11-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 12/11/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/11-13-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 11/13/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/10-9-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 10/09/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/9-11-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 09/11/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/8-14-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 08/14/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/7-10-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 07/10/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/6-12-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 06/12/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/5-8-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 05/08/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/4-10-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 04/10/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/3-13-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 03/13/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/2-13-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 02/13/2021</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2021/1-9-21.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 01/09/2021</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <i class="bi bi-book me-2" style="font-size: 1.5rem; color: var(--color-8);" aria-hidden="true"></i><strong>2020</strong>
                                    </button>
                                </h4>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body d-grid gap-3">

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2020/12-12-20.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 12/12/2020</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2020/11-14-20.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 11/14/2020</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2020/10-10-20.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 10/10/2020</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2020/9-12-20.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 09/12/2020</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2020/8-8-20.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 08/08/2020</button>

                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.open('../pdf/2020/7-11-20.pdf', 'Sage200Demo', 'width=900,height=768,status=0,resizable=0');return false;">Abre un PDF: 07/11/2020</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>