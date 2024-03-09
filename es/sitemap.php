<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
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
		<div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-sitemap" title="Virtual network on a navy blue background.">
			<div class="col-xl-7 col-lg-7 col-md-12 py-5">
				<div class="p-3 text-center text-bg-light hero-text-border" title="HTML Site Map - assist with indexing">
					<h2 class="display-6 fw-bold text-primary"><span class="text-dark px-3 px-md-0">Mapa del Sitio HTML</span>
					</h2>
				</div>
			</div>
		</div>
	</div>

	<article aria-label="Mapa del sitio">
		<div class="container shadow-wrap">
			<div class="row justify-content-center" id="top">
				<div class="col-xl-6 col-lg-6 col-md-12 pt-4">
					<section aria-label="inicio del mapa del sitio">
						<h3 class="h5 float-end"><a href="http://montereybayarearoundup.org/es/" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 Página Principal">montereybayarearoundup.org/es/ Página Principal</a>
						</h3>
					</section>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 pt-4">
					<h4>Última Actualización: 2023, 28 de Diciembre
						<br>
						Páginas Totales: 18
					</h4>
				</div>
			</div>

			<div class="row justify-content-center mb-5">
				<div class="col-xl-10 col-lg-10 col-md-12 py-4 olt-5">
					<div class="p-3 text-bg-light hero-text-border" title="Mapa del sitio XML para montereybayarearoundup.org">
						<ul class="level-0 list-group ms-3">
							<li class="lhead no-bullet list-group-item list-group-item-action list-group-item-dark">/</li>
							<li class="no-bullet">
								<ul class="level-1 list-group">
									<li class="lhead no-bullet list-group-item list-group-item-action list-group-item-dark">montereybayarearoundup.org/es/ <span class="lcount">18 Páginas</span></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024">Monterey Bay Area Roundup 2024</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/index.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Home">Monterey Bay Area Roundup 2024 | Hogar</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/conference-2024.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Conferencia 2024">Monterey Bay Area Roundup 2024 | Conferencia 2024</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/register-now.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Registro">Monterey Bay Area Roundup 2024 | Registro</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/activities.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Actividades">Monterey Bay Area Roundup 2024 | Actividades</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/mbar_history.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Historia del MBAR">Monterey Bay Area Roundup 2024 | Historia del MBAR</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/memories.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Recuerdos">Monterey Bay Area Roundup 2024 | Recuerdos</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/meetings.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Reuniones">Monterey Bay Area Roundup 2024 | Reuniones</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/committees.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 |Comités">Monterey Bay Area Roundup 2024 | Comités</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/upcoming_event.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Próximos Eventos">Monterey Bay Area Roundup 2024 | Próximos Eventos</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/logo_contest.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Concurso de Logotipos">Monterey Bay Area Roundup 2024 | Concurso de Logotipos</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/contact.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Contacta con Nosotros">Monterey Bay Area Roundup 2024 | Contacta con Nosotros</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/contributions.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Contribuciones">Monterey Bay Area Roundup 2024 | Contribuciones</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/conference-2022.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Conferencia de Archivo 2022">Monterey Bay Area Roundup 2024 | Conferencia de Archivo 2022</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/accessibility.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Accesibilidad">Monterey Bay Area Roundup 2024 | Accesibilidad</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/privacy-policy.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Política de Privacidad">Monterey Bay Area Roundup 2024 | Política de Privacidad</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/sitemap.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Mapa del Sitio">Monterey Bay Area Roundup 2024 | Mapa del Sitio</a></li>
									<li class="ms-5"><a href="https://montereybayarearoundup.org/es/conference-2019.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Conferencia de Archivo 2019">Monterey Bay Area Roundup 2024 | Conferencia de Archivo 2019</a></li>
								</ul>
							</li>
						</ul>
						</li>
						</ul>
						<!-- Please note: You are not allowed to remove the copyright notice below. Thank you! www.xml-sitemaps.com -->

						<div id="sitemap-footer">
							Página creada con <a href="https://www.xml-sitemaps.com" class="bb-link" target="_blank">generador de mapas de sitio XML y HTML de Google<span class="sr-only">(Abre una nueva ventana)</span></a> | Copyright &copia; 2005-2024 XML-Sitemaps.com
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>

	<!-- Part Registration -->
	<article aria-label="información de registro y enlace">
		<div class="container shadow-wrap">
			<div class="row justify-content-center mb-5">
				<div class="col-xl-8 col-lg-8 col-md-12 py-4">
					<div class="p-3 text-center text-bg-light hero-text-border" title="¡La preinscripción está abierta!">
						<h3 class="fw-bold"><span class="text-dark px-3 px-md-0">Únete a nosotros en MBAR 2024</span>
						</h3>
						<p class="mb-6 h4 text-dark">Fin de Semana del Día del Trabajo, 31 de Agosto y 1 de Septiembre</p>
						<a href="register-now.php" class="btn btn-primary me-2">Regístrate Ahora</a>
					</div>
				</div>
			</div>
		</div>
	</article>

	<a href="#toTop" class="btn btn-primary back-to-top" id="back-to-top-link" title="Volver Arriba" aria-label="Volver Arriba"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>

</main>


<div class='container top-footer'>
	<aside aria-label="declaración de responsabilidad">
		<div class=" row justify-content-md-center">
			<div class='col-sm-4 banner'>
				<img src="../images/mbar_logo.png" class="img-fluid rounded-top" alt="Logotipo de Monterey Bay Area Roundup 2024 con una cola de ballena con pantalones y el lema: Mantenlo Simple.">
			</div>
			<div class='col-sm-8 col-md-6 p-4'>
				<h4>Nuestra Declaración de Responsabilidad:</h4>
				<p class="h4">Yo soy responsable.<br>
					Cuando alguien, en cualquier lugar, pide ayuda, quiero que la mano de AA esté siempre ahí.<br>
					Y de eso soy responsable.
				</p>
			</div>
		</div>
	</aside>

	<aside aria-label="grupo privado de facebook">
		<div class="row justify-content-md-center">
			<div class="col-sm-12 col-md-10 shadow text-center">
				<hr>
				<h4 class="text-center"><strong>Unirse <a href="https://www.facebook.com/groups/MBAR2021/" target="_blank">
							<img src="../images/facebook_logo.png" width="40" alt="Logotipo de Facebook para grupos privados de A.A. miembros."><span class="sr-only">(Abre una nueva ventana)</span></a> Grupo Privado</strong></h4>
				<hr>
			</div>
		</div>
	</aside>
</div>

<footer>
	<div class='container'>
		<div class="row justify-content-md-center">
			<div class="col-sm-12" id="footer-image" role=img aria-label="Un camino a través de colinas, cubiertas de flores, con una puesta de sol como telón de fondo.">
				<p>Copyright © <?php echo date('Y'); ?> Reunirs del Área de la Bahía de Monterey. Reservados todos los derechos.
				</p>
			</div>
			<nav class="navbar navbar-expand-sm bg-dark border-bottom border-body" data-bs-theme="dark" aria-label="menú de pie de página">
				<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link nav-link-size" href="accessibility.php">Accesibilidad del Sitio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-size" href="privacy-policy.php">Política de Privacidad</a>
					</li>
					<li class="nav-item" style="border-right: none;">
						<a class="nav-link nav-link-size active" href="sitemap.php" aria-current="page">Mapa del Sitio<span class="visually-hidden">(actual)</span></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</footer>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script src="../js/backToTop.js"></script>

</body>

</html>