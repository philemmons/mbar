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
                        <a class="dropdown-item active" aria-current="page" href="memories.php">Recuerdos<span class="visually-hidden">(actual)</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdown-comités" data-bs-hover="dropdown" aria-haspopup="true" aria-expanded="false">Comités</button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-comités">
                        <a class="dropdown-item" href="meetings.php">Reuniones</a>
                        <a class="dropdown-item" href="committees.php">Comités</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-memories" title="Árboles coloridos durante el otoño.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h2 class="display-6 fw-bold mb-3 text-primary"><span class="text-dark px-3 px-md-0">Reunirs del Área de la Bahía de Monterey<br>
                            Recuerdos</span></h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Part One -->
    <div class="container shadow-wrap">
        <div class="row justify-content-center mb-5">
            <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Los recuerdos están en proceso.">
                    <h3 class="h4 fw-bold mb-3"><span class="text-dark px-3 px-md-0">'Cada recuerdo que creamos juntos es una huella en el camino de una vida que hacemos juntos.'</span>
                    </h3>
                    <p class="mb-6 h5 text-dark">¿Quieres compartir tu experiencia con nosotros? Todas las publicaciones serán anónimas.</p>
                </div>
            </div>


            <?php

            /**
             * https://www.codexworld.com/new-google-recaptcha-with-php/
             */

            // Google reCAPTCHA API keys settings 
            $secretKey  = getenv('g-secret-key');

            // Email settings 
            $recipientEmail = getenv('mbar-to-email');

            // If the form is submitted 
            $postData = $statusMsg = '';
            $status = 'error';

            if (isset($_POST['submit'])) {
                $postData = $_POST;

                // Validate form input fields 
                if (
                    !empty($_POST['fname']) &&
                    !empty($_POST['lname']) &&
                    !empty($_POST['mem-email']) &&
                    !empty($_POST['mem-title']) &&
                    !empty($_POST['mem-ta'])
                ) {

                    // Validate reCAPTCHA checkbox 
                    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                        // Verify the reCAPTCHA API response 
                        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

                        // Decode JSON data of API response 
                        $responseData = json_decode($verifyResponse);

                        // If the reCAPTCHA API response is valid 
                        if ($responseData->success) {
                            // Retrieve value from the form input fields 
                            $firstName = !empty($_POST['fname']) ? htmlspecialchars($_POST['fname']) : '';
                            $lastName = !empty($_POST['lname']) ? htmlspecialchars($_POST['lname']) : '';
                            $email = !empty($_POST['mem-email']) ? htmlspecialchars($_POST['mem-email']) : '';
                            $messageTitle = !empty($_POST['mem-title']) ? htmlspecialchars($_POST['mem-title']) : '';
                            $mainMessage = !empty($_POST['mem-ta']) ? htmlspecialchars($_POST['mem-ta']) : '';

                            // Send email notification to the site admin 
                            $to = $recipientEmail;
                            $subject = 'New Memory Request Submitted';
                            $htmlContent = " 
                    <h4>Memory form request details - ES</h4> 
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Title: </b>" . $messageTitle . "</p> 
                    <p><b>Message: </b>" . $mainMessage . "</p> 
                ";

                            // Always set content-type when sending HTML email 
                            $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            // More headers 
                            $headers .= 'From:' . $firstName . ' ' . $lastName . '<' . $email . '>' . "\r\n";

                            // Send email 
                            mail($to, $subject, $htmlContent, $headers);

                            $status = 'success';
                            $statusMsg = '¡Gracias! Su memoria ha sido enviada exitosamente.';
                            $postData = '';
                        } else {
                            $statusMsg = 'La verificación de reCaptcha falló, inténtalo de nuevo.';
                        }
                    } else {
                        $statusMsg = 'Marque la casilla de verificación reCAPTCHA.';
                    }
                } else {
                    $statusMsg = 'Por favor complete todos los campos obligatorios.';
                }
            }

            ?>

            <div id="memory-now"></div>
            <?php if (!empty($statusMsg)) { ?>
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Los recuerdos están en proceso.">
                        <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                    </div>
                </div>
            <?php } ?>

            <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                <div class="p-3 text-bg-light hero-text-border" title="Exprese sus pensamientos y sentimientos sobre MBAR.">

                    <div role="form">
                        <form action="memories.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>

                            <div class="col-md-6">
                                <label for="fname" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="fname" id="fname" required>
                                <div class="invalid-feedback">
                                    Por favor, introduzca su nombre de pila.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="lname" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="lname" id="lname" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese su apellido.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="mem-email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" name="mem-email" id="mem-email" required>
                                <div class="invalid-feedback">
                                    Por favor introduzca su correo electrónico.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="mem-title" class="form-label">Título del Mensaje</label>
                                <input type="text" class="form-control" name="mem-title" id="mem-title" required>
                                <div class="invalid-feedback">
                                    Por favor introduce un título.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="mem-ta" class="form-label">Mensaje</label>
                                <textarea class="form-control" name="mem-ta" id="mem-ta" required></textarea>
                                <div class="invalid-feedback">
                                    Por favor ingrese su mensaje.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="cBox" id="invalidCheck" value="" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Aceptar términos y condiciones
                                    </label>
                                    <div class="invalid-feedback">
                                        Debes aceptar antes de enviar.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey=<?php echo getenv('g-site-key'); ?>></div>
                                <div id="reCaptcha-warning">
                                    Nota: El formulario se restablecerá si no está marcado.
                                </div>
                            </div>

                            <div class="col-md-6 text-center">
                                <button type="submit" class="btn btn-primary" name="submit">Enviar Formulario</button>
                            </div>

                            <div class="col-md-6 text-center">
                                <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();">Restablecer Formulario</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-5 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <p class="card-title h6"><a href="conference-2021.php">
                                <i class="bi bi-person me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Conociendo gente maravillosa</a></p>
                        <p class="card-text">Conocí a las personas más maravillosas en MBAR 2019; ¡Verdaderamente feliz, alegre y libre! Gracias a todos por venir y compartir compañerismo con nosotros.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mb-3 mb-lg-0 px-4">
                <div class="card h-100 shadow-wrap">
                    <div class="card-body">
                        <p class="card-title h6"><a href="registration.php">
                                <i class="bi bi-person me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>El costo de la entrada: ¡no tiene precio!</a></p>
                        <p class="card-text">¿Por qué tengo que pagar? ¿No es suficiente que sea voluntario? Esos fueron mis pensamientos en mi primer MBAR. Pero el costo de la entrada "no tiene precio"; los rostros alegres, los extraños que instantáneamente se convierten en amigos, dando mi tiempo, recibiendo mucho más amor del que jamás podría dar. "No tiene precio"</p>
                    </div>
                </div>
            </div>
        </div>



        <?php include_once 'footer.inc' ?>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
        </script>
        <script>
            function resetFields() {
                return confirm("¿Estás seguro de que quieres restablecer todos los campos?");
            }
        </script>

        </body>

        </html>