<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Próximos Eventos </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/upcoming_event.php" >';
include_once 'header-bottom.inc';
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
                              <a class="dropdown-item" href="aa-spanish-marathon-2024.php">Reuniones de A.A. Maratón de Habla Hispana</a>
                              <a class="dropdown-item" href="aa-marathon-2024.php">A.A. Reuniones de Maratón</a>
                              <a class="dropdown-item" href="al-anon-marathon-2024.php">Al-Anon Reuniones de Maratón</a>
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
                              <a class="dropdown-item" href="logo_contest.php">Concurso de Logotipos</a>
                              <a class="dropdown-item active" aria-current="page" href="upcoming_event.php">Gratitud<span class="visually-hidden">(actual)</span></a>
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
          <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-upcoming" title="Los eventos anteriores crean compañerismo y generan contribuciones para compensar el costo de MBAR.">
               <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="¡Póngase su irlandés!">
                         <h2 class="display-6 fw-bold px-3 px-md-0">St. Comida Compartida del Día de San Patricio</h2>
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
                              <section aria-label="Información del evento">
                                   <h3 class="card-title mb-4">
                                        <img src="images/icons/shamrock-icon.png" width="30" height="30" alt="Icono de trébol">
                                        <strong>Día de San Patricio Comida Compartida y Reunión de Oradores de San Patricio
                                             <img src="images/icons/shamrock-icon.png" width="30" height="30" alt="Icono de trébol">
                                   </h3>
                              </section>
                              <img class="img-fluid" src="../images/saint-patrick-potluck.png" alt="Folleto de la comida compartida y reunión de oradores de San Patricio">
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <!-- Part Two -->
     <article aria-label="Detalles del evento">
          <div class="container shadow-wrap">
               <div class="row justify-content-center mb-5">
                    <div class="col-xl-8 col-lg-8 col-md-10 py-4">
                         <div class="p-3 text-bg-light hero-text-border">
                              <div class="row fw-bold">
                                   <div class="col-md-6 col-sm-12 mb-3 mb-sm-0">
                                        <p class="fs-2 text-center tall-angled-text">
                                             Fondos
                                             <br>
                                             y
                                             <br>
                                             Beca
                                        </p>
                                        <p class="text-dark ps-5 py-3">
                                             Cuándo: Domingo - 16/03/25
                                             <br>
                                             Dónde: 437 Laureles Grade, Carmel Valley
                                             <br>
                                             Las puertas abren a las 3pm
                                             <br>
                                             Cena a las 4:00 p. m.
                                             <br>
                                             Orador: Invitado Sorpresa a las 5pm
                                        </p>
                                   </div>
                                   <div class="col-md-6 col-sm-12 mb-3 mb-sm-0">
                                        <p class="fs-3 text-dark text-center mb-0">
                                             <img src="images/icons/shamrock-icon.png" width="30" height="30" alt="Shamrock icon">
                                             Sugerencias Para Compartir
                                             <img src="images/icons/shamrock-icon.png" width="30" height="30" alt="Shamrock icon">
                                             <br>
                                             Primera Inicial
                                        </p>
                                        <p class="text-dark text-center">
                                             De la A a la C: Postre
                                             <br>
                                             De la D a la J: Plato de Verduras Calientes
                                             <br>
                                             De la K a la O: Plato de Papas
                                             <br>
                                             De la P a la Z: Ensalada o Pan
                                        </p>
                                        <p class="fs-3 text-uppercase text-center">
                                             <img src="images/icons/shamrock-icon.png" width="30" height="30" alt="Shamrock icon">
                                             Aspectos destacados del evento
                                             <img src="images/icons/shamrock-icon.png" width="30" height="30" alt="Shamrock icon">
                                        </p>
                                        <ul>
                                             <li>Se proporcionará carne en conserva y repollo</li>
                                             <li>Rifa 50/50</li>
                                             <li>Traiga una silla y algunos amigos de Bill W.</li>
                                             <li>¡Use su equipo verde o anterior de MBAR!</li>
                                        </ul>
                                   </div>
                              </div>
                              <p class="text-center text-dark ">
                                   En lugar de la Séptima Tradición, ¡estaremos recolectando contribuciones para MBAR 2026!
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </article>

     <?php include_once 'event-gratitude.inc' ?>

     <div id="map"></div>

     <?php include_once 'footer.inc' ?>
     </body>

     </html>