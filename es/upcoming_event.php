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
                         <a class="nav-link" aria-current="page" href="index.php" aria-current="page">Home
                              <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                         <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
                         <div class="dropdown-menu" aria-labelledby="dropdownId">
                              <a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
                              <a class="dropdown-item" href="registration.php">Registro</a>
                              <a class="dropdown-item" href="activities.php">Actividades</a>
                              <a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
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
                         <button class="nav-link dropdown-toggle" type="button" id="dropdownId" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos eventos</button>
                         <div class="dropdown-menu" aria-labelledby="dropdownId">
                              <a class="nav-link active" href="upcoming_event.php">Noche de bingo<span class="visually-hidden">(actual)</span></a>
                              <a class="nav-link" href="logo_contest.php">Concurso de logotipos</a>
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
          <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-upcoming" title="Prior events create fellowship and generate contributions to offset MBAR's cost.">
               <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
                         <h1 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Próximos Eventos 2024</span></h1>
                    </div>
               </div>
          </div>
     </section>

     <!-- Section One -->
     <section class="container shadow-wrap">
          <div class="row justify-content-center mb-5">
               <div class="col-xl-8 col-lg-8 col-md-10 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                         <p class="mb-6 h5 text-dark">¡Vuelva a consultar los diversos eventos previos a la Conferencia de 2024!</p>
                    </div>
               </div>

               <div class="col-xl-10 col-lg-10 col-md-12 text-center px-3 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                         <img class="img-fluid" src="../images/bingo-night.png" alt="Fondos y Becas - Folleto de Recaudación de Fondos de la Noche de Bingo">
                    </div>
               </div>
          </div>
     </section>

     <!-- Section Two -->
     <section class="container shadow-wrap">
          <div class="row justify-content-center mb-5">
               <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                         <h3 class="card-title mb-3"><a href="activities.php">El Resumen del Área de la Bahía de Monterey presenta</a></h3>
                         <p class="mb-6 h5 text-dark">¡BINGO!
                              <br>
                              Noche de Bingo para recaudar fondos "Fondos y Becas"
                              <br>
                              ¡Únase a The Herd at The Moose para una noche de compañerismo, recuperación y bingo! 🎉
                              <br><br>
                              <strong>Cuándo:</strong> Viernes, 26 de Enero de 2024, de 6pm a 9pm.
                              <br>
                              <strong>Dónde:</strong> Moose Lodge - 555 Canyon Del Rey Blvd, Del Rey Oaks, CA
                              <br>
                              <strong>Ponente:</strong> Elena B
                              <br><br>
                              Perros calientes — Bebidas — Aperitivos Ligeros — Rifa 50/50 y Premios Bingo
                         </p>
                         <img src="images/icons/pdf-logo.png" width="25" height="25" alt="Icono de Adobe PDF, sin enlace, solo diseño">
                         <a href="" class="bb-link" onclick="window.open('pdf/bingo-fundraiser-flyer.pdf', 'Sage200Demo', 'width= 900, height= 768, status= 0, resizable= 0');return false;">Ver y Descargar el Folleto</a>
                    </div>
               </div>
          </div>
     </section>


     <?php include_once 'footer.inc' ?>
     </body>

     </html>