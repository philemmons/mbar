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
                              <a class="dropdown-item active" aria-current="page" href="upcoming_event.php">Evento de Beca de Softbol<span class="visually-hidden">(actual)</span></a>
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
                    <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <p class="h5 text-dark">¡Gracias por seguir consultando para conocer más eventos previos a la Conferencia de 2024!</p>
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
                              <p class="mb-4 h5 text-dark"><a href="activities.php" class="bb-link">Resumen del Área de la Bahía de Monterey presenta</a></p>
                              <section aria-label="Información del evento">
                                   <h3 class="card-title mb-4"><span aria-hidden='true'>⚾</span><strong>¡Evento de Becas de Softbol!</strong><span aria-hidden='true'>⚾ </span></h3>
                                   <p class="mb-4 h5 text-dark">
                                        <strong>Cuándo:</strong> domingo, 16 de julio de 2024
                                        <br>
                                        <strong>Hora:</strong> 12 a 4pm
                                        <br>
                                        <strong>Dónde:</strong> Parque Dampierre Little League, Carmel Valley, CA
                                        <br><br>
                                        <strong>"Perros calientes incluidos. ¡Trae un mit y un acompañamiento para compartir!"</strong>
                                   </p>

                                   <p class="h5 texto-oscuro pt-3">
                                        ¡El folleto en PDF estará disponible pronto!
                                   </p>
                                   <!--
                                   <button type="button" class="btn btn-primary btn-sm" onclick="window.open('../pdf/st-patricks-day-speaker.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;"><img src="../images/icons/pdf-logo.png" width="25" height="25" alt="Icono de Adobe PDF"> Ver y Descargar el Folleto</button>
                                   -->
                              </section>
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <div id="map"></div>
     <article aria-label="Mapa de Google para el parque de ligas menores de Dampierre">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                         <div class="p-3 text-center text-bg-light hero-text-border">
                              <section aria-label="Ubicación del parque">
                                   <h4 class="card-title mb-3"><a href="https://www.google.com/maps/place/Dampierre+Park/@36.478664,-121.739975,14z/data=!4m6!3m5!1s0x808df39f2bb991fd:0x905b6dd7a85fb3cd!8m2!3d36.4786643!4d-121.7399751!16s%2Fg%2F11cm0fp649?hl=es&entry=ttu" class="bb-link" target="_blank" title="Enlace directo a Google Mapa">Parque de la Liga Pequeña de Dampierre<span class="sr-only">(Abre una nueva ventana)</span></a></h4>
                                   <div class="col-md-12 db-5">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12832.505391961493!2d-121.7399751!3d36.4786643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808df39f2bb991fd%3A0x905b6dd7a85fb3cd!2sDampierre%20Park!5e0!3m2!1sen!2sus!4v1715114915603!5m2!1ses!2sus" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Parque de la liga Pequeña de Dampierre" aria-hidden="true"></iframe>
                                   </div>
                              </section>
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <?php include_once 'footer.inc' ?>
     </body>

     </html>