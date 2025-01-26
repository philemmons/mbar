<?php
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>MBAR - Recuerdos </title>";
echo '<link rel="canonical" href= "https://montereybayarearoundup.org/es/memories.php" >';
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
                        <a class="dropdown-item active" aria-current="page" href="memories.php">Recuerdos<span class="visually-hidden">(actual)</span></a>
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
                        <a class="dropdown-item" href="upcoming_event.php">Gratitud</a>
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
        <div class="row justify-content-center py-6 mb-5 bg-body-tertiary bg-img-memories" title="Árboles coloridos durante el otoño.">
            <div class="col-xl-7 col-lg-7 col-md-12 py-5">
                <div class="p-3 text-center text-bg-light hero-text-border" title="Join us in the fellowship.">
                    <h2 class="display-6 fw-bold px-3 px-md-0">Reunirs del Área de la Bahía de Monterey<br>
                        Recuerdos</h2>
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
                    !empty($_POST['memory-firstName']) &&
                    !empty($_POST['memory-lastName']) &&
                    !empty($_POST['memory-email']) &&
                    !empty($_POST['memory-title']) &&
                    !empty($_POST['memory-textarea']) &&
                    empty($_POST['memory-beeName'])
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
                            $firstName = !empty($_POST['memory-firstName']) ? htmlspecialchars($_POST['memory-firstName']) : '';
                            $lastName = !empty($_POST['memory-lastName']) ? htmlspecialchars($_POST['memory-lastName']) : '';
                            $email = !empty($_POST['memory-email']) ? htmlspecialchars($_POST['memory-email']) : '';
                            $messageTitle = !empty($_POST['memory-title']) ? htmlspecialchars($_POST['memory-title']) : '';
                            $mainMessage = !empty($_POST['memory-textarea']) ? htmlspecialchars($_POST['memory-textarea']) : '';

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
                    if (!empty($_POST['memory-beeName'])) {
                        $statusMsg = '¿Eres un bot?';
                    }
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

                    <form action="memories.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>

                        <div class="col-md-6">
                            <label for="memory-beeName" aria-hidden="true" class="visually-hidden">Nombre del Girasol</label>
                            <input type="text" name="memory-beeName" id="memory-beeName" style="display:none">

                            <label for="memory-firstName" class="form-label">Primer nombre (requerido)</label>
                            <input type="text" class="form-control" name="memory-firstName" id="memory-firstName" required>
                            <div class="invalid-feedback">
                                Requerido, por favor, introduzca su nombre de pila.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="memory-lastName" class="form-label">Apellido o Inicial (requerido)</label>
                            <input type="text" class="form-control" name="memory-lastName" id="memory-lastName" required>
                            <div class="invalid-feedback">
                                Requerido, por favor ingrese su apellido.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="memory-email" class="form-label">Correo electronico (requerido)</label>
                            <input type="email" class="form-control" name="memory-email" id="memory-email" required>
                            <div class="invalid-feedback">
                                Requerido, por favor introduzca su correo electrónico.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="memory-title" class="form-label">Título del Mensaje (requerido)</label>
                            <input type="text" class="form-control" name="memory-title" id="memory-title" required>
                            <div class="invalid-feedback">
                                Requerido, por favor introduce un título.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="memory-textarea" class="form-label">Mensaje (requerido)</label>
                            <textarea class="form-control" name="memory-textarea" id="memory-textarea" required></textarea>
                            <div class="invalid-feedback">
                                Requerido, por favor ingrese su mensaje.
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="cBox" id="invalidCheck" value="" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Acepto que MBAR utilice mi envío de forma anónima. (requerido)
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
                            <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Restablecer Formulario</button>
                            <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                <p>(Una ventana emergente confirmará su descanso)</p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <aside aria-label="Comentario">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-5 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><a href="conference-2019.php" class="bb-link">
                                    <i class="bi bi-person me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>Conociendo gente maravillosa</a></p>
                            <p class="card-text">Conocí a las personas más maravillosas en MBAR 2019; ¡Verdaderamente feliz, alegre y libre! Gracias a todos por venir y compartir compañerismo con nosotros.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 mb-3 mb-lg-0 px-4">
                    <div class="card h-100 shadow-wrap">
                        <div class="card-body">
                            <p class="card-title h6"><a href="register-now.php" class="bb-link">
                                    <i class="bi bi-person me-2" style="font-size: 2rem; color: var(--color-8);" aria-hidden="true"></i>El costo de la entrada: ¡no tiene precio!</a></p>
                            <p class="card-text">¿Por qué tengo que pagar? ¿No es suficiente que sea voluntario? Esos fueron mis pensamientos en mi primer MBAR. Pero el costo de la entrada "no tiene precio"; los rostros alegres, los extraños que instantáneamente se convierten en amigos, dando mi tiempo, recibiendo mucho más amor del que jamás podría dar. "No tiene precio"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>


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
    <script>
        // Function to display confirmation message and update live region
        function resetFields() {
            // Display confirmation dialog
            var confirmMessage = "¿Estás seguro de que quieres restablecer todos los campos?"
            var confirmed = window.confirm(confirmMessage);

            // Update live region based on user's choice
            var liveRegion = document.getElementById('reset');
            if (confirmed) {
                liveRegion.textContent = "(El formulario ha sido reiniciado)";
            } else {
                liveRegion.textContent = "(Restablecer formulario cancelado)";
            }

            return confirmed;

        }
    </script>

    </body>

    </html>