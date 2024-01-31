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
					<a class="nav-link active" aria-current="page" href="index.php" aria-current="page">Hogar
						<span class="visually-hidden">(actual)</span></a>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-conferencia" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Conferencia</button>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="conference-2024.php">MBAR 2024</a>
						<a class="dropdown-item" href="registration.php">Registro</a>
						<a class="dropdown-item" href="activities.php">Actividades</a>
						<a class="dropdown-item" href="mbar_history.php">Historia del MBAR</a>
						<a class="dropdown-item" href="memories.php">Recuerdos</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-comités" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
					<div class="dropdown-menu" aria-labelledby="dropdownId">
						<a class="dropdown-item" href="meetings.php">Reuniones</a>
						<a class="dropdown-item" href="committees.php">Comités</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link dropdown-toggle" type="button" id="dropdown-próximos-eventos" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Próximos Eventos</button>
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
		<div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-sitemap" title="Virtual network on a navy blue background.">
			<div class="col-xl-7 col-lg-7 col-md-12 py-5">
				<div class="p-3 text-center text-bg-light hero-text-border" title="HTML Site Map - assist with indexing">
					<h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Mapa del Sitio HTML</span>
					</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="container shadow-wrap">
		<div class="row justify-content-center" id="top">
			<div class="col-xl-6 col-lg-6 col-md-12 pt-4">
				<h5 class="float-end"><a href="http://montereybayarearoundup.org/es/">montereybayarearoundup.org/es/ Página Principal</a>
				</h5>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 pt-4">
				<h5>Última Actualización: 2023, 28 de Diciembre
					<br>
					Páginas Totales: 18
				</h5>
			</div>
		</div>

		<div class="row justify-content-center mb-5">
			<div class="col-xl-10 col-lg-10 col-md-12 py-4 olt-5">
				<div class="p-3 text-bg-light hero-text-border" title="">
					<ul class="level-0 list-group ms-3">
						<li class="lhead no-bullet list-group-item list-group-item-action list-group-item-dark">/</li>
						<li class="no-bullet">
							<ul class="level-1 list-group">
								<li class="lhead no-bullet list-group-item list-group-item-action list-group-item-dark">montereybayarearoundup.org/es/ <span class="lcount">18 Páginas</span></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/es/" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024">Monterey Bay Area Roundup 2024</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/es/index.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Home">Monterey Bay Area Roundup 2024 | Hogar</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/es/conference-2024.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Conferencia 2024">Monterey Bay Area Roundup 2024 | Conferencia 2024</a></li>
								<li class="ms-5"><a href="https://montereybayarearoundup.org/es/registration.php" class="list-group-item list-group-item-action list-group-item-info" title="Monterey Bay Area Roundup 2024 | Registro">Monterey Bay Area Roundup 2024 | Registro</a></li>
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
						Página creada con <a href="https://www.xml-sitemaps.com" class="bb-link" target="_blank">generador de mapas de sitio XML y HTML de Google</a> | Copyright &copia; 2005-2024 XML-Sitemaps.com
					</div>
				</div>
			</div>
	</section>


	<?php include_once 'footer.inc' ?>
	</body>

	</html>