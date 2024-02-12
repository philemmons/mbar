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
                        <a class="dropdown-item" href="register-now.php">Registro</a>
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

<main role="main" id="main-content">
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
                    <h3 class="fw-bold"><span class="text-dark px-3 px-md-0">Funciones y miembros pasados ​​y presentes del Comité de Planificación</span>
                    </h3>
                    <p>Gracias a todos por su servicio y por ayudar a acercar más a nuestras comunidades locales de A.A y Al-Anon.</p>
                </div>
            </div>
            <article aria-label="Funciones y miembros del comité de planificación de MBAR">
                <div class="col-xl-11 col-lg-8 table-responsive-md py-4">
                    <section aria-label="Comité Directivo de A.A.">
                        <h3 class="fw-bold">Comité Directivo de A.A.</h3>
                        <table class="table table-bordered table-striped table-hover" summary="Comité directivo de A.A: la primera fila consta de cuatro columnas que son Roles, 2019, 2022 y 2024. La primera columna tiene cinco filas que tienen roles MBAR específicos. Haga una referencia cruzada de la fila del año con la columna de función específica para el nombre del miembro.">
                            <caption class="small">2019 a 2024 Comité Directivo de A.A.</caption>
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

                    <section aria-label="Al-Anon Steering Committee">
                        <h3 class="fw-bold">Al-Anon Steering Committee</h3>
                        <table class="table table-bordered table-striped table-hover" summary="A.A steering committee - The first row consist of four columns which are Roles, 2019, 2022, and 2024. The first column has 12 rows that have specific MBAR roles. Cross reference the year row  with the specific role column for the members name. There may be more than one name per role.">
                            <caption class="small">2019 to 2024 Al-Anon Steering Committee</caption>
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
                                    <th scope="row">Al-Anon Chair</th>
                                    <td>Thomas L.</td>
                                    <td>Sidney A.R.</td>
                                    <td>Jane H.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Meetings Chair</th>
                                    <td>Donna F.</td>
                                    <td>--</td>
                                    <td>Olya O.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Alateen Co-Chair</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Concetta C./ Marge S.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Catering/Food</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Joanie D.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Fundraising Co-Chair</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Rachel G. / Amorina S.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Greeters</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Literature</th>
                                    <td>--</td>
                                    <td>Dawn C.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Registration Chair</th>
                                    <td>Debbie O.</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Secretary</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Dawn C.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Speaker Co-Chair</th>
                                    <td>Susan A.</td>
                                    <td>Susan A.</td>
                                    <td>Susan A. / Su C.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Tech Wizard</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Julie H.</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Al-Anon Treasurer</th>
                                    <td>--</td>
                                    <td>Thomas L.</td>
                                    <td>Thomas L.</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section aria-label="Committee Chairs">
                        <h3 class="fw-bold">Committee Chairs</h3>
                        <table class="table table-bordered table-striped table-hover" summary="Committee Chairs - The first row consist of four columns which are Roles, 2019, 2022, and 2024. The first column has 29 rows that have specific MBAR roles. Cross reference the year row  with the specific role column for the members name. There may be more than one name per role.">
                            <caption class="small">2019 to 2024 Committee Chairs</caption>
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
                                    <th scope="row">Registration Chair</th>
                                    <td>Naomi B.</td>
                                    <td>Naomi B.</td>
                                    <td>Naomi B.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Activities</th>
                                    <td>Samantha C.</td>
                                    <td>--</td>
                                    <td></td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">BBQ Chair</th>
                                    <td>Joanie</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Breakfast Chair</th>
                                    <td>Joanie</td>
                                    <td>Renee N.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Dance Chair</th>
                                    <td>--</td>
                                    <td>Chris T.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Decorations Chair</th>
                                    <td>Hilda P.</td>
                                    <td>Hilda P.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Dinner Chair</th>
                                    <td>Joanie</td>
                                    <td>Aubrey</td>
                                    <td>Aubrey</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Facilites Chair</th>
                                    <td>Nick K.</td>
                                    <td>Billy H.</td>
                                    <td>Sally H.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">GSR Liaison</th>
                                    <td>Teresa J.</td>
                                    <td>--</td>
                                    <td>Cole</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">H&amp;I Liaison</th>
                                    <td>Michael R.</td>
                                    <td>Michael R.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Hospitality</th>
                                    <td>Phil C.</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Host</th>
                                    <td>Phil C.</td>
                                    <td>May H.</td>
                                    <td>Cindy A.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Ice Cream Social</th>
                                    <td>Joanie D.</td>
                                    <td>Joanie D.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Literature Chair</th>
                                    <td>Monica P.</td>
                                    <td>May H.</td>
                                    <td>May H.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Marathon Meetings Chair</th>
                                    <td>Mark S.</td>
                                    <td>Mark S.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Merchandise Chair</th>
                                    <td>May H.</td>
                                    <td>May H.</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Outreach Chair</th>
                                    <td>--</td>
                                    <td>Kathleen M.</td>
                                    <td>Laura P.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Panel</th>
                                    <td>--</td>
                                    <td>Mary Grace</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Raffle Chair</th>
                                    <td>Esther F.</td>
                                    <td>Katherine J.</td>
                                    <td>Katherine J.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Shuttle Service Chair</th>
                                    <td>Chuck N.</td>
                                    <td>Chuck N.</td>
                                    <td></td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Social Media Co-Chair</th>
                                    <td>--</td>
                                    <td>Chris T. / Victoria M.</td>
                                    <td>Gina H. / Sean B.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Spanish Community</th>
                                    <td>--</td>
                                    <td>Eric M.</td>
                                    <td>Eric M.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Speaker Chair</th>
                                    <td>Brady S.</td>
                                    <td>Mark B.</td>
                                    <td>Kathleen S.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Speaker Chair (Al-Anon)</th>
                                    <td>--</td>
                                    <td>Susan A.</td>
                                    <td>Susan A.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">T-shirts Chair</th>
                                    <td>---.</td>
                                    <td>Charly F.</td>
                                    <td>Jessica L.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Website Chair</th>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Phillip E.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Welcome &amp; Social Chair</th>
                                    <td>---</td>
                                    <td>Arthur T.</td>
                                    <td>Arthur T.</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Young People Chair</th>
                                    <td>Samantha C.</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                <tr class="table-primary">
                                    <th scope="row">Zoom Meeting</th>
                                    <td>--</td>
                                    <td>Phillip E.</td>
                                    <td>Phillip E.</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>

                </div>
            </article>

        </div>
    </div>

    <?php include_once 'footer.inc' ?>
    </body>

    </html>