<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Comités </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/committees.php" >';
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
                        <a class="dropdown-item active" aria-current="page" href="committees.php">Comités<span class="visually-hidden">(actual)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                        <a class="dropdown-item" href="upcoming_event.php">Evento de Beca de Softbol</a>
                        <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-committee" title="Comuníquese con cualquiera de nosotros si tiene alguna pregunta, comentario o inquietud.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Nos importa, realmente nos importa.">
                    <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">MBAR's<br>
                            Siervos de Confianza</span></h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                <div class="p-3 text-center text-bg-light hero-text-border">
                    <h3 class="fw-bold text-dark px-3 px-md-0">Funciones y miembros pasados ​​y presentes del Comité de Planificación
                    </h3>
                    <p>Gracias a todos por su servicio y por ayudar a acercar más a nuestras comunidades locales de A.A y Al-Anon.</p>
                </div>
            </div>

            <div class="col-xl-11 col-lg-8 table-responsive-md py-4">
                <article aria-label="Funciones y miembros del comité de planificación de MBAR">
                    <section aria-label="Comité Directivo de A.A.">
                        <h3 class="fw-bold">Comité Directivo de A.A.</h3>
                        <table class="table table-bordered table-striped table-hover" aria-labelledby="tableOne">
                            <caption class="small" id="tableOne">Comité directivo de A.A: la primera fila consta de cuatro columnas que son Roles, 2019, 2022 y 2024. La primera columna tiene cinco filas que tienen roles MBAR específicos. Haga una referencia cruzada de la fila del año con la columna de función específica para el nombre del miembro.</caption>
                            <thead class="table-light">
                                <tr class="text-center">
                                    <th scope="col" class="col-4">Roles</th>
                                    <th scope="col" class="col-2">2019</th>
                                    <th scope="col" class="col-2">2022</th>
                                    <th scope="col" class="col-2">2024</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                <tr class="table-success">
                                    <th scope="row">Presidente de AA</th>
                                    <td>May H.</td>
                                    <td>Cindy A.</td>
                                    <td>Chris T.</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">Copresidente de AA</th>
                                    <td>--</td>
                                    <td>Phil C. </td>
                                    <td>Renee C.</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">Tesorero da A.A.</th>
                                    <td>Cindy A.</td>
                                    <td>Daylene A.</td>
                                    <td>Carolyn H.</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">Co-Tesorero de A.A.</th>
                                    <td>Cindy A.</td>
                                    <td>Mona S.</td>
                                    <td>Jean T.</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">Secretario de Grabación de A.A.</th>
                                    <td>Andy V.</td>
                                    <td>Andy V.</td>
                                    <td>Roger M.</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <section aria-label="Comité Directivo de Al-Anon">
                        <h3 class="fw-bold">Comité Directivo de Al-Anon</h3>
                        <table class="table table-bordered table-striped table-hover" aria-labelledby="tableTwo">
                            <caption class="small" id="tableTwo">Comité Directivo de Al-Anon: la primera fila consta de cuatro columnas que son Funciones, 2019, 2022 y 2024. La primera columna tiene 12 filas que tienen funciones MBAR específicas. Haga una referencia cruzada de la fila del año con la columna de función específica para el nombre de los miembros. Puede haber más de un nombre por rol.</caption>
                            <thead class="table-light">
                                <tr class="text-center">
                                    <th scope="col" class="col-4">Roles</th>
                                    <th scope="col" class="col-2">2019</th>
                                    <th scope="col" class="col-2">2022</th>
                                    <th scope="col" class="col-2">2024</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                <tr class="table-warning">
                                    <th scope="row">Presidente de Al-Anon</th>
                                    <td>Thomas L.</td>
                                    <td>Sidney A.R.</td>
                                    <td>Jane H.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Presidente de las Reuniones de Al-Anon</th>
                                    <td>Donna F.</td>
                                    <td>--</td>
                                    <td>Olya O.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Copresidente de Alateen</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Concetta C./ Marge S.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Silla de Desayuno</th>
                                    <td>Joanie D.</td>
                                    <td>--</td>
                                    <td>Joanie D.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Copresidente de Recaudación de Fondos de Al-Anon</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Rachel G. / Amorina S.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Literatura de Al-Anon</th>
                                    <td>--</td>
                                    <td>Dawn C.</td>
                                    <td>Ashley</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Presidente de Registro de Al-Anon</th>
                                    <td>Debbie O.</td>
                                    <td>--</td>
                                    <td>Kathy P.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Secretario de Al-Anon</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Dawn C.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Coordinador de Español Al-Anon</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Yuliana</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Copresidente del Orador de Al-Anon</th>
                                    <td>Susan A.</td>
                                    <td>Susan A.</td>
                                    <td>Susan A. / Su C.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Asistente Tecnológico de Al-Anon</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Julie H.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Tesorero de Al-Anon</th>
                                    <td>--</td>
                                    <td>Thomas L.</td>
                                    <td>Thomas L.</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                    <section aria-label="Presidentes de comités">
                        <h3 class="fw-bold">Presidentes de comités</h3>
                        <table class="table table-bordered table-striped table-hover" aria-labelledby="tableThree">
                            <caption class="small" id="tableThree">Presidentes de comités: la primera fila consta de cuatro columnas que son Funciones, 2019, 2022 y 2024. La primera columna tiene 27 filas que tienen funciones MBAR específicas. Haga una referencia cruzada de la fila del año con la columna de función específica para el nombre de los miembros. Puede haber más de un nombre por rol.</caption>
                            <thead class="table-light">
                                <tr class="text-center">
                                    <th scope="col" class="col-4">Roles</th>
                                    <th scope="col" class="col-2">2019</th>
                                    <th scope="col" class="col-2">2022</th>
                                    <th scope="col" class="col-2">2024</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                <tr class="table-primary">
                                    <th scope="row">Presidente de registro</th>
                                    <td>Naomi B.</td>
                                    <td>Naomi B.</td>
                                    <td>Naomi B.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Silla de Barbacoa</th>
                                    <td>Joanie</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Silla de Desayuno</th>
                                    <td>Joanie D.</td>
                                    <td>Renee N.</td>
                                    <td>Joanie D.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Silla de Baile</th>
                                    <td>--</td>
                                    <td>Chris T.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Silla Decoraciones</th>
                                    <td>Hilda P.</td>
                                    <td>Hilda P.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Silla de Cena</th>
                                    <td>Joanie</td>
                                    <td>Aubrey</td>
                                    <td>Aubrey</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Presidente de Eventos</th>
                                    <td>Samantha C.</td>
                                    <td>--</td>
                                    <td>Samantha C.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Presidente de Instalaciones</th>
                                    <td>Nick K.</td>
                                    <td>Billy H.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Enlace RSG</th>
                                    <td>Teresa J.</td>
                                    <td>--</td>
                                    <td>Cole</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Enlace de H&I</th>
                                    <td>Michael R.</td>
                                    <td>Michael R.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Hospitalidad</th>
                                    <td>Phil C.</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Anfitrión</th>
                                    <td>Phil C.</td>
                                    <td>May H.</td>
                                    <td>Cindy A.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Helado Social</th>
                                    <td>Joanie D.</td>
                                    <td>Joanie D.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Cátedra de Literatura</th>
                                    <td>Monica P.</td>
                                    <td>May H.</td>
                                    <td>May H.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Presidente de Reuniones Maratonianas</th>
                                    <td>Mark S.</td>
                                    <td>Mark S.</td>
                                    <td>Mark S.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Presidente de Mercancía</th>
                                    <td>May H.</td>
                                    <td>May H.</td>
                                    <td>Kevin P.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Copresidente de Divulgación</th>
                                    <td>--</td>
                                    <td>Kathleen M.</td>
                                    <td>Conor / Rick D.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Silla de Rifa</th>
                                    <td>Esther F.</td>
                                    <td>Katherine J.</td>
                                    <td>Katherine J.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Silla de Servicio de Transporte</th>
                                    <td>Chuck N.</td>
                                    <td>Chuck N.</td>
                                    <td>Nick K. / Trevor F.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Copresidente de Redes Sociales</th>
                                    <td>--</td>
                                    <td>Chris T. / Victoria M.</td>
                                    <td>Gina H. / Sean B.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Spanish Community</th>
                                    <td>--</td>
                                    <td>Eric M.</td>
                                    <td>Robert</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Presidente del Orador</th>
                                    <td>Brady S.</td>
                                    <td>Mark B.</td>
                                    <td>Kathleen S.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Presidente del Orador (Al-Anon)</th>
                                    <td>--</td>
                                    <td>Susan A.</td>
                                    <td>Susan A.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Camisetas Silla</th>
                                    <td>---.</td>
                                    <td>Charly F.</td>
                                    <td>Kevin P.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Presidente del Sitio Web</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Phillip E.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Bienvenido &amp; Silla Social</th>
                                    <td>---</td>
                                    <td>Arthur T.</td>
                                    <td>Arthur T.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Silla de Jóvenes</th>
                                    <td>Samantha C.</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                </article>
            </div>

        </div>
    </div>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>