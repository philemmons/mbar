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
                        <a class="dropdown-item" href="registration.php">Registro</a>
                        <a class="dropdown-item" href="activities.php">Actividades</a>
                        <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
                        <a class="dropdown-item" href="memories.php">Recuerdos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-comités" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-comités">
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item active" aria-current="page" href="committees.php">Comités<span class="visually-hidden">(actual)</span></a>
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
    <div class="container shadow-wrap">
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-committee" title="Please contact any of us with any questions, feedback, or concerns.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="We care.">
                    <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">MBAR's<br>
                            Siervos de Confianza</span></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">

            <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3 class="fw-bold mb-3"><span class="text-dark px-3 px-md-0">Comité de Planificación Pasado y Presente</span>
                    </h3>
                </div>
            </div>

            <div class="col-xl-11 col-lg-9 col-md-7 py-4">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th>Comités</th>
                            <th>2019</th>
                            <th>2022</th>
                            <th>2024</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <thead class="filterHead">
                        <tr class="filterRow">
                            <th colspan="4" scope="col">A.A. Comité Directivo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="table-success">
                            <td>A.A. Presidente</td>
                            <td>May H.</td>
                            <td>Cindy A.</td>
                            <td>Chris T.</td>
                        </tr>
                        <tr class="table-success">
                            <td>A.A. Copresidente</td>
                            <td>--</td>
                            <td>Phil C. </td>
                            <td>Renee C.</td>
                        </tr>
                        <tr class="table-success">
                            <td>A.A. Tesorero</td>
                            <td>Cindy A.</td>
                            <td>Daylene A.</td>
                            <td>Carolyn H.</td>
                        </tr>
                        <tr class="table-success">
                            <td>A.A. Co-tesorero</td>
                            <td>Cindy A.</td>
                            <td>Mona S.</td>
                            <td>Jean T.</td>
                        </tr>
                        <tr class="table-success">
                            <td>A.A. Secretario de grabación</td>
                            <td>Andy V.</td>
                            <td>Andy V.</td>
                            <td>Roger M.</td>
                        </tr>
                    </tbody>
                    <thead class="filterHead">
                        <tr class="filterRow">
                            <th colspan="4" scope="col">Al-Anon Comité Directivo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="table-warning">
                            <td>Al-Anon Presidente</td>
                            <td>Thomas L.</td>
                            <td>Sidney A.R.</td>
                            <td>Jane H.</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Copresidente</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Decoraciones</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Literatura</td>
                            <td>--</td>
                            <td>Dawn C.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Reunión de Maratón Silla</td>
                            <td>Donna F.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Rifa</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Secretario de Grabación</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Presidente de Registro</td>
                            <td>Debbie O.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Secretario</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Presidente del Orador</td>
                            <td>Susan A.</td>
                            <td>Susan A.</td>
                            <td>Susan A.</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Anon Tesorero</td>
                            <td>--</td>
                            <td>Thomas L.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-warning">
                            <td>Al-Ateen</td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                    </tbody>


                    <thead class="filterHead">
                        <tr class="filterRow">
                            <th colspan="4" scope="col">Presidentes de Comités</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="table-primary">
                            <td>Presidente de Registro</td>
                            <td>Naomi B.</td>
                            <td>Naomi B.</td>
                            <td>Naomi B.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Actividades</td>
                            <td>Samantha C.</td>
                            <td>--</td>
                            <td></td>
                        </tr>
                        <tr class="table-primary">
                            <td>Silla de Barbacoa</td>
                            <td>Joanie</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Silla de Desayuno</td>
                            <td>Joanie</td>
                            <td>Renee N.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Silla de Baile</td>
                            <td>--</td>
                            <td>Chris T.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Silla Decoraciones</td>
                            <td>Hilda P.</td>
                            <td>Hilda P.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Silla de Cena</td>
                            <td>Joanie</td>
                            <td>Aubrey</td>
                            <td>Aubrey</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Presidente de Instalaciones</td>
                            <td>Nick K.</td>
                            <td>Billy H.</td>
                            <td>Sally H.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Enlace RSG</td>
                            <td>Teresa J.</td>
                            <td>--</td>
                            <td>Cole</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Enlace de HeI</td>
                            <td>Michael R.</td>
                            <td>Michael R.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Hospitalidad</td>
                            <td>Phil C.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Anfitrión</td>
                            <td>Phil C.</td>
                            <td>May H.</td>
                            <td>Cindy A.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Helado Social</td>
                            <td>Joanie D.</td>
                            <td>Joanie D.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Cátedra de Literatura</td>
                            <td>Monica P.</td>
                            <td>May H.</td>
                            <td>May H.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Presidente de Reuniones Maratonianas</td>
                            <td>Mark S.</td>
                            <td>Mark S.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Presidente de Mercancía</td>
                            <td>May H.</td>
                            <td>May H.</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Presidente de extensión</td>
                            <td>--</td>
                            <td>Kathleen M.</td>
                            <td>Laura P.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Panel</td>
                            <td>--</td>
                            <td>Mary Grace</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Silla de Rifa</td>
                            <td>Esther F.</td>
                            <td>Katherine J.</td>
                            <td>Katherine J.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Silla de Servicio de Transporte</td>
                            <td>Chuck N.</td>
                            <td>Chuck N.</td>
                            <td></td>
                        </tr>
                        <tr class="table-primary">
                            <td>Copresidente de Redes Sociales</td>
                            <td>--</td>
                            <td>Chris T.</td>
                            <td>Gina H.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Copresidente de Redes Sociales</td>
                            <td>--</td>
                            <td>Victoria M.</td>
                            <td>Sean B.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Comunidad Española</td>
                            <td>--</td>
                            <td>Eric M.</td>
                            <td>Eric M.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Presidente del Orador</td>
                            <td>Brady S.</td>
                            <td>Mark B.</td>
                            <td>Kathleen S.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Presidente del Orador (Al-Anon)</td>
                            <td>--</td>
                            <td>Susan A.</td>
                            <td>Susan A.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Camisetas Silla</td>
                            <td>---.</td>
                            <td>Charly F.</td>
                            <td>Jessica L.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Presidente del Sitio Web</td>
                            <td>--</td>
                            <td>--</td>
                            <td>Phillip E.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Bienvenida y Silla Social</td>
                            <td>---</td>
                            <td>Arthur T.</td>
                            <td>Arthur T.</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Silla de Jóvenes</td>
                            <td>Samantha C.</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                        <tr class="table-primary">
                            <td>Reunión de Zoom</td>
                            <td>--</td>
                            <td>Phillip E.</td>
                            <td>Phillip E.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php include_once 'footer.inc' ?>
    </body>

    </html>