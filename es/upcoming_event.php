<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Próximos Eventos </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/upcoming_event.php" />';
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
                              <a class="dropdown-item" href="committees.php">Comités</a>
                         </div>
                    </li>
                    <li class="nav-item dropdown">
                         <button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
                         <div class="dropdown-menu" aria-labelledby="dropdown-próximos-eventos">
                              <a class="dropdown-item" aria-current="page" href="upcoming_event.php">Evento de Beca de Softbol<span class="visually-hidden">(actual)</span></a>
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
          <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-upcoming" title="Eventos anteriores crean compañerismo y generan contribuciones para compensar el costo de MBAR.">
               <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                         <h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Próximos Eventos 2024</span></h2>
                         <p>Tenga en cuenta: los archivos de audio y PDF están en inglés.</p>
                    </div>
               </div>
          </div>
     </div>

     <!-- Part One -->
     <article aria-label="Evento actual">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-8 col-lg-8 col-md-10 p4-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <p class="mb-6 h5 text-dark">¡Vuelva a consultar los diversos eventos previos a la Conferencia de 2024!</p>
                         </div>
                    </div>
                    <!--
                    <div class="col-xl-10 col-lg-10 col-md-12 text-center px-3 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <img class="img-fluid" src="../images/saint-patrick-potluck.png" alt="Folleto de la reunión compartida y de oradores de San Patricio">
                         </div>
                    </div>
-->
               </div>
          </div>
     </article>

     <!-- Part Two -->
     <article aria-label="Detalles del evento">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <section aria-label="Encabezado del Evento">
                                   <h3 class="card-title mb-3"><a href="activities.php" class="bb-link">Monterey Bay Area Roundup presenta</a></h3>
                                   <p class="mb-6 h5 text-dark"><span aria-hidden='true'>☘️</span><strong>Comida Compartida y Reunión de Oradores de San Patricio</strong><span aria-hidden='true'>☘️</span>
                                        <br>
                                        Únete a nosotros en los "Fondos y Compañerismo""
                                        <br><br>
                                        <strong>Cuándo:</strong> sábado — 17 de marzo de 2024
                                        <br>
                                        <strong>Dónde:</strong> 437 Laureles Grade, Carmel Valley, CA
                                        <br>
                                        Las Puertas Abren a las 4 p. m.; Cenar a las 5pm
                                        <br>
                                        <strong>Ponente:</strong> Avil L. de Salinas, CA a las 6pm
                                        <br><br>
                                        Se Proporcionará Carne en Conserva y Repollo: Premios de Rifa y Rifa 50/50
                                        <br><br>
                                        Sugerencias de comida compartida por la primera inicial:
                                        <br>
                                        A a C: Postre
                                        <br>
                                        D a J: Plato Vegetariano Caliente
                                        <br>
                                        K a O: Plato de Patatas
                                        <br>
                                        P a Z: Ensalada o Pan
                                        <br><br>
                                        <strong>¡Trae una silla y algunos amigos de Bill!</strong>
                                        <br>
                                        ¡Usa tu equipo MBAR verde o anterior!
                                        <br><br>
                                        <strong>Nota:</strong> ¡En lugar de la séptima tradición, recaudaremos contribuciones para 2024 MBAR!
                                   </p>
                                   <button type="button" class="btn btn-primary btn-sm" onclick="window.open('../pdf/st-patricks-day-speaker.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;"><img src="../images/icons/pdf-logo.png" width="25" height="25" alt="Icono de Adobe PDF"> Ver y Descargar el Folleto</button>
                              </section>
                         </div>
                    </div>
               </div>
          </div>
     </article>


     <?php include_once 'footer.inc' ?>
     </body>

     </html>